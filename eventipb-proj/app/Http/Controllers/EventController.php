<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// namespace App\Http\Controllers;

class EventController extends Controller
{
    //
    function index(){
        return view('event');
    }

    function add(Request $request)
    {
        // $request->validate([
        //     'nama_event'=> required,
        //     'tanggal_pelaksanaan' => required,
        //     'jam' => required,
        //     'waktu_event'=> required,
        //     'lokasi'=> required,
        //     'deskripsi'=> required,
        //     'kategori'=> required,
        // ]);

        $query = DB::table('events')->insert([
            'nama_event'=> $request->input('nama_event'),
            'tanggal_pelaksanaan' => $request->input('tanggal_pelaksanaan'),
            'waktu_pelaksanaan'=> $request->input('waktu_pelaksanaan'),
            'lokasi'=> $request->input('lokasi'),
            'deskripsi'=> $request->input('deskripsi'),
            'kategori'=> $request->input('kategori'),
        ]);
        
        if($query){
            return back()->with('success', 'Event berhasil di buat');
        }
        else{
            return back()->with('fail', 'terdapat kesalahan');
        }
            
       
        // print_r($req->input());
        // $event = new ipbevent;
        // $event->nama_event= $request->nama_event;
        // $event->tanggal_pelaksanaan = $request->tanggal_pelaksanaan;
        // $event->jam= $request->jam;
        // $event->waktu_event= $request->waktu_event;
        // $event->lokasi= $request->lokasi;
        // $event->deskripsi= $request->deskripsi;
        // $event->kategori= $request->kategori;
        // echo $event->save();

    }

}