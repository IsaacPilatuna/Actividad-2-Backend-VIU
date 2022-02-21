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

        $platforms = Platform::simplePaginate(5);
        return view('home')->with('platforms',$platforms);

    }

    public function index()
    {

        $platforms = Platform::simplePaginate(5);
        return view('Platforms/index')->with('platforms',$platforms);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Platforms/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $platform =new Platform();
        $platform->name=$request->get('name');
        $platform->save();

        return redirect('/platforms');
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
        $platform = Platform::find($id);
        return view('Platforms/edit')->with('platform',$platform);
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
        $platform = Platform::find($id);
        $platform->name=$request->get('name');
        $platform->save();

        return redirect('/platforms');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $platform = Platform::find($id);
        $platform->delete();
        return redirect('/platforms');
    }
}
