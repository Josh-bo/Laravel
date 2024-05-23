<?php
// NOTE CONTROLLER

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoteappController extends Controller
{
    public function showNote()
    {
        return view('Noteapp.createNote');
    }

    public function addNote(Request $req)
    {
        $insert = DB::table('note')->insert([
            'title' => $req->title,
            'content' => $req->content,
        ]);

        if ($insert) {
            return redirect('/displayNote');
        } else {
            return ("Error Occurred");
        }
        // return ('Processing');
        // return ($req->content);
    }

    public function displayNote()
    {
        $select = DB::table('note')->get();
        // return ($select);
        return view('Noteapp.displayNote', [
            'allNote' => $select
        ]);
    }
}
