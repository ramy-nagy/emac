<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use DB, Auth;
use App\Models\RecDuct as Duct;
use App\Http\Requests\RecDuctRequest;

class RecDuct extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';   
    public  $update = false,
            $width, $depth, $length, $area,
            $thermal_thickness, $area_1_inch, $area_2_inch,
            $cladding_option, $cladding_area,
            $accoustic_option, $accoustic_length, $accoustic_area,
            $duct_gage, $thickness, $duct_weight, $pending_distance_per_side;

    public function render()
    {
        return view('livewire.rec-duct', [
            'RecDucts' => Auth::user()->RecDucts()->with(['project', 'user'])->latest()->get(),
            'totals' => Duct::whereUserId(Auth::id())->Totals()->first(),
        ]);
    }
    public function store(RecDuctRequest $request)
    {
        $validated = $request->validated();

        try{
            $data  = Project::updateOrCreate(['id' => $this->project_id],$validated);
            
            //$this->LastProject = $data->id;
            $this->dispatchBrowserEvent('alert',[
                'type'=>'success',
                'message'=>  $this->project_id ? 'Project Updated Successfully.' : 'Project Created Successfully.'
            ]);
            // $this->isOpen = false;
            // $this->resetFields();
        }catch(\Exception $e){
            $this->dispatchBrowserEvent('alert',[
                'type'=>'error',
                'message'=> $this->project_id ? 'Something goes wrong while Updated Project !!.' : 'Something goes wrong while Created Project !!.'
            ]);
            //$this->isOpen = false;
            //$this->resetFields();
        }
    }
    
}
