<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CurriculumVitae extends Controller
{
    public function index()
    {
        $data = DB::table('curriculum_vitae')->get();
        return view('staff.curricullum-vitae', compact('data'));
    }

    // Surat Masuk
    public function tambah_curicullum_vitae()
    {
        return view('staff.tambah.tambah-curicullum-vitae');
    }

    public function save_tambah_curicullum_vitae(Request $request)
    {
        try {
            $file = $request->file('file_cv');
            $file_name = "";
            if ($file != null) {
                $file_name = Str::random(10) . $file->getClientOriginalName();
                $file->move("files/curicullum_vitae", $file_name);
            }
            DB::table('curriculum_vitae')
                ->insert([
                    "nama_penyetor" => $request->nama_penyetor,
                    "nama_file" => $file_name,
                    "tanggal_upload" => $request->tanggal_upload,
                    "keterangan" => $request->keterangan,
                ]);
            return redirect()->back()->with(["status" => "berhasil"]);
        } catch (\Exception $e) {
            return $e;
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }

    public function ubah_curicullum_vitae($id)
    {
        try {
            $data = DB::table('curriculum_vitae')
                ->where('id_curriculum_vitae', $id)
                ->first();
            return view('staff.edit.edit-curicullum-vitae', compact('data'));
        } catch (\Exception $th) {
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }

    public function update_curicullum_vitae(Request $request)
    {
        try {
            $file = $request->file('file_cv');
            $file_name = $request->file_cv_ada;
            $tipe_file = "";
            if ($file != null) {
                if ($file_name != "") {
                    unlink('files/curicullum_vitae'.'/'.$file_name);
                    $file_name = Str::random(10) . $file->getClientOriginalName();
                    $file->move("files/curicullum_vitae", $file_name);
                }else{
                    $file_name = $request->file_cv_ada;
                }
            }

            DB::table('curriculum_vitae')
                ->where('id_curriculum_vitae', $request->id_curriculum_vitae)
                ->update(
                    [
                        "nama_penyetor" => $request->nama_penyetor,
                        "nama_file" => $file_name,
                        "tanggal_upload" => $request->tanggal_upload,
                        "keterangan" => $request->keterangan,
                    ]
                );
            return redirect()->back()->with(["status" => "berhasil"]);
        } catch (\Exception $th) {
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }

    public function hapus_curicullum_vitae($id, $file_name)
    {
        try {
            unlink('files/curicullum_vitae'.'/'.$file_name);
            DB::table('curriculum_vitae')
                ->where('id_curriculum_vitae', $id)
                ->delete();
            return redirect()->back()->with(["status" => "berhasil"]);
        } catch (\Exception $e) {
            return $e;
            return redirect()->back()->with(["status" => "gagal"]);
        }
    }
}
