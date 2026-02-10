<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Penduduk;
use App\Models\Surat;
use App\Models\Surat_KeteranganDomisili;
use App\Models\Surat_KeteranganUsaha;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{


    public function index(Request $request)
    {

          //Jika pengguna belum masuk, arahkan ke halaman login
        //   if (Auth::check()) {
        //     return redirect()->route('login'); // Ganti 'login' dengan nama rute halaman login Anda
        // }



        $status = $request->get('status');
        $user = User::count();
        $berita = Berita::count();
        $jml_sktm = Surat::count();
        $jml_sku = Surat_KeteranganUsaha::count();
        $jml_sdm = Surat_KeteranganDomisili::count();
        $all_surat = $jml_sktm+$jml_sku+$jml_sdm;
        $surat_ktm = Surat::where('is_read', false)->count();
        $surat_ku = Surat_KeteranganUsaha::where('is_read', false)->count();
        $surat_domisili = Surat_KeteranganDomisili::where('is_read', false)->count();
        $notifications_sktm = Surat::where('is_read', false)->get();
        $notifications_ku = Surat_KeteranganUsaha::where('is_read', false)->get();
        $notifications_domisili = Surat_KeteranganDomisili::where('is_read', false)->get();
        $notifications = $notifications_sktm->merge($notifications_ku)->merge($notifications_domisili);

        $rt01 = Penduduk::where('rt', '01')->count();
        $rt02 = Penduduk::where('rt', '02')->count();
        $rt03 = Penduduk::where('rt', '03')->count();
        $rt04 = Penduduk::where('rt', '02')->count();
        $rt05 = Penduduk::where('rt', '05')->count();
        $rt06 = Penduduk::where('rt', '06')->count();
        $rt07 = Penduduk::where('rt', '07')->count();



         // Menghitung jumlah penduduk laki-laki dan perempuan di RT '01'
         $rt01LK = Penduduk::where('rt','01')->where('jenis_kelamin', 'LK')->count();
         $rt01P = Penduduk::where('rt','01')->where('jenis_kelamin', 'P')->count();

         // Menghitung jumlah penduduk laki-laki dan perempuan di RT '01'
         $rt02LK = Penduduk::where('rt','02')->where('jenis_kelamin', 'LK')->count();
         $rt02P = Penduduk::where('rt','02')->where('jenis_kelamin', 'P')->count();

         // Menghitung jumlah penduduk laki-laki dan perempuan di RT '01'
         $rt03LK = Penduduk::where('rt','03')->where('jenis_kelamin', 'LK')->count();
         $rt03P = Penduduk::where('rt','03')->where('jenis_kelamin', 'P')->count();

         // Menghitung jumlah penduduk laki-laki dan perempuan di RT '01'
         $rt04LK = Penduduk::where('rt','04')->where('jenis_kelamin', 'LK')->count();
         $rt04P = Penduduk::where('rt','04')->where('jenis_kelamin', 'P')->count();

         // Menghitung jumlah penduduk laki-laki dan perempuan di RT '01'
         $rt05LK = Penduduk::where('rt','05')->where('jenis_kelamin', 'LK')->count();
         $rt05P = Penduduk::where('rt','05')->where('jenis_kelamin', 'P')->count();

         // Menghitung jumlah penduduk laki-laki dan perempuan di RT '01'
         $rt06LK = Penduduk::where('rt','06')->where('jenis_kelamin', 'LK')->count();
         $rt06P = Penduduk::where('rt','06')->where('jenis_kelamin', 'P')->count();

          // Menghitung jumlah penduduk laki-laki dan perempuan di RT '01'
          $rt07LK = Penduduk::where('rt','07')->where('jenis_kelamin', 'LK')->count();
          $rt07P = Penduduk::where('rt','07')->where('jenis_kelamin', 'P')->count();




         // Menghitung pendidikan didesa mancagar
         $blm_sklh = Penduduk::where('pendidikan', 'Blm Sekolah')->count();
         $tdk_prnh_sklh = Penduduk::where('pendidikan', 'Tdk Prnh Sklh')->count();
         $blm_tamat_sd = Penduduk::where('pendidikan', 'Blm Tamat SD')->count();
         $tamat_sd = Penduduk::where('pendidikan', 'Tamat SD')->count();
         $tamat_sltp = Penduduk::where('pendidikan', 'Tamat SLTP')->count();
         $tamat_slta = Penduduk::where('pendidikan', 'Tamat SLTA')->count();
         $tamat_s1 = Penduduk::where('pendidikan', 'Tamat S-1')->count();

         // Menghitung status pekerjaan didesa mancagar
         $brh_h_lepas = Penduduk::where('pekerjaan','Buruh Harian Lepas')->count();
         $pelajar = Penduduk::where('pekerjaan','pelajar')->count();
         $wiraswasta = Penduduk::where('pekerjaan','Wiraswasta')->count();
         $m_rmh_tangga = Penduduk::where('pekerjaan','Mengrs Rmh Tangga')->count();
         $b_harian_lepas = Penduduk::where('pekerjaan','Buruh Harian Lepas')->count();
         $perangkat_desa = Penduduk::where('pekerjaan','Perangkat Desa')->count();
         $belum_bekerja = Penduduk::where('pekerjaan','Belum Bekerja')->count();
         $karyawan_swasta = Penduduk::where('pekerjaan','Karyawan Swasta')->count();

         // Menghitung status penduduk
         $kawin = Penduduk::where('status', 'Kawin')->count();
         $blm_kawin = Penduduk::where('status', 'Blm Kawin')->count();
         $jandud = Penduduk::where('status', 'Janda/Duda')->count();


        $P= Penduduk::where('jenis_kelamin', 'P')->count();
        $LK = Penduduk::where('jenis_kelamin', 'LK')->count();
        $jmlpenduduk = Penduduk::count();
        $Kpl = Penduduk::where('hubungan', 'Kpl. Keluarga')->count();
        return view('dashboard', compact('jmlpenduduk', 'LK', 'P', 'berita', 'user', 'Kpl','surat_ku','surat_ktm','surat_domisili','rt01', 'rt02','rt03',
                                         'rt04','rt05','rt06','rt07', 'rt01LK', 'rt01P','rt02LK','rt02P','rt03LK','rt03P','rt04LK','rt04P','rt05LK','rt05P','rt06LK','rt06P','rt07LK','rt07P', 'blm_sklh', 'tdk_prnh_sklh', 'blm_tamat_sd'
                                        ,'tamat_sd', 'tamat_sltp', 'tamat_slta', 'tamat_s1','brh_h_lepas','pelajar','wiraswasta','m_rmh_tangga','b_harian_lepas','perangkat_desa','belum_bekerja','karyawan_swasta','kawin','blm_kawin','jandud', 'notifications','all_surat','status'));
    }

    // public function navbar(){
    //     $surat = Surat::count();
    //     return view('adminlte/partial/navbar', compact('surat'));
    // }
}
