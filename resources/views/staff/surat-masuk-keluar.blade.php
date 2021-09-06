@extends('layouts.master')
@section('title', 'Staff Panel - Halaman Dashboard')


@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <h4>Surat Masuk Keluar</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Surat Masuk Keluar</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Surat Masuk</h4>
                        <a href="{{route('get_tambah_surat_masuk')}}" class="btn btn-primary">Tambah Data</a>
                    </div>
                    <div class="card-body">
                        @if (Session::has('status_surat_masuk'))
                            @if (Session::get('status_surat_masuk') == 'berhasil')
                            <button class="btn btn-success mb-3"
                                style="width: 100%; border-radius: 10px; margin-bottom: 20px">Data Berhasil Dihapus</button>
                            @else
                            <button class="btn btn-danger mb-3"
                                style="width: 100%; border-radius: 10px; margin-bottom: 20px">Data Gagal Dihapus</button>
                            @endif
                        @endif
                        <div class="">
                            <table id="example" class="display">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Agenda</th>
                                        <th>Nomor Surat</th>
                                        <th>Tgl Surat</th>
                                        <th>Tgl Terima</th>
                                        <th>Sumber</th>
                                        <th>Perihal</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_surat_masuk as $key => $value)
                                    <tr>
                                        <td>{{$value->id_surat_masuk}}</td>
                                        <td>{{$value->no_agenda}}</td>
                                        <td>{{$value->no_surat}}</td>
                                        <td>{{$value->tgl_surat}}</td>
                                        <td>{{$value->tgl_terima}}</td>
                                        <td>{{$value->sumber_surat}}</td>
                                        <td>{{$value->perihal}}</td>
                                        <td>{{$value->keterangan}}</td>
                                        <td>
                                            @if ($value->file_surat != '')
                                                <a href="{{url('files/surat_masuk')}}/{{$value->file_surat}}" class="btn btn-info">Lihat</a>
                                            @else
                                                <span class="badge badge-secondary">File Tidak Ada</span>
                                            @endif
                                            <a href="{{route('edit_surat_masuk', ['id' => $value->id_surat_masuk])}}" class="btn btn-primary">Edit</a>
                                            <a href="{{route('delete_surat_masuk', ['id' => $value->id_surat_masuk])}}" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Surat Keluar</h4>
                        <a href="{{route('get_tambah_surat_keluar')}}" class="btn btn-primary">Tambah Data</a>
                    </div>
                    <div class="card-body">
                        @if (Session::has('status_surat_keluar'))
                            @if (Session::get('status_surat_keluar') == 'berhasil')
                            <button class="btn btn-success mb-3"
                                style="width: 100%; border-radius: 10px; margin-bottom: 20px">Data Berhasil Dihapus</button>
                            @else
                            <button class="btn btn-danger mb-3"
                                style="width: 100%; border-radius: 10px; margin-bottom: 20px">Data Gagal Dihapus</button>
                            @endif
                        @endif
                        <div class="">
                            <table id="example2" class="display">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Surat</th>
                                        <th>Tgl Surat</th>
                                        <th>Pengelola</th>
                                        <th>Tujua </th>
                                        <th>Perihal</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_surat_keluar as $key => $value)
                                    <tr>
                                        <td>{{$value->id_surat_keluar}}</td>
                                        <td>{{$value->no_surat}}</td>
                                        <td>{{$value->tgl_surat}}</td>
                                        <td>{{$value->pengola}}</td>
                                        <td>{{$value->tujuan_surat}}</td>
                                        <td>{{$value->perihal}}</td>
                                        <td>{{$value->keterangan}}</td>
                                        <td>
                                            <a href="{{url('files/surat_keluar')}}/{{$value->file_surat}}" class="btn btn-info">Lihat</a>
                                            <a href="{{route('edit_surat_keluar', ['id' => $value->id_surat_keluar])}}" class="btn btn-primary">Edit</a>
                                            <a href="{{route('delete_surat_keluar', ['id' => $value->id_surat_keluar])}}" class="btn btn-danger">Hapus</a>
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
