@extends('constra_template.master')

@section('content')
<div id="mainagenda" class="agenda">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="entry-title orange-text">AGENDA KARANGTARUNA</h2>
            <H4 class="">{{$agenda_karangtaruna->judul }}</H4>
        <div class="post-meta">
        <span class="post-author">
            <i class="fa fa-user"></i><a href="#">{{$agenda_karangtaruna->user->level}}</a>
            </span>
            |
           <span class="post-meta-date"><i class="fa fa-calendar"></i>{{\Carbon\Carbon::parse($agenda_karangtaruna['created_at'])->isoFormat('D MMMM, Y')}}</span>
        </div>

        <span class="text-agenda">Hari/tanggal : {{ \Carbon\Carbon::parse($agenda_karangtaruna->tanggal)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}</span><br>
        <span class="text-agenda">Jam         : {{$agenda_karangtaruna->jam }}</span><br>
        <span class="text-agenda">Acara       : {{$agenda_karangtaruna->acara }}</span><br>
        <span class="text-agenda">Tempat      : {{$agenda_karangtaruna->tempat }}</span><br>
        <span class="text-agenda">deskripsi : {{ strip_tags($agenda_karangtaruna->content) }}</span><br>

    </div>

        </div>


        </div>



    </div>

</div>


@endsection
