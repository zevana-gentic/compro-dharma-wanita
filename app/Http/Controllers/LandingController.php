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

    public function sejarah()
    {
        $data['page_title'] = 'Profil';
        $data['page_sub_title'] = 'Sejarah';

        return view('profil.sejarah', $data);
    }

    public function visi_misi()
    {
        $data['page_title'] = 'Profil';
        $data['page_sub_title'] = 'Visi & Misi';

        return view('profil.visi-misi', $data);
    }

    public function tugas_fungsi()
    {
        $data['page_title'] = 'Profil';
        $data['page_sub_title'] = 'Tugas & fungsi';

        return view('profil.tugas-fungsi', $data);
    }

    public function struktur_organisasi()
    {
        $data['page_title'] = 'Profil';
        $data['page_sub_title'] = 'Struktur Organisasi';

        return view('profil.struktur-organisasi', $data);
    }

    public function sekretariat()
    {
        $data['page_title'] = 'Unsur Pelaksana';
        $data['page_sub_title'] = 'DWP Sekretariat Daerah';

        return view('pelaksana.sekretariat', $data);
    }

    public function inspektorat()
    {
        $data['page_title'] = 'Unsur Pelaksana';
        $data['page_sub_title'] = 'DWP Inspektorat';

        return view('pelaksana.inspektorat', $data);
    }

    public function dinas_pendidikan()
    {
        $data['page_title'] = 'Unsur Pelaksana';
        $data['page_sub_title'] = 'DWP Dinas Pendidikan';

        return view('pelaksana.dinas-pendidikan', $data);
    }

    public function pendidikan()
    {
        $data['page_title'] = 'Program Kerja';
        $data['page_sub_title'] = 'Bidang Pendidikan';

        return view('proker.pendidikan', $data);
    }

    public function sosial_budaya()
    {
        $data['page_title'] = 'Program Kerja';
        $data['page_sub_title'] = 'Bidang Sosial Budaya';

        return view('proker.sosial-budaya', $data);
    }

    public function ekonomi()
    {
        $data['page_title'] = 'Program Kerja';
        $data['page_sub_title'] = 'Bidang Ekonomi';

        return view('proker.ekonomi', $data);
    }

    public function galeri_foto()
    {
        $data['page_title'] = 'Galeri';
        $data['page_sub_title'] = 'Galeri Foto';

        return view('galeri.foto', $data);
    }

    public function galeri_video()
    {
        $data['page_title'] = 'Galeri';
        $data['page_sub_title'] = 'Galeri Video';

        return view('galeri.video', $data);
    }

    public function informasi_eksternal()
    {
        $data['page_title'] = 'Informasi';
        $data['page_sub_title'] = 'Informasi Eksternal';

        return view('informasi.eksternal', $data);
    }

    public function informasi_internal()
    {
        $data['page_title'] = 'Informasi';
        $data['page_sub_title'] = 'Informasi Internal';

        return view('informasi.internal', $data);
    }

}
