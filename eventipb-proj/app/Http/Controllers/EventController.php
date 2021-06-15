<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Http\Controllers;
use App\Models\Event;
// namespace App\Http\Controllers;

class EventController extends Controller
{
    public function deskripsi(){
        return view('welcome');
        // $data['events'] = Event::all();
        // return view('deskEvent')->with($data);;
    }
    
    function index($id_event){
        // return Event::find($id_event);
        return('halooooowww');
    }
    // public function show(){
    //     $user = Event::all();
    //     return redirect()->route('user.home', ['events'=>$data]);
    // }
    // function show(){
    //     return view('dashboard.user.home');
    // }

    // public function addData($data)
    // {
    //     $data=[
    //         'nama_organisasi'=> $request->input('nama_organisasi'),
    //             'nama_event'=> $request->input('nama_event'),
    //             'tanggal_pelaksanaan' => $request->input('tanggal_pelaksanaan'),
    //             'waktu_pelaksanaan'=> $request->input('waktu_pelaksanaan'),
    //             'lokasi'=> $request->input('lokasi'),
    //             'deskripsi'=> $request->input('deskripsi'),
    //             'jumlah_tiket'=> $request->input('jumlah_tiket'),
    //             'kategori'=> $request->input('kategori'),
    //             'poster'=> $request->input('poster'),
    //     ];
    
    //     $this->Event->addData($data);
    //     return redirect()->route('dashboard.user.home')->with('pesan', 'Data berhasil ditambah');
        
    // }
 
    // function index(){
    //     return view('event');
    // }

    // function index_konf(){
    //     return view('konfirmasievent');
    // }

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

    // public function edit($id)
    // {
     
    //     return view('editevent');
  
    // }

}