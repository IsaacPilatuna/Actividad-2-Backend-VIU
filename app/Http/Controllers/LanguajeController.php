<?php

namespace App\Http\Controllers;

use App\Models\languaje;
use Illuminate\Http\Request;

class LanguajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idiomas = languaje::simplePaginate(5);
        return view('Lenguaje/index')->with('idiomas',$idiomas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Lenguaje/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idioma =new languaje();
        $idioma->name=$request->get('name');
        $idioma->codigoISO=$request->get('codigoISO');
        $idioma->save();
        return redirect('/lenguajes');
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
        $idioma = languaje::find($id);
        return view('Lenguaje/edit')->with('idioma',$idioma);
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
        $idioma = languaje::find($id);
        $idioma->name = $request->get('name');
        $idioma->codigoISO = $request->get('codigoISO');
        $idioma->save();
        return redirect('/lenguajes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $idioma= languaje::find($id);
        $idioma->delete();
        return redirect('/lenguajes');
    }
}
