<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileUpdateRequest;
use App\Model\User;
class ProfileController extends Controller
{
    public function show()
    {
        return view('users.profile');
    }

    public function update(ProfileUpdateRequest $request)
    {
       // return $request->all();
        $valiator = $request->validate([
            'name'  => 'required',
            'email' => 'required',
            'image' => 'required',
        ]);
        //try{
            
            if ($request->password) {
                auth()->user()->update(['password' => Hash::make($request->password)]);
            }

            auth()->user()->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);

            if($request->hasFile('image') && $request->file('image')->isValid()){
                auth()->user()->clearMediaCollection('images');
                auth()->user()->addMediaFromRequest('image')->toMediaCollection('images');
            }
            return redirect()->back()->with(['type'=>'success','message'=>"Successfully Updated Profile!!"]);
                            
        //}catch(\Exception $e){
            return redirect()->back()->with(['type'=>'error','message'=>"Something goes wrong while Updated!!"]);
        //}
    }
}
