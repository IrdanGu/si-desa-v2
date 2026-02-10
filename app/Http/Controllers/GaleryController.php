<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\Surat;
use App\Models\Surat_KeteranganDomisili;
use App\Models\Surat_KeteranganUsaha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
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
        $galery = Galery::all();

        return view('galery.index', compact('galery', 'surat_ktm', 'surat_ku', 'surat_domisili', 'notifications'));
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

        return view('galery.create', compact('surat_ktm', 'surat_ku', 'surat_domisili', 'notifications'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nama = $request->get('nama');
        $galery = new Galery();
        $galery->nama = $nama;

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('gambar', 'public');
            $galery->gambar = $file;
        }

        $galery->save();

        return redirect()->route('galeryindex');
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
    public function edit($id_galery)
    {
        $surat_ktm = Surat::where('is_read', false)->count();
        $surat_ku = Surat_KeteranganUsaha::where('is_read', false)->count();
        $surat_domisili = Surat_KeteranganDomisili::where('is_read', false)->count();
        $notifications_sktm = Surat::where('is_read', false)->get();
        $notifications_ku = Surat_KeteranganUsaha::where('is_read', false)->get();
        $notifications_domisili = Surat_KeteranganDomisili::where('is_read', false)->get();
        $notifications = $notifications_sktm->merge($notifications_ku)->merge($notifications_domisili);

        $galery = Galery::find($id_galery);
        if ($galery === null) {
            return redirect()->route('galeryindex');
        }

        return view('galery.edit', compact('galery', 'surat_ktm', 'surat_ku', 'surat_domisili', 'notifications'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_galery)
    {
        $galery = Galery::where('id_galery', $id_galery)->first(); // Sesuaikan kolom primary key
        if ($galery === null) {
            return redirect()->route('galeryindex');
        }

        $galery->nama = $request->get('nama');
        if ($request->file('gambar')) {
            if ($galery->gambar && Storage::exists('public/'.$galery->gambar)) {
                Storage::delete('public/'.$galery->gambar);
            }
            $file = $request->file('gambar')->store('gambar', 'public');
            $galery->gambar = $file;
        }

        $galery->save();

        return redirect()->route('galeryindex');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_galery)
    {
        $galery = Galery::where('id_galery', $id_galery)->firstOrFail(); // Sesuaikan kolom primary key
        if ($galery->gambar && Storage::exists('public/'.$galery->gambar)) {
            Storage::delete('public/'.$galery->gambar);
        }
        $galery->delete();

        return redirect()->route('galeryindex')->with('success', 'Galeri berhasil dihapus.');
    }
}
