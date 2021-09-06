<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DaftarArsipController extends Controller
{
    public function index()
    {
        $data = DB::table('daftar_arsip')->get();
        return view('staff.daftar-arsip', compact('data'));
    }

    // Pegawai
    public function tambah_daftar_arsip()
    {
        return view('staff.tambah.tambah-daftar-arsip');
    }

    public function save_tambah_daftar_arsip(Request $request)
    {
        try {
            $file = $request->file('file_lampiran');
            $file_name = "";
            if ($file != null) {
                $file_name = Str::random(10) . $file->getClientOriginalName();
                $file->move("files/lampiran", $file_name);
            }
            DB::table('daftar_arsip')
                ->insert([
                    "kode" => $request->kode,
                    "tahun" => $request->tahun,
                    "jenis" => $request->jenis,
                    "nik" => $request->nik,
                    "jenis_kelamin" => $request->jenis_kelamin,
                    "tempat" => $request->tempat,
                    "informasi_lainnya" => $request->informasi_lainnya,
                    "lampiran" => $file_name,
                    "keterangan" => $request->keterangan,
                ]);
            return redirect()->back()->with(["status" => "berhasil"]);
        } catch (\Exception $e) {
            return $e;
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }

    public function ubah_daftar_arsip($id)
    {
        try {
            $data = DB::table('daftar_arsip')
                ->where('id_daftar_arsip', $id)
                ->first();
            return view('staff.edit.edit-daftar-arsip', compact('data'));
        } catch (\Exception $th) {
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }

    public function update_daftar_arsip(Request $request)
    {
        try {
            $file = $request->file('file_lampiran');
            $file_name = $request->file_lampiran_ada;
            if ($file != null) {
                if ($file_name != "") {
                    unlink('files/lampiran'.'/'.$file_name);
                    $file->move("files/lampiran", $file_name);
                }else{
                    $file_name = $request->file_lampiran_ada;
                }
            }

            DB::table('daftar_arsip')
                ->where('id_daftar_arsip', $request->id_daftar_arsip)
                ->update(
                    [
                        "kode" => $request->kode,
                        "tahun" => $request->tahun,
                        "jenis" => $request->jenis,
                        "nik" => $request->nik,
                        "jenis_kelamin" => $request->jenis_kelamin,
                        "tempat" => $request->tempat,
                        "informasi_lainnya" => $request->informasi_lainnya,
                        "lampiran" => $file_name,
                        "keterangan" => $request->keterangan,
                    ]
                );
            return redirect()->back()->with(["status" => "berhasil"]);
        } catch (\Exception $th) {
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }

    public function hapus_daftar_arsip($id, $file_name)
    {
        try {
            unlink('files/lampiran'.'/'.$file_name);
            DB::table('daftar_arsip')
                ->where('id_daftar_arsip', $id)
                ->delete();
            return redirect()->back()->with(["status" => "berhasil"]);
        } catch (\Exception $e) {
            return $e;
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }
}
