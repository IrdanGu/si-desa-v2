<?php

namespace App\Exports;

use App\Models\Penduduk;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportPenduduk implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Penduduk::select('no_kk', 'nik', 'nama_lengkap', 'jenis_kelamin', 'hubungan', 'tempat_lahir', 'tanggal_lahir', 'status', 'pendidikan', 'pekerjaan', 'dusun', 'rt', 'rw')->get();

    }

    public function headings(): array
    {
        return [
            'Nomor KK',
            'NIK',
            'Nama Lengkap',
            'Jenis Kelamain',
            'Hubungan',
            'Tempat Lahir',
            'Tanggal lahir',
            'Status',
            'Pendidikan',
            'Pekerjaan',
            'Dusun',
            'Rt',
            'Rw',
        ];
    }
}
