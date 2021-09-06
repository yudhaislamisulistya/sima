<?php

use App\Http\Controllers\DokumenController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\CurriculumVitae;
use App\Http\Controllers\DaftarArsipController;
use App\Http\Controllers\DaftarInstansiLokasiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\JenisDokumenController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Route::prefix('staff')->group(function () {
    Route::get('/dashboard', function () {
        return view('staff.dashboard');
    });

    // Manajemen Data Surat Masuk dan Keluar
    Route::get('surat-masuk-keluar', [SuratController::class, 'index'])->name('get_surat_masuk_keluar');

    Route::get('tambah-surat-masuk', [SuratController::class, 'tambah_surat_masuk'])->name('get_tambah_surat_masuk');
    Route::get('surat-masuk/lihat/{id}', [SuratController::class, 'ubah_surat_masuk'])->name('edit_surat_masuk');
    Route::post('surat-masuk/update', [SuratController::class, 'update_surat_masuk'])->name('update_surat_masuk');
    Route::get('surat-masuk/hapus/{id}', [SuratController::class, 'hapus_surat_masuk'])->name('delete_surat_masuk');
    Route::post('tambah-surat-masuk', [SuratController::class, 'save_tambah_surat_masuk'])->name('save_tambah_surat_masuk');

    Route::get('tambah-surat-keluar', [SuratController::class, 'tambah_surat_keluar'])->name('get_tambah_surat_keluar');
    Route::get('surat-keluar/lihat/{id}', [SuratController::class, 'ubah_surat_keluar'])->name('edit_surat_keluar');
    Route::post('surat-keluar/update', [SuratController::class, 'update_surat_keluar'])->name('update_surat_keluar');
    Route::get('surat-keluar/hapus/{id}', [SuratController::class, 'hapus_surat_keluar'])->name('delete_surat_keluar');
    Route::post('tambah-surat-keluar', [SuratController::class, 'save_tambah_surat_keluar'])->name('save_tambah_surat_keluar');
    // Akhir Manajemen Data Surat Masuk dan Keluar
    // Manajemen Data Dokumen
    Route::get('dokumen', [DokumenController::class, 'index'])->name('get_dokumen');

    Route::get('tambah-dokumen', [DokumenController::class, 'tambah_dokumen'])->name('get_tambah_dokumen');
    Route::get('dokumen/lihat/{id}', [DokumenController::class, 'ubah_dokumen'])->name('edit_dokumen');
    Route::post('dokumen/update', [DokumenController::class, 'update_dokumen'])->name('update_dokumen');
    Route::get('dokumen/hapus/{id}/{file_name}', [DokumenController::class, 'hapus_dokumen'])->name('delete_dokumen');
    Route::post('tambah-dokumen', [DokumenController::class, 'save_tambah_dokumen'])->name('save_tambah_dokumen');
    // Akhir Manajemen Data Dokumen
    // Manajemen Data Curicullum Vitae
    Route::get('curicullum-vitae', [CurriculumVitae::class, 'index'])->name('get_curicullum_vitae');

    Route::get('tambah-curicullum-vitae', [CurriculumVitae::class, 'tambah_curicullum_vitae'])->name('get_tambah_curicullum_vitae');
    Route::get('curicullum-vitae/lihat/{id}', [CurriculumVitae::class, 'ubah_curicullum_vitae'])->name('edit_curicullum_vitae');
    Route::post('curicullum-vitae/update', [CurriculumVitae::class, 'update_curicullum_vitae'])->name('update_curicullum_vitae');
    Route::get('curicullum-vitae/hapus/{id}/{file_name}', [CurriculumVitae::class, 'hapus_curicullum_vitae'])->name('delete_curicullum_vitae');
    Route::post('tambah-curicullum-vitae', [CurriculumVitae::class, 'save_tambah_curicullum_vitae'])->name('save_tambah_curicullum_vitae');
    // Akhir Manajemen Data Curicullum Vitae
    // Manajemen Data Pegawai
    Route::get('data-pegawai', [PegawaiController::class, 'index'])->name('get_pegawai');

    Route::get('tambah-pegawai', [PegawaiController::class, 'tambah_pegawai'])->name('get_tambah_pegawai');
    Route::get('pegawai/lihat/{id}', [PegawaiController::class, 'ubah_pegawai'])->name('edit_pegawai');
    Route::post('pegawai/update', [PegawaiController::class, 'update_pegawai'])->name('update_pegawai');
    Route::get('pegawai/hapus/{id}', [PegawaiController::class, 'hapus_pegawai'])->name('delete_pegawai');
    Route::post('tambah-pegawai', [PegawaiController::class, 'save_tambah_pegawai'])->name('save_tambah_pegawai');
    // Akhir Data Pegawai
    // Manajemen Data Jabatan
    Route::get('data-jabatan', [JabatanController::class, 'index'])->name('get_jabatan');

    Route::get('tambah-jabatan', [JabatanController::class, 'tambah_jabatan'])->name('get_tambah_jabatan');
    Route::get('jabatan/lihat/{id}', [JabatanController::class, 'ubah_jabatan'])->name('edit_jabatan');
    Route::post('jabatan/update', [JabatanController::class, 'update_jabatan'])->name('update_jabatan');
    Route::get('jabatan/hapus/{id}', [JabatanController::class, 'hapus_jabatan'])->name('delete_jabatan');
    Route::post('tambah-jabatan', [JabatanController::class, 'save_tambah_jabatan'])->name('save_tambah_jabatan');
    // AKhir Manajemen Data Jabatan
    // Manajemen Jenis Dokumen
    Route::get('jenis-dokumen', [JenisDokumenController::class, 'index'])->name('get_jenis_dokumen');

    Route::get('tambah-jenis-dokumen', [JenisDokumenController::class, 'tambah_jenis_dokumen'])->name('get_tambah_jenis_dokumen');
    Route::get('jenis-dokumen/lihat/{id}', [JenisDokumenController::class, 'ubah_jenis_dokumen'])->name('edit_jenis_dokumen');
    Route::post('jenis-dokumen/update', [JenisDokumenController::class, 'update_jenis_dokumen'])->name('update_jenis_dokumen');
    Route::get('jenis-dokumen/hapus/{id}', [JenisDokumenController::class, 'hapus_jenis_dokumen'])->name('delete_jenis_dokumen');
    Route::post('tambah-jenis-dokumen', [JenisDokumenController::class, 'save_tambah_jenis_dokumen'])->name('save_tambah_jenis_dokumen');
    // AKhir Manajemen Jenis Dokumen
    // Manajemen Data Daftar Instansi Lokasi
    Route::get('daftar-instansi-lokasi', [DaftarInstansiLokasiController::class, 'index'])->name('get_daftar_instansi_lokasi');

    Route::get('tambah-daftar-instansi-lokasi', [DaftarInstansiLokasiController::class, 'tambah_daftar_instansi_lokasi'])->name('get_tambah_daftar_instansi_lokasi');
    Route::get('daftar-instansi-lokasi/lihat/{id}', [DaftarInstansiLokasiController::class, 'ubah_daftar_instansi_lokasi'])->name('edit_daftar_instansi_lokasi');
    Route::post('daftar-instansi-lokasi/update', [DaftarInstansiLokasiController::class, 'update_daftar_instansi_lokasi'])->name('update_daftar_instansi_lokasi');
    Route::get('daftar-instansi-lokasi/hapus/{id}', [DaftarInstansiLokasiController::class, 'hapus_daftar_instansi_lokasi'])->name('delete_daftar_instansi_lokasi');
    Route::post('tambah-daftar-instansi-lokasi', [DaftarInstansiLokasiController::class, 'save_tambah_daftar_instansi_lokasi'])->name('save_tambah_daftar_instansi_lokasi');
    // Akhir Manajemen Data Daftar Instansi Lokasi
    // Manajemen Daftar Arsip
    Route::get('daftar-arsip', [DaftarArsipController::class, 'index'])->name('get_daftar_arsip');

    Route::get('tambah-daftar-arsip', [DaftarArsipController::class, 'tambah_daftar_arsip'])->name('get_tambah_daftar_arsip');
    Route::get('daftar-arsip/lihat/{id}', [DaftarArsipController::class, 'ubah_daftar_arsip'])->name('edit_daftar_arsip');
    Route::post('daftar-arsip/update', [DaftarArsipController::class, 'update_daftar_arsip'])->name('update_daftar_arsip');
    Route::get('daftar-arsip/hapus/{id}/{file_name}', [DaftarArsipController::class, 'hapus_daftar_arsip'])->name('delete_daftar_arsip');
    Route::post('tambah-daftar-arsip', [DaftarArsipController::class, 'save_tambah_daftar_arsip'])->name('save_tambah_daftar_arsip');
    // Akhir Manajemen Daftar Arsip
});
