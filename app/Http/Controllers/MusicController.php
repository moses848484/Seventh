<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class MusicController extends Controller
{
    public function listen($filename)
    {
        $path = public_path("music/" . $filename);

        if (!File::exists($path)) {
            abort(404, 'File not found');
        }

        return view('listen', ['filename' => $filename]);
    }
    
}