<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Rap2hpoutre\FastExcel\FastExcel;

use Auth;
use App\Models\RecDuct;
use App\Models\RoundDust;
use App\Models\RecFrame;
use App\Models\RoundFrame;
use App\Models\EndCapRec;
use App\Models\EndCapRound;
use App\Models\BellMouse;
use App\Models\FittingRecElbow;
use App\Models\FittingRecReducer;
use App\Models\FittingRoundReducer;
use App\Models\FittingTransition;

use App\Models\Project;

class DashboardController extends Controller
{

    public function index()
    { 
        if (Auth::user()->role == 'admin')
        return redirect('admin/dashboard');

        $projects = Auth::user()->projects()->latest()->get();
        if ($projects->isEmpty())
        return redirect('projects');
        
        $project_id = $projects[0]->id;
        $RecDucts = Project::whereId($project_id)->with(['RecDucts', 'RoundDucts',
            'RecFrames', 'RoundFrames', 'EndCapRecs', 'EndCapRounds'])->first();
        //$totals = RecDuct::whereUserId(Auth::id())->where('project_id', $project_id)->Totals()->first();
        //$totalsRoundDust = RoundDust::whereUserId(Auth::id())->where('project_id', $project_id)->Totals()->first();
        return view('dashboard', compact('projects', 'project_id', 'RecDucts'));
    }
    //get
    public function Rec_Duct() 
    { 
        $projects = Auth::user()->projects()->latest()->get();
        if ($projects->isEmpty())
        return redirect('projects');
        
        $project_id = $projects[0]->id;
        $project  = Project::whereId($project_id)->with('RecDucts')->first();
        return view('sheets.Rec-Duct', compact('projects', 'project_id', 'project'));
    }
    public function Round_Duct()
    { 
        $projects = Auth::user()->projects()->latest()->get();
        if ($projects->isEmpty())
        return redirect('projects');
        
        $project_id = $projects[0]->id;
        $project  = Project::whereId($project_id)->with('RoundDucts')->first();
        return view('sheets.Round-Duct', compact('projects', 'project_id', 'project'));
    }
    public function GetFitting()
    { 
        $projects = Auth::user()->projects()->latest()->get();
        if ($projects->isEmpty())
        return redirect('projects');
        
        $project_id = $projects[0]->id;
        $project  = Project::whereId($project_id)->with('RoundDucts')->first();
        return view('sheets.Fitting', compact('projects', 'project_id', 'project'));
    }
    public function Rec_Frame()
    { 
        $projects = Auth::user()->projects()->latest()->get();
        if ($projects->isEmpty())
        return redirect('projects');
        
        $project_id = $projects[0]->id;
        $project  = Project::whereId($project_id)->with('RecFrames')->first();
        return view('sheets.Rec-Frame', compact('projects', 'project_id', 'project'));
    }
    public function Round_Frame()
    { 
        $projects = Auth::user()->projects()->latest()->get();
        if ($projects->isEmpty())
        return redirect('projects');
        
        $project_id = $projects[0]->id;
        $project  = Project::whereId($project_id)->with('RoundFrames')->first();
        return view('sheets.Round-Frame', compact('projects', 'project_id', 'project'));
    }
    public function End_Cap_Rec()
    { 
        $projects = Auth::user()->projects()->latest()->get();
        if ($projects->isEmpty())
        return redirect('projects');
        
        $project_id = $projects[0]->id;
        $project  = Project::whereId($project_id)->with('EndCapRecs')->first();
        return view('sheets.End-Cap-Rec', compact('projects', 'project_id', 'project'));
    }
    public function End_Cap_Round()
    { 
        $projects = Auth::user()->projects()->latest()->get();
        if ($projects->isEmpty())
        return redirect('projects');
        
        $project_id = $projects[0]->id;
        $project  = Project::whereId($project_id)->with('EndCapRounds')->first();
        return view('sheets.End-Cap-Round', compact('projects', 'project_id', 'project'));
    }
    public function Air_outlet_Plenum()
    { 
        $projects = Auth::user()->projects()->latest()->get();
        if ($projects->isEmpty())
        return redirect('projects');
        
        $project_id = $projects[0]->id;
        $project  = Project::whereId($project_id)->with('EndCapRounds')->first();
        return view('sheets.End-Cap-Round', compact('projects', 'project_id', 'project'));
    }
    public function Bell_Mouse()
    { 
        $projects = Auth::user()->projects()->latest()->get();
        if ($projects->isEmpty())
        return redirect('projects');
        
        $project_id = $projects[0]->id;
        $project  = Project::whereId($project_id)->with('BellMouses')->first();
        return view('sheets.Bell-Mouse', compact('projects', 'project_id', 'project'));
    }
    public function FittingRec_elbow()
    { 
        $projects = Auth::user()->projects()->latest()->get();
        if ($projects->isEmpty())
        return redirect('projects');
        
        $project_id = $projects[0]->id;
        $project  = Project::whereId($project_id)->with('FittingRecElbows')->first();
        return view('sheets.Fitting_Rec_elbow', compact('projects', 'project_id', 'project'));
    }
    public function FittingRecReducer()
    { 
        $projects = Auth::user()->projects()->latest()->get();
        if ($projects->isEmpty())
        return redirect('projects');
        
        $project_id = $projects[0]->id;
        $project  = Project::whereId($project_id)->with('FittingRecReducers')->first();
        return view('sheets.Fitting_Rec_Reducer', compact('projects', 'project_id', 'project'));
    }
    public function FittingRoundReducer()
    { 
        $projects = Auth::user()->projects()->latest()->get();
        if ($projects->isEmpty())
        return redirect('projects');
        
        $project_id = $projects[0]->id;
        $project  = Project::whereId($project_id)->with('FittingRoundReducers')->first();
        return view('sheets.Fitting_Round_Reducer', compact('projects', 'project_id', 'project'));
    }
    public function FittingTransition()
    { 
        $projects = Auth::user()->projects()->latest()->get();
        if ($projects->isEmpty())
        return redirect('projects');
        
        $project_id = $projects[0]->id;
        $project  = Project::whereId($project_id)->with('FittingTransitions')->first();
        return view('sheets.Fitting_Transition', compact('projects', 'project_id', 'project'));
    }
    //post  
    public function RecDuct(Request $request)
    {
        try{
            $user = Auth::user();
            RecDuct::create([
                'user_id'   =>$user->id,
                'project_id'   =>$request->project_id,
                "location"     => $request->location,
                "section_no"     => $request->section_no,
                "width"     => $request->width,
                "depth"     => $request->depth,
                "length"    => $request->length,
                "area"      => $request->area,
                "thermal_thickness"=> $request->thermal_thickness,
                "area_1_inch"   => $request->Area_1_inch,
                "area_2_inch"   => $request->Area_2_inch,
                "cladding_option"   => $request->cladding_option,
                "cladding_area"     => $request->Cladding_Area,
                "accoustic_option"  => $request->accoustic_option,
                "accoustic_length"  => $request->accoustic_length,
                "accoustic_area"    => $request->Accoustic_Area,
                "duct_gage"    => $request->duct_gage,
                "thickness" => $request->thickness,
                "duct_weight"=> $request->duct_weight,
            ]);             
            return redirect()->back()->with(['type'=>'success','message'=>"Successfully Create!!"]);
                            
        }catch(\Exception $e){
            return redirect()->back()->with(['type'=>'error','message'=>"Something goes wrong while creating!!"]);
        }
    }
    public function RoundDuct(Request $request)
    {

        try{
            $user = Auth::user();
            RoundDust::create([
                'user_id'   =>$user->id,
                'project_id'   =>$request->project_id,
                "location"     => $request->location,
                "section_no"     => $request->section_no,
                "diameter"     => $request->diameter,
                "length"    => $request->length,
                "area"      => $request->area,
                "thermal_thickness"=> $request->thermal_thickness,
                "area_1_inch"   => $request->Area_1_inch,
                "area_2_inch"   => $request->Area_2_inch,
                "cladding_option"   => $request->cladding_option,
                "cladding_area"     => $request->Cladding_Area,
                "accoustic_option"  => $request->accoustic_option,
                "accoustic_length"  => $request->accoustic_length,
                "accoustic_area"    => $request->Accoustic_Area,
                "duct_gage"    => $request->duct_gage,
                "thickness" => $request->thickness,
                "duct_weight"=> $request->duct_weight,
            ]);             
            return redirect()->back()->with(['type'=>'success','message'=>"Successfully Create!!"]);
                            
        }catch(\Exception $e){
            return redirect()->back()->with(['type'=>'error','message'=>"Something goes wrong while creating!!"]);
        }
    }
    public function RecFrame(Request $request)
    {
        try{
            $user = Auth::user();
            RecFrame::create([
                'user_id'   =>$user->id,
                'project_id'   =>$request->project_id,
                "description"     => $request->description,
                "tag_no"     => $request->tag_no,
                "width"     => $request->width,
                "depth"     => $request->depth,
                "length"    => $request->length,
                "area"      => $request->area,
                "thermal_thickness"=> $request->thermal_thickness,
                "area_1_inch"   => $request->Area_1_inch,
                "area_2_inch"   => $request->Area_2_inch,
                "cladding_option"   => $request->cladding_option,
                "cladding_area"     => $request->Cladding_Area,
                "duct_gage"    => $request->duct_gage,
                "thickness" => $request->thickness,
                "duct_weight"=> $request->duct_weight,
            ]);             
            return redirect()->back()->with(['type'=>'success','message'=>"Successfully Create!!"]);
                            
        }catch(\Exception $e){
            return redirect()->back()->with(['type'=>'error','message'=>"Something goes wrong while creating!!"]);
        }
    }
    public function RoundFrame(Request $request)
    {
        try{
            $user = Auth::user();
            RoundFrame::create([
                'user_id'   =>$user->id,
                'project_id'   =>$request->project_id,
                "diameter"     => $request->diameter,
                "length"    => $request->length,
                "tag_no"    => $request->tag_no,
                "description"    => 'Fan coil unit',
                "location"    => 'As per DWG',
                "area"      => $request->area,
                "thermal_thickness"=> $request->thermal_thickness,
                "area_1_inch"   => $request->Area_1_inch,
                "area_2_inch"   => $request->Area_2_inch,
                "cladding_option"   => $request->cladding_option,
                "cladding_area"     => $request->Cladding_Area,
                "duct_gage"    => $request->duct_gage,
                "thickness" => $request->thickness,
                "duct_weight"=> $request->duct_weight,
            ]);             
            return redirect()->back()->with(['type'=>'success','message'=>"Successfully Create!!"]);
                            
        }catch(\Exception $e){
            return redirect()->back()->with(['type'=>'error','message'=>"Something goes wrong while creating!!"]);
        }
    }
    public function EndCapRec(Request $request)
    {
        //return   $request->all();
        try{
            $user = Auth::user();
            EndCapRec::create([
                'user_id'   =>$user->id,
                'project_id'   =>$request->project_id,
                "tag_no"    => $request->tag_no,
                "description"    =>$request->description,
                "location"    => 'As per DWG',
                "width"     => $request->width,
                "depth"    => $request->depth,
                "area"      => $request->area,
                "thermal_thickness"=> $request->thermal_thickness,
                "area_1_inch"   => $request->Area_1_inch,
                "area_2_inch"   => $request->Area_2_inch,
                "cladding_option"   => $request->cladding_option,
                "cladding_area"     => $request->Cladding_Area,
                "duct_gage"    => $request->duct_gage,
                "thickness" => $request->thickness,
                "duct_weight"=> $request->duct_weight,
            ]);             
            return redirect()->back()->with(['type'=>'success','message'=>"Successfully Create!!"]);
                            
        }catch(\Exception $e){
            return redirect()->back()->with(['type'=>'error','message'=>"Something goes wrong while creating!!"]);
        }
    }
    public function EndCapRound(Request $request)
    {
        //return   $request->all();
        try{
            $user = Auth::user();
            EndCapRound::create([
                'user_id'   =>$user->id,
                'project_id'   =>$request->project_id,
                "diameter"     => $request->diameter,
                "tag_no"    => $request->tag_no,
                "description"    =>$request->description,
                "location"    => 'As per DWG',
                "area"      => $request->area,
                "thermal_thickness"=> $request->thermal_thickness,
                "area_1_inch"   => $request->Area_1_inch,
                "area_2_inch"   => $request->Area_2_inch,
                "cladding_option"   => $request->cladding_option,
                "cladding_area"     => $request->Cladding_Area,
                "duct_gage"    => $request->duct_gage,
                "thickness" => $request->thickness,
                "duct_weight"=> $request->duct_weight,
            ]);             
            return redirect()->back()->with(['type'=>'success','message'=>"Successfully Create!!"]);
                            
        }catch(\Exception $e){
            return redirect()->back()->with(['type'=>'error','message'=>"Something goes wrong while creating!!"]);
        }
    }
    public function BellMouse(Request $request)
    {
        //return $request->all();
        try{
            $user = Auth::user();
            BellMouse::create([
                'user_id'   =>$user->id,
                'project_id'   =>$request->project_id,
                "tag_no"    => $request->tag_no,
                "description"    =>$request->description,
                "location"    => 'As per DWG',

                "face_width"     => $request->face_width,
                "face_depth"     => $request->face_depth,
                "main_duct_width"     => $request->duct_width,
                "main_duct_depth"     => $request->duct_depth,
                "plenum_length"     => $request->plenum_length,

                "area"      => $request->area,
                "thermal_thickness"=> $request->thermal_thickness,
                "area_1_inch"   => $request->Area_1_inch,
                "area_2_inch"   => $request->Area_2_inch,
                "cladding_option"   => $request->cladding_option,
                "cladding_area"     => $request->Cladding_Area,
                "duct_gage"    => $request->duct_gage,
                "thickness" => $request->thickness,
                "duct_weight"=> $request->duct_weight,
            ]);             
            return redirect()->back()->with(['type'=>'success','message'=>"Successfully Create!!"]);
                            
        }catch(\Exception $e){
            return redirect()->back()->with(['type'=>'error','message'=>"Something goes wrong while creating!!"]);
        }
    }
    public function Rec_elbow(Request $request)
    {
        //return $request->all();
        try{
            $user = Auth::user();
            FittingRecElbow::create([
                'user_id'   =>$user->id,
                'project_id'   =>$request->project_id,
                "tag_no"    => $request->tag_no,
                "description"    =>$request->description,
                "location"    => 'As per DWG',

                "width"     => $request->width,
                "depth"     => $request->depth,
                "length1"     => $request->length1,
                "length2"     => $request->length2,

                "area"      => $request->area,
                "thermal_thickness"=> $request->thermal_thickness,
                "area_1_inch"   => $request->Area_1_inch,
                "area_2_inch"   => $request->Area_2_inch,
                "cladding_option"   => $request->cladding_option,
                "cladding_area"     => $request->Cladding_Area,
                "duct_gage"    => $request->duct_gage,
                "thickness" => $request->thickness,
                "duct_weight"=> $request->duct_weight,

            ]);             
            return redirect()->back()->with(['type'=>'success','message'=>"Successfully Create!!"]);
                            
        }catch(\Exception $e){
            return redirect()->back()->with(['type'=>'error','message'=>"Something goes wrong while creating!!"]);
        }
    }

    public function Rec_Reducer(Request $request)
    {
        //return $request->all();
        try{
            $user = Auth::user();
            FittingRecReducer::create([
                'user_id'   =>$user->id,
                'project_id'   =>$request->project_id,
                "tag_no"    => $request->tag_no,
                "description"    =>$request->description,
                "location"    => 'As per DWG',

                "width1"     => $request->width1,
                "depth1"     => $request->depth1,
                "width2"     => $request->width2,
                "depth2"     => $request->depth2,
                "length"     => $request->length,

                "area"      => $request->area,
                "thermal_thickness"=> $request->thermal_thickness,
                "area_1_inch"   => $request->Area_1_inch,
                "area_2_inch"   => $request->Area_2_inch,
                "cladding_option"   => $request->cladding_option,
                "cladding_area"     => $request->Cladding_Area,
                "duct_gage"    => $request->duct_gage,
                "thickness" => $request->thickness,
                "duct_weight"=> $request->duct_weight,

            ]);             
            return redirect()->back()->with(['type'=>'success','message'=>"Successfully Create!!"]);
                            
        }catch(\Exception $e){
            return redirect()->back()->with(['type'=>'error','message'=>"Something goes wrong while creating!!"]);
        }
    }
    public function Round_Reducer(Request $request)
    {
        //return $request->all();
        try{
            $user = Auth::user();
            FittingRoundReducer::create([
                'user_id'   =>$user->id,
                'project_id'   =>$request->project_id,
                "tag_no"    => $request->tag_no,
                "description"    =>$request->description,
                "location"    => 'As per DWG',

                "biger_diameter"     => $request->biger_diameter,
                "smaller_diameter"     => $request->smaller_diameter,
                "length"     => $request->length,

                "area"      => $request->area,
                "thermal_thickness"=> $request->thermal_thickness,
                "area_1_inch"   => $request->Area_1_inch,
                "area_2_inch"   => $request->Area_2_inch,
                "cladding_option"   => $request->cladding_option,
                "cladding_area"     => $request->Cladding_Area,
                "duct_gage"    => $request->duct_gage,
                "thickness" => $request->thickness,
                "duct_weight"=> $request->duct_weight,

            ]);             
            return redirect()->back()->with(['type'=>'success','message'=>"Successfully Create!!"]);
                            
        }catch(\Exception $e){
            return redirect()->back()->with(['type'=>'error','message'=>"Something goes wrong while creating!!"]);
        }
    }
    public function Fitting_Transition(Request $request)
    {
        //return $request->all();
        try{
            $user = Auth::user();
            FittingTransition::create([
                'user_id'   =>$user->id,
                'project_id'   =>$request->project_id,
                "tag_no"    => $request->tag_no,
                "description"    =>$request->description,
                "location"    => 'As per DWG',

                "width"     => $request->width,
                "depth"     => $request->depth,
                "diameter"     => $request->diameter,
                "length"     => $request->length,

                "area"      => $request->area,
                "thermal_thickness"=> $request->thermal_thickness,
                "area_1_inch"   => $request->Area_1_inch,
                "area_2_inch"   => $request->Area_2_inch,
                "cladding_option"   => $request->cladding_option,
                "cladding_area"     => $request->Cladding_Area,
                "duct_gage"    => $request->duct_gage,
                "thickness" => $request->thickness,
                "duct_weight"=> $request->duct_weight,

            ]);             
            return redirect()->back()->with(['type'=>'success','message'=>"Successfully Create!!"]);
                            
        }catch(\Exception $e){
            return redirect()->back()->with(['type'=>'error','message'=>"Something goes wrong while creating!!"]);
        }
    }
    
    public function project(Request $request)
    {
        $project_id = $request->project_id;
        $projects = Auth::user()->projects()->latest()->get();
        $RecDucts = Project::whereId($request->project_id)->with('RecDucts')->first();
        $totals = RecDuct::whereUserId(Auth::id())->where('project_id', $project_id)->Totals()->first();
        return view('dashboard', compact('RecDucts','projects', 'totals', 'project_id'));
    }

    public function project_model(Request $request ,$model)
    {
        $project_id = $request->project_id;
        $projects = Auth::user()->projects()->latest()->get();
        $project = Project::whereId($request->project_id)->with('RecDucts')->first();
        return view('sheets.'.$model, compact('project','projects', 'project_id'));
    }
    
    public function export($model, $id)
    {
        $models = Project::whereId($id)->with($model)->get();
        foreach ($models as $key => $value) {
            $excel  = $value->$model;
        }
        return (new FastExcel($excel))->download('d.xlsx');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function delete($model, $id)
    {
        try{
            Auth::user()->$model()->whereId($id)->delete();
            return redirect()->back()->with(['type'=>'success','message'=> 'Deleted Successfully!!']);
        }catch(\Exception $e){
            return redirect()->back()->with(['type'=>'error','message'=> 'Something goes wrong while deleting!!']);
        }
    }

    public function destroy($id, $model)
    {
        return $id;
        User::destroy(1);
    }
}
