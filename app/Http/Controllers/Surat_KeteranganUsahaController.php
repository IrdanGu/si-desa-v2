<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\Surat_KeteranganDomisili;
use App\Models\Surat_KeteranganUsaha;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class Surat_KeteranganUsahaController extends Controller
{
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
            $surat__KeteranganUsaha = Surat_KeteranganUsaha::where('status', $status)->paginate(15);
        } else {
            $surat__KeteranganUsaha = Surat_KeteranganUsaha::orderBy('id', 'desc')->paginate(20);
        }

        $cari = $request->get('keyword');
        if ($cari) {
            if ($status) {
                $surat__KeteranganUsaha = Surat_KeteranganUsaha::where('nik', 'LIKE', "%$cari%")->where('status', $status)->paginate(15);
            } else {
                $surat__KeteranganUsaha = Surat_KeteranganUsaha::where('nik', 'LIKE', "%$cari%")->paginate(15);
            }
        }

        return view('surat_KeteranganUsaha.index', compact('surat__KeteranganUsaha', 'surat_ktm', 'surat_ku', 'surat_domisili', 'notifications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('surat_KeteranganUsaha.create');
    }

    public function destroy(string $id)
    {

        $surat__KeteranganUsaha = Surat_KeteranganUsaha::FindOrFail($id);
        $surat__KeteranganUsaha->delete();

        return redirect()->route('surat_keteranganusahaindex');
    }

    public function cetak_surat($id)
    {
        $surat__KeteranganUsaha = Surat_KeteranganUsaha::FindOrFail($id);
        $pdf = Pdf::loadview('surat_KeteranganUsaha.cetak', ['surat__KeteranganUsaha' => $surat__KeteranganUsaha]);

        return $pdf->stream('surat_keterangan_usaha.pdf');
    }
}
