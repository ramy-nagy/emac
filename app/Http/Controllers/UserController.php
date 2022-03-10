<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Setting;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();

        return view('users.index', compact('users'));
    }

    public function admin()
    {
        $users = User::paginate();

        return view('admin.dashboard', compact('users'));
    }



    public function settings()
    {
        $settings = Setting::select('id', 'app_name', 'business_name', 'contact_name', 'business_email', 'business_phone')->first();

        return view('users.settings', compact('settings'));
    }

    public function settings_store(Request $request)
    {
        //return   $request->all();
        try{
            Setting::whereId(1)->update([
                'business_name'     =>$request->business_name,
                'contact_name'      =>$request->contact_name,
                "business_email"    => $request->business_email,
                "business_phone"    => $request->business_phone,
            ]);             
            return redirect()->back()->with(['type'=>'success','message'=>"Successfully Updated!!"]);
                            
        }catch(\Exception $e){
            return redirect()->back()->with(['type'=>'error','message'=>"Something goes wrong while Updated!!"]);
        }
    }
}
