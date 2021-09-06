<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        $data = DB::table('data_pegawai')->get();
        return view('staff.data-pegawai', compact('data'));
    }

    // Pegawai
    public function tambah_pegawai()
    {
        return view('staff.tambah.tambah-pegawai');
    }

    public function save_tambah_pegawai(Request $request)
    {
        try {
            DB::table('data_pegawai')
                ->insert([
                    "nik" => $request->nik,
                    "nip" => $request->nip,
                    "nama" => $request->nama,
                    "alamat" => $request->alamat,
                    "jenis_kelamin" => $request->jenis_kelamin,
                    "kontak" => $request->kontak,
                    "jabatan" => $request->jabatan,
                    "keterangan" => $request->keterangan,
                    "status" => $request->status,
                    "tanggal_masuk" => $request->tanggal_masuk,
                ]);
            return redirect()->back()->with(["status" => "berhasil"]);
        } catch (\Exception $e) {
            return $e;
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }

    public function ubah_pegawai($id)
    {
        try {
            $data = DB::table('data_pegawai')
                ->where('id_data_pegawai', $id)
                ->first();
            return view('staff.edit.edit-pegawai', compact('data'));
        } catch (\Exception $th) {
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }

    public function update_pegawai(Request $request)
    {
        try {
            DB::table('data_pegawai')
                ->where('id_data_pegawai', $request->id_data_pegawai)
                ->update(
                    [
                        "nik" => $request->nik,
                        "nip" => $request->nip,
                        "nama" => $request->nama,
                        "alamat" => $request->alamat,
                        "jenis_kelamin" => $request->jenis_kelamin,
                        "kontak" => $request->kontak,
                        "jabatan" => $request->jabatan,
                        "keterangan" => $request->keterangan,
                        "status" => $request->status,
                        "tanggal_masuk" => $request->tanggal_masuk,
                    ]
                );
            return redirect()->back()->with(["status" => "berhasil"]);
        } catch (\Exception $th) {
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }

    public function hapus_pegawai($id)
    {
        try {
            DB::table('data_pegawai')
                ->where('id_data_pegawai', $id)
                ->delete();
            return redirect()->back()->with(["status" => "berhasil"]);
        } catch (\Exception $e) {
            return $e;
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }
}
