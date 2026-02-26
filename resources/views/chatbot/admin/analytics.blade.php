@extends('adminlte.master')

@section('title', 'Chatbot Analytics')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chatbot Analytics</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Analytics</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $totalConversations }}</h3>
                            <p>Total Percakapan</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-comments"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $todayConversations }}</h3>
                            <p>Percakapan Hari Ini</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-comment-dots"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Intent Populer</h3>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>Intent</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($popularIntents as $intent)
                                    <tr>
                                        <td>{{ ucfirst(str_replace('_', ' ', $intent->intent_detected)) }}</td>
                                        <td>{{ $intent->count }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="2" class="text-center">Belum ada data</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Percakapan Terbaru</h3>
                        </div>
                        <div class="card-body p-0" style="max-height: 400px; overflow-y: auto;">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>Waktu</th>
                                        <th>User</th>
                                        <th>Intent</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($recentConversations as $conv)
                                    <tr>
                                        <td>{{ $conv->created_at->format('H:i') }}</td>
                                        <td>{{ $conv->user ? $conv->user->name : 'Guest' }}</td>
                                        <td><span class="badge badge-secondary">{{ $conv->intent_detected }}</span></td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="3" class="text-center">Belum ada percakapan</td>
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
