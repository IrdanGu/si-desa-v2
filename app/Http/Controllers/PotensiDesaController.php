<?php

namespace App\Http\Controllers;

use App\Models\Potensi_desa;
use App\Models\Surat;
use App\Models\Surat_KeteranganDomisili;
use App\Models\Surat_KeteranganUsaha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PotensiDesaController extends Controller
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

        $potensi_desa = Potensi_desa::orderBy('judul', 'desc')->paginate(7);
        $cari = $request->get('keyword');
        if ($cari) {
            $potensi_desa = Potensi_desa::where('judul', 'LIKE', "%$cari%")->paginate(7);
        }

        return view('potensi_desa.index', compact('potensi_desa', 'surat_ktm', 'surat_ku', 'surat_domisili', 'notifications'));
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

        return view('potensi_desa.create', compact('surat_ktm', 'surat_ku', 'surat_domisili', 'notifications'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $judul = $request->get('judul');
        $potensi_desa = new Potensi_desa();
        $potensi_desa->judul = $judul;
        $potensi_desa->slug = str::slug($judul, '-');
        $potensi_desa->content = ($request->get('content'));
        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('gambar', 'public');
            $potensi_desa->gambar = $file;
        }
        $potensi_desa->save();

        return redirect()->route('potensi_desaindex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $surat_ktm = Surat::where('is_read', false)->count();
        $surat_ku = Surat_KeteranganUsaha::where('is_read', false)->count();
        $surat_domisili = Surat_KeteranganDomisili::where('is_read', false)->count();
        $notifications_sktm = Surat::where('is_read', false)->get();
        $notifications_ku = Surat_KeteranganUsaha::where('is_read', false)->get();
        $notifications_domisili = Surat_KeteranganDomisili::where('is_read', false)->get();
        $notifications = $notifications_sktm->merge($notifications_ku)->merge($notifications_domisili);

        $potensi_desa = Potensi_desa::where('slug', $slug)->first();

        return view('potensi_desa.edit', compact('potensi_desa', 'surat_ktm', 'surat_ku', 'surat_domisili', 'notifications'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $judul = $request->get('judul');
        $potensi_desa = Potensi_desa::where('slug', $slug)->first();
        $potensi_desa->judul = $judul;
        $potensi_desa->slug = str::slug($judul);
        $potensi_desa->content = ($request->get('content'));
        if ($request->file('gambar')) {
            if ($potensi_desa->gambar && Storage::disk('public')->exists($potensi_desa->gambar)) {
                Storage::disk('public')->delete($potensi_desa->gambar);
            }
            $file = $request->file('gambar')->store('gambar', 'public');
            $potensi_desa->gambar = $file;
        }
        $potensi_desa->save();

        return redirect()->route('potensi_desaindex');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $potensi_desa = Potensi_desa::where('slug', $slug)->first();
        if ($potensi_desa->gambar && Storage::disk('public')->exists($potensi_desa->gambar)) {
            Storage::disk('public')->delete($potensi_desa->gambar);
        }
        $potensi_desa->delete();

        return redirect()->route('potensi_desaindex');
    }
}
