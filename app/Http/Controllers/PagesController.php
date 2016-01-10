<?php

namespace App\Http\Controllers;

use App\Models\Quote;

class PagesController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        return view('index');
    }

    public function motivationPage()
    {
        $quotes = Quote::all();

        return view('motivational', ['random_quote' => $quotes->random()]);
    }

    public function demotivationPage()
    {
        return view('demotivational');
    }
}
