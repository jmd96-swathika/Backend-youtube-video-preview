<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YoutubeVideo;

class YoutubeVideoController extends Controller
{
    public function get()
    {
        return response()->json(YoutubeVideo::all());
    }

    public function search(Request $request)
    {
        $query = $request->query('q', '');
        if (strlen($query) < 3) {
            return response()->json([]);
        }

        $youtubevideos = YoutubeVideo::where('title', 'like', "%$query%")
                        ->orWhere('description', 'like', "%$query%")
                        ->get();

        return response()->json($youtubevideos);
    }
}
