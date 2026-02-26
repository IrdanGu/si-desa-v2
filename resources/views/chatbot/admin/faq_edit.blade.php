@extends('adminlte.master')

@section('title', 'Edit FAQ')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit FAQ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('chatbot.faq.index') }}">Chatbot FAQ</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Form Edit FAQ</h3>
                        </div>
                        <form action="{{ route('chatbot.faq.update', $faq->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="category">Kategori</label>
                                    <select name="category" id="category" class="form-control @error('category') is-invalid @enderror" required>
                                        <option value="">Pilih Kategori</option>
                                        <option value="umum" {{ old('category', $faq->category) == 'umum' ? 'selected' : '' }}>Umum</option>
                                        <option value="layanan" {{ old('category', $faq->category) == 'layanan' ? 'selected' : '' }}>Layanan</option>
                                        <option value="produk" {{ old('category', $faq->category) == 'produk' ? 'selected' : '' }}>Produk</option>
                                        <option value="berita" {{ old('category', $faq->category) == 'berita' ? 'selected' : '' }}>Berita</option>
                                    </select>
                                    @error('category')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="question">Pertanyaan</label>
                                    <input type="text" name="question" id="question" class="form-control @error('question') is-invalid @enderror" value="{{ old('question', $faq->question) }}" required>
                                    @error('question')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="answer">Jawaban</label>
                                    <textarea name="answer" id="answer" rows="5" class="form-control @error('answer') is-invalid @enderror" required>{{ old('answer', $faq->answer) }}</textarea>
                                    @error('answer')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <small class="form-text text-muted">Gunakan **teks** untuk bold, dan [link](url) untuk hyperlink.</small>
                                </div>

                                <div class="form-group">
                                    <label for="keywords">Keywords (pisahkan dengan koma)</label>
                                    <input type="text" name="keywords" id="keywords" class="form-control @error('keywords') is-invalid @enderror" value="{{ old('keywords', $faq->keywords ? implode(', ', $faq->keywords) : '') }}">
                                    @error('keywords')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <small class="form-text text-muted">Kata kunci untuk trigger jawaban ini.</small>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="is_active" id="is_active" class="custom-control-input" value="1" {{ old('is_active', $faq->is_active) ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="is_active">Aktif</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('chatbot.faq.index') }}" class="btn btn-default">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
