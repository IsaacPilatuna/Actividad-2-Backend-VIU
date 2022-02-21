<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class LanguageController extends Controller
{

    public function index(Request $request)
    {
        try{
            $searchString=null;
            if($request->has('searchString')){
                $searchString = $request->searchString;
                $languages = Language::where('name','like','%'.$searchString.'%')
                ->orWhere('name','like','%'.$searchString.'%')
                ->paginate(5);
            }else{
                $languages = Language::paginate(5);
            }
            return view('Languages/index',['languages'=>$languages, 'searchString'=>$searchString]);
        }catch (\Throwable $th) {
            return back()->withErrors([
                'error' =>  Lang::get('alerts.failed_read')
            ]);
        }
    }


    public function create()
    {
        return view('Languages/create');
    }


    public function store(Request $request)
    {
        try{
            $language =new Language();
            $language->name=$request->get('name');
            $language->isoCode=$request->get('isoCode');
            $language->save();
            return redirect('/languages')->with('success', Lang::get('alerts.success'));
        }catch (\Throwable $th) {
            return back()->withErrors([
                'error' =>  Lang::get('alerts.failed')
            ]);
        }
    }

    public function edit($id)
    {
        $language = Language::find($id);
        return view('Languages/edit')->with('language',$language);
    }

    public function update(Request $request, $id)
    {
        try{
            $language = Language::find($id);
            $language->name = $request->get('name');
            $language->isoCode = $request->get('isoCode');
            $language->save();
            return redirect('/languages')->with('success', Lang::get('alerts.success'));
        }catch (\Throwable $th) {
            return back()->withErrors([
                'error' =>  Lang::get('alerts.failed')
            ]);
        }

    }

    public function destroy($id)
    {
        try{
            $language= Language::find($id);
            $language->delete();
            return redirect('/languages')->with('info', Lang::get('alerts.deleted'));
        }catch (\Throwable $th) {
            return back()->withErrors([
                'error' =>  Lang::get('alerts.failed')
            ]);
        }
    }
}
