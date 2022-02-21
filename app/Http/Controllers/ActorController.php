<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class ActorController extends Controller
{

    public function index(Request $request)
    {
        try{
            $searchString=null;
            if($request->has('searchString')){
                $searchString = $request->searchString;
                $actors = Actor::where('firstName','like','%'.$searchString.'%')
                ->orWhere('lastName','like','%'.$searchString.'%')
                ->orWhere('dateOfBirth','like','%'.$searchString.'%')
                ->orWhere('nationality','like','%'.$searchString.'%')
                ->paginate(5);
            }else{
                $actors = Actor::paginate(5);
            }
            return view('Actors/index',['actors'=>$actors, 'searchString'=>$searchString]);
        }catch (\Throwable $th) {
            return back()->withErrors([
                'error' =>  Lang::get('alerts.failed_read')
            ]);
        }
    }

    public function create()
    {
        return view('Actors/create');
    }

    public function store(Request $request)
    {
        try {
            $actor =new Actor();
            $actor->firstName=$request->get('firstName');
            $actor->lastName=$request->get('lastName');
            $actor->dateOfBirth=$request->get('dateOfBirth');
            $actor->nationality=$request->get('nationality');
            $actor->save();
            return redirect('/actors')->with('success', Lang::get('alerts.success'));;
        } catch (\Exception $th) {
            return back()->withErrors([
                'error' =>  Lang::get('alerts.failed')
            ]);
        }
    }

    public function edit($id)
    {
        $actor = Actor::find($id);
        return view('Actors/edit')->with('actor',$actor);
    }

    public function update(Request $request, $id)
    {
        try {
            $actor = actor::find($id);
            $actor->firstName = $request->get('firstName');
            $actor->lastName = $request->get('lastName');
            $actor->dateOfBirth = $request->get('dateOfBirth');
            $actor->nationality = $request->get('nationality');
            $actor->save();
            return redirect('/actors')->with('success', Lang::get('alerts.success'));
        } catch (\Throwable $th) {
            return back()->withErrors([
                'error' =>  Lang::get('alerts.failed')
            ]);
        }

    }

    public function destroy($id)
    {
        try{
            $actor= Actor::find($id);
            $actor->delete();
            return redirect('/actors')->with('info', Lang::get('alerts.deleted'));
        }catch (\Throwable $th) {
            return back()->withErrors([
                'error' =>  Lang::get('alerts.failed')
            ]);
        }
    }
}
