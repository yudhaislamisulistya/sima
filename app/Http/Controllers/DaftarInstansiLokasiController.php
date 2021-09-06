<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaftarInstansiLokasiController extends Controller
{
    public function index()
    {
        $data = DB::table('daftar_instansi_lokasi')->get();
        return view('staff.daftar-instansi-lokasi', compact('data'));
    }

    // Pegawai
    public function tambah_daftar_instansi_lokasi()
    {
        return view('staff.tambah.tambah-daftar-instansi-lokasi');
    }

    public function save_tambah_daftar_instansi_lokasi(Request $request)
    {
        try {
            DB::table('daftar_instansi_lokasi')
                ->insert([
                    "nama" => $request->nama,
                    "alamat" => $request->alamat,
                    "keterangan" => $request->keterangan,
                    "tanggal_buat" => $request->tanggal_buat,
                ]);
            return redirect()->back()->with(["status" => "berhasil"]);
        } catch (\Exception $e) {
            return $e;
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }

    public function ubah_daftar_instansi_lokasi($id)
    {
        try {
            $data = DB::table('daftar_instansi_lokasi')
                ->where('id_daftar_instansi_lokasi', $id)
                ->first();
            return view('staff.edit.edit-daftar-instansi-lokasi', compact('data'));
        } catch (\Exception $th) {
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }

    public function update_daftar_instansi_lokasi(Request $request)
    {
        try {
            DB::table('daftar_instansi_lokasi')
                ->where('id_daftar_instansi_lokasi', $request->id_daftar_instansi_lokasi)
                ->update(
                    [
                        "nama" => $request->nama,
                        "alamat" => $request->alamat,
                        "keterangan" => $request->keterangan,
                        "tanggal_buat" => $request->tanggal_buat,
                    ]
                );
            return redirect()->back()->with(["status" => "berhasil"]);
        } catch (\Exception $th) {
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }

    public function hapus_daftar_instansi_lokasi($id)
    {
        try {
            DB::table('daftar_instansi_lokasi')
                ->where('id_daftar_instansi_lokasi', $id)
                ->delete();
            return redirect()->back()->with(["status" => "berhasil"]);
        } catch (\Exception $e) {
            return $e;
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }
}
