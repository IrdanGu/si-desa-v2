@extends('constra_template.master')

@section('title')
    {{ $product->nama }}
@endsection

@push('styles')
    <style>
        .product-detail-section {
            padding-top: 30px;
            padding-bottom: 64px;
        }

        .product-media {
            border-radius: 12px;
            overflow: hidden;
            background: #f5f7fa;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .product-main-image {
            width: 100%;
            height: 420px;
            object-fit: cover;
        }

        .product-thumb-grid {
            margin-top: 12px;
        }

        .product-thumb-btn {
            border: 2px solid transparent;
            border-radius: 8px;
            display: block;
            padding: 0;
            overflow: hidden;
            margin-bottom: 10px;
        }

        .product-thumb-btn.active {
            border-color: #d96c06;
        }

        .product-thumb-btn img {
            width: 100%;
            height: 86px;
            object-fit: cover;
        }

        .product-info-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            padding: 24px;
        }

        .product-title {
            margin-top: 0;
            margin-bottom: 12px;
            font-weight: 700;
            color: #163554;
        }

        .product-price {
            font-size: 28px;
            font-weight: 700;
            color: #d96c06;
            margin-bottom: 12px;
        }

        .product-meta {
            border-top: 1px solid #eceff3;
            border-bottom: 1px solid #eceff3;
            padding: 10px 0;
            margin-bottom: 16px;
        }

        .meta-row {
            margin-bottom: 6px;
        }

        .meta-row:last-child {
            margin-bottom: 0;
        }

        .related-title {
            font-weight: 700;
            color: #163554;
            margin-top: 28px;
            margin-bottom: 14px;
        }

        .related-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.08);
            background: #fff;
            margin-bottom: 16px;
        }

        .related-card img {
            width: 100%;
            height: 160px;
            object-fit: cover;
        }

        .related-card-body {
            padding: 12px;
        }

        .wa-sticky-mobile {
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 999;
            padding: 10px 12px;
            background: rgba(255, 255, 255, 0.98);
            box-shadow: 0 -6px 18px rgba(0, 0, 0, 0.12);
            display: none;
        }

        @media (max-width: 767px) {
            .product-main-image {
                height: 280px;
            }

            .wa-sticky-mobile {
                display: block;
            }
        }
    </style>
@endpush

@section('content')
    <div class="container product-detail-section">
        <div class="row">
            <div class="col-md-6 mb-3">
                @php
                    $mainImage = $product->images->first();
                    $mainImageUrl = $mainImage ? asset('storage/' . $mainImage->path) : asset('storage/gambar/logoman.png');
                @endphp
                <div class="product-media">
                    <img id="mainProductImage" src="{{ $mainImageUrl }}" class="product-main-image" alt="{{ $product->nama }}">
                </div>
                @if ($product->images->count() > 1)
                    <div class="row product-thumb-grid">
                        @foreach ($product->images as $idx => $image)
                            <div class="col-xs-3">
                                <button type="button" class="product-thumb-btn {{ $idx === 0 ? 'active' : '' }}"
                                    data-image="{{ asset('storage/' . $image->path) }}">
                                    <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $product->nama }}">
                                </button>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="col-md-6">
                <div class="product-info-card">
                    <h2 class="product-title">{{ $product->nama }}</h2>
                    <div class="product-price">
                        {{ $product->harga ? 'Rp ' . number_format($product->harga, 0, ',', '.') : 'Hubungi admin' }}
                    </div>

                    <div class="product-meta">
                        <div class="meta-row"><strong>Stok:</strong> {{ $product->stok > 0 ? $product->stok . ' tersedia' : 'Stok habis' }}</div>
                        <div class="meta-row"><strong>Status:</strong> {{ ucfirst($product->status) }}</div>
                        <div class="meta-row">
                            <strong>Kategori:</strong>
                            @forelse ($product->categories as $category)
                                <span class="label label-default">{{ $category->nama }}</span>
                            @empty
                                <span>-</span>
                            @endforelse
                        </div>
                    </div>

                    @if ($product->deskripsi)
                        <p>{{ $product->deskripsi }}</p>
                    @endif

                    <a href="{{ $whatsappUrl }}" target="_blank" class="btn btn-success">
                        <i class="fa fa-whatsapp"></i> Tanya via WhatsApp
                    </a>
                    <a href="{{ route('produk.index') }}" class="btn btn-default">
                        <i class="fa fa-arrow-left"></i> Kembali ke katalog
                    </a>
                </div>
            </div>
        </div>

        @if ($relatedProducts->count())
            <h3 class="related-title">Produk Lainnya</h3>
            <div class="row">
                @foreach ($relatedProducts as $relatedProduct)
                    <div class="col-md-3 col-sm-6">
                        <div class="related-card">
                            <img src="{{ $relatedProduct->primaryImage ? asset('storage/' . $relatedProduct->primaryImage->path) : asset('storage/gambar/logoman.png') }}"
                                alt="{{ $relatedProduct->nama }}">
                            <div class="related-card-body">
                                <strong>{{ \Illuminate\Support\Str::limit($relatedProduct->nama, 35) }}</strong>
                                <p style="margin: 6px 0 10px;">
                                    {{ $relatedProduct->harga ? 'Rp ' . number_format($relatedProduct->harga, 0, ',', '.') : 'Hubungi admin' }}
                                </p>
                                <a href="{{ route('produk.show', $relatedProduct->slug) }}" class="btn btn-default btn-xs">
                                    Lihat
                                </a>
                                <a href="{{ $relatedProduct->whatsappUrl() }}" target="_blank" class="btn btn-success btn-xs">
                                    WA
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="wa-sticky-mobile">
            <a href="{{ $whatsappUrl }}" target="_blank" class="btn btn-success btn-block">
                <i class="fa fa-whatsapp"></i> Tanya via WhatsApp
            </a>
        </div>
    </div>
@endsection

@push('script')
    <script>
        (function() {
            var mainImage = document.getElementById('mainProductImage');
            var thumbButtons = document.querySelectorAll('.product-thumb-btn');
            if (!mainImage || !thumbButtons.length) {
                return;
            }

            thumbButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    mainImage.src = button.getAttribute('data-image');
                    thumbButtons.forEach(function(item) {
                        item.classList.remove('active');
                    });
                    button.classList.add('active');
                });
            });
        })();
    </script>
@endpush
