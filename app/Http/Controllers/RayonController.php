<?php

  

namespace App\Http\Controllers;

  

use App\Rayon;

use Illuminate\Http\Request;

  

class RayonController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $rayons = rayon::latest()->paginate(5);

  

        return view('rayons.index',compact('rayons'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

   

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('rayons.create');

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

            'rayon' => 'required',

        ]);

  

        rayon::create($request->all());

   

        return redirect()->route('rayons.index')

                        ->with('success','rayon created successfully.');

    }

   

    /**

     * Display the specified resource.

     *

     * @param  \App\rayon  $rayon

     * @return \Illuminate\Http\Response

     */

    public function show(rayon $rayon)

    {

        return view('rayons.show',compact('rayon'));

    }

   

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\rayon  $rayon

     * @return \Illuminate\Http\Response

     */

    public function edit(rayon $rayon)

    {

        return view('rayons.edit',compact('rayon'));

    }

  

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\rayon  $rayon

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, rayon $rayon)

    {

        $request->validate([

            'rayon' => 'required',


        ]);

  

        $rayon->update($request->all());

  

        return redirect()->route('rayons.index')

                        ->with('success','rayon updated successfully');

    }

  

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\rayon  $rayon

     * @return \Illuminate\Http\Response

     */

    public function destroy(rayon $rayon)

    {

        $rayon->delete();

  

        return redirect()->route('rayons.index')

                        ->with('success','rayon deleted successfully');

    }

}