@extends('layouts.backendadmin')

@section('content')
<div class="card card-primary">
<a style="color:#6a381f" class="ml-3 pl-1 mt-3" href="{{ route('datapengguna') }}">
        <i class="fas fa-arrow-circle-left"></i></i> Kembali
    </a>
    <div class="card-header">
        <h4 style="color:#6a381f">Formulir Ubah User</h4>
    </div>
    <div class="card-body p-0">
        <form action="{{ route('updatepengguna',$data_pengguna->id) }}" method="post" enctype="multipart/form-data">
            <div class="card-body">
                @csrf
                @method('patch')
                <div class="row">
                    <div class="col-md-12 row">

                        <div class="col-md-4 form-group">
                            <label>Satker</label>
                            <div class="row ml-1" style="height:40px">
                                <select class="select" id="id_satker" name="id_satker" required>
                                    <div>
                                        <option value="{{$data_pengguna->id_satker}}">
                                            {{$data_pengguna->satker->satkers}}</option>

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
                                        <option value="{{$data_pengguna->id_kesatuan}}">
                                            {{$data_pengguna->kesatuan->kesatuans}}</option>

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
                    @else
                    <input type="hidden" name="id_kesatuan" value="{{$data_pengguna->id_kesatuan}}" required>
                    @endif
                    <div class="col-md-4 form-group">
                        <label>Username</label>
                        <input type="text" name="username" value="{{$data_pengguna->username}}" class="form-control" required>
                    </div>
                </div>
            <div class="card-footer text-right">
                <button class="btn btn-polda mr-1" style="color:white" type="submit"><i
                        class="fas fa-save"></i></button>
                <button class="btn btn-danger" type="reset"><i class="fas fa-eraser"></i></button>
            </div>
        </form>
    </div>
    <hr style="background-color:red">
    <div class="card-header">
        <h4 style="color:#6a381f">Formulir Ubah Password</h4>
    </div>
    <div class="card-body p-0">
        <form action="{{ route('updatepasswordpengguna', $data_pengguna->id) }}" method="post"
            enctype="multipart/form-data">
            <div class="card-body">
                @csrf
                @method('patch')
                <div class="row">
                    <!-- <center>
                    <img style="width:150px;float:center;"src="../assets/img/avatar/avatar-1.png" class="rounded-circle"><br>
</center> -->
                    <div class="col-md-12 row">

                        <input type="hidden" value="{{$data_pengguna->username}}" name="username" class="form-control">
                        <div class="col-md-4 form-group">
                            <label>Password Baru</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="col-md-4 form-group">
                            <label>Konfirmasi Password Baru</label>
                            <input type="password" name="konfirmasipassword" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-polda mr-1" style="color:white" type="submit"><i
                        class="fas fa-save"></i></button>
                <button class="btn btn-danger" type="reset"><i class="fas fa-eraser"></i></button>
            </div>
        </form>
    </div>
</div>
@endsection
