<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class bookmark extends Model
{
    use HasFactory;

    public function upsertBookmark($uid, $rid) {
        DB::table('');
    }
}
