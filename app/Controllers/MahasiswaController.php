<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;

class Pages extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function home()
    {
        $data['title'] = "Home";
        return view('templates/header', $data)
        . view('pages/home')
        . view ('templates/footer');
    }

    public function about()
    {
        $data['title'] = "About";
        return view('templates/header', $data)
        . view('pages/about')
        . view ('templates/footer');
    }

    public function mahasiswa()
    {
        $mahasiswaModel = new MahasiswaModel();
        $mahasiswa = $mahasiswaModel->findAll();
        $data = [
            'title' => "Mahasiswa",
            'mahasiswa' => $mahasiswa
        ];

        return view('templates/header', $data)
        . view('pages/mahasiswa', $data)
        . view ('templates/footer');
    }

    public function create(){
        $data = ['title' => 'Create'];
        return view('templates/header', $data)
            . view('mahasiswa/create')
            . view('templates/footer');
    }

    public function test(){
        dd('test');
    }
}
