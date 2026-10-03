<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $projects = [
            [
                'title' => 'Sistem Informasi Akademik',
                'description' => 'Aplikasi berbasis web untuk mengelola data mahasiswa, jadwal kuliah, dan nilai perkuliahan',
                'teknologi' => 'Laravel & bootstrap',
                'image' => 'project1.jpg',
                'status' => 'selesai'
            ],
            [
                'title' => 'E-commerce SEO Optimization',
                'description' => 'Aplikasi optimalisasi struktur heading dan indexing halaman web toko online',
                'teknologi' => 'PHP & Google Search Console',
                'image' => 'project2.jpg',
                'status' => 'In Progress'
            ],[
                'title' => 'Redesign Cover dan branding',
                'description' => 'Perancangan element grafis personal branding dan design sampul buku rekayasa web',
                'teknologi' => 'Figma & Canva',
                'image' => 'project3.jpg',
                'status' => 'selesai'
            ],[
                'title' => 'Desain UI/UX Aplikasi Mobile',
                'description' => 'Perancangan desain antarmuka dan pengalaman pengguna untuk aplikasi mobile berbasis Android',
                'teknologi' => 'Figma & Adobe XD',
                'image' => 'project4.jpg',
                'status' => 'selesai'
            ],[
                'title' => 'Rekayasa Web Aplikasi E-Learning',
                'description' => 'Aplikasi berbasis web untuk mengelola materi pembelajaran, ujian online, dan forum diskusi',
                'teknologi' => 'Laravel & bootstrap',
                'image' => 'project5.jpg',
                'status' => 'selesai'
            ],[
                'title' => 'portal Informasi Kampus',
                'description' => 'Aplikasi berbasis web untuk mengelola informasi akademik, berita kampus, dan pengumuman kegiatan',
                'teknologi' => 'Laravel & bootstrap',
                'image' => 'project6.jpg',
                'status' => 'selesai'
            ],[
                'title' => 'informasi Akademik Mahasiswa',
                'description' => 'Aplikasi berbasis web untuk mengelola data mahasiswa, jadwal kuliah, dan nilai perkuliahan',
                'teknologi' => 'Laravel & bootstrap',
                'image' => 'project7.jpg',
                'status' => 'selesai'
            ],[
                'title' => 'Sistem inventaris Perpustakaan',
                'description' => 'Aplikasi berbasis web untuk mengelola data buku, peminjaman, dan pengembalian buku perpustakaan',
                'teknologi' => 'Laravel & livewire',
                'image' => 'project8.jpg',
                'status' => 'in progress'
            ],
        ];
        foreach ($projects as $project) {
            \App\Models\Project::create($project);
        }
    }
}
