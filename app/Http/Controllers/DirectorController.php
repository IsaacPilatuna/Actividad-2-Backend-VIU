<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class DirectorController extends Controller
{
    public function index(Request $request)
    {
        try{
            $searchString=null;
            if($request->has('searchString')){
                $searchString = $request->searchString;
                $directors = Director::where('firstName','like','%'.$searchString.'%')
                ->orWhere('lastName','like','%'.$searchString.'%')
                ->orWhere('dateOfBirth','like','%'.$searchString.'%')
                ->orWhere('nationality','like','%'.$searchString.'%')
                ->paginate(5);
            }else{
                $directors = Director::paginate(5);
            }
            return view('Directors/index',['directors'=>$directors, 'searchString'=>$searchString]);
        }catch (\Throwable $th) {
            return back()->withErrors([
                'error' =>  Lang::get('alerts.failed_read')
            ]);
        }
    }

    public function create()
    {
        return view('Directors/create');
    }

    public function store(Request $request)
    {
        try{
            $director =new Director();
            $director->firstName=$request->get('firstName');
            $director->lastName=$request->get('lastName');
            $director->dateOfBirth=$request->get('dateOfBirth');
            $director->nationality=$request->get('nationality');
            $director->save();
            return redirect('/directors')->with('success', Lang::get('alerts.success'));
        }catch (\Throwable $th) {
            return back()->withErrors([
                'error' =>  Lang::get('alerts.failed')
            ]);
        }
    }


    public function edit($id)
    {
        $director = Director::find($id);
        return view('Directors/edit')->with('director',$director);
    }

    public function update(Request $request, $id)
    {
        try{
            $director = Director::find($id);
            $director->firstName = $request->get('firstName');
            $director->lastName = $request->get('lastName');
            $director->dateOfBirth = $request->get('dateOfBirth');
            $director->nationality = $request->get('nationality');
            $director->save();
            return redirect('/directors')->with('success', Lang::get('alerts.success'));
        }catch (\Throwable $th) {
            return back()->withErrors([
                'error' =>  Lang::get('alerts.failed')
            ]);
        }

    }

    public function destroy($id)
    {
        try{
            $director= Director::find($id);
            $director->delete();
            return redirect('/directors')->with('info', Lang::get('alerts.deleted'));
        }catch (\Throwable $th) {
            return back()->withErrors([
                'error' =>  Lang::get('alerts.failed')
            ]);
        }
    }
}
