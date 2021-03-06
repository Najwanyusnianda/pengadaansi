<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permintaan;
use App\User;
use App\Person;
use App\Bagian;

use DataTables;

class PermintaanController extends Controller
{
    //
    public function index(){
        $kasi=Person::where('role_id','=',5)->get();
        if (count($kasi)> 0) {
            return view('pages.permintaan.permintaan',compact('kasi'));
        }
        return view('pages.permintaan.permintaan');
    }

    public function bagianIndex(){

        if(auth()->user()->type!='bagian'){

        return view('pages.permintaan.permintaan_bagian');
        }
        else{
            $permintaan=Permintaan::where('kode_bagian',auth()->user()->bagian->kode_bagian)->get();
            return view('pages.permintaan.permintaan_bagian',compact('permintaan'));
            //database nama bagian->kode bagian
          
        }
    }

    public function create(){
        return view('pages.permintaan.permintaan_entri');
    }

    public function edit(){
        return view('pages.permintaan.permintaan_edit');
    }

    public function show($id){

        return view('pages.permintaan.permintaan_detail');
        
    }

   /* public function store(Request $request){

        $date_range=$request->date_start;
        $date_explode=explode(' - ',$date_range);
        $date_start=$date_explode[0];
        $date_start=trim($date_start);
        $date_end=$date_explode[1];
        $date_end=trim($date_end);

        $user_id=auth()->user()->id;
        $user_sm=Bagian::where('user_id',$user_id)->first();
        //$user_sm=BagianSubject::where('user_id',(int)$user_id)->first();
        //$user_sm=DB::table('bagian_subjects')->where('user_id',$user_id)->first();
        Permintaan::create([
            'nomor_form'=>$request->form_kode,
            'kode_kegiatan'=>$request->kode_Kegiatan,
            'output'=>$request->Output,
            'komponen'=>$request->Komponen,
            'sub_komponen'=>$request->SubKomponen,
            'grup_akun'=>$request->GrupAkun,
            'judul'=>$request->JudulPermintaan,
            'jenis_pengadaan'=>$request->jenis_pengadaan,
            'anggaran'=>(int)$request->JumlahAnggaran,
            'date_mulai'=>date('Y-m-d', strtotime($date_start)),
            'date_selesai'=>date('Y-m-d', strtotime($date_end)),
            'date_created_form'=>date('Y-m-d', strtotime($request->date_Form)),
            'nama_bagian' =>$user_sm->nama_bagian
             //$user_sm->kode_bagian
        ]);
        $request->session()->flash('success', 'Permintaan Berhasil ditambahkan');
        return redirect()->back();

    }*/


    public function store(Request $request){
        $user_id=auth()->user()->id;
        $user_sm=Bagian::where('user_id',$user_id)->first();
        //$user_sm=BagianSubject::where('user_id',(int)$user_id)->first();
        //$user_sm=DB::table('bagian_subjects')->where('user_id',$user_id)->first();
        Permintaan::create([
            'nomor_form'=>$request->form_kode,
            'kode_kegiatan'=>$request->kode_Kegiatan,
            'output'=>$request->Output,
            'komponen'=>$request->Komponen,
            'sub_komponen'=>$request->SubKomponen,
            'grup_akun'=>$request->GrupAkun,
            'judul'=>$request->JudulPermintaan,
            'jenis_pengadaan'=>'$request->jenis_pengadaan',
            'anggaran'=>(int)$request->JumlahAnggaran,
            'date_mulai'=>date('Y-m-d', strtotime($request->date_mulai)),
            'date_selesai'=>date('Y-m-d', strtotime($request->date_selesai)),
            'date_created_form'=>date('Y-m-d', strtotime($request->date_Form)),
            'kode_bagian' =>auth()->user()->bagian->kode_bagian
             //$user_sm->kode_bagian
        ]);
        $request->session()->flash('success', 'Permintaan Berhasil ditambahkan');
        return redirect()->back();

    }

    public function update(Request $request){

        $permintaan=Permintaan::find($id);

        $date_range=$request->date_start;
        $date_explode=explode(' - ',$date_range);
        $date_start=$date_explode[0];
        $date_start=trim($date_start);
        $date_end=$date_explode[1];
        $date_end=trim($date_end);

        $user_id=auth()->user()->id;
        $user_sm=BagianSubject::where('user_id',$user_id)->first();
       

        $permintaan->update([
            'nomor_form'=>$request->form_kode,
            'kode_kegiatan'=>$request->kode_Kegiatan,
            'output'=>$request->Output,
            'komponen'=>$request->Komponen,
            'sub_komponen'=>$request->SubKomponen,
            'grup_akun'=>$request->GrupAkun,
            'judul'=>$request->JudulPermintaan,
            'jenis_pengadaan'=>$request->jenis_pengadaan,
            'anggaran'=>(int)$request->JumlahAnggaran,
            'date_mulai'=>date('Y-m-d', strtotime($date_start)),
            'date_selesai'=>date('Y-m-d', strtotime($date_end)),
            'date_created_form'=>date('Y-m-d', strtotime($request->date_Form)),
            'nama_bagian' =>$user_sm->nama_bagian
        ]);

        return redirect()->route('permintaan.index');
        
    }

    public function destroy($id){

        $permintaan=Permintaan::find($id);
        $permintaan->delete();

        return redirect()->route('permintaan.index');
        
    }

    
    public function dataTable(){
       // $model=Permintaan::select('judul','kode_kegiatan','kode_bagian','anggaran')->get();
       $model=Permintaan::all();
       return DataTables::of($model)->addColumn('disposisi',function($model){
            return view('pages.permintaan._btnDisposisi',[
                'id'=>$model->id,
                'url_show' => route('permintaan.show',$model->id),
            ]);
        })->addColumn('status',function($model){
            return view('pages.permintaan._status',[
                'status_badge'=>$model->disposisi_status ==  'baru' ? 'badge-danger' : ($model->disposisi_status == 'dikerjakan' ? 'badge-success' : 'badge-warning'),
                'status'=> $model->disposisi_status
            ]);})->addIndexColumn()->rawColumns(['disposisi','status'])->make(true);
    }
}
