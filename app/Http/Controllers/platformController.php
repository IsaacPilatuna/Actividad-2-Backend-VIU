<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Platform;
use Illuminate\Support\Facades\Lang;

class PlatformController extends Controller
{
    public function console_log( $data ){
      echo '<script>';
      echo 'console.log('. json_encode( $data ) .')';
      echo '</script>';
    }

    public function home(Request $request)
    {
        try{
            $searchString=null;
            if($request->has('searchString')){
                $searchString = $request->searchString;
                $platforms = Platform::where('name','like','%'.$searchString.'%')
                ->paginate(5);
            }else{
                $platforms = Platform::paginate(5);
            }
            return view('home',['platforms'=>$platforms, 'searchString'=>$searchString]);
        }catch (\Throwable $th) {
            return back()->withErrors([
                'error' =>  Lang::get('alerts.failed_read')
            ]);
        }

    }

    public function index(Request $request)
    {
        try{
            $searchString=null;
            if($request->has('searchString')){
                $searchString = $request->searchString;
                $platforms = Platform::where('name','like','%'.$searchString.'%')
                ->paginate(5);
            }else{
                $platforms = Platform::paginate(5);
            }
            return view('Platforms\index',['platforms'=>$platforms, 'searchString'=>$searchString]);
        }catch (\Throwable $th) {
            return back()->withErrors([
                'error' =>  Lang::get('alerts.failed_read')
            ]);
        }

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
        try{
            $platform =new Platform();
            $platform->name=$request->get('name');
            $platform->save();
            return redirect('/platforms')->with('success', Lang::get('alerts.success'));;
        }catch (\Throwable $th) {
            return back()->withErrors([
                'error' =>  Lang::get('alerts.failed')
            ]);
        }
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
        try{
            $platform = Platform::find($id);
            $platform->name=$request->get('name');
            $platform->save();
            return redirect('/platforms')->with('success', Lang::get('alerts.success'));
        }catch (\Throwable $th) {
            return back()->withErrors([
                'error' =>  Lang::get('alerts.failed')
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $platform = Platform::find($id);
            $platform->delete();
            return redirect('/platforms')->with('info', Lang::get('alerts.deleted'));
        }catch (\Throwable $th) {
            return back()->withErrors([
                'error' =>  Lang::get('alerts.failed')
            ]);
        }
    }
}
