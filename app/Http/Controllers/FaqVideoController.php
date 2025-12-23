<?php

namespace App\Http\Controllers;

use App\Models\FaqVideo;
use Illuminate\Http\Request;

class FaqVideoController extends Controller
{
    public function index()
    {
        // latest video first
        $videos = FaqVideo::orderBy('faq_video_id', 'desc')->get();

        return view('faqvideo', compact('videos'));
    }
}
