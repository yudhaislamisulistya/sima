@extends('layouts.master')
@section('title', 'Staff Panel - Halaman Dashboard')


@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <h4>Ubah Pegawai</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Ubah Pegawai</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ubah Pegawai</h4>
                    </div>
                    <div class="card-body">
                        @if (Session::has('status'))
                            @if (Session::get('status') == 'berhasil')
                            <button class="btn btn-success mb-3"
                                style="width: 100%; border-radius: 10px; margin-bottom: 20px">Data Berhasil Diubah</button>
                            @else
                            <button class="btn btn-danger mb-3"
                                style="width: 100%; border-radius: 10px; margin-bottom: 20px">Data Gagal Diubah</button>
                            @endif
                        @endif
                        <div class="basic-form">
                            <form action="{{route('update_pegawai')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id_data_pegawai" value="{{$data->id_data_pegawai}}">
                                <div class="form-group">
                                    <label>NIK</label>
                                    <input type="text" value="{{$data->nik}}" name="nik" class="form-control input-rounded" placeholder="7200......">
                                </div>
                                <div class="form-group">
                                    <label>NIP</label>
                                    <input type="text" value="{{$data->nip}}" name="nip" class="form-control input-rounded" placeholder="7200......">
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" value="{{$data->nama}}" name="nama" class="form-control input-rounded" placeholder="Apriyadi Aries">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" value="{{$data->alamat}}" name="alamat" class="form-control input-rounded" placeholder="Jl. Saddang">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control input-rounded">
                                        <option value="{{$data->jenis_kelamin}}">{{$data->jenis_kelamin}}</option>
                                        <option value="" disabled>---------------</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kontak</label>
                                    <input value="{{$data->kontak}}" type="text" name="kontak" class="form-control input-rounded" placeholder="085344020323">
                                </div>
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <select name="jabatan" class="form-control input-rounded">
                                        <option value="{{$data->jabatan}}">{{$data->jabatan}}</option>
                                        <option value="" disabled>---------------</option>
                                        @foreach (Helper::get_jabatan() as $key => $value)
                                            <option value="{{$value->nama_jabatan}}">{{$value->nama_jabatan}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea value="{{$data->keterangan}}" type="text" name="keterangan" class="form-control" placeholder="..." name="" id="" cols="30"
                                        rows="10">{{$data->keterangan}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control input-rounded">
                                        <option value="{{$data->status}}">{{$data->status}}</option>
                                        <option value="" disabled>---------------</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Masuk</label>
                                    <input value="{{$data->tanggal_masuk}}" type="date" name="tanggal_masuk" class="form-control input-rounded" placeholder="2021-09-23">
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
