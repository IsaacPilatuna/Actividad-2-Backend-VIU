<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Serie extends Model
{
    use SoftDeletes;
    protected $table = 'series';

    public function director() {
        return $this->belongsTo(Director::class,"directorId","id");
    }

    public function platform() {
        return $this->belongsTo(Platform::class,"platformId","id");
    }

    public function actors(){
        return $this->hasManyThrough(
            Actor::class,
            SerieActor::class,
            "serieId","id",
            "id","actorId"
        );
    }

    public function audios(){
        return $this->hasManyThrough(
            Language::class,
            SerieLanguage::class,
            "serieId","id",
            "id","languageId"
        )->where('type', '=', 'Audio');
    }

    public function subtitles(){
        return $this->hasManyThrough(
            Language::class,
            SerieLanguage::class,
            "serieId","id",
            "id","languageId"
        )->where('type', '=', 'Subtítulo');
    }
}
