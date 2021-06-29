<?php

namespace App\Http\Controllers;
use App\Kejadian;
use App\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kejadians = Kejadian::latest()->paginate(5);
  
        return view('laporans.index',compact('kejadians'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
  
        // return view('laporans.index',compact('laporans'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('laporans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function show(Laporan $laporan)
    {
         return view('laporans.show',compact('laporan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
   
    public function destroy(Laporan $laporan)
    {
        //
    }
    public function cari(Request $request)
    {
        $request->validate([
            'startDate'=> 'required',
            'endDate'=> 'required',
            ]);
        $from = $request->startDate;
        $to = $request->endDate;
        $title="Laporan From: ".$from."To:".$to;
        $startDate = $from.' 00:00:00';
        $endDate = $to.' 23:59:59';

        $kejadians = Kejadian::whereBetween('tanggal', [$startDate,$endDate])->latest()->paginate(5);
        
        return view('laporans.index', compact('kejadians', 'startDate', 'endDate'))->with('i', (request()->input('page', 1) - 1) * 5);;
        // return view('laporans.index');
    }

    public function print(Request $request)
    {

        // $request->validate([
        //     'startDate'=> 'required',
        //     'endDate'=> 'required',
        //     ]);
        $kejadians = $request->kejadian;
        $from = $request->startDate;
        $to = $request->endDate;

        $title ="Laporan From: ".$from."To:".$to;
        $redirect = route('laporans');   
        if(isset($from) && isset($to)){
            $startDate = $from;
            $endDate = $to;

            $kejadians = Kejadian::whereBetween('tanggal', [$startDate,$endDate])->latest()->paginate(5);
            $startDate = explode(' ', $startDate)[0];
            $endDate = explode(' ', $endDate)[0];

            return view('laporans.print', compact('kejadians', 'startDate', 'endDate', 'redirect'))->with('i', (request()->input('page', 1) - 1) * 5);
        }else{
            $kejadians = Kejadian::latest()->paginate(5);

            return view('laporans.print', compact('kejadians', 'redirect'))->with('i', (request()->input('page', 1) - 1) * 5);
        }
  
    }

       
}


