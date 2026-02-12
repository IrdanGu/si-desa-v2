@extends('constra_template.master')

@section('title')
    Katalog Produk
@endsection

@push('styles')
    <style>
        .product-hero {
            background: linear-gradient(135deg, #123456 0%, #1f6a8f 60%, #d96c06 100%);
            color: #fff;
            padding: 36px 0;
            margin-bottom: 28px;
        }

        .product-filter-box {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            padding: 18px;
            margin-top: -44px;
            margin-bottom: 24px;
            position: relative;
            z-index: 2;
        }

        .product-card {
            border: 0;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
            transition: transform .2s ease, box-shadow .2s ease;
        }

        .product-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.14);
        }

        .product-image-wrap {
            position: relative;
            height: 220px;
            background: #f4f7f9;
        }

        .product-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-badges {
            position: absolute;
            top: 10px;
            left: 10px;
            display: flex;
            gap: 6px;
        }

        .product-badge {
            font-size: 11px;
            font-weight: 700;
            border-radius: 999px;
            padding: 4px 10px;
            color: #fff;
            text-transform: uppercase;
        }

        .badge-featured {
            background: #d96c06;
        }

        .badge-stock-ok {
            background: #2f9e44;
        }

        .badge-stock-empty {
            background: #c92a2a;
        }

        .product-price {
            color: #d96c06;
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .product-actions .btn {
            margin-bottom: 6px;
        }

        .empty-state {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
            padding: 26px;
            text-align: center;
        }
    </style>
@endpush

@section('content')
    <section class="product-hero">
        <div class="container">
            <h2 style="margin: 0; font-weight: 700;">Katalog Produk Desa</h2>
            <p style="margin-top: 8px; margin-bottom: 0; opacity: .9;">Pilih produk, cek detail, lalu langsung chat WhatsApp.</p>
        </div>
    </section>

    <div class="container" style="padding-bottom: 40px;">
        <div class="product-filter-box">
            <form method="GET">
                <div class="row">
                    <div class="col-md-5" style="margin-bottom: 8px;">
                        <input type="text" name="q" class="form-control" placeholder="Cari produk..." value="{{ $search }}">
                    </div>
                    <div class="col-md-4" style="margin-bottom: 8px;">
                        <select name="kategori" class="form-control">
                            <option value="">Semua Kategori</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->slug }}" {{ $selectedCategory === $category->slug ? 'selected' : '' }}>
                                    {{ $category->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fa fa-search"></i> Filter Produk
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="row">
            @forelse ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card product-card">
                        <div class="product-image-wrap">
                            @if ($product->primaryImage)
                                <img src="{{ asset('storage/' . $product->primaryImage->path) }}" class="product-image" alt="{{ $product->nama }}">
                            @else
                                <img src="{{ asset('storage/gambar/logoman.png') }}" class="product-image" alt="{{ $product->nama }}">
                            @endif
                            <div class="product-badges">
                                @if ($product->is_featured)
                                    <span class="product-badge badge-featured">Unggulan</span>
                                @endif
                                @if ($product->stok > 0)
                                    <span class="product-badge badge-stock-ok">Stok {{ $product->stok }}</span>
                                @else
                                    <span class="product-badge badge-stock-empty">Stok Habis</span>
                                @endif
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: 700; min-height: 40px;">{{ $product->nama }}</h5>
                            <div class="product-price">
                                {{ $product->harga ? 'Rp ' . number_format($product->harga, 0, ',', '.') : 'Hubungi admin' }}
                            </div>
                            <p style="min-height: 42px; color: #555;">
                                {{ \Illuminate\Support\Str::limit(strip_tags((string) $product->deskripsi), 75) ?: 'Produk UMKM/Desa siap dipesan via WhatsApp.' }}
                            </p>

                            <div class="product-actions">
                                <a href="{{ route('produk.show', $product->slug) }}" class="btn btn-default btn-sm">
                                    <i class="fa fa-eye"></i> Lihat Detail
                                </a>
                                <a href="{{ $product->whatsappUrl() }}" target="_blank" class="btn btn-success btn-sm">
                                    <i class="fa fa-whatsapp"></i> Tanya via WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="empty-state">
                        <h4 style="margin-top: 0;">Produk belum tersedia</h4>
                        <p style="margin-bottom: 0;">Silakan kembali lagi, produk akan ditampilkan setelah dipublikasikan.</p>
                    </div>
                </div>
            @endforelse
        </div>

        <div class="d-flex justify-content-center">
            {{ $products->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
