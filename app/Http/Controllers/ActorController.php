<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $actores = Actor::simplePaginate(5);
        return view('Actors/index')->with('actores',$actores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Actors/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actor =new Actor();
        $actor->name=$request->get('name');
        $actor->apellidos=$request->get('surname');
        $actor->borndate=$request->get('borndate');
        $actor->nacionalidad=$request->get('nationality');
        $actor->save();
        return redirect('/actores');
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
        $actor = Actor::find($id);
        return view('Actors/edit')->with('actor',$actor);
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
        $actor = actor::find($id);
        $actor->name = $request->get('name');
        $actor->apellidos = $request->get('surname');
        $actor->borndate = $request->get('borndate');
        $actor->nacionalidad = $request->get('nationality');
        $actor->save();
        return redirect('/actores');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actor= Actor::find($id);
        $actor->delete();
        return redirect('/actores');
    }
}
