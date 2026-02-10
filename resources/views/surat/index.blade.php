@extends('adminlte.master')
@section('title')
    Surat Keterangan Usaha
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title"> Surat Keterangan Tidak Mampu</h3>
    </div>
    {{-- <div class="card-header">
        <a class="btn btn-primary" href="{{route('suratcreate')}}">Buat Surat</a>
    </div> --}}
    <div class="card-header">
      <form action="">
        <div class="row">
              <div class="col-md-6">
                <input value="{{Request::get('keyword')}}" name="keyword" class="form-control"type="text" placeholder="Masukan NIK untuk pencarian.....">
              </div>
              <div class="col-md-4 ml-4 ">
                <input {{Request::get('status') == 'Approve' ? 'checked' : ''}} class="form-check-input mt-3" type="radio" name="status" value="Approve" id="Approve">
                  <label class="ml-1 " for="Approve">Approve</label>
                <input {{Request::get('status') == 'Cancel' ? 'checked' : ''}} class="form-check-input ml-4 mt-3 " type="radio" name="status" value="Cancel" id="Cancel">
                  <label style="margin-top:10px" class="ml-5 " for="Cancel">Cancel</label>
                <button  type="submit" class="btn btn-primary ml-4 mb-1 "> <i class="fas fa-search"></i> Cari</button>
              </div>
        </div>
      </form>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="table-product" class="table table-bordered table-hover ">
        <thead class="table-secondary">
          <tr>
            <th>No Surat</th>
            <th>NIK</th>
            <th>KK</th>
            <th>Nama</th>
            <th>Jenis Surat</th>
            <th>Permohonan</th>
            <th>No Handphone </th>
            <th>Status</th>
            <th>Pembuat surat</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @php
            $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII")
        @endphp
        @foreach ($surat as $surats )
          <tr>
          {{-- <td>@if($surats->status == "Approve") @endif</td> --}}
          <td>141/{{$surats->no_surat}}/XII/{{ date('Y', strtotime($surats->created_at)) }}</td>
          <td>{{$surats->nik}}</td>
          <td>{{$surats->no_kk}}</td>
          <td>{{$surats->nama}}</td>
          <td>{{$surats->pilihsurat}}</td>
          <td>{{$surats->permohonan}}</td>
          <td>
            <a href="https://wa.me/{{$surats->no_hp}}" target="_blank" class="btn btn-success">
                {{$surats->no_hp}}
            </a>
        </td>
          <td> @if($surats->status == "Approve")
            <span class="badge badge-success">{{$surats->status}}
            @else
            <span class="badge bg-danger text-white">{{$surats->status}}</span>
            </span>
            @endif</td>
          <td>@if ($surats->status == "Approve")
              {{$surats->user->level}}
              @else
              {{$surats->nama}}
              @endif
          </td>
          <td>
          @if ($surats->status == "Approve")
          <a  href="{{route('suratedit',$surats->id)}}"><button type="submit"  class="btn btn-info"><i class="fas fa-edit"></i> Edit</button> </a>
          <form  action="{{route('suratdelete',$surats->id)}}" method="post" class="form-check-inline">
            @csrf
            @method('DELETE')
            <button onclick="return confirm('Yakin Hapus Data Ini?')" class="btn  btn-danger" type="submit "><i class="fas fa-trash"></i> Hapus</button>
          </form>
          @endif

          @if ($surats->status == "Cancel")
          <form  action="{{route(('surattupdate'),$surats->id)}}" method="POST" class="form-check-inline">
            @csrf
            @method('PUT')
            <button onclick="return confirm('Yakin Approve Surat Ini?')" class="btn btn-primary" type="submit "><i class="fas fa-cancel"></i> Approve</button>
          </form>
          @endif
          @if ($surats->status == "Approve")
          <a  href="{{route('suratcetak',$surats->id)}}"><button type="submit"  class="btn btn-primary"><i class="fas fa-print"></i>  Cetak</button> </a>
          @endif
          </td>
          </tr>

          <!-- Modal for KTP -->
          <div class="modal fade" id="ktpModal{{$surats->id}}" tabindex="-1" role="dialog" aria-labelledby="ktpModalLabel{{$surats->id}}" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="ktpModalLabel{{$surats->id}}">Foto KTP</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="{{asset('storage/' . $surats->foto_ktp)}}" class="img-fluid">
                </div>
              </div>
            </div>
          </div>

          <!-- Modal for KK -->
          <div class="modal fade" id="kkModal{{$surats->id}}" tabindex="-1" role="dialog" aria-labelledby="kkModalLabel{{$surats->id}}" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="kkModalLabel{{$surats->id}}">Foto KK</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="{{asset('storage/' . $surats->foto_kk)}}" class="img-fluid">
                </div>
              </div>
            </div>
          </div>

        @endforeach
        </tbody>
      </table>
    </div>
    <div class="d-flex justify-content-center">
        {{ $surat->links('pagination::bootstrap-4') }}
    </div>
</div>

@endsection

