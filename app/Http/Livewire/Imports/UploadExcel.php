<?php

namespace App\Http\Livewire\Imports;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use Rap2hpoutre\FastExcel\FastExcel;

use App\Models\RecDuct as Duct;

class UploadExcel extends Component
{
    use WithFileUploads;
    public $file, $title;


    public function store(Request $request)
    {
        $validated = $this->validate([
            'file' => 'required',
        ]);
        $file = $request->file('file');
        $path = $request->file->path();
        $extension = $request->file->extension();  

        return $path;

        $collection = (new FastExcel)->import(request()->file('file'));
        return $collection;
      //  try{
        $validated['name'] = $this->file->store('files', 'public');
        Duct::create($validated);
            $this->dispatchBrowserEvent('alert',[
                'type'=>'success',
                'message'=> 'Project Updated Successfully.'
            ]);
      //  }catch(\Exception $e){
       //     $this->dispatchBrowserEvent('alert',[
         //       'type'=>'error',
           //     'message'=>  'Something goes wrong while Created Project !!.'
            //]);
            //$this->isOpen = false;
            //$this->resetFields();
        //}
    }
    public function render()
    {
        return view('livewire.imports.upload-excel');
    }
}
