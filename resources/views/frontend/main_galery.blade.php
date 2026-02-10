@extends('constra_template.master')

@section('title')
    Main Gallery
@endsection

@section('content')
<div id="maingalery" class="gallery">
    <div class="container">
        <h3 class="orange-text">Gallery</h3>
        <div class="gallery-container">
            @foreach ($galery as $galerys)
                <div class="gallery-item">
                    <a href="{{ asset('storage/' . $galerys->gambar) }}" target="_blank">
                    <img src="{{ asset('storage/' . $galerys->gambar) }}" class="gallery-image" alt="Gallery Image">

                </div>
            @endforeach
        </div>
    </div>
</div>


@endsection
