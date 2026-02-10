@extends('adminlte.master')
@section('title')
    Detail Penduduk
@endsection
@section('content')
<div class="card ">
    <div class="card-header">
        <h3 class="card-title">Detail Penduduk</h3>
    </div>

    <div class="card-body">
    <pre>
    <b><p>No KK           : </b> {{$penduduk->no_kk}}</p>
    <b><p>Alamat </b>         :  <b>Dusun : </b>{{$penduduk->dusun}} | <b> RT :</b> {{$penduduk->rt}} | <b>RW :</b> {{$penduduk->rw}} | <b>Desa :</b> {{$penduduk->desa}} | <b>Kecamatan : </b> <a>Garawangi</a> </p>
    <b><p>Nama Lengkap    : </b> {{$penduduk->nama_lengkap}}</p>
    <b><p>Tempat Lahir    : </b> {{$penduduk->tempat_lahir}}</p>
    <b><p>Tanggal Lahir   : </b> {{date('d-m-Y',strtotime($penduduk->tanggal_lahir))}}</p>
    <b><p>Jenis Kelamin   : </b> {{$penduduk->jenis_kelamin}}</p>
    <b><p>Pendidikan      : </b> {{$penduduk->pendidikan}}</p>
    <b><p>Pekerjaan       : </b> {{$penduduk->pekerjaan}}</p>
    <b><p>Status          : </b> {{$penduduk->status}}</p>
    </div>
</pre>

</div>
@endsection
