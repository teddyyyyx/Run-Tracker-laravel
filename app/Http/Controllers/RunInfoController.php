<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Run_Info;
class RunInfoController extends Controller
{



    public function index(){
        $run_info = Run_Info::all();
        return view('run_info.index', ['run_infos' => $run_info]);
    }


    public function store_info(REQUEST $request){
        // dd($request->date);

        $data = $request->validate([
            'date' => 'required|date_format:Y-m-d',
            'distance' => 'required|decimal:0,2',
            'time' => 'required|date_format:H:i',
            'shoes' => 'required'
        ]);

        $newInfo = Run_Info::create($data);
        
        return redirect(route('run_info.index'));
    }

    public function edit(Run_Info $run_info){
        return view('run_info.edit', compact('run_info'));
    }

    public function update(Run_Info $run_info, Request $request){


        $data = $request->validate([
            'date' => 'required|date_format:Y-m-d',
            'distance' => 'required|decimal:0,2',
            'time' => 'required|date_format:H:i',
            'shoes' => 'required'
        ]);

        $run_info->update($data);

        return redirect(route('run_info.index'))->with('sucsess', 'Product Updated Successfully');
    }
}








