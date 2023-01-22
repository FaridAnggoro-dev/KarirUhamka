<?php

namespace Database\Seeders;

use App\Models\Detail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $details = [
            [
                'vacanci_id' => 1,
                'company' => 'PT Artha Kreasi Utama',
                'slug' => 'artha-kreasi-utama',
                'location' => 'Bogor',
                'type' => 'Fulltime',
                'experience' => '1 tahun',
                'salary' => 'IDR 1.500.000 - 2.000.000',
                'major' => 'Semuanya',
                'graduate' => 'SMA / SMK Sederajat',
                'career' => 'Pemula / Staf',
                'requirement' => 'Pria / Wanita, Usia maksimal 34 tahun, Berpengalaman minimal 1 tahun dan minimal 1 kali dalam pembangunan / pemeliharaan aplikasi Web',
                'description' => 'Melakukan tugas administrasi perkantoran, Bertanggung jawab atas Dokumen penting Perusahaan serta pengarsipan, Mengatur kegiatan harian Direktur',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'vacanci_id' => 2,
                'company' => 'PT Artha Kreasi Utama',
                'slug' => 'artha-kreasi-utama',
                'location' => 'Bogor',
                'type' => 'Fulltime',
                'experience' => '1 tahun',
                'salary' => 'IDR 1.500.000 - 2.000.000',
                'major' => 'Semuanya',
                'graduate' => 'SMA / SMK Sederajat',
                'career' => 'Pemula / Staf',
                'requirement' => 'Pria / Wanita, Usia maksimal 34 tahun, Berpengalaman minimal 1 tahun dan minimal 1 kali dalam pembangunan / pemeliharaan aplikasi Web',
                'description' => 'Melakukan tugas administrasi perkantoran, Bertanggung jawab atas Dokumen penting Perusahaan serta pengarsipan, Mengatur kegiatan harian Direktur',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ];

        Detail::insert($details);
    }
}
