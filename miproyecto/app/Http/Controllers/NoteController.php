<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNoteRequest;
use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NoteController extends Controller
{
    public function index(): View
    {
        $notes = Note::all();

        return view('notes.index', compact('notes'));
    }

    public function show($id): View
    {
        $note = Note::find($id);

        return view('notes.show', compact('note'));
    }

    public function create(): View
    {
        return view('notes.create');
    }

    public function store(CreateNoteRequest $request): RedirectResponse
    {
        $note = new Note();

        $note->title = $request->title;
        $note->description = $request->description;
        $note->author = $request->author;
        $note->deadline = $request->deadline;
        $note->done = $request->done;

        $note->save();

        return redirect()->route('notes.index')->with('message', "Nota creada correctamente");;
    }

    public function edit($id): View
    {
        $note = Note::find($id);

        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $note = Note::find($id);

        $note->title = $request->title;
        $note->description = $request->description;
        $note->author = $request->author;
        $note->deadline = $request->deadline;
        $note->done = $request->done;

        $note->save();

        return redirect()->route('notes.index')->with('message', "Nota editada correctamente");
    }

    public function destroy($id): RedirectResponse
    {
        $note = Note::find($id);

        $note->delete();

        return redirect()->route('notes.index')->with('message', "Nota borrada correctamente");
    }
}
