@extends('layouts.master')
@section('title', 'Staff Panel - Halaman Dashboard')


@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <h4>Tambah Surat Masuk</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Surat Masuk</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Surat Masuk</h4>
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
                            <form action="{{route('update_surat_masuk')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id_surat_masuk" value="{{$data->id_surat_masuk}}">
                                <div class="form-group">
                                    <label>Nomor Agenda</label>
                                    <input type="text" value="{{$data->no_agenda}}" name="no_agenda" class="form-control input-rounded" placeholder="001/AB/CDE/2020">
                                </div>
                                <div class="form-group">
                                    <label>Nomor Surat</label>
                                    <input type="text" value="{{$data->no_surat}}" name="no_surat" class="form-control input-rounded" placeholder="2939/LP/X/2020">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Surat</label>
                                    <input type="date" value="{{$data->tgl_surat}}" name="tgl_surat" class="form-control input-rounded" placeholder="2021-06-15">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Terima</label>
                                    <input type="date" value="{{$data->tgl_terima}}" name="tgl_terima" class="form-control input-rounded" placeholder="2021-06-15">
                                </div>
                                <div class="form-group">
                                    <label>Sumber Surat</label>
                                    <input type="text" value="{{$data->sumber_surat}}" name="sumber_surat" class="form-control input-rounded" placeholder="...">
                                </div>
                                <div class="form-group">
                                    <label>Perihal</label>
                                    <input type="text" value="{{$data->perihal}}" name="perihal" class="form-control input-rounded" placeholder="...">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea value="{{$data->keterangan}}" name="keterangan" class="form-control" placeholder="..." name="" id="" cols="30"
                                        rows="10">{{$data->keterangan}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>File Surat</label>
                                    <input type="file" name="file_surat" class="form-control input-rounded" placeholder="...">
                                    <input type="hidden" name="file_surat_ada" value="{{$data->file_surat}}">
                                    <small>Lihat File <a href="{{url('files/surat_masuk/')}}/{{$data->file_surat}}">{{$data->file_surat}}</a></small>
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
