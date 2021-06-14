<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Http\Controllers;
use App\Models\Event;
// namespace App\Http\Controllers;

class EventController extends Controller
{
    //
    function index(){
        return view('event');
    }

    function index_konf(){
        return view('konfirmasievent');
    }

    function add(Request $request)
    {


        $query = DB::table('events')->insert([
            'nama_organisasi'=> $request->input('nama_organisasi'),
            'nama_event'=> $request->input('nama_event'),
            'tanggal_pelaksanaan' => $request->input('tanggal_pelaksanaan'),
            'waktu_pelaksanaan'=> $request->input('waktu_pelaksanaan'),
            'lokasi'=> $request->input('lokasi'),
            'deskripsi'=> $request->input('deskripsi'),
            'jumlah_tiket'=> $request->input('jumlah_tiket'),
            'kategori'=> $request->input('kategori'),
            'poster'=> $request->input('poster'),
        ]);

        if($query){
            return back()->with('success', 'Event berhasil di buat');
        }
        else{
            return back()->with('fail', 'terdapat kesalahan');
        }
            
    }

    public function edit($id)
    {
     
        return view('editevent');
         
    }

}