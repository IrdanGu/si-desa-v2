<?php

namespace App\Http\Controllers;

use App\Models\Agenda_karangtaruna;
use App\Models\Surat;
use App\Models\Surat_KeteranganDomisili;
use App\Models\Surat_KeteranganUsaha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgendaKarangtarunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $surat_ktm = Surat::where('is_read', false)->count();
        $surat_ku = Surat_KeteranganUsaha::where('is_read', false)->count();
        $surat_domisili = Surat_KeteranganDomisili::where('is_read', false)->count();
        $notifications_sktm = Surat::where('is_read', false)->get();
        $notifications_ku = Surat_KeteranganUsaha::where('is_read', false)->get();
        $notifications_domisili = Surat_KeteranganDomisili::where('is_read', false)->get();
        $notifications = $notifications_sktm->merge($notifications_ku)->merge($notifications_domisili);

        $agenda_karangtaruna = Agenda_karangtaruna::with('user')->orderBy('created_at', 'desc')->paginate(7);
        $cari = $request->get('keyword');
        if ($cari) {
            $agenda_karangtaruna = Agenda_karangtaruna::with('user')
                ->where('judul', 'LIKE', "%$cari%")
                ->paginate(7);
        }

        return view('agenda_karangtaruna.index', compact('agenda_karangtaruna', 'surat_ktm', 'surat_ku', 'surat_domisili', 'notifications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $surat_ktm = Surat::where('is_read', false)->count();
        $surat_ku = Surat_KeteranganUsaha::where('is_read', false)->count();

        $surat_domisili = Surat_KeteranganDomisili::where('is_read', false)->count();
        $notifications_sktm = Surat::where('is_read', false)->get();
        $notifications_ku = Surat_KeteranganUsaha::where('is_read', false)->get();
        $notifications_domisili = Surat_KeteranganDomisili::where('is_read', false)->get();
        $notifications = $notifications_sktm->merge($notifications_ku)->merge($notifications_domisili);

        return view('agenda_karangtaruna.create', compact('surat_ktm', 'surat_ku', 'surat_domisili', 'notifications'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->validateAgenda($request);

        $agenda_karangtaruna = new Agenda_karangtaruna();
        $agenda_karangtaruna->judul = $data['judul'];
        $agenda_karangtaruna->tanggal = $data['tanggal'];
        $agenda_karangtaruna->jam = $data['jam'];
        $agenda_karangtaruna->acara = $data['acara'];
        $agenda_karangtaruna->tempat = $data['tempat'];
        $agenda_karangtaruna->content = $data['content'];
        $agenda_karangtaruna->user_id = Auth::user()->id;

        $agenda_karangtaruna->save();

        return redirect()->route('agenda_karangtarunaindex')->with('success', 'Agenda karang taruna berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $surat_ktm = Surat::where('is_read', false)->count();
        $surat_ku = Surat_KeteranganUsaha::where('is_read', false)->count();

        $surat_domisili = Surat_KeteranganDomisili::where('is_read', false)->count();
        $notifications_sktm = Surat::where('is_read', false)->get();
        $notifications_ku = Surat_KeteranganUsaha::where('is_read', false)->get();
        $notifications_domisili = Surat_KeteranganDomisili::where('is_read', false)->get();
        $notifications = $notifications_sktm->merge($notifications_ku)->merge($notifications_domisili);

        $agenda_karangtaruna = $this->findAgendaKarangtaruna($id);

        if (! $agenda_karangtaruna) {
            return redirect()->route('agenda_karangtarunaindex')->with('error', 'Agenda tidak ditemukan.');
        }

        return view('agenda_karangtaruna.edit', compact('agenda_karangtaruna', 'surat_ktm', 'surat_ku', 'surat_domisili', 'notifications'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $agenda_karangtaruna = $this->findAgendaKarangtaruna($id);

        if (! $agenda_karangtaruna) {
            return redirect()->route('agenda_karangtarunaindex')->with('error', 'Agenda tidak ditemukan.');
        }

        $data = $this->validateAgenda($request);

        $agenda_karangtaruna->judul = $data['judul'];
        $agenda_karangtaruna->tanggal = $data['tanggal'];
        $agenda_karangtaruna->jam = $data['jam'];
        $agenda_karangtaruna->acara = $data['acara'];
        $agenda_karangtaruna->tempat = $data['tempat'];
        $agenda_karangtaruna->content = $data['content'];

        $agenda_karangtaruna->save();

        return redirect()->route('agenda_karangtarunaindex')->with('success', 'Agenda berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $agenda_karangtaruna = $this->findAgendaKarangtaruna($id);

        if ($agenda_karangtaruna) {
            $agenda_karangtaruna->delete();

            return redirect()->route('agenda_karangtarunaindex')->with('success', 'Agenda berhasil dihapus.');
        }

        return redirect()->route('agenda_karangtarunaindex')->with('error', 'Agenda tidak ditemukan.');
    }

    private function validateAgenda(Request $request): array
    {
        return $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'tanggal' => ['required', 'date'],
            'jam' => ['required', 'string', 'max:255'],
            'acara' => ['required', 'string', 'max:255'],
            'tempat' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
        ]);
    }

    private function findAgendaKarangtaruna($identifier): ?Agenda_karangtaruna
    {
        return Agenda_karangtaruna::find($identifier)
            ?? Agenda_karangtaruna::where('judul', $identifier)->first();
    }
}
