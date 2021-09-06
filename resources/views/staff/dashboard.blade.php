@extends('layouts.master')
@section('title', 'Staff Panel - Halaman Dashboard')


@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="form-head mb-4">
            <h2 class="text-black font-w600 mb-0">Dashboard</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="widget-stat card bg-green">
                            <div class="card-body  p-4">
                                <div class="media">
                                    <span class="mr-3">
                                        <i class="flaticon-381-calendar-1"></i>
                                    </span>
                                    <div class="media-body text-white text-right">
                                        <p class="mb-1">Surat Masuk/Keluar</p>
                                        <h3 class="text-white">{{Helper::get_total_surat_masuk_keluar()}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="widget-stat card bg-danger">
                            <div class="card-body  p-4">
                                <div class="media">
                                    <span class="mr-3">
                                        <i class="flaticon-381-user-7"></i>
                                    </span>
                                    <div class="media-body text-white text-right">
                                        <p class="mb-1">CV</p>
                                        <h3 class="text-white">{{Helper::get_total_cv()}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="widget-stat card bg-primary">
                            <div class="card-body  p-4">
                                <div class="media">
                                    <span class="mr-3">
                                        <i class="flaticon-381-heart"></i>
                                    </span>
                                    <div class="media-body text-white text-right">
                                        <p class="mb-1">Pegawai</p>
                                        <h3 class="text-white">{{Helper::get_data_pegawai()}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="widget-stat card bg-info">
                            <div class="card-body  p-4">
                                <div class="media">
                                    <span class="mr-3">
                                        <i class="flaticon-381-diamond"></i>
                                    </span>
                                    <div class="media-body text-white text-right">
                                        <p class="mb-1">Arsip</p>
                                        <h3 class="text-white">{{Helper::get_daftar_arsip()}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">Pegawai Terbaru</h4>
                            </div>
                            <div class="card-body pb-0">
                                <div class="widget-media">
                                    <ul class="timeline">
                                        @foreach (Helper::get_3_data_pegawai() as $key => $value)
                                        <li>
                                            <div class="timeline-panel mb-3">
                                                <div class="media mr-2 media-info">
                                                    KG
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-1">{{$value->nama}}</h5>
                                                    <small class="d-block">{{$value->tanggal_masuk}}</small>
                                                </div>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-primary light sharp"
                                                        data-toggle="dropdown">
                                                        <svg width="18px" height="18px" viewBox="0 0 24 24"
                                                            version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <circle fill="#000000" cx="5" cy="12" r="2" />
                                                                <circle fill="#000000" cx="12" cy="12" r="2" />
                                                                <circle fill="#000000" cx="19" cy="12" r="2" />
                                                            </g>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">Surat Terbaru</h4>
                            </div>
                            <div class="card-body pb-0">
                                <div class="widget-media">
                                    <ul class="timeline">
                                        @foreach (Helper::get_3_surat_masuk() as $key => $value)
                                            <li>
                                                <div class="timeline-panel mb-3">
                                                    <div class="media mr-2 media-info">
                                                        KG
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="mb-1">{{$value->no_surat}}</h5>
                                                        <small class="d-block">Surat Masuk - {{$value->tgl_terima}}</small>
                                                    </div>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-primary light sharp"
                                                            data-toggle="dropdown">
                                                            <svg width="18px" height="18px" viewBox="0 0 24 24"
                                                                version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <circle fill="#000000" cx="5" cy="12" r="2" />
                                                                    <circle fill="#000000" cx="12" cy="12" r="2" />
                                                                    <circle fill="#000000" cx="19" cy="12" r="2" />
                                                                </g>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
