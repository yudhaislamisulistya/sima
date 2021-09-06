<?php

namespace App;

use Illuminate\Support\Facades\DB;

class Helper{
    public static function get_jabatan()
    {
        $data = DB::table('data_jabatan')
            ->get();
        return
         $data;
    }

    public static function get_total_surat_masuk_keluar()
    {
        $data_surat_masuk = DB::table('surat_masuk')
            ->get();
        $data_surat_keluar = DB::table('surat_keluar')
            ->get();
        return count($data_surat_masuk) + count($data_surat_keluar);
    }

    public static function get_total_cv()
    {
        $data = DB::table('curriculum_vitae')
            ->get();
        return count($data);
    }

    public static function get_data_pegawai()
    {
        $data = DB::table('data_pegawai')
            ->get();
        return count($data);
    }

    public static function get_daftar_arsip()
    {
        $data = DB::table('data_pegawai')
            ->get();
        return count($data);
    }

    public static function get_3_data_pegawai()
    {
        $data = DB::table('data_pegawai')
            ->limit(3)
            ->get();
        return $data;
    }
    public static function get_3_surat_masuk()
    {
        $data = DB::table('surat_masuk')
            ->limit(3)
            ->get();
        return $data;
    }
}

?>
