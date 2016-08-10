<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {
      $people = ['Joe', 'Jeanne', 'Joey'];

      return view('welcome', compact('people'));
    }

    public function about()
    {
        return view('pages.about');
    }
}
