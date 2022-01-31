<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\RecDuct;

class DashboardController extends Controller
{

    public function index()
    {
        $RecDucts = Auth::user()->RecDucts()->with(['project', 'user'])->latest()->paginate(5);
        return view('dashboard', compact('RecDucts'));
    }

    public function recduct($id)
    {
        $recducts = Auth::user()->RecDucts()->whereId($id)->with(['project', 'user'])->first();
        return view('livewire.rec-duct');
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
