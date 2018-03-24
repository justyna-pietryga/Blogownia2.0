<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Intervention\Image\Facades\Image;

class EditAccountController extends Controller
{
    public function store(Request $request, $id){
        $this->validate($request, [
//            'avatar' => 'image'
        ]);


        $user = User::find($id);



        if( $request->hasFile('avatar') ) {
            $avatar     = $request->file('avatar');
            echo $avatar;
            $filename           = time() . '.' . $avatar->getClientOriginalExtension();

            Image::make($avatar)->resize(70, 70)->save( $filename, public_path('storage/uploads/' . $filename ) );

            echo
            $user->avatar = $filename;
            $user->save();

            return redirect("/account/$user->id")->with('success', 'Account updated');
        }
        else{
            return redirect("/account/$user->id.")->with('error', 'Sth was wrong');
        }


    }
}
