<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class homeMhsController extends Controller
{
    public function index()
    {
        $data = Event::all();
        return view('homeMhs', ['events'=>$data]);
    }
    
    public function detail($idevent){
        $data = Event::find($idevent);
        return view('detail',['event'=>$data] );
    }

    public function idxadm(){
        $data2 = Event::with('org')->get();
        return view('home')->with('events',$event);
    }

    public function detailorg($idevent){
        $data = Event::find($idevent);
        return view('detailorg',['event'=>$data] );
    }

    public function delete($idevent){
        $data = Event::find($idevent);
        $data->delete();
        return redirect()->route('org.home');

    }

    public function edit($idevent){
        // return Event::find($idevent);
        $data = Event::find($idevent);
        return view('edit', ['event'=>$data]);
    }

    function update(Request $request){
        // return $request->input();
        $data = Event::find($request->idevent);
        $data->nama_organisasi->$req->name_organisasi;
        $data->nama_event->$req->name_event;
        $data->tanggal_pelaksanaan->$req->tanggal_pelaksanaan;
        $data->waktu_pelaksanaan->$req->waktu_pelaksanaan;
        $data->lokasi->$req->lokasi;
        $data->deskripsi->$req->deskripsi;
        $data->jumlah_tiket->$req->jumlah_tiket;
        $data->kategori->$req->kategori;
        $data->poster->$req->poster;
        $data->save();
        return redirect()->route('org.home');
        // // return $request->input();
    }
}
