<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;

class NoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): JsonResponse
    {
        $notes = Note::where('user_id', Auth::id())
                    ->orderBy('pinned', 'desc')
                    ->orderBy('created_at', 'desc')
                    ->get();
        
        return response()->json($notes);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'text' => 'required|string|max:1000'
        ]);

        $note = Note::create([
            'user_id' => Auth::id(),
            'text' => $validated['text'],
            'pinned' => false
        ]);

        return response()->json($note, 201);
    }

    public function update(Request $request, Note $note): JsonResponse
    {
        // Check if user owns this note
        if ($note->user_id !== Auth::id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $data = [];
        
        if ($request->has('text')) {
            $validated = $request->validate([
                'text' => 'required|string|max:1000'
            ]);
            $data['text'] = $validated['text'];
        }
        
        if ($request->has('pinned')) {
            $data['pinned'] = $request->boolean('pinned');
        }

        if (!empty($data)) {
            $note->update($data);
        }

        return response()->json($note);
    }

    public function destroy(Note $note): JsonResponse
    {
        // Check if user owns this note
        if ($note->user_id !== Auth::id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $note->delete();
        
        return response()->json(['message' => 'Note deleted successfully']);
    }
}