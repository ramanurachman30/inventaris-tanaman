<?php

namespace App\Http\Controllers;

use App\Models\Variatif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VariatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $variatif = Variatif::all();
    
        return view('variatif.index',compact('variatif'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $variatif = Variatif::all();
        return view('variatif.create', compact('variatif'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imgName=null;
        if($request->gambar){
            $imgName=$request->gambar->getClientOriginalName() .'-' . time(). '-' . $request->gambar->extension();    
            
            //$imgName=$request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('post-images'),$imgName);
        }
        Variatif::create([
            'jenis_tanaman'=>$request['jenis_tanaman'],
            'jumlah'=>$request['jumlah'],
            'nama_latin'=>$request['nama_latin'],
            'manfaat'=>$request['manfaat'],
            'gambar'=>$imgName,
            'perbanyakan'=>$request['perbanyakan'],
            'perawatan'=>$request['perawatan'],
        ]);
     
        return redirect()->route('variatif.index')
                        ->with('success','Data Berhasil Menyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Variatif  $variatif
     * @return \Illuminate\Http\Response
     */
    public function show(Variatif $variatif)
    {
        return view ('variatif/show',compact('variatif'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Variatif  $variatif
     * @return \Illuminate\Http\Response
     */
    public function edit(Variatif $variatif)
    {
        return view('variatif.edit',compact('variatif'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Variatif  $variatif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Variatif $variatif)
    {
        $imgName=null;
        if($request->gambar){
            $imgName=$request->gambar->getClientOriginalName() .'-' . time(). '-' . $request->gambar->extension();    
            
            //$imgName=$request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('post-images'),$imgName);
        }

        $variatif->update([
            'jenis_tanaman'=>$request['jenis_tanaman'],
            'jumlah'=>$request['jumlah'],
            'nama_latin'=>$request['nama_latin'],
            'manfaat'=>$request['manfaat'],
            'gambar'=>$imgName,
            'perbanyakan'=>$request['perbanyakan'],
            'perawatan'=>$request['perawatan'],
        ]);
    
        return redirect()->route('variatif.index')
                        ->with('success','Berhasil Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Variatif  $variatif
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Variatif::where('id',$id);
        $data->delete();
        return redirect()->back();
    }
}
