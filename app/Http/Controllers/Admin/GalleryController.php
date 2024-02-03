<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function photo_list()
    {
        return view('admin.gallery-photo-list');
    }

    public function video_list()
    {
        return view('admin.gallery-video-list');
    }
}
