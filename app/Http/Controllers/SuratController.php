<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_surat_masuk = DB::table('surat_masuk')->get();
        $data_surat_keluar = DB::table('surat_keluar')->get();
        return view('staff.surat-masuk-keluar', compact('data_surat_masuk', 'data_surat_keluar'));
    }

    // Surat Masuk
    public function tambah_surat_masuk()
    {
        return view('staff.tambah.tambah-surat-masuk');
    }

    public function save_tambah_surat_masuk(Request $request)
    {
        try {
            $file = $request->file('file_surat');
            $file_name = "";
            if ($file != null) {
                $file_name = Str::random(10) . $file->getClientOriginalName();
                $file->move("files/surat_masuk", $file_name);
            }
            DB::table('surat_masuk')
                ->insert([
                    "no_agenda" => $request->no_agenda,
                    "no_surat" => $request->no_surat,
                    "tgl_surat" => $request->tgl_surat,
                    "tgl_terima" => $request->tgl_terima,
                    "sumber_surat" => $request->sumber_surat,
                    "perihal" => $request->perihal,
                    "file_surat" => $file_name,
                    "keterangan" => $request->keterangan,
                ]);
            return redirect()->back()->with(["status" => "berhasil"]);
        } catch (\Exception $e) {
            return $e;
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }

    public function ubah_surat_masuk($id)
    {
        try {
            $data = DB::table('surat_masuk')
                ->where('id_surat_masuk', $id)
                ->first();
            return view('staff.edit.edit-surat-masuk', compact('data'));
        } catch (\Throwable $th) {
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }

    public function update_surat_masuk(Request $request)
    {
        try {
            $file = $request->file('file_surat');
            $file_name = $request->file_surat_ada;
            if ($file != null) {
                if ($file_name != "") {
                    unlink('files/surat_masuk'.'/'.$file_name);
                    $file_name = Str::random(10) . $file->getClientOriginalName();
                    $file->move("files/surat_masuk", $file_name);
                }else{
                    $file_name = $request->file_surat_ada;
                }
            }

            DB::table('surat_masuk')
                ->where('id_surat_masuk', $request->id_surat_masuk)
                ->update(
                    [
                        "no_agenda" => $request->no_agenda,
                        "no_surat" => $request->no_surat,
                        "tgl_surat" => $request->tgl_surat,
                        "tgl_terima" => $request->tgl_terima,
                        "sumber_surat" => $request->sumber_surat,
                        "perihal" => $request->perihal,
                        "file_surat" => $file_name,
                        "keterangan" => $request->keterangan,
                    ]
                );
            return redirect()->back()->with(["status" => "berhasil"]);
        } catch (\Exception $th) {
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }

    public function hapus_surat_masuk($id)
    {
        try {
            DB::table('surat_masuk')
                ->where('id_surat_masuk', $id)
                ->delete();
            return redirect()->back()->with(["status_surat_masuk" => "berhasil"]);
        } catch (\Exception $e) {
            return $e;
            return redirect()->back()->with(["status_surat_masuk" => "gagal"]);
        }
    }

    // Surat Keluar

    public function tambah_surat_keluar()
    {
        return view('staff.tambah.tambah-surat-keluar');
    }

    public function save_tambah_surat_keluar(Request $request)
    {
        try {
            $file = $request->file('file_surat');
            $file_name = "";
            if ($file != null) {
                $file_name = Str::random(10) . $file->getClientOriginalName();
                $file->move("files/surat_keluar", $file_name);
            }
            DB::table('surat_keluar')
                ->insert([
                    "no_surat" => $request->no_surat,
                    "tgl_surat" => $request->tgl_surat,
                    "pengola" => $request->pengola,
                    "tujuan_surat" => $request->tujuan_surat,
                    "perihal" => $request->perihal,
                    "file_surat" => $file_name,
                    "keterangan" => $request->keterangan,
                ]);

            return redirect()->back()->with(["status" => "berhasil"]);
        } catch (\Exception $e) {
            return $e;
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }

    public function ubah_surat_keluar($id)
    {
        try {
            $data = DB::table('surat_keluar')
                ->where('id_surat_keluar', $id)
                ->first();
            return view('staff.edit.edit-surat-keluar', compact('data'));
        } catch (\Exception $th) {
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }

    public function update_surat_keluar(Request $request)
    {
        try {
            $file = $request->file('file_surat');
            $file_name = $request->file_surat_ada;
            if ($file != null) {
                if ($file_name != "") {
                    unlink('files/surat_keluar'.'/'.$file_name);
                    $file_name = Str::random(10) . $file->getClientOriginalName();
                    $file->move("files/surat_keluar", $file_name);
                }else{
                    $file_name = $request->file_surat_ada;
                }
            }

            DB::table('surat_keluar')
                ->where('id_surat_keluar', $request->id_surat_keluar)
                ->update(
                    [
                        "no_surat" => $request->no_surat,
                        "tgl_surat" => $request->tgl_surat,
                        "pengola" => $request->pengola,
                        "tujuan_surat" => $request->tujuan_surat,
                        "perihal" => $request->perihal,
                        "file_surat" => $file_name,
                        "keterangan" => $request->keterangan,
                    ]
                );
            return redirect()->back()->with(["status" => "berhasil"]);
        } catch (\Exception $th) {
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }
    public function hapus_surat_keluar($id)
    {
        try {
            DB::table('surat_keluar')
                ->where('id_surat_keluar', $id)
                ->delete();
            return redirect()->back()->with(["status_surat_keluar" => "berhasil"]);
        } catch (\Exception $e) {
            return $e;
            return redirect()->back()->with(["status_surat_keluar" => "gagal"]);
        }
    }
}
