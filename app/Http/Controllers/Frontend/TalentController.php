<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TalentController extends Controller
{
    public function index()
    {
        return view('pages.talents');
    }

    public function show($id)
    {
        return view('pages.talent-single');
    }
}
