<?php

namespace App\Http\Controllers;

use App\Http\Requests\registerRequest;
use Illuminate\Http\Request;
use App\Models\User;

class userAPIController extends Controller
{
    public function register(registerRequest $request) {
        $userDB = new User();
        $datas = $request->all();

        if($userDB->hasEntry($datas['username'])) { return response()->json(['error' => 'username already exist'], 403); }

        $userDB->register($datas['username'], $datas['password'], $datas['name']);

        return response()->json();
    }

    public function aboutMe(Request $request) {
        $userDB = new User();

        $data = $userDB->getEntryClean($request->header('username'));

        
    }

    public function authData(Request $request) {
        $userDB = new User();
        
        if($userDB->authenticate($request->input('username'), $request->input('password'))) {
            return response()->json();
        }

        return response()->json([], 401);
    }

    public function delete(Request $request) {
        $userDB = new User();

        $userDB->deleteEntry($request->header('username'));
    }
}
