<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileUpdateRequest;
use Auth;

class Profile extends Component
{
    public $isOpen = false, $name, $email, $password;

    public function edit(){
        $this->isOpen =! $this->isOpen;
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function render()
    {
        $user = Auth::user();
        return view('livewire.profile', compact('user'));
    }

    public function update(ProfileUpdateRequest $request)
    {
        try{

            // if ($request->password) {
            //     auth()->user()->update(['password' => Hash::make($request->password)]);
            // }

            auth()->user()->update([
                'name' => $this->name,
                'email' => $this->email,
            ]);

            $this->dispatchBrowserEvent('alert',[
                'type'=>'success',
                'message'=>'Profile Updated Successfully.',
            ]);
            $this->isOpen = false;
            $this->resetFields();

        }catch(\Exception $e){
            $this->dispatchBrowserEvent('alert',[
                'type'=>'error',
                'message'=>'Something goes wrong while Updated Profile !!.',
            ]);
            $this->isOpen = false;
            $this->resetFields();
        }
    }
    private function resetFields(){
        $this->name = '';
        $this->email = ''; 
    }
}
