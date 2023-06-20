<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Resep extends Model
{
    use HasFactory;

    public function search($searchToken, $page){
        $epp = 6;

        $start = $epp * ($page-1);

        $count = DB::table('reseps') ->where('nama', 'like' , '%'.$searchToken.'%') -> count();
        $searcQuery = DB::table('reseps') ->where('nama', 'like' , '%'.$searchToken.'%')-> orderBy('id', 'desc') ->get();

        $searcQuery = $searcQuery->slice($start, $epp);
        $maxPage = ceil($count / $epp);

        return ["searchResult" => $searcQuery, "maxPage" => $maxPage];
    }

    public function getByMaker($uid) {
        return DB::table('reseps') ->where('user_id', $uid) ->get();
    }

    public function hasEntry($id) {
        return DB::table('reseps') ->where('id', $id) ->exists();
    }

    public function getData($id){
        return DB::table('reseps') ->where('id', $id) ->first();
    }

    public function insertData($nama, $langkah, $bahan, $alat, $waktu, $uid){
        return DB::table('reseps')->insertGetId([
            'id' => NULL,
            'nama' => $nama,
            'langkah' => $langkah,
            'bahan' => $bahan,
            'alat' => $alat,
            'waktu' => $waktu,
            'user_id' => $uid,
            'parent_id' => NULL
        ]);
    }
    public function insertFork($nama, $langkah, $bahan, $alat, $waktu, $uid, $pid){
        return DB::table('reseps')->insertGetId([
            'id' => NULL,
            'nama' => $nama,
            'langkah' => $langkah,
            'bahan' => $bahan,
            'alat' => $alat,
            'waktu' => $waktu,
            'user_id' => $uid,
            'parent_id' => $pid
        ]);
    }

    public function updateData($id, $nama, $langkah, $bahan, $alat, $waktu){
        DB::table('reseps') -> where('id', $id) ->update([
            'nama' => $nama,
            'langkah' => $langkah,
            'bahan' => $bahan,
            'alat' => $alat,
            'waktu' => $waktu,
        ]);
    }

    public function deleteData($id){
        DB::table('reseps')->where('id', $id) ->delete();
    }
}
