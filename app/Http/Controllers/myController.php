<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Person;

class myController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $people = Person::all();

      return view('index', compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createNew');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // print_r($request -> all());
      // die();
        $validatedData = $request -> validate([
          'firstname' => 'required',
          'lastname' => 'required',
          'age' => 'required',
          'jobTitle' => 'required'
        ]);

        // dd($validatedData);

        Person::create($validatedData);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $person = Person::findOrFail($id);
        return view('editPerson', compact('person'));
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
      $validatedData = $request -> validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'age' => 'required',
        'jobTitle' => 'required'
      ]);

      // dd($validatedData);

      Person::whereId($id)->update($validatedData);
      return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person = Person::findOrFail($id);
        $person -> delete();

        return redirect('/');
    }
}
