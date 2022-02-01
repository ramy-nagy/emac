<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use DB, Auth;
class Projects extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.projects', [
            'projects' => Auth::user()->projects()->latest()->paginate(1),
        ]);
    }
}
