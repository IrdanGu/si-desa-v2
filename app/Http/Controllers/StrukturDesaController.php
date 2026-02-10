<?php

namespace App\Http\Controllers;

use App\Http\Requests\AparaturRequest;
use App\Models\AparaturDesa;
use App\Models\Surat;
use App\Models\Surat_KeteranganDomisili;
use App\Models\Surat_KeteranganUsaha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StrukturDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $aparatur_desas = AparaturDesa::all();
        $surat_ktm = Surat::where('is_read', false)->count();
        $surat_ku = Surat_KeteranganUsaha::where('is_read', false)->count();

        $surat_domisili = Surat_KeteranganDomisili::where('is_read', false)->count();
        $notifications_sktm = Surat::where('is_read', false)->get();
        $notifications_ku = Surat_KeteranganUsaha::where('is_read', false)->get();
        $notifications_domisili = Surat_KeteranganDomisili::where('is_read', false)->get();
        $notifications = $notifications_sktm->merge($notifications_ku)->merge($notifications_domisili);

        return view('aparatur.index', compact('aparatur_desas', 'surat_ktm', 'surat_ku', 'surat_domisili', 'notifications'));

        // $dataaparatur = aparaturdesa::all();
        // return view('frontend.aparatur', compact('dataaparatur'));
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

        return view('aparatur.create', compact('aparatur_desas', 'surat_ktm', 'surat_ku', 'surat_domisili', 'notifications'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AparaturRequest $request)
    {

        $aparatur_desas = new aparaturdesa();
        if ($request->file('gambar_struktur')) {
            $originalName = $request->file('gambar_struktur')->getClientOriginalName();
            $file = $request->file('gambar_struktur')->storeAs('gambar', $originalName, 'public');
            $aparatur_desas->gambar_struktur = $file;

        }

        $aparatur_desas->save();

        return redirect()->route('aparaturindex');

    }

    /**
     * Display the specified resource.
     */
    public function show($strukturdesa)
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

        $aparatur_desas = aparaturdesa::findOrFail($id);

        return view('aparatur.edit', compact('aparatur_desas', 'surat_ktm', 'surat_ku', 'surat_domisili', 'notifications'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $aparatur_desas = AparaturDesa::findOrFail($id);

        if ($request->file('gambar_struktur')) {
            // Hapus gambar lama jika ada
            if ($aparatur_desas->gambar_struktur && Storage::exists('public/'.$aparatur_desas->gambar_struktur)) {
                Storage::delete('public/'.$aparatur_desas->gambar_struktur);
            }

            // Simpan gambar baru dengan nama asli
            $originalName = $request->file('gambar_struktur')->getClientOriginalName();
            $file = $request->file('gambar_struktur')->storeAs('gambar', $originalName, 'public');
            $aparatur_desas->gambar_struktur = $file;
        }

        $aparatur_desas->save();

        return redirect()->route('aparaturindex');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $aparatur_desas = aparaturdesa::findfOrFail($id);
        Storage::delete('public/'.$aparatur_desas->gambar_struktur);
        $aparatur_desas->delete();

        return redirect()->route('aparaturindex');
    }
}
