<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\Surat_KeteranganDomisili;
use App\Models\Surat_KeteranganUsaha;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class Surat_KeteranganDomisiliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $status = $request->get('status');
        $surat_ktm = Surat::where('is_read', false)->count();
        $surat_ku = Surat_KeteranganUsaha::where('is_read', false)->count();
        $surat_domisili = Surat_KeteranganDomisili::where('is_read', false)->count();
        $notifications_sktm = Surat::where('is_read', false)->get();
        $notifications_ku = Surat_KeteranganUsaha::where('is_read', false)->get();
        $notifications_domisili = Surat_KeteranganDomisili::where('is_read', false)->get();
        $notifications = $notifications_sktm->merge($notifications_ku)->merge($notifications_domisili);
        if ($status) {
            $surat__KeteranganDomisili = Surat_KeteranganDomisili::where('status', $status)->paginate(15);
        } else {
            $surat__KeteranganDomisili = Surat_KeteranganDomisili::orderBy('id', 'desc')->paginate(20);
        }

        $cari = $request->get('keyword');
        if ($cari) {
            if ($status) {
                $surat__KeteranganDomisili = Surat_KeteranganDomisili::where('nik', 'LIKE', "%$cari%")->where('status', $status)->paginate(15);
            } else {
                $surat__KeteranganDomisili = Surat_KeteranganDomisili::where('nik', 'LIKE', "%$cari%")->paginate(15);
            }
        }

        return view('surat_KeteranganDomisili.index', compact('surat__KeteranganDomisili', 'surat_ktm', 'surat_ku', 'surat_domisili', 'notifications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $surat_KeteranganDomisili = Surat_KeteranganDomisili::FindOrFail($id);
        $surat_KeteranganDomisili->delete();

        return redirect()->route('surat_keterangandomisiliindex');
    }

    public function cetak_surat($id)
    {
        $surat_KeteranganDomisili = Surat_KeteranganDomisili::FindOrFail($id);

        // if ($surat_KeteranganDomisili->ttd) {
        //     $ttd = public_path('storage/' . $surat_KeteranganDomisili->ttd);

        $pdf = Pdf::loadview('surat_KeteranganDomisili.cetak', ['surat__KeteranganDomisili' => $surat_KeteranganDomisili]);

        return $pdf->stream('surat_keterangan_domisili.pdf');
    }
}
