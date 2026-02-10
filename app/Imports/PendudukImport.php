<?php

namespace App\Imports;

use App\Models\Penduduk;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PendudukImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Penduduk([
            'no_kk' => $row['no_kk'],
            'nik' => $row['nik'],
            'nama_lengkap' => $row['nama_lengkap'],
            'jenis_kelamin' => $row['jenis_kelamin'],
            'hubungan' => $row['hubungan'],
            'tempat_lahir' => $row['tempat_lahir'],
            'tanggal_lahir' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tanggal_lahir']),
            'status' => $row['status'],
            'pendidikan' => $row['pendidikan'],
            'pekerjaan' => $row['pekerjaan'],
            'dusun' => $row['dusun'],
            'rt' => $row['rt'],
            'rw' => $row['rw'],
            'desa' => $row['desa'],
        ]);
}
}
