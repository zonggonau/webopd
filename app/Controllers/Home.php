<?php

namespace App\Controllers;

class Home extends BaseController
{
    // constructur  
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->opd = lang('Config.opd');
    }

    public function index()
    {
        // Tipe Artikel 1. Berita, 2. Informasi, 3. Album Foto, 4. Video, 5. Visi, 6. Misi, 7. Slide Show, 8. Peta Intan Jaya
        // untuk opd header id lihat di tabel opd_hdr.
        $visi = $this->db->query("SELECT * FROM artikel where tipe_artikel_id= 5 and opd_hdr_id=12")->getRow();
        $artikel = $this->db->query("SELECT * FROM artikel where tipe_artikel_id= 1 and opd_hdr_id=12 and status_sistem_id=2 and is_active = 1 LIMIT 6")->getResult();
        // dd($artikel);
        $data = [
            'title' => 'Dashbord',
            'visi' => $visi,
            'artikel' => $artikel,
        ];
        return view('pages/dashbord', $data);
    }


    public function profile()
    {
        $kadis = $this->db->query("SELECT * FROM profil_pejabat")->getRow();
        // dd($kadis);
        return view('pages/profile');
    }

    public function info_publik()
    {
        $artikel = $this->db->query("SELECT * FROM artikel where tipe_artikel_id= 1 and opd_hdr_id=12 and status_sistem_id=2 and is_active")->getResult();
        $data = [
            'title' => 'Onformasi Publik',
            'artikel' => $artikel,
        ];
        return view('pages/info_publik', $data);
    }

    public function program_kerja()
    {
        return view('pages/program_kerja');
    }

    public function detail_berita($slug)
    {
        $berita = $this->db->query("SELECT * FROM artikel where slug = '$slug'")->getRow();
        // dd($berita);f
        return view('pages/details_berita', ['berita' => $berita]);
    }


    // GET PRODUCT BY ID 


}
