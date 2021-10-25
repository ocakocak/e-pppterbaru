@extends('layouts.backendadmin')

@section('content')
<div class="card card-primary">
<a style="color:#6a381f" class="ml-3 pl-1 mt-3" href="{{ route('datapengguna') }}">
        <i class="fas fa-arrow-circle-left"></i></i> Kembali
    </a>
    <div class="card-header">
        <h4 style="color:#6a381f">Formulir Tambah User</h4>
    </div>
    <div class="card-body p-0">
        <form action="{{ route('tambahdatapengguna') }}" method="post" enctype="multipart/form-data">
            <div class="card-body">
                @csrf
                <div class="row">
                    <div class="col-md-12 row">
                        <div class="col-md-6 form-group">
                            <label>Satker</label>
                            <div class="row ml-1" style="height:40px">
                                <select class="select" id="id_satker" name="id_satker" required>
                                    <div>
<option value="" style="color: grey;" disabled selected>-Pilih Satker-</option>
                                        @if ($data_satker != null)
                                        @foreach ($data_satker as $djk)

                                        <option value="{{$djk->id_satker}}">{{$djk->satkers}}</option>
                                        @endforeach
                                        @endif
                                    </div>
                                </select>
                            </div>
                        </div>
                    </div>
                        @if(auth()->user()->id_aktor==1)
                        <div class="col-md-4 form-group">
                            <label>Kesatuan</label>
                            <div class="row ml-1" style="height:40px">
                                <select class="select" id="id_kesatuan" name="id_kesatuan" required>
                                    <div>
<option value="" style="color: grey;" disabled selected>-Pilih Kesatuan-</option>
                                        @if ($data_kesatuan != null)
                                        @foreach ($data_kesatuan as $djs)

                                        <option value="{{$djs->id_kesatuan}}">{{$djs->kesatuans}}</option>
                                        @endforeach
                                        @endif
                                    </div>
                                </select>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="col-md-4 form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="col-md-4 form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                </div>
            </div>
    <div class="card-footer text-right">
        <button class="btn btn-polda mr-1" style="color:white" type="submit"><i class="fas fa-save"></i></button>
        <button class="btn btn-danger" type="reset"><i class="fas fa-eraser"></i></button>
    </div>
    </form>
</div>
</div>
@endsection
