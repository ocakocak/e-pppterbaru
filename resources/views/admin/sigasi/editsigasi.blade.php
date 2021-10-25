@extends('layouts.backendadmin')

@section('content')
<div class="card" style="border-top-width: 0.2cm; border-top-color: #6a381f">
<a style="color:#6a381f" class="ml-3 pl-1 mt-3" href="{{ route('datasigasiprestasi') }}">
        <i class="fas fa-arrow-circle-left"></i></i> Kembali
    </a> 
   <div class="card-header">
        <h4>
            <button data-toggle="modal" data-target="#tambahPersonil" style="color: white;" class="btn btn-polda">
                <i class="fas fa-plus-circle"></i> &nbsp; Tambah Data Personel
            </button>
        </h4>
        <br>
    </div>
    <div class="card-body p-0">
        <form action="{{ route('updatedatasigasi',$data_sigasi->id_sigasi) }}" method="post"
            enctype="multipart/form-data">
            <div class="card-body">
                @csrf
                @method('patch')
                <p style="color: #99582a; font-size:25px; font-weight:bold" class="text-center">Ubah Prestasi</p>

                <!-- DATA PERSONEL -->
                <p style="color:#6e0d25; font-weight:bold; font-size:20px">Data Personel</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">{{__('Nama Personel')}}</label>
                                <select class="form-control" id="nama" name="nama">
                                    @if($data_sigasi->id_personil !== null)
                                    <option value="{{$data_sigasi->id_personil}}">{{$data_sigasi->personil->nama}}
                                    </option>
                                    @foreach ($data_personil as $pr)
                                    <option value="{{ $pr->id_personil }}">{{ $pr->nama }}</option>
                                    @endforeach
                                    @else
                                    @foreach ($data_personil as $pr)
                                    <option value="{{ $pr->id_personil }}">{{ $pr->nama }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <!-- PRESTASI -->
                <p style="color:#6e0d25; font-weight:bold; font-size:20px">Ubah Prestasi</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Uraian Prestasi</label>
                                <input name="nama_prestasi" value="{{$data_sigasi->nama_prestasi}}" type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer text-right">
                <button class="btn btn-polda mr-1" style="color:white"type="submit"><i class="fas fa-save"></i></button>
                <button class="btn btn-danger" type="reset"><i class="fas fa-eraser"></i></button>
            </div>
        </form>
    </div>
</div>

<!-- MODAL TAMBAH DATA Personel -->

<div class="modal fade" id="tambahPersonil" tabindex="-1" aria-labelledby="tambahPersonilLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahPersonilLabel">Tambah Data Personel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('tambahdatapersonil') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mr-3 ml-3">
                        <label style="font-size: 15px;">Nama Personel</label>
                        <input name="nama" type="text" class="form-control">
                    </div>
                    <div class="form-group row mr-3 ml-3">
                        <label style="font-size: 15px;">NRP/NIP</label>
                        <input name="nrpnip" type="text" class="form-control">
                    </div>
                    <div class="form-group row mr-3 ml-3">
                        <label style="font-size: 15px;">Pangkat</label>
                        <select class="form-control" id="pangkat" name="pangkat">
                            <option disabled selected value="">-Pilih Pangkat-</option>
                            @foreach ($data_pangkat as $p)
                            <option value="{{ $p->id_pangkat }}">{{ $p->pangkats }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row mr-3 ml-3">
                        <label style="font-size: 15px;">Jabatan</label>
                        <input name="jabatan" type="text" class="form-control">
                    </div>
                    <!-- <div class="form-group row mr-3 ml-3">
                            <label style="font-size: 15px;">Kesatuan</label>
                            <input type="text" id="search" name="search" class="form-control" placeholder="Search">
                        </div> -->
                    @if(auth()->user()->id==1)
                    <div class="form-group row mr-3 ml-3">
                        <label style="font-size: 15px;">Kesatuan</label>
                        <select class="form-control" id="kesatuan" name="kesatuan">
                            @foreach ($data_kesatuan as $k)
                            <option value="{{ $k->id_kesatuan }}">{{ $k->kesatuans }}</option>
                            @endforeach
                        </select>
                    </div>
                    @else
                    <input name="kesatuan" type="hidden" value="{{ auth()->user()->id_kesatuan }}" class="form-control">
                    @endif
                    <button class="btn btn-polda mr-1" style="color: white;" type="submit"><i
                            class="fas fa-save"></i></button>
                    <button class="btn btn-danger" type="reset"><i class="fas fa-eraser"></i></button>

                </form>
            </div>

        </div>
    </div>

    @endsection
