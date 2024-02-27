<?php

namespace App\Http\Controllers\Sekda;

use App\Models\News;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Visitor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function history()
    {
        $data['page_title'] = 'Profil';
        $data['page_sub_title'] = 'Sejarah';

        return view('sekda.history', $data);
    }

    public function vision_mission()
    {
        $data['page_title'] = 'Profil';
        $data['page_sub_title'] = 'Visi & Misi';

        return view('sekda.vision-mission', $data);
    }

    public function task_functions()
    {
        $data['page_title'] = 'Profil';
        $data['page_sub_title'] = 'Tugas & fungsi';

        return view('sekda.task-functions', $data);
    }

    public function organization()
    {
        $data['page_title'] = 'Profil';
        $data['page_sub_title'] = 'Struktur Organisasi';

        return view('sekda.organization', $data);
    }

    public function news()
    {
        $data['page_title'] = 'Berita';
        $data['page_sub_title'] = 'Berita Terbaru';
        $data['news'] = News::latest()->paginate(10)->withQueryString();

        return view('sekda.news', $data);
    }

    public function news_detail($slug)
    {
        $data['news'] = News::where('slug', $slug)->first();
        $data['recent_news'] = News::orderBy('created_at', 'desc')->take(3)->get();

        return view('sekda.news.news-detail', $data);
    }

    public function contact_us()
    {
        $data['page_title'] = 'Kontak';
        $data['page_sub_title'] = 'Hubungi Kami';

        return view('sekda.contact-us', $data);
    }

    public function contact_us_submit(Request $request)
    {
        $sender_name = $request->input('name');
        $content = $request->message;
        $message = "Halo, saya $sender_name\n$content";

        return redirect()->away('https://wa.me/6281328855218?text='.urlencode($message));
    }

    public function education()
    {
        $data['page_title'] = 'Program Kerja';
        $data['page_sub_title'] = 'Bidang Pendidikan';

        return view('sekda.education', $data);
    }

    public function socio_cultural()
    {
        $data['page_title'] = 'Program Kerja';
        $data['page_sub_title'] = 'Bidang Sosial Budaya';

        return view('sekda.socio-cultural', $data);
    }

    public function economy()
    {
        $data['page_title'] = 'Program Kerja';
        $data['page_sub_title'] = 'Bidang Ekonomi';

        return view('sekda.economy', $data);
    }

    public function gallery_photo()
    {
        $data['page_title'] = 'Galeri';
        $data['page_sub_title'] = 'Galeri Foto';
        $data['gallery_photos'] = Gallery::where('category', 'Foto')->paginate(6)->withQueryString();

        return view('sekda.photo', $data);
    }

    public function gallery_video()
    {
        $data['page_title'] = 'Galeri';
        $data['page_sub_title'] = 'Galeri Video';
        $data['gallery_videos'] = Gallery::where('category', 'Video')->paginate(4)->withQueryString();

        return view('sekda.video', $data);
    }

    public function external_information()
    {
        $data['page_title'] = 'Informasi';
        $data['page_sub_title'] = 'Informasi Eksternal';

        return view('sekda.external', $data);
    }

    public function internal_information()
    {
        $data['page_title'] = 'Informasi';
        $data['page_sub_title'] = 'Informasi Internal';

        return view('sekda.internal', $data);
    }

}
