<?php

namespace App\Model\Undangan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Undangan extends Model
{
    protected $table = 'undangan';
    protected $primaryKey = 'id_undangan';

    public static function get($slug_undangan)
    {
        $config = DB::table('undangan')
            ->where('slug_undangan', $slug_undangan)
            ->first();

        $pengantin = DB::table('pengantin')
            ->where('slug_undangan', $slug_undangan)
            ->first();

        $akad = DB::table('akad')
            ->where('slug_undangan', $slug_undangan)
            ->first();

        $resepsi = DB::table('resepsi')
            ->where('slug_undangan', $slug_undangan)
            ->first();

        $foto_prewed = DB::table('foto_prewed')
            ->where('slug_undangan', $slug_undangan)
            ->first();

        $moment = DB::table('moment')
            ->where('slug_undangan', $slug_undangan)
            ->first();

        $ucapan = DB::table('ucapan')
            ->where('slug_undangan', $slug_undangan)
            ->get()->toArray();




        return $data = [
            'config' => $config,
            'pengantin' => $pengantin,
            'akad' => $akad,
            'resepsi' => $resepsi,
            'foto_prewed' => $foto_prewed,
            'moment' => $moment,
            'ucapan' => $ucapan,
        ];
    }
}
