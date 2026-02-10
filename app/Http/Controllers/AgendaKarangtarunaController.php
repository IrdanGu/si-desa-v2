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

        $agenda_karangtaruna = Agenda_karangtaruna::orderBy('created_at', 'desc')->paginate(7);
        $cari = $request->get('keyword');
        if ($cari) {
            $agenda_karangtaruna = Agenda_karangtaruna::where('judul', 'LIKE', "%$cari%")->paginate(7);
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
        $id = $request->get('id');
        $agenda_karangtaruna = new Agenda_karangtaruna();
        $agenda_karangtaruna->id = $id;
        $agenda_karangtaruna->judul = $request->get('judul');
        $agenda_karangtaruna->tanggal = date('Y-m-d', strtotime($request->get('tanggal')));
        $agenda_karangtaruna->jam = $request->get('jam');
        $agenda_karangtaruna->acara = $request->get('acara');
        $agenda_karangtaruna->tempat = $request->get('tempat');
        $agenda_karangtaruna->content = ($request->get('content'));
        $agenda_karangtaruna->user_id = Auth::user()->id;

        $agenda_karangtaruna->save();

        return redirect()->route('agenda_karangtarunaindex');
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

        // Try to find by ID first, then by judul for backward compatibility
        $agenda_karangtaruna = Agenda_karangtaruna::find($id);

        if (! $agenda_karangtaruna) {
            // If not found by ID, try by judul
            $agenda_karangtaruna = Agenda_karangtaruna::where('judul', $id)->first();
        }

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
        // Try to find by ID first, then by judul for backward compatibility
        $agenda_karangtaruna = Agenda_karangtaruna::find($id);

        if (! $agenda_karangtaruna) {
            // If not found by ID, try by judul
            $agenda_karangtaruna = Agenda_karangtaruna::where('judul', $id)->first();
        }

        if (! $agenda_karangtaruna) {
            return redirect()->route('agenda_karangtarunaindex')->with('error', 'Agenda tidak ditemukan.');
        }

        $agenda_karangtaruna->judul = $request->get('judul');
        $agenda_karangtaruna->tanggal = date('Y-m-d', strtotime($request->get('tanggal')));
        $agenda_karangtaruna->jam = $request->get('jam');
        $agenda_karangtaruna->acara = $request->get('acara');
        $agenda_karangtaruna->tempat = $request->get('tempat');
        $agenda_karangtaruna->content = ($request->get('content'));

        $agenda_karangtaruna->save();

        return redirect()->route('agenda_karangtarunaindex')->with('success', 'Agenda berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Try to find by ID first, then by judul (title) for backward compatibility
        $agenda_karangtaruna = Agenda_karangtaruna::find($id);

        if (! $agenda_karangtaruna) {
            // If not found by ID, try by judul
            $agenda_karangtaruna = Agenda_karangtaruna::where('judul', $id)->first();
        }

        if ($agenda_karangtaruna) {
            $agenda_karangtaruna->delete();

            return redirect()->route('agenda_karangtarunaindex')->with('success', 'Agenda berhasil dihapus.');
        }

        return redirect()->route('agenda_karangtarunaindex')->with('error', 'Agenda tidak ditemukan.');
    }
}
