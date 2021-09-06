<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JabatanController extends Controller
{
    public function index()
    {
        $data = DB::table('data_jabatan')->get();
        return view('staff.data-jabatan', compact('data'));
    }

    // Pegawai
    public function tambah_jabatan()
    {
        return view('staff.tambah.tambah-jabatan');
    }

    public function save_tambah_jabatan(Request $request)
    {
        try {
            DB::table('data_jabatan')
                ->insert([
                    "nama_jabatan" => $request->nama_jabatan,
                    "keterangan" => $request->keterangan,
                    "tanggal_buat" => $request->tanggal_buat,
                ]);
            return redirect()->back()->with(["status" => "berhasil"]);
        } catch (\Exception $e) {
            return $e;
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }

    public function ubah_jabatan($id)
    {
        try {
            $data = DB::table('data_jabatan')
                ->where('id_data_jabatan', $id)
                ->first();
            return view('staff.edit.edit-jabatan', compact('data'));
        } catch (\Exception $th) {
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }

    public function update_jabatan(Request $request)
    {
        try {
            DB::table('data_jabatan')
                ->where('id_data_jabatan', $request->id_data_jabatan)
                ->update(
                    [
                        "nama_jabatan" => $request->nama_jabatan,
                        "keterangan" => $request->keterangan,
                        "tanggal_buat" => $request->tanggal_buat,
                    ]
                );
            return redirect()->back()->with(["status" => "berhasil"]);
        } catch (\Exception $th) {
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }

    public function hapus_jabatan($id)
    {
        try {
            DB::table('data_jabatan')
                ->where('id_data_jabatan', $id)
                ->delete();
            return redirect()->back()->with(["status" => "berhasil"]);
        } catch (\Exception $e) {
            return $e;
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }
}
