<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JenisDokumenController extends Controller
{
    public function index()
    {
        $data = DB::table('jenis_dokumen')->get();
        return view('staff.jenis-dokumen', compact('data'));
    }

    // Pegawai
    public function tambah_jenis_dokumen()
    {
        return view('staff.tambah.tambah-jenis-dokumen');
    }

    public function save_tambah_jenis_dokumen(Request $request)
    {
        try {
            DB::table('jenis_dokumen')
                ->insert([
                    "kode" => $request->kode,
                    "jenis_dokumen" => $request->jenis_dokumen,
                    "keterangan" => $request->keterangan,
                    "tanggal_buat" => $request->tanggal_buat,
                ]);
            return redirect()->back()->with(["status" => "berhasil"]);
        } catch (\Exception $e) {
            return $e;
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }

    public function ubah_jenis_dokumen($id)
    {
        try {
            $data = DB::table('jenis_dokumen')
                ->where('id_jenis_dokumen', $id)
                ->first();
            return view('staff.edit.edit-jenis-dokumen', compact('data'));
        } catch (\Exception $th) {
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }

    public function update_jenis_dokumen(Request $request)
    {
        try {
            DB::table('jenis_dokumen')
                ->where('id_jenis_dokumen', $request->id_jenis_dokumen)
                ->update(
                    [
                        "kode" => $request->kode,
                        "jenis_dokumen" => $request->jenis_dokumen,
                        "keterangan" => $request->keterangan,
                        "tanggal_buat" => $request->tanggal_buat,
                    ]
                );
            return redirect()->back()->with(["status" => "berhasil"]);
        } catch (\Exception $th) {
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }

    public function hapus_jenis_dokumen($id)
    {
        try {
            DB::table('jenis_dokumen')
                ->where('id_jenis_dokumen', $id)
                ->delete();
            return redirect()->back()->with(["status" => "berhasil"]);
        } catch (\Exception $e) {
            return $e;
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }
}
