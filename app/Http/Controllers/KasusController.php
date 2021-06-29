<?php

namespace App\Http\Controllers;

use App\kasus;
use App\kejadian;

use Illuminate\Http\Request;

class KasusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kasuses = Kasus::latest()->paginate(5);

  

        return view('kasuses.index',compact('kasuses'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kejadians=Kejadian::all();
         return view('kasuses.create',compact('kejadians' , $kejadians));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'kode_kasus' => 'required',
        

            'nama_kasus' => 'required',

            'poin' => 'required',

        ]);

        Kasus::create($request->all());

        return redirect()->route('kasuses.index')

                        ->with('success','Kasus created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function show(kasus $kasus)
    {
        return view('kasuses.show',compact('kasus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function edit(kasus $kasus)
    {
         $kejadians=Kejadian::get();
         return view('kasuses.edit',compact('kejadians' , 'kasus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kasus $kasus)
    {
        $request->validate([
            
            'kode_kasus' => 'required',
        

            'nama_kasus' => 'required',

            'poin' => 'required',

           
        ]);

  

        $kasus->update($request->all());

  

        return redirect()->route('kasuses.index')

                        ->with('success','Kasus updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kasus  $kasus
     * @return \Illuminate\Http\Response
     */
    public function destroy(kasus $kasus)
    {
        $kasus->delete();

  

        return redirect()->route('kasuses.index')

                        ->with('success','Kasus deleted successfully'); 
    }
}
