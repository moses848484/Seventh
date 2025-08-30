<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NotesController extends Controller
{
    public function index()
    {
        $notes = Note::where('user_id', auth()->id())
                    ->orderBy('pinned', 'desc')
                    ->orderBy('created_at', 'desc')
                    ->get();
        
        return response()->json($notes);
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required|string|max:1000',
            'pinned' => 'boolean'
        ]);

        $note = Note::create([
            'text' => $request->text,
            'pinned' => $request->pinned ?? false,
            'user_id' => auth()->id()
        ]);

        return response()->json($note, 201);
    }

    public function update(Request $request, $id)
    {
        $note = Note::where('id', $id)
                   ->where('user_id', auth()->id())
                   ->firstOrFail();

        $request->validate([
            'text' => 'sometimes|required|string|max:1000',
            'pinned' => 'sometimes|boolean'
        ]);

        $note->update($request->only(['text', 'pinned']));

        return response()->json($note);
    }

    public function destroy($id)
    {
        $note = Note::where('id', $id)
                   ->where('user_id', auth()->id())
                   ->firstOrFail();

        $note->delete();

        return response()->json(['message' => 'Note deleted successfully']);
    }
}