@extends('constra_template.master')

@section('content')
<div id="mainagenda" class="agenda">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="entry-title orange-text">AGENDA</h2>
            <H4 class="">{{$agenda->judul }}</H4>
        <div class="post-meta">
        <span class="post-author">
            <i class="fa fa-user"></i><a href="#">{{$agenda->user->level}}</a>
            </span>
            |
           <span class="post-meta-date"><i class="fa fa-calendar"></i>{{\Carbon\Carbon::parse($agenda['created_at'])->isoFormat('D MMMM, Y')}}</span>
        </div>

        <span class="text-agenda">Hari/tanggal:{{ \Carbon\Carbon::parse($agenda->tanggal)->locale('id')->isoFormat('dddd, D MMMM YYYY') }}</span><br>
        <span class="text-agenda">Jam         : {{$agenda->jam }}</span><br>
        <span class="text-agenda">Acara       : {{$agenda->acara }}</span><br>
        <span class="text-agenda">Tempat      : {{$agenda->tempat }}</span><br>
        <span class="text-agenda">deskripsi : {{ strip_tags($agenda->content) }}</span><br>

    </div>

        </div>


        </div>



    </div>

</div>


@endsection
