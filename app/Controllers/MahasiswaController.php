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

    public function create(){
        if(!$this->validate([
            'npm' => 'required',
            'nama' => 'required',
        ])){
            return redirect()->to('/create');
        }

        $data = [
            'title' => 'Create Mahasiswa'
        ];
        return view('templates/header', $data)
            . view('pages/create', $data)
            . view('templates/footer');
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

    public function test(){
        dd('test');
    }

    public function store(){
        if(!$this->validate([
            'npm' => 'required',
            'nama' => 'required',
        ])){
            return redirect()->to('/create');
        }

        $mahasiswaModel = new MahasiswaModel();
        $data = [
            'npm' => $this->request->getPost('npm'),
            'nama' => $this->request->getPost('nama'),
        ];

        $mahasiswaModel->save($data);
        return redirect()->to('/mahasiswa');
    }

    public function delete($id)
    {
        $mahasiswaModel = new MahasiswaModel();
        $mahasiswaModel->delete($id);

        return redirect()->to('/mahasiswa');
    }

    public function edit($id){
        $mahasiswaModel = new MahasiswaModel();
        $mahasiswa = $mahasiswaModel->find($id);

        $data = [
            'title' => 'Edit Mahasiswa'
        ];

        return view('templates/header', $data)
            . view('mahasiswa/edit', $mahasiswa)
            . view('templates/footer');
    }

    public function update($id){
        if(!$this->validate([
            'npm' => 'required',
            'nama' => 'required',
        ])){
            return redirect()->to('/edit/' .$id);
        }

        $mahasiswaModel = new MahasiswaModel();
        $data = [
            'npm' => $this->request->getVar('npm'),
            'nama' => $this->request->getVar('nama'),
        ];

        $mahasiswaModel->update($id, $data);
        return redirect()->to('/mahasiswa');
    }
}
