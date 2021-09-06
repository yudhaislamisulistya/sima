@extends('layouts.master')
@section('title', 'Staff Panel - Halaman Dashboard')


@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <h4>Dokumen</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Dokumen</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Dokumen</h4>
                        <a href="{{route('get_tambah_dokumen')}}" class="btn btn-primary">Tambah Data</a>
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
                                        <th>Nama Dokumen</th>
                                        <th>Tipe File</th>
                                        <th>Keterangan</th>
                                        <th>Tanggal Upload</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $value)
                                        <tr>
                                            <td>{{$value->id_dokumen}}</td>
                                            <td>{{$value->nama_dokumen}}</td>
                                            <td>{{$value->tipe_file}}</td>
                                            <td>{{$value->keterangan}}</td>
                                            <td>{{$value->tanggal_upload}}</td>
                                            <td>
                                                <a href="{{url('files/dokumen')}}/{{$value->nama_dokumen}}" class="btn btn-info">Lihat</a>
                                                <a href="{{route('edit_dokumen', ['id' => $value->id_dokumen])}}" class="btn btn-primary">Edit</a>
                                                <a href="{{route('delete_dokumen', ['id' => $value->id_dokumen, 'file_name' => $value->nama_dokumen])}}" class="btn btn-danger">Hapus</a>
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
