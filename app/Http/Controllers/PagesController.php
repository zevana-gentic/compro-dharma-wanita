<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Slider;
use App\Models\Gallery;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $data['sliders'] = Slider::get();
        $data['news'] = News::latest()->limit(4)->get();

        return view('landing', $data);
    }

    public function news()
    {
        $data['page_title'] = 'Berita';
        $data['page_sub_title'] = 'Berita Terbaru';
        $data['news'] = News::latest()->paginate(10)->withQueryString();

        return view('news', $data);
    }

    public function news_detail($slug)
    {
        $data['news'] = News::where('slug', $slug)->first();
        $data['recent_news'] = News::orderBy('created_at', 'desc')->take(3)->get();

        return view('news.news-detail', $data);
    }

    public function contact_us()
    {
        $data['page_title'] = 'Kontak';
        $data['page_sub_title'] = 'Hubungi Kami';

        return view('contact-us', $data);
    }

    public function history()
    {
        $data['page_title'] = 'Profil';
        $data['page_sub_title'] = 'Sejarah';

        return view('profile.history', $data);
    }

    public function vision_mission()
    {
        $data['page_title'] = 'Profil';
        $data['page_sub_title'] = 'Visi & Misi';

        return view('profile.vision-mission', $data);
    }

    public function task_functions()
    {
        $data['page_title'] = 'Profil';
        $data['page_sub_title'] = 'Tugas & fungsi';

        return view('profile.task-functions', $data);
    }

    public function organization()
    {
        $data['page_title'] = 'Profil';
        $data['page_sub_title'] = 'Struktur Organisasi';

        return view('profile.organization', $data);
    }

    public function secretariat()
    {
        $data['page_title'] = 'Unsur Pelaksana';
        $data['page_sub_title'] = 'DWP Sekretariat Daerah';

        return view('implementer.secretariat', $data);
    }

    public function inspectorate()
    {
        $data['page_title'] = 'Unsur Pelaksana';
        $data['page_sub_title'] = 'DWP Inspektorat';

        return view('implementer.inspectorate', $data);
    }

    public function education_office()
    {
        $data['page_title'] = 'Unsur Pelaksana';
        $data['page_sub_title'] = 'DWP Dinas Pendidikan';

        return view('implementer.education-office', $data);
    }

    public function education()
    {
        $data['page_title'] = 'Program Kerja';
        $data['page_sub_title'] = 'Bidang Pendidikan';

        return view('work-program.education', $data);
    }

    public function socio_cultural()
    {
        $data['page_title'] = 'Program Kerja';
        $data['page_sub_title'] = 'Bidang Sosial Budaya';

        return view('work-program.socio-cultural', $data);
    }

    public function economy()
    {
        $data['page_title'] = 'Program Kerja';
        $data['page_sub_title'] = 'Bidang Ekonomi';

        return view('work-program.economy', $data);
    }

    public function gallery_photo()
    {
        $data['page_title'] = 'Galeri';
        $data['page_sub_title'] = 'Galeri Foto';
        $data['gallery_photos'] = Gallery::where('category', 'Foto')->paginate(6)->withQueryString();

        return view('gallery.photo', $data);
    }

    public function gallery_video()
    {
        $data['page_title'] = 'Galeri';
        $data['page_sub_title'] = 'Galeri Video';
        $data['gallery_videos'] = Gallery::where('category', 'Video')->paginate(4)->withQueryString();

        return view('gallery.video', $data);
    }

    public function external_information()
    {
        $data['page_title'] = 'Informasi';
        $data['page_sub_title'] = 'Informasi Eksternal';

        return view('information.external', $data);
    }

    public function internal_information()
    {
        $data['page_title'] = 'Informasi';
        $data['page_sub_title'] = 'Informasi Internal';

        return view('information.internal', $data);
    }

}
