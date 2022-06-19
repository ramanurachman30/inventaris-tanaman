<?php

namespace App\Http\Controllers;

use App\Models\Produktif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduktifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produktif = Produktif::all();
    
        return view('produktif.index',compact('produktif'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produktif = Produktif::all();
        return view('produktif.create', compact('produktif'));
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


        //pasien::create($request->all());
        Produktif::create([
            'nama_sayuran'=>$request['nama_sayuran'],
            'nama_latin'=>$request['nama_latin'],
            'manfaat'=>$request['manfaat'],
            'gambar'=>$imgName,
            'perbanyakan'=>$request['perbanyakan'],
            'perawatan'=>$request['perawatan'],
            'hasil_penjualan'=>$request['hasil_penjualan'],
            'jenis_budidaya'=>$request['jenis_budidaya'],
        ]);
     
        return redirect()->route('produktif.index')
                        ->with('success','Data Berhasil Menyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produktif  $produktif
     * @return \Illuminate\Http\Response
     */
    public function show(Produktif $produktif)
    {
        return view ('produktif/show',compact('produktif'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produktif  $produktif
     * @return \Illuminate\Http\Response
     */
    public function edit(Produktif $produktif)
    {
        return view('produktif.edit',compact('produktif'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produktif  $produktif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produktif $produktif)
    {
        $imgName=null;
        if($request->gambar){
            $imgName=$request->gambar->getClientOriginalName() .'-' . time(). '-' . $request->gambar->extension();    
            
            //$imgName=$request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('post-images'),$imgName);
        }
        $produktif->update([
            'nama_sayuran'=>$request['nama_sayuran'],
            'nama_latin'=>$request['nama_latin'],
            'manfaat'=>$request['manfaat'],
            'gambar'=>$imgName,
            'perbanyakan'=>$request['perbanyakan'],
            'perawatan'=>$request['perawatan'],
            'hasil_penjualan'=>$request['hasil_penjualan'],
            'jenis_budidaya'=>$request['jenis_budidaya'],
        ]);
    
        return redirect()->route('produktif.index')
                        ->with('success','Berhasil Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produktif  $produktif
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Produktif::where('id',$id);
        $data->delete();
        return redirect()->back();
    }
}
