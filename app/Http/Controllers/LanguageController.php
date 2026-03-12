<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switch(string $lang): RedirectResponse
    {
        if (array_key_exists($lang, config('app.available_locales'))) {
            Session::put('locale', $lang);
        }

        return redirect()->back();
    }
}
