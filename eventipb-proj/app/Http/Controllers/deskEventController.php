<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class deskEventController extends Controller
{
    public function index()
    {
    //    
        // $data = Event::all();
        
        // return view('konfirmasievent', ['events'=>$data]);
        

        return view('konfirmasievent');
    }

}
