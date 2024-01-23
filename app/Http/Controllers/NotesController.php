<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Note;
class NotesController extends Controller
{
    public function shownotes(){
      
        $notes = Note::all();

        return view('main', ['notes' => $notes]);

    }
    public function addnote(){
        return view('note');
    }
    public function store(Request $request){
       $data = $request->validate([
        'noteText' => 'required',
        'title' => 'nullable'
       ]);

       $newNote = Note::create($data);
       return redirect(route('n.main'));
    }
    public function edit(note $note){
        return view('editnote', ['note' => $note]);
    }
    public function update(note $note, Request $request){
        $data = $request->validate([
            'noteText' => 'required',
            'title' => 'nullable'
           ]);
           $note->update($data);
           return redirect(route('n.main'));
    }

    public function delete(note $note){
        $note->delete();
        return redirect(route('n.main'));
    }
}
