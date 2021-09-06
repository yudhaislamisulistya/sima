@extends('layouts.master')
@section('title', 'Staff Panel - Halaman Dashboard')


@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <h4>Daftar Arsip</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Daftar Arsip</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Arsip</h4>
                        <a href="{{route('get_tambah_daftar_arsip')}}" class="btn btn-primary">Tambah Data</a>
                    </div>
                    <div class="card-body">
                        @if (Session::has('status'))
                            @if (Session::get('status') == 'berhasil')
                            <button class="btn btn-success mb-3"
                                style="width: 100%; border-radius: 10px; margin-bottom: 20px">Data Berhasil Dihapus</button>
                            @else
                            <button class="btn btn-danger mb-3"
                                style="width: 100%; border-radius: 10px; margin-bottom: 20px">Data Gagal Dihapus</button>
                            @endif
                        @endif
                            <table id="example" class="display">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Tahun</th>
                                        <th>Jenis</th>
                                        <th>NIK</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tempat</th>
                                        <th>Informasi Lainnya</th>
                                        <th>Lampiran</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $value)
                                        <tr>
                                            <td>{{$value->id_daftar_arsip}}</td>
                                            <td>{{$value->kode}}</td>
                                            <td>{{$value->tahun}}</td>
                                            <td>{{$value->jenis}}</td>
                                            <td>{{$value->nik}}</td>
                                            <td>{{$value->jenis_kelamin}}</td>
                                            <td>{{$value->tempat}}</td>
                                            <td>{{$value->informasi_lainnya}}</td>
                                            <td>{{$value->lampiran}}</td>
                                            <td>{{$value->keterangan}}</td>
                                            <td>
                                                <a href="{{url('files/lampiran')}}/{{$value->lampiran}}" class="btn btn-info">Lihat</a>
                                                <a href="{{route('edit_daftar_arsip', ['id' => $value->id_daftar_arsip])}}" class="btn btn-primary">Edit</a>
                                                <a href="{{route('delete_daftar_arsip', ['id' => $value->id_daftar_arsip, 'file_name' => $value->lampiran])}}" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
