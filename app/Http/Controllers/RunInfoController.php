<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Run_Info;
class RunInfoController extends Controller
{



    public function index(){
        return view('run_info.index');
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
        
    }
}








