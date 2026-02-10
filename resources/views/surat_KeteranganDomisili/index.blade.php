@extends('adminlte.master')
@section('title')
    Surat Keterangan Usaha
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title"> Surat Keterangan Domisili</h3>
    </div>

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
        @foreach ($surat__KeteranganDomisili as $surat_keterangandomisilis )
          <tr>
          {{-- <td>@if($surat_keterangandomisilis->status == "Approve") @endif</td> --}}
          <td>{{$surat_keterangandomisilis->no_surat}}</td>
          <td>{{$surat_keterangandomisilis->nik}}</td>
          <td>{{$surat_keterangandomisilis->no_kk}}</td>
          <td>{{$surat_keterangandomisilis->nama}}</td>
          <td>{{$surat_keterangandomisilis->pilihsurat}}</td>
          <td>{{$surat_keterangandomisilis->permohonan}}</td>
          {{-- <td>
            <a href="#" data-toggle="modal" data-target="#permohonanModal{{$surat_keterangandomisilis->id}}">
                {{ pathinfo($surat_keterangandomisilis->permohonan, PATHINFO_EXTENSION) === 'pdf' ? 'View PDF' : 'Download Document' }}
            </a>
        </td> --}}



        <td>
            <a href="https://wa.me/{{$surat_keterangandomisilis->no_hp}}" target="_blank" class="btn btn-success">
                {{$surat_keterangandomisilis->no_hp}}
            </a>
        </td>
          <td> @if($surat_keterangandomisilis->status == "Approve")
            <span class="badge badge-success">{{$surat_keterangandomisilis->status}}
            @else
            <span class="badge bg-danger text-white">{{$surat_keterangandomisilis->status}}</span>
            </span>
            @endif
        </td>

          <td>
            @if ($surat_keterangandomisilis->status == "Approve")
              {{$surat_keterangandomisilis->user->level}}
              @else
              {{$surat_keterangandomisilis->nama}}
              @endif
          </td>

          <td>
          @if ($surat_keterangandomisilis->status == "Approve")
          <a  href="{{route('suratedit',$surat_keterangandomisilis->id)}}"><button type="submit"  class="btn btn-info"><i class="fas fa-edit"></i> Edit</button> </a>
          <form  action="{{route('surat_keterangandomisilidelete',$surat_keterangandomisilis->id)}}" method="post" class="form-check-inline">
            @csrf
            @method('DELETE')
            <button onclick="return confirm('Yakin Hapus Data Ini?')" class="btn  btn-danger" type="submit "><i class="fas fa-trash"></i> Hapus</button>
          </form>
          @endif

          @if ($surat_keterangandomisilis->status == "Cancel")
          <form  action="{{route(('suratupdateSKD'),$surat_keterangandomisilis->id)}}" method="POST" class="form-check-inline">
            @csrf
            @method('PUT')
            <button onclick="return confirm('Yakin Approve Surat Ini?')" class="btn btn-primary" type="submit "><i class="fas fa-cancel"></i> Approve</button>
          </form>
          @endif
          @if ($surat_keterangandomisilis->status == "Approve")
          <a  href="{{route('surat_keterangandomisilicetak',$surat_keterangandomisilis->id)}}"><button type="submit"  class="btn btn-primary"><i class="fas fa-print"></i>  Cetak</button> </a>
          @endif
          </td>
          </tr>

          <!-- Modal for KTP -->
          <div class="modal fade" id="ktpModal{{$surat_keterangandomisilis->id}}" tabindex="-1" role="dialog" aria-labelledby="ktpModalLabel{{$surat_keterangandomisilis->id}}" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="ktpModalLabel{{$surat_keterangandomisilis->id}}">Foto KTP</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="{{asset('storage/' . $surat_keterangandomisilis->fotoktp_domisili)}}" class="img-fluid">
                </div>
              </div>
            </div>
          </div>

          <!-- Modal for KK -->
          <div class="modal fade" id="kkModal{{$surat_keterangandomisilis->id}}" tabindex="-1" role="dialog" aria-labelledby="kkModalLabel{{$surat_keterangandomisilis->id}}" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="kkModalLabel{{$surat_keterangandomisilis->id}}">Foto KK</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="{{asset('storage/' . $surat_keterangandomisilis->fotokk_domisili)}}" class="img-fluid">
                </div>
              </div>
            </div>
          </div>

          <!-- Modal -->
{{-- <div class="modal fade" id="permohonanModal{{$surat_keterangandomisilis->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Permohonan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if(pathinfo($surat_keterangandomisilis->permohonan, PATHINFO_EXTENSION) === 'pdf')
                    <embed src="{{ asset('storage/' . $surat_keterangandomisilis->permohonan) }}" type="application/pdf" width="100%" height="500px" />
                @else
                    <a href="{{ asset('storage/' . $surat_keterangandomisilis->permohonan) }}" download>Download Document</a>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> --}}

        @endforeach
        </tbody>
      </table>
    </div>
    <div class="d-flex justify-content-center">
        {{ $surat__KeteranganDomisili->links('pagination::bootstrap-4') }}
    </div>
</div>

@endsection

