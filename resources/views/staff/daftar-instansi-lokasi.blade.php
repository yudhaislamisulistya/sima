@extends('layouts.master')
@section('title', 'Staff Panel - Halaman Dashboard')


@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <h4>Daftar Instansi & Lokasi</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Daftar Instansi & Lokasi</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Instansi & Lokasi</h4>
                        <a href="{{route('get_tambah_daftar_instansi_lokasi')}}" class="btn btn-primary">Tambah Data</a>
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
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Keterangan</th>
                                        <th>Tanggal Buat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $value)
                                    <tr>
                                        <td>{{$value->id_daftar_instansi_lokasi}}</td>
                                        <td>{{$value->nama}}</td>
                                        <td>{{$value->alamat}}</td>
                                        <td>{{$value->keterangan}}</td>
                                        <td>{{$value->tanggal_buat}}</td>
                                        <td>
                                            <a target="_blank" href="https://www.google.com/maps/place/{{$value->alamat}}" class="btn btn-info">Visit</a>
                                            <a href="{{route('edit_daftar_instansi_lokasi', ['id' => $value->id_daftar_instansi_lokasi ])}}" class="btn btn-primary">Edit</a>
                                            <a href="{{route('delete_daftar_instansi_lokasi', ['id' => $value->id_daftar_instansi_lokasi ])}}" class="btn btn-danger">Hapus</a>
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
