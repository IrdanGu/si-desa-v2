<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Domisili</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .header {
            border-collapse: collapse;
            border-bottom: 2px solid black;
            padding-bottom: 10px;
        }

        .logo {
            width: 100px;

        }

        .header-text {
            text-align: center;
        }

        h2,
        h3,
        p {
            margin: 0;
        }

        .content {
            margin-top: 40px;
        }

        .content p {
            text-align: justify;
            margin: 10px 0;
        }

        .signature {
            text-align: right;
            margin-top: 40px;
            width: auto;
            /* position: relative; */
        }

        .signature .cap {
            position: absolute;
            left: 75%;
            transform: translateX(-50%);
            bottom: 123px;
            height: 120px;
            z-index: -1;

        }

        .signature .ttd {
            position: absolute;
            left: 100%;
            transform: translateX(-50%);
            bottom: 143px;
            height: 149px;
            z-index: -1;
            width: 530px;


        }

        .signature .name {
            font-weight: bold;
            text-decoration: underline;
            margin-top: 80px;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table td {
            padding: 5px;
            vertical-align: top;
        }

        table tr td:first-child {
            width: 150px;
        }
    </style>
</head>

<body>

    <table class="header" style="width: 100%;">
        <tr>
            <td class="logo" style="width: 100px;">
                <img src="{{ public_path('logodesa.png') }}" alt="Logo Desa" style="max-width: 100%; height: auto;">
            </td>
            <td class="header-text">
                <h2>PEMERINTAH KABUPATEN KUNINGAN</h2>
                <h3>KECAMATAN LEBAKWANGI</h3>
                <h3>DESA MANCAGAR</h3>
                <p>Jln. Raya Desa Mancagar No. 179 Tlp: 08979668950 / 085723911114</p>
                <p style="text-align: right;">Kode Pos 45574</p>
            </td>
        </tr>
    </table>

    <div class="content">
        <h3 style="text-align: center;">SURAT KETERANGAN DOMISILI</h3>
        <p style="text-align: center;">Nomor:
            510/{{ $surat__KeteranganUsaha->no_surat }}/I/{{ date('Y', strtotime($surat->created_at)) }}
        </p>
        </p>

        <p>Yang bertandatangan di bawah ini Kepala Desa Mancagar Kecamatan Lebakwangi Kabupaten Kuningan dengan ini
            menerangkan bahwa:</p>

        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>: {{ $surat__KeteranganDomisili->nama }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: {{ $surat__KeteranganDomisili->jenis_kelamin }}</td>
            </tr>
            <tr>
                <td>Tempat / Tgl. Lahir</td>
                <td>: {{ $surat__KeteranganDomisili->tempat_lahir }},
                    {{ \Carbon\Carbon::parse($surat__KeteranganDomisili['tanggal_lahir'])->locale('id')->isoFormat('D MMMM Y') }}
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>: Islam</td>
            </tr>
            <tr>
                <td>Status Perkawinan</td>
                <td>: {{ $surat__KeteranganDomisili->status_penduduk }}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>: {{ $surat__KeteranganDomisili->pekerjaan }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: Dusun {{ $surat__KeteranganDomisili->dusun }} RT. {{ $surat__KeteranganDomisili->rt }} RW.
                    {{ $surat__KeteranganDomisili->rw }} Desa Mancagar Kecamatan Lebakwangi Kabupaten Kuningan</td>
            </tr>
        </table>

        <p>Bahwa nama tersebut di atas adalah benar warga desa kami yang berdomisili dan tercatat dalam buku induk desa
            kami.</p>
        <p>Berhubung maksud yang bersangkutan diminta agar yang berwenang memberikan bantuan dan fasilitasnya.</p>
        <p>Demikian surat keterangan ini dibuat untuk dipergunakan seperlunya.</p>
    </div>

    <div class="signature">
        <p>Mancagar, {{ \Carbon\Carbon::parse($surat__KeteranganDomisili['created_at'])->isoFormat('D MMMM Y') }}</p>
        <p>KEPALA DESA MANCAGAR</p>
        <img src="{{public_path('storage/' . $surat__KeteranganDomisili->ttd)}}" alt="tanda tangan" class="ttd">
        <p class="name">{{ $surat__KeteranganDomisili->nama_ttd}}</p>
    </div>
</body>

</html>
