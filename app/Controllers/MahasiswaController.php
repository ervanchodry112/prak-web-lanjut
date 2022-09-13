<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mahasiswa;

class MahasiswaController extends BaseController
{
    protected $mahasiswaModel;
    public function __construct()
    {
        $this->mahasiswaModel = new Mahasiswa();
    }
    public function index()
    {
        $mahasiswa = $this->mahasiswaModel->findAll();

        $data = [
            'title' => 'Mahasiswa',
            'mahasiswa' => $mahasiswa,
        ];

        return view('templates/header', $data)
            . view('mahasiswa/list', $data)
            . view('templates/footer');
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data'
        ];
        return view('templates/header', $data)
            . view('mahasiswa/create')
            . view('templates/footer');
    }
}
