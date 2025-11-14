<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman beranda dengan daftar universitas.
     */
    public function index()
    {
        // Data universitas dengan nama file gambar yang sudah disepakati
        $universities = [
            [
                'name' => 'Universitas Bumigora',
                'description' => 'Didirikan pada tanggal 26 Agustus 1986 yang kemudian diubah namanya menjadi Universitas Bumigora. Merupakan salah satu kampus tertua dan terbesar di Nusa Tenggara Barat.',
                'image_url' => 'ubgg.jpg', 
                'slug' => 'universitas-bumigora'
            ],
            [
                'name' => 'Universitas Mataram',
                'description' => 'Unram, memiliki salah satu program unggulan unggul dengan ciri-ciri khusus berbudaya saing pada level global.',
                'image_url' => 'unram.jpeg',
                'slug' => 'universitas-mataram'
            ],
            [
                'name' => 'UIN (State Islamic University of Mataram)',
                'description' => 'Perguruan tinggi keagamaan islam yang menampung lulusan-lulusan SMA, SMK, MA, Pondok Pesantren dari berbagai latar belakang pendidikan.',
                'image_url' => 'UIN.jpg',
                'slug' => 'uin-mataram'
            ],
            [
                'name' => 'Undikma (Universitas Pendidikan Mandalika)',
                'description' => 'Pada tanggal 2 Agustus 2019 telah lahir dan diresmikan beroperasinya Undikma sebagai Universitas Pendidikan Mandalika, dengan nama Universitas Pendidikan Mandalika',
                'image_url' => 'undikma.jpg',
                'slug' => 'undikma'
            ],
            [
                'name' => 'Universitas Nahdlatul Wathan Mataram',
                'description' => 'Sedang digerakkan program unggulan yang berorientasi pada kemajuan teknologi informasi, bisnis, dan kewirausahaan.',
                'image_url' => 'unw.jpg',
                'slug' => 'unw-mataram'
            ],
            [
                'name' => 'Unizar (Universitas Islam Al-Azhar)',
                'description' => 'Jejak langkah kiprah dan cita-cita pengabdian nyata dimulai di Nusa Tenggara Barat dengan didirikannya Yayasan Pendidikan dan Sosial Islam Al-Azhar. Jelas dan sebenarnya tanpa jeda sedikitpun terlukis dalam goresan sejarah perjuangan pendahulunya K.H. Abdul Karim H. Lopa.',
                'image_url' => 'unizar.webp',
                'slug' => 'unizar'
            ]
        ];

        return view('home', compact('universities'));
    }

    /**
     * Menampilkan halaman about dengan data tim.
     */
    public function about()
    {
        $teamMembers = [
            [
                'name' => 'aktiya Yuda P',
                'nim' => '2301010074',
                'tagline' => 'begandang is in my blood cause all the projects wont solve itself 🤬',
                'image_url' => 'unw.jpg' 
            ],
            [
                'name' => 'Mohamad Roy',
                'nim' => '2301010080',
                'tagline' => 'professional front end designer',
                'image_url' => 'ubgg.jpg' 
            ]
        ];
        
        return view('about', compact('teamMembers'));
    }
}