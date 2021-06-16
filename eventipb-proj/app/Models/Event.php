<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Event extends Model
{ 
    use HasFactory;

    protected $primaryKey = 'idevent';
    protected $data = "events";
    public $timestamps=false;

    // public function allData()
    // {
    //     return DB::table('events')->get();
    // }

    // public function detailData($id_event){
    //     return DB::table('events')->where('id_event', $id_event)->first();
    // }
    
}