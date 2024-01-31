<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function news()
    {
        $data['page_title'] = 'Berita';
        $data['page_sub_title'] = 'Berita Terbaru';

        return view('news', $data);
    }

    public function contact_us()
    {
        $data['page_title'] = 'Kontak';
        $data['page_sub_title'] = 'Hubungi Kami';

        return view('contact-us', $data);
    }

}
