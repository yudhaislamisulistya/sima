@extends('layouts.master')
@section('title', 'Staff Panel - Halaman Dashboard')


@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <h4>Edit Daftar Arsip</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Daftar Arsip</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Daftar Arsip</h4>
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
                            <form action="{{route('update_daftar_arsip')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id_daftar_arsip" value="{{$data->id_daftar_arsip}}">
                                <div class="form-group">
                                    <label>Kode</label>
                                    <input type="text" name="nama" class="form-control input-rounded" placeholder="41435352">
                                </div>
                                <div class="form-group">
                                    <label>Tahun</label>
                                    <input type="text" name="tahun" class="form-control input-rounded" placeholder="2021">
                                </div>
                                <div class="form-group">
                                    <label>Jenis</label>
                                    <input type="text" name="jenis" class="form-control input-rounded" placeholder="Surat Masuk">
                                </div>
                                <div class="form-group">
                                    <label>NIK</label>
                                    <input type="text" name="nik" class="form-control input-rounded" placeholder="123146457969">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control input-rounded">
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tempat</label>
                                    <input type="text" name="tempat" class="form-control input-rounded" placeholder="Makassar">
                                </div>
                                <div class="form-group">
                                    <label>Informasi Lainnya</label>
                                    <input type="text" name="informasi_lainnya" class="form-control input-rounded" placeholder="...">
                                </div>
                                <div class="form-group">
                                    <label>File Lampiran</label>
                                    <input type="file" name="file_lampiran" class="form-control input-rounded" placeholder="...">
                                    <input type="hidden" name="file_lampiran_ada" value="{{$data->lampiran}}">
                                    <small>Lihat File <a href="{{url('files/lampiran/')}}/{{$data->lampiran}}">{{$data->lampiran}}</a></small>
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea type="text" name="keterangan" class="form-control" placeholder="..." name="" id="" cols="30"
                                        rows="10"></textarea>
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
