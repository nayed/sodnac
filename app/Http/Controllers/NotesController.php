<?php

namespace App\Http\Controllers;

use App\Note;
use App\Card;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {
        $card->addNote(
            new Note($request->all())
        );

        return back();
    }
}
