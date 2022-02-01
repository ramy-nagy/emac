<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use DB, Auth;
use App\Models\RecDuct as Duct;

class RecDuct extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';   
    public  $width, $depth, $length, $area,
            $thermal_thickness, $area_1_inch, $area_2_inch,
            $cladding_option, $cladding_area,
            $accoustic_option, $accoustic_length, $accoustic_area,
            $duct_gage, $thickness, $duct_weight, $pending_distance_per_side;


    public function ductData()
    {
        $this->area = 15;
    }

    public function render()
    {
        return view('livewire.rec-duct', [
            'RecDucts' => Auth::user()->RecDucts()->with(['project', 'user'])->latest()->get(),
        ]);
    }
}
