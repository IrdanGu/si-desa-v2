<!DOCTYPE html>
<html>
<head>
    <title>Data Penduduk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 20%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid rgb(12, 12, 12);
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-size: 50%;

        }
        td {
            vertical-align: top;
            font-size: 40%;
        }
    </style>
</head>
<body>
    <h2>Data Penduduk Desa Mancagar</h2>
    <h2><strong>Kecamatan Garawangi, kabupaten kuningan<strong></h2>
    <table>
        <thead>
            <tr>
                <th>Nomor KK</th>
                <th>NIK</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Hubungan</th>
                <th>Tempat Lahir</th>
                <th>Tanggal lahir</th>
                <th>Status</th>
                <th>Pendidikan</th>
                <th>Pekerjaan</th>
                <th>Dusun</th>
                <th>Rt</th>
                <th>Rw</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penduduk as $penduduks)
            <tr>
                <td>{{ $penduduks->no_kk }}</td>
                <td>{{ $penduduks->nik }}</td>
                <td>{{ $penduduks->nama_lengkap }}</td>
                <td>{{ $penduduks->jenis_kelamin }}</td>
                <td>{{ $penduduks->hubungan }}</td>
                <td>{{ $penduduks->tempat_lahir }}</td>
                <td>{{ date('d-m-Y', strtotime($penduduks->tanggal_lahir)) }}</td>
                <td>{{ $penduduks->status }}</td>
                <td>{{ $penduduks->pendidikan }}</td>
                <td>{{ $penduduks->pekerjaan }}</td>
                <td>{{ $penduduks->dusun }}</td>
                <td>{{ $penduduks->rt }}</td>
                <td>{{ $penduduks->rw }}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
