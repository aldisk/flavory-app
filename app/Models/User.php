<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use DB;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

    ];


    public function hasEntry($username) {
        return DB::table('users') ->where('username', $username) ->exists();
    }

    public function authenticate($username, $password) {
        $userdata = $this->getEntry($username);
        if((strcasecmp($username, $userdata->username) == 0) && Hash::check($password, $userdata->password)){
            return true;
        }

        return false;
    }

    public function register($username, $password, $fullname) {
        DB::table('users')->insert([
            'username' => $username,
            'password' => Hash::make($password),
            'name' => $fullname
        ]);
    }

    public function deleteEntry($username) {
        DB::table('users')->where('username', $username) ->delete();
    }

    public function getEntry($username) {
        return DB::table('users') ->where('username', $username) ->first();
    }

    public function getEntryClean($username) {
        return DB::table('users') ->select('username', 'name') ->where('username', $username) ->first();
    }

    public function updateEntry($username, $password, $fullname) {
        DB::table('users')-> where('username', $username) ->update([
            'password' => Hash::make($password),
            'name' => $fullname
        ]);
    }
}
