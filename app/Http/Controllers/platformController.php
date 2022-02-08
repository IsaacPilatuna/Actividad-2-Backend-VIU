<?php

namespace App\Http\Controllers;

use App\Models\Platform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;


class platformController extends Controller
{
    public function index(){
        $platform = DB::table('platforms')->select('id','name')->get();
        return view('listplatform',compact('platform'));
    }


}
