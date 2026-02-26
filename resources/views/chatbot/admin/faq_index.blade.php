@extends('adminlte.master')

@section('title', 'Chatbot FAQ')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chatbot FAQ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Chatbot FAQ</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ session('success') }}
                </div>
            @endif

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar FAQ Chatbot</h3>
                            <div class="card-tools">
                                <a href="{{ route('chatbot.faq.create') }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-plus"></i> Tambah FAQ
                                </a>
                                <a href="{{ route('chatbot.analytics') }}" class="btn btn-info btn-sm">
                                    <i class="fas fa-chart-bar"></i> Analytics
                                </a>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Kategori</th>
                                        <th>Pertanyaan</th>
                                        <th>Status</th>
                                        <th>Dibuat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($faqs as $faq)
                                    <tr>
                                        <td>{{ $faq->id }}</td>
                                        <td>
                                            <span class="badge badge-{{ $faq->category == 'umum' ? 'primary' : ($faq->category == 'layanan' ? 'success' : ($faq->category == 'produk' ? 'warning' : 'info')) }}">
                                                {{ ucfirst($faq->category) }}
                                            </span>
                                        </td>
                                        <td>{{ Str::limit($faq->question, 50) }}</td>
                                        <td>
                                            @if($faq->is_active)
                                                <span class="badge badge-success">Aktif</span>
                                            @else
                                                <span class="badge badge-secondary">Nonaktif</span>
                                            @endif
                                        </td>
                                        <td>{{ $faq->created_at->format('d M Y') }}</td>
                                        <td>
                                            <a href="{{ route('chatbot.faq.edit', $faq->id) }}" class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('chatbot.faq.destroy', $faq->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus FAQ ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Belum ada FAQ. <a href="{{ route('chatbot.faq.create') }}">Tambah sekarang</a></td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
