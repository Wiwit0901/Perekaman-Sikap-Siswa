<?php

namespace App\Http\Controllers;
use App\rayon;
use App\teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $teachers = Teacher::latest()->paginate(5);

  

        return view('teachers.index',compact('teachers'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $rayons=Rayon::all();
         return view('teachers.create',compact('rayons', $rayons));
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

            'jk' => 'required',

            'rayon' => 'required',

        ]);

  

        Teacher::create($request->all());

   

        return redirect()->route('teachers.index')

                        ->with('success','Teacher created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(teacher $teacher)
    {
        return view('teachers.show',compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(teacher $teacher)
    {
        $rayons=rayon::get();
         return view('teachers.edit',compact('rayons','teacher'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, teacher $teacher)
    {
        $request->validate([

            'nama' => 'required',

            'jk' => 'required',

            'rayon' => 'required',

        ]);

  

        $teacher->update($request->all());

  

        return redirect()->route('teachers.index')

                        ->with('success','Teacher updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(teacher $teacher)
    {
        $teacher->delete();

  

        return redirect()->route('teachers.index')

                        ->with('success','teacher deleted successfully');
    }
}
