<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Session;

class LocalizationController extends Controller
{
    public function getLang() {
        return App::getLocale();
    }

    public function setLang($lang){
        Session::put('lang', $lang);
        return redirect()->back();
    }
}
