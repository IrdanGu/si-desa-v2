<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Tidak Mampu</title>
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
            /* position: relative; */
            width: auto;
        }

        .signature .cap {
            position: absolute;
            left: 100%;
            transform: translateX(-50%);
            bottom: 143px;
            height: 149px;
            z-index: -1;
        }

        .signature .ttd {
            position: absolute;
            left: 100%;
            transform: translateX(-50%);
            bottom: 211px;
            height: 149px;
            width: auto;
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
            padding: 0px;
            vertical-align: top;
        }

        table tr td:first-child {
            width: 150px;
        }

        .bold-text {

            font-weight: bold;
        }
    </style>
</head>

<body>

    <table class="header" style="width: 105%;">
        <tr>
            <td class="logo">
                <img src="{{ public_path('logodesa.png') }}" alt="Logo Desa" style="max-width: 70%; height: auto;">
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
        <h3 style="text-align: center;">SURAT KETERANGAN TIDAK MAMPU</h3>

        <p style="text-align: center;">Nomor:
            141/{{ $surat->no_surat }}/XII/{{ date('Y', strtotime($surat->created_at)) }}
        </p>

        <p>Yang bertandatangan di bawah ini Kepala Desa Mancagar Kecamatan Lebakwangi Kabupaten Kuningan dengan ini
            menerangkan bahwa:</p>

        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>: <span>{{ $surat->nama }}</span></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: {{ $surat->jenis_kelamin }}</td>
            </tr>
            <tr>
                <td>Tempat / Tgl. Lahir</td>
                <td>: {{ $surat->tempat_lahir }},
                    {{ \Carbon\Carbon::parse($surat['tanggal_lahir'])->locale('id')->isoFormat('D MMMM Y') }}
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>: Islam</td>
            </tr>
            <tr>
                <td>Status Perkawinan</td>
                <td>: {{ $surat->status_penduduk }}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>: {{ $surat->pekerjaan }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: Dusun {{ $surat->dusun }} RT. {{ $surat->rt }} RW.
                    {{ $surat->rw }} Desa Mancagar Kecamatan Lebakwangi Kabupaten Kuningan</td>
            </tr>
        </table>

        <p>Nama tersebut di atas adalah benar warga desa kami yang termasuk dalam daftar kategori <span class="bold-text">Keluarga Miskin / Tidak Mampu</span></p>
        <p>Berhubung maksud yang bersangkutan diminta agar yang berwenang memberikan bantuan dan fasilitasnya.</p>
        <p>Demikian surat keterangan ini kami buat dengan sebenarnya dan untuk dipergunakan seperlunya.</p>
    </div>

    <div class="signature">
        <p>Mancagar, {{ \Carbon\Carbon::parse($surat['created_at'])->isoFormat('D MMMM Y') }}</p>
        <p>KEPALA DESA MANCAGAR</p>
        <img src="{{ public_path('storage/' . $surat->ttd) }}" alt="Tanda Tangan" class="ttd">
        <p class="name">ZAENAL SUPENA</p>
    </div>
</body>

</html>
