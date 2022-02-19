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
        $directores = Director::simplePaginate(5);;
        return view('Director/index')->with('directores',$directores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Director/create');
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
        $director->name=$request->get('name');
        $director->apellidos=$request->get('surname');
        $director->borndate=$request->get('borndate');
        $director->nacionalidad=$request->get('nationality');
        $director->save();
        return redirect('/directores');
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
        return view('Director/edit')->with('director',$director);
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
        $director->name = $request->get('name');
        $director->apellidos = $request->get('surname');
        $director->borndate = $request->get('borndate');
        $director->nacionalidad = $request->get('nationality');
        $director->save();
        return redirect('/directores');

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
        return redirect('/directores');
    }
}
