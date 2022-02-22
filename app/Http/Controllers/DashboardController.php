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
        $totals = RecDuct::whereUserId(Auth::id())->where('project_id', $project_id)->Totals()->first();
        $totalsRoundDust = RoundDust::whereUserId(Auth::id())->where('project_id', $project_id)->Totals()->first();
        return view('dashboard', compact('projects', 'totals', 'project_id', 'RecDucts', 'totalsRoundDust'));
    }

    public function recduct(Request $request)
    {
       // return   $request->all();
        /*    $validator = Validator::make($request->all(), [
            'count' => 'required',
            'sales'  => 'required',
            'points'  => 'required',
            'product'  => 'required',
            'category' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('dashboard.index')->with(['type'=>'error','message'=>"Something goes wrong !!"]);
        } */
        try{
            $user = Auth::user();
            RecDuct::create([
                'user_id'   =>$user->id,
                'project_id'   =>$request->project_id,
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
    public function RoundDust(Request $request)
    {
       //return   $request->all();
        /*    $validator = Validator::make($request->all(), [
            'count' => 'required',
            'sales'  => 'required',
            'points'  => 'required',
            'product'  => 'required',
            'category' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('dashboard.index')->with(['type'=>'error','message'=>"Something goes wrong !!"]);
        } */
        try{
            $user = Auth::user();
            RoundDust::create([
                'user_id'   =>$user->id,
                'project_id'   =>$request->project_id,
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
       // return   $request->all();
        /*    $validator = Validator::make($request->all(), [
            'count' => 'required',
            'sales'  => 'required',
            'points'  => 'required',
            'product'  => 'required',
            'category' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('dashboard.index')->with(['type'=>'error','message'=>"Something goes wrong !!"]);
        } */
        try{
            $user = Auth::user();
            RecFrame::create([
                'user_id'   =>$user->id,
                'project_id'   =>$request->project_id,
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
        //return   $request->all();
        /*    $validator = Validator::make($request->all(), [
            'count' => 'required',
            'sales'  => 'required',
            'points'  => 'required',
            'product'  => 'required',
            'category' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('dashboard.index')->with(['type'=>'error','message'=>"Something goes wrong !!"]);
        } */
        try{
            $user = Auth::user();
            RoundFrame::create([
                'user_id'   =>$user->id,
                'project_id'   =>$request->project_id,
                "diameter"     => $request->diameter,
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
    public function EndCapRec(Request $request)
    {
        //return   $request->all();
        try{
            $user = Auth::user();
            EndCapRec::create([
                'user_id'   =>$user->id,
                'project_id'   =>$request->project_id,
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
    
    
    public function export()
    {
        //$projects = Auth::user()->projects()->latest()->get();
        //$project_id = $projects[0]->id;
        return $RecDucts = Project::whereId($project_id)->with(['RecDucts', 'RoundDucts', 'RecFrames'])->first();

        // Export all users
        (new FastExcel($RecDucts))->export('file.xlsx');
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

    public function destroy($id)
    {
        //
    }
}
