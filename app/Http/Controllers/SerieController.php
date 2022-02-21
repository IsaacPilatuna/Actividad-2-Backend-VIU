<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Director;
use App\Models\Language;
use App\Models\Platform;
use App\Models\Serie;
use App\Models\SerieActor;
use App\Models\SerieLanguage;
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
        $series = Serie::with(['director','platform','actors','audios','subtitles'])->simplePaginate(5);
        return view('Series/index')->with('series',$series);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $directors = Director::all();
        $actors = Actor::all();
        $platforms = Platform::all();
        $languages = Language::all();
        return view('Series/create')->with('directors',$directors)->with('platforms',$platforms)->with('actors',$actors)->with('languages',$languages);
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
        $serie->title=$request->get('title');
        $serie->platformId=$request->get('platform');
        $serie->directorId=$request->get('director');
        $serie->save();

        $actors = $request->get('actors');
        foreach ($actors as  $actor) {
            $serieActor = new SerieActor();
            $serieActor->actorId=$actor;
            $serieActor->serieId=$serie->id;
            $serieActor->save();
        }

        $audios = $request->get('audios');
        foreach ($audios as  $audio) {
            $serieLanguage = new SerieLanguage();
            $serieLanguage->languageId=$audio;
            $serieLanguage->serieId=$serie->id;
            $serieLanguage->type="Audio";
            $serieLanguage->save();
        }

        $subtitles = $request->get('subtitles');
        foreach ($subtitles as  $subtitle) {
            $serieLanguage = new SerieLanguage();
            $serieLanguage->languageId=$subtitle;
            $serieLanguage->serieId=$serie->id;
            $serieLanguage->type="Subtítulo";
            $serieLanguage->save();
        }

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
        return view('Series/edit')->with('serie',$serie);
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
        $serie->title=$request->get('title');
        $serie->platformId=$request->get('platformId');
        $serie->directorId=$request->get('directorId');
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
