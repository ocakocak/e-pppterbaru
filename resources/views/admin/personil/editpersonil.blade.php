@extends('layouts.backendadmin')

@section('content')
                <div class="card card-primary">
<a style="color:#6a381f" class="ml-3 pl-1 mt-3" href="{{ route('datapersonil') }}">
                        <i class="fas fa-arrow-circle-left"></i></i> Kembali
                    </a>
                    <div class="card-header">
                        <h4 style="color:#6a381f;">Form Ubah Data Personel</h4>
                    </div>
                    <div class="card-body p-0">
                        <form action="{{ route('updatepersonil', $data_personil->id_personil) }}" method="post"
                            enctype="multipart/form-data">
                            <div class="card-body">
                                @csrf
                                @method('patch')
                                <div class="row">
                                    <div class="col-md-12 row">
                                        <div class="col-md-6 form-group">
                                            <label>Nama</label>
                                            <input type="text" value="{{$data_personil->nama}}" name="nama"
                                                class="form-control" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>NRP/NIP</label>
                                            <input type="text" value="{{$data_personil->nrpnip}}" name="nrpnip"
                                                class="form-control"required>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Pangkat</label>
                                                <div class="row ml-1" style="height:40px">
                                                    <select class="select" id="id_pangkat" name="id_pangkat" required>
                                                        <div>
                                                            <option value="{{$data_personil->id_pangkat}}">
                                                                {{$data_personil->pangkat->pangkats}}</option>
                                                            @if ($data_pangkat != null)
                                                            @foreach ($data_pangkat as $djs)

                                                            <option value="{{$djs->id_pangkat}}">{{$djs->pangkats}}
                                                            </option>
                                                            @endforeach
                                                            @endif
                                                        </div>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="id_kesatuan" value="{{$data_personil->id_kesatuan}}">
                                        <div class="col-md-4 form-group">
                                            <label>Jabatan</label>
                                            <input type="text" value="{{$data_personil->jabatan}}" name="jabatan"
                                                class="form-control"required>
                                        </div>
                                        @if(auth()->user()->id_aktor==1)
                                        <div class="col-md-4 form-group">
                                            <label>Kesatuan</label>
                                            <div class="row ml-1" style="height:40px">
                                                <select class="select" id="id_kesatuan" name="id_kesatuan" required>
                                                    <div>
                                                        <option value="{{$data_personil->id_kesatuan}}">
                                                            {{$data_personil->kesatuan->kesatuans}}</option>
                                                        @if ($data_kesatuan != null)
                                                        @foreach ($data_kesatuan as $djs)

                                                        <option value="{{$djs->id_kesatuan}}">{{$djs->kesatuans}}
                                                        </option>
                                                        @endforeach
                                                        @endif
                                                    </div>
                                                </select>
                                            </div>
                                        </div>
                                        @endif
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
