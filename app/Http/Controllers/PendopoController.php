<?php

namespace App\Http\Controllers;

use App\Models\Pendopo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendopoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendopo = Pendopo::all();
    
        return view('pendopo.index',compact('pendopo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pendopo = Pendopo::all();
        return view('pendopo.create', compact('pendopo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nama_tanaman'=>'required',
        //     'jumlah'=>'required',
        //     'nama_latin'=>'required',
        //     'gambar'=>'image|file|max:2048|mimes:jpg,png,jpeg',
        //     'perawatan'=>'required',
        // ]);

        $imgName=null;
        if($request->gambar){
            $imgName=$request->gambar->getClientOriginalName() .'-' . time(). '-' . $request->gambar->extension();    
            
            //$imgName=$request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('post-images'),$imgName);
        }


        //pasien::create($request->all());
        Pendopo::create([
            'nama_tanaman'=>$request['nama_tanaman'],
            'jumlah'=>$request['jumlah'],
            'nama_latin'=>$request['nama_latin'],
            'gambar'=>$imgName,
            'perawatan'=>$request['perawatan'],
        ]);
     
        return redirect()->route('pendopo.index')
                        ->with('success','Data Berhasil Menyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendopo  $pendopo
     * @return \Illuminate\Http\Response
     */
    public function show(Pendopo $pendopo)
    {
        return view ('pendopo/show',compact('pendopo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendopo  $pendopo
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendopo $pendopo)
    {
        return view('pendopo.edit',compact('pendopo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pendopo  $pendopo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendopo $pendopo)
    {

        $imgName=null;
        if($request->gambar){
            $imgName=$request->gambar->getClientOriginalName() .'-' . time(). '-' . $request->gambar->extension();    
            
            //$imgName=$request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('post-images'),$imgName);
        }

        $pendopo->update([
            'nama_tanaman'=>$request['nama_tanaman'],
            'jumlah'=>$request['jumlah'],
            'nama_latin'=>$request['nama_latin'],
            'gambar'=>$imgName,
            'perawatan'=>$request['perawatan'],
        ]);
    
        return redirect()->route('pendopo.index')
                        ->with('success','Berhasil Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendopo  $pendopo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pendopo::where('id',$id);
        $data->delete();
        return redirect()->back();
    }
    public function cari(Request $request)
	{
		$cari = $request->cari;
 
		$pendopo = DB::table('pendopo')
		->where('nama_tanaman','like',"%".$cari."%")
		->paginate();

		return view('pendopo.index',['pendopo' => $pendopo]);
 
	}
}
