<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public function changeLang(Request $request, $language)
    {
        $request->session()->put('website_language', $language);

        return redirect()->back();
    }
}
