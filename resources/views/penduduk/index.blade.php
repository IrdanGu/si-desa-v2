@extends('adminlte.master')

@section('title')
    Data Penduduk
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Penduduk</h3>
    </div>
    <div class="card-header">
        <a class="btn btn-primary" href="{{ route('pendudukcreate') }}">Tambah Data</a>
        <a class="btn btn-primary" href="{{ route('pendudukexport') }}">Export Excel</a>
        {{-- <a class="btn btn-primary" href="{{ route('pendudukexportpdf') }}">Export PDF</a> --}}


        <!-- Button to trigger modal for import -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#importModal">
            Import
        </button>

        <!-- Modal for import form -->
        <div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="importModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="importModalLabel">Import Data Penduduk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('pendudukimport') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="file">Pilih File Excel</label>
                                <input type="file" name="file" class="form-control" id="file" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Import</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card-header">
        <form action="">
            <div class="row mt-1">
                <div class="col-md-7">
                    <input value="{{ Request::get('keyword') }}" name="keyword" class="form-control" type="text" placeholder="Masukan NIK atau KK untuk pencarian....."/>
                </div>
                <div class="col-md-4 ml-4">
                    <input {{ Request::get('status') == 'nik' ? 'checked' : '' }} class="form-check-input mt-3" type="radio" name="status" value="nik" id="nik">
                    <label class="ml-1" for="nik">NIK</label>
                    <input {{ Request::get('status') == 'no_kk' ? 'checked' : '' }} class="form-check-input ml-4 mt-3" type="radio" name="status" value="no_kk" id="no_kk">
                    <label style="margin-top:10px" class="ml-5" for="no_kk">KK</label>
                    <button type="submit" class="btn btn-primary ml-3 mb-1"><i class="fas fa-search"></i> Cari</button>
                </div>
            </div>
        </form>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead class="table-secondary">
                <tr>
                    <th>Nomor KK</th>
                    <th>NIK</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Hubungan</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal lahir</th>
                    <th>Status</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                    <th>Dusun</th>
                    <th>Rt</th>
                    <th>Rw</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penduduk as $penduduks)
                <tr>
                    <td>{{ $penduduks->no_kk }}</td>
                    <td>{{ $penduduks->nik }}</td>
                    <td>{{ $penduduks->nama_lengkap }}</td>
                    <td>{{ $penduduks->jenis_kelamin }}</td>
                    <td>{{ $penduduks->hubungan }}</td>
                    <td>{{ $penduduks->tempat_lahir }}</td>
                    <td>{{ date('d-m-Y', strtotime($penduduks->tanggal_lahir)) }}</td>
                    <td>{{ $penduduks->status }}</td>
                    <td>{{ $penduduks->pendidikan }}</td>
                    <td>{{ $penduduks->pekerjaan }}</td>
                    <td>{{ $penduduks->dusun }}</td>
                    <td>{{ $penduduks->rt }}</td>
                    <td>{{ $penduduks->rw }}</td>
                    <td>
                        <a href="{{ route('pendudukedit', $penduduks->nik) }}"><button type="submit" class="btn btn-info"><i class="fas fa-edit"></i> Edit</button></a>
                        <a href="{{ route('pendudukshow', $penduduks->nik) }}"><button type="submit" class="btn btn-success"><i class="fas fa-eye"></i> Detail</button></a>
                        <form action="{{ route('pendudukdelete', $penduduks->nik) }}" method="post" class="form-check-inline">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin Hapus Data Ini?')" class="btn btn-danger" type="submit"><i class="fas fa-trash"></i> Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center">
        {{ $penduduk->links('pagination::bootstrap-4') }}
    </div>
</div>





@endsection



