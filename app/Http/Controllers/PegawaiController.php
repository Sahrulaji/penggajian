<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use \App\Models\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Pegawai::all();

        return view('home',['data' => $data ]);
    }

    public function tampilkanSatuPegawai($id)
    {
       
        $data= Pegawai::find($id);
        
        return view('datapegawai.viewdata',['item' => $data]);  
            
    }
        

    public function tampilkanGaji($id)
        {       
        $data= Pegawai::find($id);
        //dd($data);
        // $gaji = ($data->gapok * 1000) /100;

        return view('datapegawai.viewdata',['item' => $data]);  
        // return view('payrol',['item' => $data, "title"=>"adsfdsf", 'gajiterupdate' => $gaji   ]);    
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        // dd($request->all());
        $pegawai= new Pegawai;
        $pegawai->nip =$request->nip;
        $pegawai->nama =$request->nama;
        $pegawai->rekening =$request->rekening;
        $pegawai->jabatan =$request->jabatan;
        $pegawai->gapok =$request->gapok;
        $pegawai->masuk =$request->masuk ??'';
        $pegawai ->file ='';
        $pegawai ->save ();
        
        return redirect('/');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= Pegawai::find($id);
        
        return view('datapegawai.editdata',['item' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->all());
        $id=$request->id;
        $pegawai= Pegawai::find($id);
        $pegawai->nip =$request->nip;
        $pegawai->nama =$request->nama;
        $pegawai->rekening =$request->rekening;
        $pegawai->jabatan =$request->jabatan;
        $pegawai->gapok =$request->gapok;
        $pegawai->masuk =$request->masuk;
        $pegawai ->file ='';
        $pegawai ->save ();
        
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();
        return back();
    }
    
}
