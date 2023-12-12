<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Review extends Model
{
    use HasFactory;

    public function insertReview($review, $star, $uid, $rid) {
        DB::table('reviews')->insert([
            'user_id' => $uid,
            'resep_id' => $rid,
            'review' => $review,
            'rating' => $star
        ]);
    }

    public function deleteReview($uid, $rid) {
        DB::table('reviews')->where(['user_id' => $uid, 'resep_id' =>$rid]) ->delete();
    }

    public function updateReview($review, $star, $uid, $rid) {
        DB::table('reviews')-> where(['user_id' => $uid, 'resep_id' => $rid]) ->update([
            'user_id' => $uid,
            'resep_id' => $rid,
            'review' => $review,
            'rating' => $star
        ]);
    }

    public function recipeHasReview($rid) {
        return DB::table('reviews') ->where(['resep_id' => $rid]) ->exists();
    }

    public function hasReviewed($uid, $rid) {
        return DB::table('reviews') ->where(['user_id' => $uid, 'resep_id' => $rid]) ->exists();
    }

    public function getReview($uid, $rid) {
        return DB::table('reviews') ->where(['user_id' => $uid, 'resep_id' => $rid]) ->first();
    }

    public function getAvg($rid) {
        return round(DB::table('reviews') ->where(['resep_id' => $rid]) ->avg('rating'), 1);
    }

    public function getBulkByUID($uid) {
        return DB::table('reviews') ->where(['user_id' => $uid]) ->get();
    }

    public function getBulkByRID($rid) {
        return DB::table('reviews') ->where(['resep_id' => $rid]) ->get();
    }

    public function getPagedByRID($rid, $page) {
        $epp = 3;

        $start = $epp * ($page-1);

        $count = DB::table('reviews') ->where(['resep_id' => $rid]) -> count();
        $searcQuery = DB::table('reviews') ->where(['resep_id' => $rid]) ->get();

        $searcQuery = $searcQuery->slice($start, $epp);
        $maxPage = ceil($count / $epp);

        return ["reviewPage" => $searcQuery, "maxPage" => $maxPage];
    }

    public function getTopByRID($rid) {
        $count = DB::table('reviews') ->where(['resep_id' => $rid]) ->count();
        $data = DB::table('reviews') ->where(['resep_id' => $rid]) ->get();

        $data = $data->slice($count - 1, 1);

        foreach($data as $toReturn) {
            return $toReturn;
        }
    }
}
