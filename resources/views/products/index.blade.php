@extends('adminlte.master')
@section('title')
    Data Produk
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Produk</h3>
        </div>

        <div class="card-header d-flex justify-content-between align-items-center">
            <a class="btn btn-primary" href="{{ route('products.create') }}">Tambah Produk</a>
            <form action="" method="GET" class="d-flex">
                <input value="{{ Request::get('keyword') }}" name="keyword" class="form-control" type="text"
                    placeholder="Cari nama produk...">
            </form>
        </div>

        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered table-hover">
                <thead class="table-secondary">
                    <tr>
                        <th>No</th>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Status</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $no => $product)
                        <tr>
                            <td>{{ $products->firstItem() + $no }}</td>
                            <td>{{ $product->nama }}</td>
                            <td>{{ $product->harga ? 'Rp '.number_format($product->harga, 0, ',', '.') : '-' }}</td>
                            <td>{{ $product->stok }}</td>
                            <td>{{ ucfirst($product->status) }}</td>
                            <td>
                                @if ($product->primaryImage)
                                    <img src="{{ asset('storage/' . $product->primaryImage->path) }}" width="48px" alt="Produk">
                                @else
                                    -
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form style="margin-top: 4px;" action="{{ route('products.delete', $product->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Yakin hapus produk ini?')" class="btn btn-danger btn-sm"
                                        type="submit">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">Belum ada data produk.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $products->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection

