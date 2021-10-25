@extends('layouts.backendadmin')

@section('content')
                <div class="card card-primary">
<a style="color:#6a381f" class="ml-3 pl-1 mt-3" href="{{ route('datapersonil') }}">
                        <i class="fas fa-arrow-circle-left"></i></i> Kembali
                    </a>
                    <div class="card-header">
                        <h4 style="color:#6a381f">Formulir Tambah Data Personel</h4>
                    </div>
                    <div class="card-body p-0">
                        <form action="{{ route('tambahdatapersoniltabel') }}" method="post"
                            enctype="multipart/form-data">
                            <div class="card-body">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 row">
                                        <div class="col-md-6 form-group">
                                            <label>Nama</label>
                                            <input type="text" name="nama" class="form-control" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>NRP/NIP</label>
                                            <input type="text" name="nrpnip" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="col-md-4 form-group">
                                            <label>Pangkat</label>
                                            <select class="form-control" id="pangkat" name="pangkat" required>
                                                <option disabled selected value="">-Pilih Pangkat-</option>
                                                @foreach ($data_pangkat as $p)
                                                <option value="{{ $p->id_pangkat }}">{{ $p->pangkats }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label>Jabatan</label>
                                            <input type="text" name="jabatan" class="form-control" required>
                                        </div>
                                        @if(auth()->user()->id_aktor==1)
                                        <div class="col-md-4 form-group">
                                            <label>Kesatuan</label>
                                            <select class="form-control" id="kesatuan" name="kesatuan" required>
						<option disabled selected value="">-Pilih Kesatuan-</option>
                                                @foreach ($data_kesatuan as $k)
                                                <option value="{{ $k->id_kesatuan }}">{{ $k->kesatuans }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @endif
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
@endsection
