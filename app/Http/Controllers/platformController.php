<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Platform;

class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {

        $plataformas = Platform::simplePaginate(5);
        return view('home')->with('plataformas',$plataformas);

    }

    public function index()
    {

        $plataformas = Platform::simplePaginate(5);
        return view('Platform/index')->with('plataformas',$plataformas);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Platform/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plataforma =new Platform();
        $plataforma->name=$request->get('name');
        $plataforma->save();

        return redirect('/plataformas');
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
        $plataforma = Platform::find($id);
        return view('Platform/edit')->with('plataforma',$plataforma);
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
        $plataforma = Platform::find($id);
        $plataforma->name=$request->get('name');
        $plataforma->save();

        return redirect('/plataformas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plataforma = Platform::find($id);
        $plataforma->delete();
        return redirect('/plataformas');
    }
}
