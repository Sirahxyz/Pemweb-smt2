<?php namespace App\Controllers;
class Page extends BaseController {
public function about()
{
    echo "about page";
}
public function contact()
{
    echo "contact page";
}
public function faqs()
{
    echo "Faqs page";
}
public function tos()
{
    echo "Halaman Term of Service";
}
public function biodata()
    {
        echo "Nama       : Mochammad Haris Afifudin";
        echo "<br>NIM    : 4122020";
        echo "<br>Alamat : KedungBetik, Kesamben";
        echo "<br>Hobi   : Sepak Bola";
        echo "<br>E-mail : Harisafifudin123@gmail.com";
    }
}