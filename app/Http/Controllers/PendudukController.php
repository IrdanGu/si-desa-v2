<?php

namespace App\Http\Controllers;

use App\Exports\ExportPenduduk;
use App\Http\Requests\PendudukRequest;
use App\Imports\PendudukImport;
use App\Models\Penduduk;
use App\Models\Surat;
use App\Models\Surat_KeteranganDomisili;
use App\Models\Surat_KeteranganUsaha;
use Barryvdh\DomPDF\Facade\Pdf; // Import the PDF facade
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;


class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    // Menghitung notifikasi
    $surat_ktm = Surat::where('is_read', false)->count();
    $surat_ku = Surat_KeteranganUsaha::where('is_read', false)->count();
    $surat_domisili = Surat_KeteranganDomisili::where('is_read', false)->count();

    // Mengambil data notifikasi
    $notifications_sktm = Surat::where('is_read', false)->get();
    $notifications_ku = Surat_KeteranganUsaha::where('is_read', false)->get();
    $notifications_domisili = Surat_KeteranganDomisili::where('is_read', false)->get();
    $notifications = $notifications_sktm->merge($notifications_ku)->merge($notifications_domisili);

    // Inisialisasi data penduduk
    $penduduk = Penduduk::query();

    // Mengambil input dari request
    $cari = $request->get('keyword');
    $status = $request->get('status');

    // Logika pencarian berdasarkan 'status'
    if ($cari && $status === 'nik') {
        $penduduk = $penduduk->where('nik', 'LIKE', "%$cari%");
    } elseif ($cari && $status === 'no_kk') {
        $penduduk = $penduduk->where('no_kk', 'LIKE', "%$cari%");
    } elseif ($cari) {
        $penduduk = $penduduk->where(function ($query) use ($cari) {
            $query->where('nama_lengkap', 'LIKE', "%$cari%")
                  ->orWhere('pekerjaan', 'LIKE', "%$cari%")
                  ->orWhere('dusun', 'LIKE', "%$cari%")
                  ->orWhere('rt', 'LIKE', "%$cari%")
                  ->orWhere('rw', 'LIKE', "%$cari%");
        });
    }

    // Melakukan paginasi pada hasil pencarian
    $penduduk = $penduduk->paginate(15);

    return view('penduduk.index', compact('penduduk', 'surat_ktm', 'surat_ku', 'surat_domisili', 'notifications'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $surat_ktm =Surat::where('is_read', false)->count();
        $surat_ku = Surat_KeteranganUsaha::where('is_read', false)->count();
        $surat_domisili = Surat_KeteranganDomisili::where('is_read', false)->count();
        $notifications_sktm = Surat::where('is_read', false)->get();
        $notifications_ku = Surat_KeteranganUsaha::where('is_read', false)->get();
        $notifications_domisili = Surat_KeteranganDomisili::where('is_read', false)->get();
        $notifications = $notifications_sktm->merge($notifications_ku)->merge($notifications_domisili);

        return view('penduduk.create', compact('surat_ktm', 'surat_ku','surat_domisili','notifications'));;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PendudukRequest $request)
    {
        $penduduk = new Penduduk;
        $penduduk->nik = $request->get('nik');
        $penduduk->no_kk = $request->get('no_kk');
        $penduduk->nama_lengkap = $request->get('nama_lengkap');
        $penduduk->jenis_kelamin = $request->get('jenis_kelamin');
        $penduduk->hubungan = $request->get('hubungan');
        $penduduk->tempat_lahir = $request->get('tempat_lahir');
        $penduduk->tanggal_lahir = date('Y-m-d', strtotime($request->get('tanggal_lahir')));
        $penduduk->status = $request->get('status');
        $penduduk->pendidikan = $request->get('pendidikan');
        $penduduk->pekerjaan = $request->get('pekerjaan');
        $penduduk->dusun = $request->get('dusun');
        $penduduk->rt = $request->get('rt');
        $penduduk->rw = $request->get('rw');
        $penduduk->desa = $request->get('desa');

        $penduduk->save();

        return redirect()->route('pendudukindex');


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $surat_ktm =Surat::where('is_read', false)->count();
        $surat_ku = Surat_KeteranganUsaha::where('is_read', false)->count();

        $notifications_sktm = Surat::where('is_read', false)->get();
        $notifications_sku = Surat_KeteranganUsaha::where('is_read', false)->get();
        $notifications = $notifications_sktm->merge($notifications_sku);
        $penduduk = Penduduk::FindOrFail($id);
        return view('penduduk.detail', compact('penduduk','surat_ktm', 'surat_ku', 'notifications'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $surat_ktm =Surat::where('is_read', false)->count();
        $surat_ku = Surat_KeteranganUsaha::where('is_read', false)->count();
        $surat_domisili = Surat_KeteranganDomisili::where('is_read', false)->count();
        $notifications_sktm = Surat::where('is_read', false)->get();
        $notifications_ku = Surat_KeteranganUsaha::where('is_read', false)->get();
        $notifications_domisili = Surat_KeteranganDomisili::where('is_read', false)->get();
        $notifications = $notifications_sktm->merge($notifications_ku)->merge($notifications_domisili);

        $penduduk = Penduduk::FindOrFail($id);
        return view('penduduk.edit', compact('penduduk','surat_ktm','surat_ku','surat_domisili','notifications'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PendudukRequest $request, $id)
    {
        $penduduk = Penduduk::FindOrFail($id);
        $penduduk->nik = $request->get('nik');
        $penduduk->no_kk = $request->get('no_kk');
        $penduduk->nama_lengkap = $request->get('nama_lengkap');
        $penduduk->jenis_kelamin = $request->get('jenis_kelamin');
        $penduduk->hubungan = $request->get('hubungan');
        $penduduk->tempat_lahir = $request->get('tempat_lahir');
        $penduduk->tanggal_lahir = date('Y-m-d', strtotime($request->get('tanggal_lahir')));
        $penduduk->status = $request->get('status');
        $penduduk->pendidikan = $request->get('pendidikan');
        $penduduk->pekerjaan = $request->get('pekerjaan');
        $penduduk->dusun = $request->get('dusun');
        $penduduk->rt = $request->get('rt');
        $penduduk->rw = $request->get('rw');
        $penduduk->desa = $request->get('desa');

        $penduduk->save();

        return redirect()->route('pendudukindex');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $penduduk = Penduduk::FindOrFail($id);
        $penduduk->delete();
        return redirect()->route('pendudukindex');

    }



    public function ajax(Request $request, $nik)
    {
        $data = Penduduk::where('nik', $nik)->first();
        if (!$data) {
            return response()->json(['error' => 'Data tidak ditemukan'], 404);
        }
        return response()->json($data);
    }

    public function export_excel(){
        return Excel::download(new ExportPenduduk, 'penduduk.xlsx');
    }

    public function export_pdf()
{
    // Debugging
    try {
        $penduduk = Penduduk::all();
        // Periksa apakah data penduduk ada
        if ($penduduk->isEmpty()) {
            return response()->json(['message' => 'No data found'], 404);
        }

        $pdf = Pdf::loadView('penduduk.pdf', compact('penduduk'));
        return $pdf->download('data_penduduk.pdf');
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

    public function import_excel(Request $request)
    {
        $validator = validator::make($request->all(), [
            'file' => 'required|mimes:xlsx,xls,csv',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        Excel::import(new PendudukImport, $request->file('file')->store('temp'));

        return back()->with('success', 'Data Penduduk berhasil diimpor');
    }


}



