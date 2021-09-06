@extends('layouts.master')
@section('title', 'Staff Panel - Halaman Dashboard')


@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <h4>Edit Dokumen</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Dokumen</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Dokumen</h4>
                    </div>
                    <div class="card-body">
                        @if (Session::has('status'))
                            @if (Session::get('status') == 'berhasil')
                            <button class="btn btn-success mb-3"
                                style="width: 100%; border-radius: 10px; margin-bottom: 20px">Data Berhasil Ditambahkan</button>
                            @else
                            <button class="btn btn-danger mb-3"
                                style="width: 100%; border-radius: 10px; margin-bottom: 20px">Data Gagal Ditambahkan</button>
                            @endif
                        @endif
                        <div class="basic-form">
                            <form action="{{route('update_dokumen')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id_dokumen" value="{{$data->id_dokumen}}">
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea value="{{$data->keterangan}}" type="text" name="keterangan" class="form-control" placeholder="..." name="" id="" cols="30"
                                        rows="10">{{$data->keterangan}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Upload</label>
                                    <input value="{{$data->tanggal_upload}}" type="date" name="tanggal_upload" class="form-control input-rounded" placeholder="2021-06-15">
                                </div>
                                <div class="form-group">
                                    <label>File Surat</label>
                                    <input type="file" name="file_dokumen" class="form-control input-rounded" placeholder="...">
                                    <input type="hidden" name="file_dokumen_ada" value="{{$data->nama_dokumen}}">
                                    <small>Lihat File <a href="{{url('files/dokumen/')}}/{{$data->nama_dokumen}}">{{$data->nama_dokumen}}</a></small>
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
