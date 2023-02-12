<?php

namespace App\Http\Controllers;
use App\Models\pengguna;
use File;
use Illuminate\Http\Request;

class pegawaiCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = pengguna::all();
        return view('admin.view_hadeer.mainPegawai',compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $item = pengguna::all(); 
       return view('admin.view_hadeer.createPegawai',compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data = pengguna::find($id);
      $item = pengguna::all();
      return view('admin.view_hadeer.showPegawai',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $item = pengguna::find($id);
       return view('admin.view_hadeer.editPegawai',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $message = [
            'required' => ':attribute harus diisi dulu',
            'min' => ':attribute minimal :min karakter',
            'max' => ':attribute maksimal :max karakter',
            'numeric' => ':attribute harus berupa angka',
            'mimes' => 'file yang didukung yaitu jpg,jpeg,giv,svg,cr2',
            'size' => 'file yang diupload maksimal :size',
        ];

        $this->validate($request,[
            'name' => 'required|min:4|max:30',
            'id_roles' => 'required|numeric',
            'email' => 'required',
            'password' => 'required|min:5', 
            'jk' => 'required',
            'alamat' => 'required|min:5',
            'foto' => 'mimes:jpg,jpeg,giv,svg,cr2,png'
        ],$message);

        
        if ($request->foto != ''){
            // dengan ganti foto
            // perintah hapus file foto yang lama
            $pegawai = pengguna::find($id);
            file::delete('/template/img'.$pegawai->foto);
  
            //ambil informasi file yang diupload
           $file = $request->file('foto');
  
          //rename + ambil nama file
           $nama_file = time()."_".$file->getClientOriginalName();
  
          // proses upload
          $tujuan_upload = './template/img';
          $file->move($tujuan_upload,$nama_file);
          // menyimpan data
          $pegawai->name = $request->name;
          $pegawai->id_roles = $request->id_roles;
          $pegawai->jk = $request->jk;
          $pegawai->email = $request->email;
          $pegawai->alamat = $request->alamat;
          $pegawai->password = $request->password;
          $pegawai->foto  = $nama_file;
          $pegawai->update();
          return redirect('/masterpegawai');
          } else {
             // tanpa ganti foto
             $pegawai = pengguna::find($id);
             $pegawai->name = $request->name;
             $pegawai->id_roles = $request->id_roles;
             $pegawai->jk = $request->jk;
             $pegawai->email = $request->email;
             $pegawai->alamat = $request->alamat;
             $pegawai->password = $request->password;
             $pegawai->save();
             return redirect('/masterpegawai');
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

