<?php

namespace App\Http\Controllers;

use App\Models\Joke;
use App\Models\Quote;
use App\Models\Scare;

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

    public function jokePage()
    {
        $joke = Joke::all()->random();

        return view('joke', ['joke' => $joke->text]);
    }

    public function scarePage()
    {
        $scares = Scare::all();
        $scare = explode('|', $scares->random()->text);

        return view('scare', ['scare' => $scare]);
    }
}
