<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;


class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $director = Director::simplePaginate(5);;
        return view('Directors/index')->with('directors',$director);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Directors/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $director =new Director();
        $director->firstName=$request->get('firstName');
        $director->lastName=$request->get('lastName');
        $director->dateOfBirth=$request->get('dateOfBirth');
        $director->nationality=$request->get('nationality');
        $director->save();
        return redirect('/directors');
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
        $director = Director::find($id);
        return view('Directors/edit')->with('director',$director);
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
        $director = Director::find($id);
        $director->firstName = $request->get('firstName');
        $director->lastName = $request->get('lastName');
        $director->dateOfBirth = $request->get('dateOfBirth');
        $director->nationality = $request->get('nationality');
        $director->save();
        return redirect('/directors');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $director= Director::find($id);
        $director->delete();
        return redirect('/directors');
    }
}
