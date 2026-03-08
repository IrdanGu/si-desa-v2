<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Penduduk;
use App\Models\Surat;
use App\Models\Surat_KeteranganDomisili;
use App\Models\Surat_KeteranganUsaha;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->get('status');
        $stats = Cache::remember('dashboard.stats.v1', now()->addMinutes(10), function () {
            $summary = Penduduk::query()->selectRaw("
                COUNT(*) as jmlpenduduk,
                SUM(CASE WHEN hubungan = 'Kpl. Keluarga' THEN 1 ELSE 0 END) as Kpl,
                SUM(CASE WHEN jenis_kelamin = 'P' THEN 1 ELSE 0 END) as P,
                SUM(CASE WHEN jenis_kelamin = 'LK' THEN 1 ELSE 0 END) as LK,
                SUM(CASE WHEN rt = '01' THEN 1 ELSE 0 END) as rt01,
                SUM(CASE WHEN rt = '02' THEN 1 ELSE 0 END) as rt02,
                SUM(CASE WHEN rt = '03' THEN 1 ELSE 0 END) as rt03,
                SUM(CASE WHEN rt = '04' THEN 1 ELSE 0 END) as rt04,
                SUM(CASE WHEN rt = '05' THEN 1 ELSE 0 END) as rt05,
                SUM(CASE WHEN rt = '06' THEN 1 ELSE 0 END) as rt06,
                SUM(CASE WHEN rt = '07' THEN 1 ELSE 0 END) as rt07,
                SUM(CASE WHEN rt = '01' AND jenis_kelamin = 'LK' THEN 1 ELSE 0 END) as rt01LK,
                SUM(CASE WHEN rt = '01' AND jenis_kelamin = 'P' THEN 1 ELSE 0 END) as rt01P,
                SUM(CASE WHEN rt = '02' AND jenis_kelamin = 'LK' THEN 1 ELSE 0 END) as rt02LK,
                SUM(CASE WHEN rt = '02' AND jenis_kelamin = 'P' THEN 1 ELSE 0 END) as rt02P,
                SUM(CASE WHEN rt = '03' AND jenis_kelamin = 'LK' THEN 1 ELSE 0 END) as rt03LK,
                SUM(CASE WHEN rt = '03' AND jenis_kelamin = 'P' THEN 1 ELSE 0 END) as rt03P,
                SUM(CASE WHEN rt = '04' AND jenis_kelamin = 'LK' THEN 1 ELSE 0 END) as rt04LK,
                SUM(CASE WHEN rt = '04' AND jenis_kelamin = 'P' THEN 1 ELSE 0 END) as rt04P,
                SUM(CASE WHEN rt = '05' AND jenis_kelamin = 'LK' THEN 1 ELSE 0 END) as rt05LK,
                SUM(CASE WHEN rt = '05' AND jenis_kelamin = 'P' THEN 1 ELSE 0 END) as rt05P,
                SUM(CASE WHEN rt = '06' AND jenis_kelamin = 'LK' THEN 1 ELSE 0 END) as rt06LK,
                SUM(CASE WHEN rt = '06' AND jenis_kelamin = 'P' THEN 1 ELSE 0 END) as rt06P,
                SUM(CASE WHEN rt = '07' AND jenis_kelamin = 'LK' THEN 1 ELSE 0 END) as rt07LK,
                SUM(CASE WHEN rt = '07' AND jenis_kelamin = 'P' THEN 1 ELSE 0 END) as rt07P,
                SUM(CASE WHEN pendidikan = 'Blm Sekolah' THEN 1 ELSE 0 END) as blm_sklh,
                SUM(CASE WHEN pendidikan = 'Tdk Prnh Sklh' THEN 1 ELSE 0 END) as tdk_prnh_sklh,
                SUM(CASE WHEN pendidikan = 'Blm Tamat SD' THEN 1 ELSE 0 END) as blm_tamat_sd,
                SUM(CASE WHEN pendidikan = 'Tamat SD' THEN 1 ELSE 0 END) as tamat_sd,
                SUM(CASE WHEN pendidikan = 'Tamat SLTP' THEN 1 ELSE 0 END) as tamat_sltp,
                SUM(CASE WHEN pendidikan = 'Tamat SLTA' THEN 1 ELSE 0 END) as tamat_slta,
                SUM(CASE WHEN pendidikan = 'Tamat S-1' THEN 1 ELSE 0 END) as tamat_s1,
                SUM(CASE WHEN pekerjaan = 'Buruh Harian Lepas' THEN 1 ELSE 0 END) as brh_h_lepas,
                SUM(CASE WHEN pekerjaan = 'pelajar' THEN 1 ELSE 0 END) as pelajar,
                SUM(CASE WHEN pekerjaan = 'Wiraswasta' THEN 1 ELSE 0 END) as wiraswasta,
                SUM(CASE WHEN pekerjaan = 'Mengrs Rmh Tangga' THEN 1 ELSE 0 END) as m_rmh_tangga,
                SUM(CASE WHEN pekerjaan = 'Perangkat Desa' THEN 1 ELSE 0 END) as perangkat_desa,
                SUM(CASE WHEN pekerjaan = 'Belum Bekerja' THEN 1 ELSE 0 END) as belum_bekerja,
                SUM(CASE WHEN pekerjaan = 'Karyawan Swasta' THEN 1 ELSE 0 END) as karyawan_swasta,
                SUM(CASE WHEN status = 'Kawin' THEN 1 ELSE 0 END) as kawin,
                SUM(CASE WHEN status = 'Blm Kawin' THEN 1 ELSE 0 END) as blm_kawin,
                SUM(CASE WHEN status = 'Janda/Duda' THEN 1 ELSE 0 END) as jandud
            ")->first();

            return [
                'user' => User::count(),
                'berita' => Berita::count(),
                'jmlpenduduk' => (int) $summary->jmlpenduduk,
                'Kpl' => (int) $summary->Kpl,
                'P' => (int) $summary->P,
                'LK' => (int) $summary->LK,
                'rt01' => (int) $summary->rt01,
                'rt02' => (int) $summary->rt02,
                'rt03' => (int) $summary->rt03,
                'rt04' => (int) $summary->rt04,
                'rt05' => (int) $summary->rt05,
                'rt06' => (int) $summary->rt06,
                'rt07' => (int) $summary->rt07,
                'rt01LK' => (int) $summary->rt01LK,
                'rt01P' => (int) $summary->rt01P,
                'rt02LK' => (int) $summary->rt02LK,
                'rt02P' => (int) $summary->rt02P,
                'rt03LK' => (int) $summary->rt03LK,
                'rt03P' => (int) $summary->rt03P,
                'rt04LK' => (int) $summary->rt04LK,
                'rt04P' => (int) $summary->rt04P,
                'rt05LK' => (int) $summary->rt05LK,
                'rt05P' => (int) $summary->rt05P,
                'rt06LK' => (int) $summary->rt06LK,
                'rt06P' => (int) $summary->rt06P,
                'rt07LK' => (int) $summary->rt07LK,
                'rt07P' => (int) $summary->rt07P,
                'blm_sklh' => (int) $summary->blm_sklh,
                'tdk_prnh_sklh' => (int) $summary->tdk_prnh_sklh,
                'blm_tamat_sd' => (int) $summary->blm_tamat_sd,
                'tamat_sd' => (int) $summary->tamat_sd,
                'tamat_sltp' => (int) $summary->tamat_sltp,
                'tamat_slta' => (int) $summary->tamat_slta,
                'tamat_s1' => (int) $summary->tamat_s1,
                'brh_h_lepas' => (int) $summary->brh_h_lepas,
                'pelajar' => (int) $summary->pelajar,
                'wiraswasta' => (int) $summary->wiraswasta,
                'm_rmh_tangga' => (int) $summary->m_rmh_tangga,
                'b_harian_lepas' => (int) $summary->brh_h_lepas,
                'perangkat_desa' => (int) $summary->perangkat_desa,
                'belum_bekerja' => (int) $summary->belum_bekerja,
                'karyawan_swasta' => (int) $summary->karyawan_swasta,
                'kawin' => (int) $summary->kawin,
                'blm_kawin' => (int) $summary->blm_kawin,
                'jandud' => (int) $summary->jandud,
            ];
        });

        $jml_sktm = Surat::count();
        $jml_sku = Surat_KeteranganUsaha::count();
        $jml_sdm = Surat_KeteranganDomisili::count();
        $all_surat = $jml_sktm + $jml_sku + $jml_sdm;
        $surat_ktm = Surat::where('is_read', false)->count();
        $surat_ku = Surat_KeteranganUsaha::where('is_read', false)->count();
        $surat_domisili = Surat_KeteranganDomisili::where('is_read', false)->count();
        $notifications = $this->latestNotifications();

        return view('dashboard', array_merge(
            $stats,
            compact('surat_ku', 'surat_ktm', 'surat_domisili', 'notifications', 'all_surat', 'status')
        ));
    }

    private function latestNotifications()
    {
        return Surat::query()
            ->select('id', 'nama', 'created_at', 'pilihsurat')
            ->where('is_read', false)
            ->latest()
            ->limit(5)
            ->get()
            ->merge(
                Surat_KeteranganUsaha::query()
                    ->select('id', 'nama', 'created_at', 'pilihsurat')
                    ->where('is_read', false)
                    ->latest()
                    ->limit(5)
                    ->get()
            )
            ->merge(
                Surat_KeteranganDomisili::query()
                    ->select('id', 'nama', 'created_at', 'pilihsurat')
                    ->where('is_read', false)
                    ->latest()
                    ->limit(5)
                    ->get()
            )
            ->sortByDesc('created_at')
            ->take(10)
            ->values();
    }
}
