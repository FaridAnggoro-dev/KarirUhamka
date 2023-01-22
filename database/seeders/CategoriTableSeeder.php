<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categori;

class CategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoris = [
            [
                'title' => 'Administrasi',
                'slug' => 'administrasi',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Akuntansi & Keuangan',
                'slug' => 'akuntansi-keuangan',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Pendidikan & Pelatihan',
                'slug' => 'pendidikan-pelatihan',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Programmer',
                'slug' => 'programmer',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Konstruksi & Bangunan',
                'slug' => 'konstruksi-bangunan',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Teknik',
                'slug' => 'teknik',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Hukum & Keamanan',
                'slug' => 'hukum-keamanan',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Kesehatan & Kedokteran',
                'slug' => 'kesehatan-kedokteran',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ];

        foreach ($categoris as $key => $categori) {
            Categori::create($categori);
        }
    }
}
