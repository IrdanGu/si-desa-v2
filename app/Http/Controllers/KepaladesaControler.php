<?php

namespace App\Http\Controllers;

use App\Models\KepalaDesa;
use App\Models\Surat;
use App\Models\Surat_KeteranganDomisili;
use App\Models\Surat_KeteranganUsaha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KepaladesaControler extends Controller
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
        $kepaladesa = KepalaDesa::all();

        return view('kepaladesa.index', compact('kepaladesa', 'surat_ktm', 'surat_ku', 'surat_domisili', 'notifications'));
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

        return view('kepaladesa.create', compact('surat_ktm', 'surat_ku', 'surat_domisili', 'notifications'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = $request->get('id');
        $kepaladesa = new KepalaDesa();
        $kepaladesa->id = $id;
        $kepaladesa->nama_ttd = $request->get('nama_ttd');

        if ($request->file('ttd')) {
            $file = $request->file('ttd')->store('gambar', 'public');
            $kepaladesa->ttd = $file;
        }

        $kepaladesa->save();

        return redirect()->route('kepaladesaindex');
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
    public function edit(string $id)
    {
        $surat_ktm = Surat::where('is_read', false)->count();
        $surat_ku = Surat_KeteranganUsaha::where('is_read', false)->count();
        $surat_domisili = Surat_KeteranganDomisili::where('is_read', false)->count();
        $notifications_sktm = Surat::where('is_read', false)->get();
        $notifications_ku = Surat_KeteranganUsaha::where('is_read', false)->get();
        $notifications_domisili = Surat_KeteranganDomisili::where('is_read', false)->get();
        $notifications = $notifications_sktm->merge($notifications_ku)->merge($notifications_domisili);
        $kepaladesa = KepalaDesa::findOrFail($id);

        return view('kepaladesa.edit', compact('kepaladesa', 'surat_ktm', 'surat_ku', 'surat_domisili', 'notifications'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kepaladesa = KepalaDesa::where('id', $id)->first(); // Sesuaikan kolom primary key
        if ($kepaladesa === null) {
            return redirect()->route('kepaladesaindex');
        }

        $kepaladesa->nama_ttd = $request->get('nama_ttd');
        if ($request->file('ttd')) {
            if ($kepaladesa->ttd && Storage::exists('public/'.$kepaladesa->ttd)) {
                Storage::delete('public/'.$kepaladesa->ttd);
            }
            $file = $request->file('ttd')->store('gambar', 'public');
            $kepaladesa->ttd = $file;
        }

        $kepaladesa->save();

        return redirect()->route('kepaladesaindex');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kepaladesa = KepalaDesa::where('id_galery', $id)->firstOrFail(); // Sesuaikan kolom primary key
        if ($kepaladesa->ttd && Storage::exists('public/'.$kepaladesa->ttd)) {
            Storage::delete('public/'.$kepaladesa->ttd);
        }
        $kepaladesa->delete();

        return redirect()->route('galeryindex')->with('success', 'Galeri berhasil dihapus.');
    }
}
