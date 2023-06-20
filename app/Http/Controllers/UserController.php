<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Resep;

class UserController extends Controller
{

    public function login(Request $request) {
        $request -> validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        $data = $request->all();
        $user = new User;

        // Check if credential is valid
        $userExist = $user->hasEntry($data['username']);

        if($userExist == 1) { //if username exist
            $userData = $user->getEntry($data['username']);
            if($user->authenticate($data['username'], $data['password'])){
                $request->session()->put('username', $userData->username);
                return redirect('/')->with('result', 'success login');
            } else {
                return back()->with('result', 'Wrong password');
            }
        } else { //if credential is not valid
            return back()->with('result', "Username doesn't exist");
        }
    }

    public function register(Request $request) {
        $request -> validate([
            'username' => ['required', 'alpha', 'min:3', 'max:64'],
            'fullname' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'max:64']
        ]);

        $data = $request->all();
        $user = new User;

        // Check if user is unique
        $userExist = $user->hasEntry($data['username']);

        if($userExist == 0) {
            $user->register($data['username'], $data['password'], $data['fullname']);
            return redirect('/login')->with('result', 'Registration complete, please login');
        } else {
            return back()->with('result', 'Username already used');
        }
    }

    public function logout(Request $request) {
        $request->session()->forget('username');
        return redirect('/');
    }

    public function updateData(Request $request) {
        $request -> validate([
            'oldpassword' => ['required'],
            'fullname' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'max:64']
        ]);

        $data = $request->all();
        $user = new User;

        //Check if old password is correct
        if($user->authenticate($request->session()->get('username'), $data['oldpassword'])) {
            $user->updateEntry($request->session()->get('username'), $data['password'], $data['fullname']);
            return redirect('/about-me');
        }
    }

    public function delete(Request $request) {
        $request -> validate([
            'password' => ['required']
        ]);

        $data = $request->all();
        $user = new User;

        //Check if password is correct
        $currData = $user->getEntry($request->session()->get('username'));

        if($user->authenticate($request->session()->get('username'), $data['password'])) {
            $user->deleteEntry($request->session()->get('username'));
            return $this->logout($request);
        }
    }

    public function getProfile(Request $request) {
        $user = new User;
        $resep = new Resep;
        $data = $user->getEntryClean($request->session()->get('username'));
        $userReseps = $resep->getByMaker($request->session()->get('username'));
        return view('about-me', ['profile'=> $data, 'reseps'=>$userReseps]);
    }

    public function profileUpdatePage(Request $request) {
        $user = new User;
        $data = $user->getEntryClean($request->session()->get('username'));
        return view('update-profile', ['profile'=> $data]);
    }

    public function uploadProfilePic(Request $request) {
        $request->validate([
            'pp' => ['required', 'image']
        ]);

        $file = $request->file('pp');

        if($file->isValid()) {
            $path = $file->storeAs('public/profile-pic', $request->session()->get('username').'.jpg');
            return redirect('about-me');
        }
    }
}
