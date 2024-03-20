<?php 
namespace App\Controllers;
class page extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Selamat datang | Unipdu Press',
            'tes' => ['Satu, dua, tiga']
        ];

        echo view('layout/header',$data);
        echo view ('pages/home',);
        echo view('layout/footer');
    }
    
    public function about()
    {
        $data = [
            'title' => 'Tentang kami | Unipdu Press',
        ];
        echo view('layout/header', $data);
        echo view ('pages/home',);
        echo view('layout/footer');
    }
}