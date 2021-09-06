@extends('layouts.master')
@section('title', 'Staff Panel - Halaman Dashboard')


@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <h4>Curricullum Vitae</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Curricullum Vitae</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Curricullum Vitae</h4>
                        <a href="{{route('get_tambah_curicullum_vitae')}}" class="btn btn-primary">Tambah Data</a>
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
                                        <th>Nama Penyetor</th>
                                        <th>Nama File</th>
                                        <th>Tanggal Kirim</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $value)
                                        <tr>
                                            <td>{{$value->id_curriculum_vitae}}</td>
                                            <td>{{$value->nama_penyetor}}</td>
                                            <td>{{$value->nama_file}}</td>
                                            <td>{{$value->tanggal_upload}}</td>
                                            <td>{{$value->keterangan}}</td>
                                            <td>
                                                <a href="{{url('files/curicullum_vitae')}}/{{$value->nama_file}}" class="btn btn-info">Lihat</a>
                                                <a href="{{route('edit_curicullum_vitae', ['id' => $value->id_curriculum_vitae])}}" class="btn btn-primary">Edit</a>
                                                <a href="{{route('delete_curicullum_vitae', ['id' => $value->id_curriculum_vitae, 'file_name' => $value->nama_file])}}" class="btn btn-danger">Hapus</a>
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
