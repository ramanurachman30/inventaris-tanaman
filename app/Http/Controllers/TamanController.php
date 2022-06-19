<?php

namespace App\Http\Controllers;

use App\Models\Taman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taman = Taman::all();
    
        return view('taman.index',compact('taman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $taman = Taman::all();
        return view('taman.create', compact('taman'));
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
        Taman::create([
            'nama_buah'=>$request['nama_buah'],
            'jumlah'=>$request['jumlah'],
            'nama_latin'=>$request['nama_latin'],
            'manfaat'=>$request['manfaat'],
            'gambar'=>$imgName,
            'perbanyakan'=>$request['perbanyakan'],
            'perawatan'=>$request['perawatan'],
        ]);
     
        return redirect()->route('taman.index')
                        ->with('success','Data Berhasil Menyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Taman  $taman
     * @return \Illuminate\Http\Response
     */
    public function show(Taman $taman)
    {
        return view ('taman/show',compact('taman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Taman  $taman
     * @return \Illuminate\Http\Response
     */
    public function edit(Taman $taman)
    {
        return view('taman.edit',compact('taman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Taman  $taman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Taman $taman)
    {
        $imgName=null;
        if($request->gambar){
            $imgName=$request->gambar->getClientOriginalName() .'-' . time(). '-' . $request->gambar->extension();    
            
            //$imgName=$request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('post-images'),$imgName);
        }

        $taman->update([
            'nama_buah'=>$request['nama_buah'],
            'jumlah'=>$request['jumlah'],
            'nama_latin'=>$request['nama_latin'],
            'manfaat'=>$request['manfaat'],
            'gambar'=>$imgName,
            'perbanyakan'=>$request['perbanyakan'],
            'perawatan'=>$request['perawatan'],
        ]);
    
        return redirect()->route('taman.index')
                        ->with('success','Berhasil Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Taman  $taman
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Taman::where('id',$id);
        $data->delete();
        return redirect()->back();
    }
}
