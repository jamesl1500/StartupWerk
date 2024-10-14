<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndustriesExplorerController extends Controller
{
    //
    public function index()
    {
        return view('industry_explorer.index');
    }
}
