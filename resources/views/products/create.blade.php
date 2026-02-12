@extends('adminlte.master')
@section('title')
    Tambah Produk
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Produk</h3>
        </div>
        <form role="form" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama Produk</label>
                    <input type="text" name="nama" class="form-control {{ $errors->first('nama') ? 'is-invalid' : '' }}"
                        id="nama" value="{{ old('nama') }}">
                    <span class="error invalid-feedback">{{ $errors->first('nama') }}</span>
                </div>

                <div class="form-group">
                    <label for="slug">Slug (opsional)</label>
                    <input type="text" name="slug" class="form-control {{ $errors->first('slug') ? 'is-invalid' : '' }}"
                        id="slug" value="{{ old('slug') }}">
                    <span class="error invalid-feedback">{{ $errors->first('slug') }}</span>
                </div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" step="0.01"
                        class="form-control {{ $errors->first('harga') ? 'is-invalid' : '' }}" id="harga"
                        value="{{ old('harga') }}">
                    <span class="error invalid-feedback">{{ $errors->first('harga') }}</span>
                </div>

                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="number" name="stok" min="0"
                        class="form-control {{ $errors->first('stok') ? 'is-invalid' : '' }}" id="stok"
                        value="{{ old('stok', 0) }}">
                    <span class="error invalid-feedback">{{ $errors->first('stok') }}</span>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status"
                        class="form-control {{ $errors->first('status') ? 'is-invalid' : '' }}">
                        <option value="draft" {{ old('status') === 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="published" {{ old('status') === 'published' ? 'selected' : '' }}>Published</option>
                        <option value="archived" {{ old('status') === 'archived' ? 'selected' : '' }}>Archived</option>
                    </select>
                    <span class="error invalid-feedback">{{ $errors->first('status') }}</span>
                </div>

                <div class="form-group">
                    <label for="wa_phone_override">Nomor WA Override (opsional)</label>
                    <input type="text" name="wa_phone_override"
                        class="form-control {{ $errors->first('wa_phone_override') ? 'is-invalid' : '' }}"
                        id="wa_phone_override" value="{{ old('wa_phone_override') }}">
                    <span class="error invalid-feedback">{{ $errors->first('wa_phone_override') }}</span>
                </div>

                <div class="form-group">
                    <label>Kategori</label>
                    <div>
                        @forelse ($categories as $category)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="category_ids[]"
                                    value="{{ $category->id }}" id="category_{{ $category->id }}"
                                    {{ in_array($category->id, old('category_ids', [])) ? 'checked' : '' }}>
                                <label class="form-check-label" for="category_{{ $category->id }}">{{ $category->nama }}</label>
                            </div>
                        @empty
                            <p class="text-muted mb-0">Belum ada kategori aktif.</p>
                        @endforelse
                    </div>
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control {{ $errors->first('deskripsi') ? 'is-invalid' : '' }}" name="deskripsi" id="deskripsi"
                        rows="4">{{ old('deskripsi') }}</textarea>
                    <span class="error invalid-feedback">{{ $errors->first('deskripsi') }}</span>
                </div>

                <div class="form-group">
                    <label for="images">Gambar Produk (boleh lebih dari satu)</label>
                    <input type="file" class="form-control {{ $errors->first('images.*') ? 'is-invalid' : '' }}"
                        id="images" name="images[]" multiple>
                    <span class="error invalid-feedback">{{ $errors->first('images.*') }}</span>
                </div>

                <div class="form-check mb-2">
                    <input type="checkbox" class="form-check-input" id="is_featured" name="is_featured" value="1"
                        {{ old('is_featured') ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_featured">Tandai sebagai produk unggulan</label>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
@endsection

