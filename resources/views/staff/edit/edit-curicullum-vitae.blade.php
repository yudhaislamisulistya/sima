@extends('layouts.master')
@section('title', 'Staff Panel - Halaman Dashboard')


@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <h4>Ubah CV</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Ubah CV</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ubah CV</h4>
                    </div>
                    <div class="card-body">
                        @if (Session::has('status'))
                            @if (Session::get('status') == 'berhasil')
                            <button class="btn btn-success mb-3"
                                style="width: 100%; border-radius: 10px; margin-bottom: 20px">Data Berhasil Diupdate</button>
                            @else
                            <button class="btn btn-danger mb-3"
                                style="width: 100%; border-radius: 10px; margin-bottom: 20px">Data Gagal Diupdate</button>
                            @endif
                        @endif
                        <div class="basic-form">
                            <form action="{{route('update_curicullum_vitae')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id_curriculum_vitae" value="{{$data->id_curriculum_vitae}}">
                                <div class="form-group">
                                    <label>Nama Penyetor</label>
                                    <input value="{{$data->nama_penyetor}}" type="text" name="nama_penyetor" class="form-control input-rounded" placeholder="Apriyadi Aries">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Upload</label>
                                    <input value="{{$data->tanggal_upload}}" type="date" name="tanggal_upload" class="form-control input-rounded" placeholder="2021-06-15">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea value="{{$data->keterangan}}" type="text" name="keterangan" class="form-control" placeholder="..." name="" id="" cols="30"
                                        rows="10">{{$data->keterangan}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>File CV</label>
                                    <input type="file" name="file_cv" class="form-control input-rounded" placeholder="...">
                                    <input type="hidden" name="file_cv_ada" value="{{$data->nama_file}}">
                                    <small>Lihat File <a href="{{url('files/curicullum_vitae/')}}/{{$data->nama_file}}">{{$data->nama_file}}</a></small>
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
