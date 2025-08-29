<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function index()
    {
        return response()->json(
            Note::where('user_id', Auth::id())->latest()->get()
        );
    }

    public function store(Request $request)
    {
        $request->validate(['text' => 'required|string|max:500']);

        $note = Note::create([
            'user_id' => Auth::id(),
            'text' => $request->text,
        ]);

        return response()->json($note);
    }

    public function update(Request $request, Note $note)
    {
        $this->authorize('update', $note);

        $request->validate(['text' => 'required|string|max:500']);
        $note->update(['text' => $request->text]);

        return response()->json($note);
    }

    public function destroy(Note $note)
    {
        $this->authorize('delete', $note);

        $note->delete();
        return response()->json(['message' => 'Note deleted']);
    }

    public function togglePin(Note $note)
    {
        $this->authorize('update', $note);

        $note->pinned = !$note->pinned;
        $note->save();

        return response()->json($note);
    }

}
