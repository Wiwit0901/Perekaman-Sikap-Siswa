<?php

namespace App\Http\Controllers;
use App\Student;
use App\Kasus;
use App\kejadian;
use App\Teacher;
use PDF;
use Illuminate\Http\Request;

class KejadianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function exportPDF()
    {
        $kejadians = kejadian::get();
        $pdf = PDF::loadview('kejadians',compact('kejadians'));
        return $pdf->download('laporan_kejadians_'.date('Y-m-d_h-i-s').'pdf');
    }

    public function index()
    {
         $kejadians = Kejadian::latest()->paginate(5);

  

        return view('kejadians.index',compact('kejadians'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Kejadian $kejadian)
    {
        $students=Student::all();
        $kasuses=Kasus::all();
        $teachers=Teacher::all();
         return view('kejadians.create',compact('kejadian','students' , 'kasuses', 'teachers'));
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

            'nama' => 'required',
            'kode_kasus' => 'required',
        
           
            'nama_kasus' => 'required',

            'poin' => 'required',

            'tanggal' => 'required',

            'saksi' => 'required',
        ]);

        Kejadian::create($request->all());

        return redirect()->route('kejadians.index')

                        ->with('success','Kejadian created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kejadian  $kejadian
     * @return \Illuminate\Http\Response
     */
    public function show(kejadian $kejadian)
    {
        return view('kejadians.show',compact('kejadian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kejadian  $kejadian
     * @return \Illuminate\Http\Response
     */
    public function edit(kejadian $kejadian)
    {
        
         $students=Student::get();
         return view('kejadians.edit',compact('students' , 'kejadian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kejadian  $kejadian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kejadian $kejadian)
    {
        $request->validate([
            'nama' => 'required',
            'kode_kasus' => 'required',
    

            'nama_kasus' => 'required',

            'poin' => 'required',

            'tanggal' => 'required',

            'saksi' => 'required',

        ]);

  

        $kejadian->update($request->all());

  

        return redirect()->route('kejadians.index')

                        ->with('success','Kejadian updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kejadian  $kejadian
     * @return \Illuminate\Http\Response
     */
    public function destroy(kejadian $kejadian)
    {
        $kejadian->delete();

  

        return redirect()->route('kejadians.index')

                        ->with('success','Kejadian deleted successfully'); 
    }
}
