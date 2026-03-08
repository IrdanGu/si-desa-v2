<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Surat;
use App\Models\Surat_KeteranganDomisili;
use App\Models\Surat_KeteranganUsaha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgendaController extends Controller
{
    public function index(Request $request)
    {
        $surat_ktm = Surat::where('is_read', false)->count();
        $surat_ku = Surat_KeteranganUsaha::where('is_read', false)->count();
        $surat_domisili = Surat_KeteranganDomisili::where('is_read', false)->count();
        $notifications_sktm = Surat::where('is_read', false)->get();
        $notifications_ku = Surat_KeteranganUsaha::where('is_read', false)->get();
        $notifications_domisili = Surat_KeteranganDomisili::where('is_read', false)->get();
        $notifications = $notifications_sktm->merge($notifications_ku)->merge($notifications_domisili);

        $agenda = Agenda::with('user')->orderBy('created_at', 'desc')->paginate(7);
        $cari = $request->get('keyword');
        if ($cari) {
            $agenda = Agenda::with('user')
                ->where('judul', 'LIKE', "%$cari%")
                ->paginate(7);
        }

        return view('agenda.index', compact('agenda', 'surat_ktm', 'surat_ku', 'surat_domisili', 'notifications'));

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

        return view('agenda.create', compact('surat_ktm', 'surat_ku', 'surat_domisili', 'notifications'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->validateAgenda($request);

        $agenda = new Agenda;
        $agenda->judul = $data['judul'];
        $agenda->tanggal = $data['tanggal'];
        $agenda->jam = $data['jam'];
        $agenda->acara = $data['acara'];
        $agenda->tempat = $data['tempat'];
        $agenda->content = $data['content'];
        $agenda->user_id = Auth::user()->id;

        $agenda->save();

        return redirect()->route('agendaindex')->with('success', 'Agenda berhasil ditambahkan.');
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

        $agenda = $this->findAgenda($id);

        if (! $agenda) {
            return redirect()->route('agendaindex')->with('error', 'Agenda tidak ditemukan.');
        }

        return view('agenda.edit', compact('agenda', 'surat_ktm', 'surat_ku', 'surat_domisili', 'notifications'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $agenda = $this->findAgenda($id);

        if (! $agenda) {
            return redirect()->route('agendaindex')->with('error', 'Agenda tidak ditemukan.');
        }

        $data = $this->validateAgenda($request);

        $agenda->judul = $data['judul'];
        $agenda->tanggal = $data['tanggal'];
        $agenda->jam = $data['jam'];
        $agenda->acara = $data['acara'];
        $agenda->tempat = $data['tempat'];
        $agenda->content = $data['content'];

        $agenda->save();

        return redirect()->route('agendaindex')->with('success', 'Agenda berhasil diperbarui.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $agenda = $this->findAgenda($id);

        if (! $agenda) {
            return redirect()->route('agendaindex')->with('error', 'Agenda tidak ditemukan.');
        }

        $agenda->delete();

        return redirect()->route('agendaindex')->with('success', 'Agenda berhasil dihapus.');
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

    private function findAgenda($identifier): ?Agenda
    {
        return Agenda::find($identifier)
            ?? Agenda::where('judul', $identifier)->first();
    }
}
