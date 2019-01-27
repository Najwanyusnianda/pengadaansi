<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disposisi;
use App\User;
use App\Permintaan;
use App\Person;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DisposisiController extends Controller
{
    //

    public function store(Request $request){
        $pengirim=Person::where('user_id','=',auth()->user()->id)->first();
           $kasi_selected=Person::where('nama','=','kasi1')->first();
        

     $disposisi=Disposisi::create([
            'pengirim_id'=>$pengirim->id,
            'penerima_id'=>$kasi_selected->id,
            'pp_id'=>'4',
            'isi'=>$request->msg_disposisi,
            'permintaan_id'=>$request->permintaanid
        ]);

  /*      $disposisi=Disposisi::create([
            'pengirim_id'=>'1',
            'penerima_id'=>'3',
            'pp_id'=>'4',
            'isi'=>'$request->msg_disposisi',
            'permintaan_id'=>2
        ]);*/

        $permintaanUpdate=Permintaan::find($disposisi->permintaan_id);

        $permintaanUpdate->disposisi_status="disposisi";
        $permintaanUpdate->save();

        
    }

    public function index(){
        $disposisi=Disposisi::all();
       
        //$disposisi_pengirim=DB::table('disposisis')->join('people AS a','disposisis.pengirim_id','=','a.id')->select('disposisis.*','a.nama as nama_pengirim')->get();
        //$disposisi_penerima=DB::table('disposisis')->join('people','disposisis.penerima_id','=','people.id')->select('disposisis.*','people.nama as nama_penerima');
        
        $disposisi=DB::table('disposisis')
        ->join('people AS a','disposisis.pengirim_id','=','a.id')
        ->select('disposisis.*','a.nama as nama_pengirim')
        ->join('people AS b','disposisis.penerima_id','=','b.id')
        ->select('disposisis.*','b.nama as nama_penerima','a.nama as nama_pengirim')
        ->get();

        //$penerima=$disposisi_penerima->pluck('nama_penerima');

        Carbon::setLocale('id');
        
        
        return view('pages.disposisi.disposisi_list',compact('disposisi'));
    }

    public function show($id){
        $disposisi=Disposisi::find($id);
        return view('pages.disposis.disposisi_detail',compact('disposisi'));
    }

    public function disposisiTable(){

    }



}
