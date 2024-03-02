<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function Auth(Request $request){

        $username = $request->username;
        $password = $request->password;

        $user = users::where('name',  $username)->first();
        if (!$user) {
            return response()->json(['success'=>false, 'message' => 'Not Login successfull']);
        }
        if (!Hash::check($password,$user->password)) {
            return response()->json(['success'=>false, 'message' => 'Not Login successfull']);
        }

        // set data session
        session(
            [
                'name' => $username, 
                'akses' => $user->akses
            ]
        );
        
        if($user->akses == 1){
            return redirect('/home');
        }else if($user->akses == 2){
            return redirect('/home');
        }else if($user->akses == 3){
            return redirect('/dashboard_Hr');
        };
    }
    

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}
