<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DokumenController extends Controller
{
    public function index()
    {
        $data = DB::table('dokumen')->get();
        return view('staff.dokumen', compact('data'));
    }

    // Surat Masuk
    public function tambah_dokumen()
    {
        return view('staff.tambah.tambah-dokumen');
    }

    public function save_tambah_dokumen(Request $request)
    {
        try {
            $file = $request->file('file_dokumen');
            $file_name = "";
            $tipe_file = "";
            if ($file != null) {
                $tipe_file = $file->getClientOriginalExtension();
                $file_name = Str::random(10) . $file->getClientOriginalName();
                $file->move("files/dokumen", $file_name);
            }
            DB::table('dokumen')
                ->insert([
                    "nama_dokumen" => $file_name,
                    "tipe_file" => $tipe_file,
                    "keterangan" => $request->keterangan,
                    "tanggal_upload" => $request->tanggal_upload,
                ]);
            return redirect()->back()->with(["status" => "berhasil"]);
        } catch (\Exception $e) {
            return $e;
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }

    public function ubah_dokumen($id)
    {
        try {
            $data = DB::table('dokumen')
                ->where('id_dokumen', $id)
                ->first();
            return view('staff.edit.edit-dokumen', compact('data'));
        } catch (\Exception $th) {
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }

    public function update_dokumen(Request $request)
    {
        try {
            $file = $request->file('file_dokumen');
            $file_name = $request->file_dokumen_ada;
            $tipe_file = "";
            if ($file != null) {
                if ($file_name != "") {
                    unlink('files/dokumen'.'/'.$file_name);
                    $file_name = Str::random(10) . $file->getClientOriginalName();
                    $file->move("files/dokumen", $file_name);
                }else{
                    $file_name = $request->file_dokumen_ada;
                }
            }

            DB::table('dokumen')
                ->where('id_dokumen', $request->id_dokumen)
                ->update(
                    [
                        "nama_dokumen" => $file_name,
                        "tipe_file" => $tipe_file,
                        "keterangan" => $request->keterangan,
                        "tanggal_upload" => $request->tanggal_upload,
                    ]
                );
            return redirect()->back()->with(["status" => "berhasil"]);
        } catch (\Exception $th) {
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }

    public function hapus_dokumen($id, $file_name)
    {
        try {
            unlink('files/dokumen'.'/'.$file_name);
            DB::table('dokumen')
                ->where('id_dokumen', $id)
                ->delete();
            return redirect()->back()->with(["status" => "berhasil"]);
        } catch (\Exception $e) {
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }
}
