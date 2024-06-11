<?php
// NOTE CONTROLLER

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NoteappController extends Controller
{
    public function showNote()
    {
        return view('Noteapp.createNote');
    }

    public function addNote(Request $req)
    {
        // dd($req);
        $newName = time() . $req->image->getClientOriginalName();
        // return $newName;
        $move = $req->image->move(public_path('images/'), $newName);
        if ($move) {
            // return "Moved successfully";
            $insert = DB::table('note')->insert([
                'title' => $req->title,
                'content' => $req->content,
                'user_id' => Auth::user()->id,
                'user_img' => $newName,
            ]);

            if ($insert) {
                return redirect('/displayNote');
            } else {
                return ("Error Occurred");
            }
            return ('Processing');
            return ($req->content);
        } else {
            return "Moving failed";
        }
    }

    public function displayNote()
    {
        $select = DB::table('note')->where('user_id', Auth::user()->id)->get();
        // return ($select);
        return view('Noteapp.displayNote', [
            'allNote' => $select
        ]);
    }

    public function show($id)
    {
        // $show = DB::table('note')->where('note_id', $id)->get();
        $show = DB::table('note')->where('note_id', $id)->first();
        // return $show;
        return view('Noteapp.viewNote', ['note' => $show]);
    }

    public function edit($id)
    {
        $show = DB::table('note')->where('note_id', $id)->first();
        return view('Noteapp.edit', ['note' => $show]);
    }

    public function update(Request $req, $id)
    {
        // return $id;
        $update = DB::table('note')->where('note_id', $id)->update([

            'title' => $req->title,
            'content' => $req->content,
        ]);
        // return $update;
        if ($update) {
            return redirect("/displayNote");
        }

        // return view('Noteapp.edit', ['note' => $show]);
    }

    public function delete($id)
    {
        // return $id;
        $deleted = DB::table('note')->where('note_id', $id)->delete();
        // return $update;
        if ($deleted) {
            return redirect("/displayNote");
        }

        // return view('Noteapp.edit', ['note' => $show]);
    }
}
