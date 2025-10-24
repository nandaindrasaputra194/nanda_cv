<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CvController extends Controller
{
    public function showCv()
    {
        // --- DATA DINAMIS CV NANDA INDRA SAPUTRA ---
        $data = [
            'name' => 'Nanda Indra Saputra',
            'title' => 'Mahasiswa Sistem Informasi | Universitas Teknologi Yogyakarta (UTY)',
            'summary' => 'Mahasiswa Sistem Informasi yang berdedikasi dengan pemahaman kuat dalam analisis kebutuhan sistem, perancangan database, dan implementasi solusi teknologi. Bersemangat untuk mengintegrasikan pengetahuan teoritis dengan proyek praktis, didukung oleh pengalaman dalam organisasi dan pengembangan website untuk komunitas.',
            'birthplace' => 'Pemalang',
            'birthdate' => '01 September 2004',

            // Data Kontak
            'contact' => [
                'email' => 'nandaindrasaputra194a@gmail.com', // Contoh email profesional
                'phone' => '0823-1336-6785 (WA)',
                'instagram' => '@indraasptraa__',
            ],

            // Data Keahlian (Relevan dengan Sistem Informasi)
            'skills' => [
                ['name' => 'Analisis Kebutuhan Sistem', 'level' => 85, 'icon' => '🔍'], 
                ['name' => 'Desain Database (SQL)', 'level' => 80, 'icon' => '💾'],
                ['name' => 'UI/UX Design (Figma)', 'level' => 75, 'icon' => '🎨'],
               
               
            ],

            // Data Pengalaman Proyek & Organisasi
            'experience' => [
                [
                    'title' => 'Proyek: Pembuatan Website Posyandu',
                    'company' => 'Proyek Mandiri/Kampus',
                    'period' => 'Mei 2024 - juli',
                    'description' => [
                        'Merancang struktur database dan arsitektur sistem untuk manajemen data Posyandu.',
                        'Mengimplementasikan antarmuka pengguna yang intuitif dan responsif.',
                        'Mengembangkan modul input data, laporan, dan jadwal layanan.',
                    ],
                ],
                [
                    'title' => 'Pengabdian Masyarakat ORMADA Pemalang',
                    'company' => 'Organisasi Mahasiswa Daerah',
                    'period' => '2023',
                    'description' => [
                        'Partisipasi aktif dalam kegiatan sosial dan pengembangan masyarakat di daerah Pemalang.',
                        'Terlibat dalam inisiatif literasi digital untuk UMKM lokal.',
                    ],
                ],
                [
                    'title' => 'Volunteer Malaka Project',
                    'company' => 'Komunitas Sosial',
                    'period' => '2022',
                    'description' => [
                        'Menjadi relawan dalam acara dan kegiatan komunitas sosial Malaka Project.',
                        'Membantu dalam manajemen logistik dan dokumentasi acara.',
                    ],
                ],
            ],
            
            // Data Pendidikan
            'education' => [
                [
                    'degree' => 'S1 Sistem Informasi',
                    'institution' => 'Universitas Teknologi Yogyakarta',
                    'year' => '2023 - Sekarang',
                ],
                [
                    'degree' => 'SMK Islam Terpadu',
                    'institution' => 'Warungpring',
                    'year' => '2019 - 2023',
                ],
                [
                    'degree' => 'SMP Islam Terpadu',
                    'institution' => 'Warungpring',
                    'year' => '2015 - 2018',
                ],
                [
                    'degree' => 'MI',
                    'institution' => 'Nurul Huda 02 Mereng',
                    'year' => '2009 - 2015',
                ],
            ],
        ];

        return view('cv', compact('data'));
    }
}