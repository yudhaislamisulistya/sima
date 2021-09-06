@extends('layouts.master')
@section('title', 'Staff Panel - Halaman Dashboard')


@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <h4>Ubah Jabatan</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Ubah Jabatan</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ubah Jabatan</h4>
                    </div>
                    <div class="card-body">
                        @if (Session::has('status'))
                            @if (Session::get('status') == 'berhasil')
                            <button class="btn btn-success mb-3"
                                style="width: 100%; border-radius: 10px; margin-bottom: 20px">Data Berhasil Diperbaharui</button>
                            @else
                            <button class="btn btn-danger mb-3"
                                style="width: 100%; border-radius: 10px; margin-bottom: 20px">Data Gagal Diperbaharui</button>
                            @endif
                        @endif
                        <div class="basic-form">
                            <form action="{{route('update_jabatan')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id_data_jabatan" value="{{$data->id_data_jabatan}}">
                                <div class="form-group">
                                    <label>Nama Jabatan</label>
                                    <input type="text" value="{{$data->nama_jabatan}}" name="nama_jabatan" class="form-control input-rounded" placeholder="Direksi">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Buat</label>
                                    <input type="text" value="{{$data->tanggal_buat}}" name="tanggal_buat" class="form-control input-rounded" placeholder="2021-09-23">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea type="text" value="{{$data->keterangan}}" name="keterangan" class="form-control" placeholder="..." name="" id="" cols="30"
                                        rows="10">{{$data->keterangan}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Proses</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
    Content body end
***********************************-->

@endsection
