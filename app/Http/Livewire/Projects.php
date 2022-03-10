<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use DB, Auth;
use App\Models\Project as Project;

class Projects extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $isOpen = false, $name, $description, $project_id, $LastProject = 0;
    
    public function render()
    {
        $projects = Auth::user()->projects()->latest()->paginate(5);
        $this->LastProject = is_array($projects) ? $projects[0]->id: 0;
        return view('livewire.projects.index', compact('projects'));
    }

    public function edit($id){
        $this->isOpen =! $this->isOpen;
        $project = Project::findOrFail($id);
        $this->name = $project->name;
        $this->description = $project->description;
        $this->project_id = $project->id;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        try{
            $data  = Project::updateOrCreate(['id' => $this->project_id], [
                'user_id' => Auth::user()->id,
                'name' => $this->name,
                'description' => $this->description,
            ]);
            $this->LastProject = $data->id;
            $this->dispatchBrowserEvent('alert',[
                'type'=>'success',
                'message'=>  $this->project_id ? 'Project Updated Successfully.' : 'Project Created Successfully.'
            ]);
            $this->isOpen = false;
            $this->resetFields();
        }catch(\Exception $e){
            $this->dispatchBrowserEvent('alert',[
                'type'=>'error',
                'message'=> $this->project_id ? 'Something goes wrong while Updated Project !!.' : 'Something goes wrong while Created Project !!.'
            ]);
            $this->isOpen = false;
            $this->resetFields();
        }
    }
    
    private function resetFields(){
        $this->name = '';
        $this->description = ''; 
    }

    public function destroy($id){
        try{
            Project::find($id)->delete();
            $this->dispatchBrowserEvent('alert',[
                'type'=>'success',
                'message'=>"Project Deleted Successfully!!"
            ]);
        }catch(\Exception $e){
            $this->dispatchBrowserEvent('alert',[
                'type'=>'error',
                'message'=>"Something goes wrong while deleting Project!!"
            ]);
        }
    }
}
