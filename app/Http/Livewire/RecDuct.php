<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use DB, Auth;
use App\Models\RecDuct as Duct;

class RecDuct extends Component
{
    use WithPagination;
    public $searchTerm,
    $entries = 10,
    $update = false;

    public $categories, $name, $description, $category_id;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        $entries = $this->entries;
        return view('livewire.rec-duct', [
            'RecDucts' => Auth::user()->RecDucts()->with(['project', 'user'])->latest()->get(),
        ]);
    }
}
