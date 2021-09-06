@extends('layouts.master')
@section('title', 'Staff Panel - Halaman Dashboard')


@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <h4>Data Jabatan</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Jabatan</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Jabatan</h4>
                        <a href="{{route('get_tambah_pegawai')}}" class="btn btn-primary">Tambah Data</a>
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
                                        <th>NIP/NIK</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Kontak</th>
                                        <th>Jabatan</th>
                                        <th>Keterangan</th>
                                        <th>Status</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $value)
                                        <tr>
                                            <td>{{$value->id_data_pegawai}}</td>
                                            <td>{{$value->nip}}/{{$value->nik}}</td>
                                            <td>{{$value->nama}}</td>
                                            <td>{{$value->alamat}}</td>
                                            <td>{{$value->jenis_kelamin}}</td>
                                            <td>{{$value->kontak}}</td>
                                            <td>{{$value->jabatan}}</td>
                                            <td>{{$value->keterangan}}</td>
                                            <td>{{$value->status}}</td>
                                            <td>{{$value->tanggal_masuk}}</td>
                                            <td>
                                                <a href="{{route('edit_pegawai', ['id' => $value->id_data_pegawai])}}" class="btn btn-primary">Edit</a>
                                                <a href="{{route('delete_pegawai', ['id' => $value->id_data_pegawai])}}" class="btn btn-danger">Hapus</a>
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
