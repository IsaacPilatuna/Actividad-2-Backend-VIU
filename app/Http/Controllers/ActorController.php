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
        $actors = Actor::simplePaginate(5);
        return view('Actors/index')->with('actors',$actors);
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
        $actor->firstName=$request->get('firstName');
        $actor->lastName=$request->get('lastName');
        $actor->dateOfBirth=$request->get('dateOfBirth');
        $actor->nationality=$request->get('nationality');
        $actor->save();
        return redirect('/actors');
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
        $actor->firstName = $request->get('firstName');
        $actor->lastName = $request->get('lastName');
        $actor->dateOfBirth = $request->get('dateOfBirth');
        $actor->nationality = $request->get('nationality');
        $actor->save();
        return redirect('/actors');

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
        return redirect('/actors');
    }
}
