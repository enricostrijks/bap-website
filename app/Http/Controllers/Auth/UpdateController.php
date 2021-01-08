<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function update(Request $request)

    {   
    //    dd($request);
       $user = Auth::user();    

       $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,id,'.$user->id,
        ]);

        $user->name = $request->name;

        $user->email = $request->email;

        if($request->password){
            $this->validate($request,[
                'password' => 'min:6|confirmed',
            ]);
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return view('home.profile', array('user' => Auth::user()));
    }
}
