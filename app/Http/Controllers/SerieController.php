<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = Serie::simplePaginate(5);
        return view('Serie/index')->with('series',$series);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Serie/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $serie =new Serie();
        $serie->titulo=$request->get('titulo');
        $serie->idPlataforma=$request->get('idPlataforma');
        $serie->idDirector=$request->get('idDirector');
        $serie->save();
        return redirect('/series');

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
        $serie = Serie::find($id);
        return view('Serie/edit')->with('serie',$serie);
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

        $serie = Serie::find($id);
        $serie->titulo=$request->get('titulo');
        $serie->idPlataforma=$request->get('idPlataforma');
        $serie->idDirector=$request->get('idDirector');
        $serie->save();
        return redirect('/series');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $serie= Serie::find($id);
        $serie->delete();
        return redirect('/series');

    }
}
