<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vacanci;

class VacanciTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vacancis = [
            [
                'categori_id' => 1,
                'logo' => '/images/niagahoster.png',
                'job' => 'Sekretaris',
                'slug' => 'sekretaris',
                'skill' => 'Mampu Mengoperasikan Komputer',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'categori_id' => 1,
                'logo' => '/images/niagahoster.png',
                'job' => 'Staf Administrasi',
                'slug' => 'staff-administrasi',
                'skill' => 'Mampu Mengoperasikan Komputer',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'categori_id' => 1,
                'logo' => '/images/niagahoster.png',
                'job' => 'Personal Assistant',
                'slug' => 'personal-assistant',
                'skill' => 'Mampu Mengoperasikan Komputer',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'categori_id' => 2,
                'logo' => '/images/niagahoster.png',
                'job' => 'Accounting Manager',
                'slug' => 'accounting-manager',
                'skill' => 'Mampu Mengoperasikan Komputer',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'categori_id' => 2,
                'logo' => '/images/niagahoster.png',
                'job' => 'Accounting & Tax',
                'slug' => 'accounting-tax',
                'skill' => 'Mampu Mengoperasikan Komputer',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'categori_id' => 2,
                'logo' => '/images/niagahoster.png',
                'job' => 'Staff Accounting',
                'slug' => 'staff-accounting',
                'skill' => 'Mampu Mengoperasikan Komputer',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'categori_id' => 3,
                'logo' => '/images/niagahoster.png',
                'job' => 'Guru Paud / TK',
                'slug' => 'guru-paud-tk',
                'skill' => 'Mampu Mengoperasikan Komputer',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'categori_id' => 3,
                'logo' => '/images/niagahoster.png',
                'job' => 'Guru Bahasa Mandarin',
                'slug' => 'guru-bahasa-mandarin',
                'skill' => 'Mampu Mengoperasikan Komputer',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'categori_id' => 3,
                'logo' => '/images/niagahoster.png',
                'job' => 'Guru Editing',
                'slug' => 'guru-editing',
                'skill' => 'Mampu Mengoperasikan Komputer',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'categori_id' => 4,
                'logo' => '/images/niagahoster.png',
                'job' => 'Programmer PHP',
                'slug' => 'programmer-php',
                'skill' => 'Mampu Mengoperasikan Komputer',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'categori_id' => 4,
                'logo' => '/images/niagahoster.png',
                'job' => 'Backend Programmer',
                'slug' => 'backend-programmer',
                'skill' => 'Mampu Mengoperasikan Komputer',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'categori_id' => 4,
                'logo' => '/images/niagahoster.png',
                'job' => 'Staff Programmer',
                'slug' => 'staff-programmer',
                'skill' => 'Mampu Mengoperasikan Komputer',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'categori_id' => 5,
                'logo' => '/images/niagahoster.png',
                'job' => 'Surveyor',
                'slug' => 'surveyor',
                'skill' => 'Mampu Mengoperasikan Komputer',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'categori_id' => 5,
                'logo' => '/images/niagahoster.png',
                'job' => 'Site Manager',
                'slug' => 'site-manager',
                'skill' => 'Mampu Mengoperasikan Komputer',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'categori_id' => 5,
                'logo' => '/images/niagahoster.png',
                'job' => 'Drafter',
                'slug' => 'drafter',
                'skill' => 'Mampu Mengoperasikan Komputer',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'categori_id' => 6,
                'logo' => '/images/niagahoster.png',
                'job' => 'Teknisi',
                'slug' => 'teknisi',
                'skill' => 'Mampu Mengoperasikan Komputer',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'categori_id' => 6,
                'logo' => '/images/niagahoster.png',
                'job' => 'Audio Visual Engineeer',
                'slug' => 'audio-visual-engineer',
                'skill' => 'Mampu Mengoperasikan Komputer',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'categori_id' => 6,
                'logo' => '/images/niagahoster.png',
                'job' => 'Technical Support',
                'slug' => 'technical-support',
                'skill' => 'Mampu Mengoperasikan Komputer',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'categori_id' => 7,
                'logo' => '/images/niagahoster.png',
                'job' => 'Lawyer',
                'slug' => 'lawyer',
                'skill' => 'Mampu Mengoperasikan Komputer',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'categori_id' => 7,
                'logo' => '/images/niagahoster.png',
                'job' => 'Staff Legal',
                'slug' => 'staff-legal',
                'skill' => 'Mampu Mengoperasikan Komputer',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'categori_id' => 7,
                'logo' => '/images/niagahoster.png',
                'job' => 'Asisten Notaris',
                'slug' => 'asisten-notaris',
                'skill' => 'Mampu Mengoperasikan Komputer',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'categori_id' => 8,
                'logo' => '/images/niagahoster.png',
                'job' => 'Analisis Kimia',
                'slug' => 'analisis-kimia',
                'skill' => 'Mampu Mengoperasikan Komputer',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'categori_id' => 8,
                'logo' => '/images/niagahoster.png',
                'job' => 'Staff Laboratorium',
                'slug' => 'staff-laboratorium',
                'skill' => 'Mampu Mengoperasikan Komputer',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'categori_id' => 8,
                'logo' => '/images/niagahoster.png',
                'job' => 'Dokter Umum',
                'slug' => 'dokter-umum',
                'skill' => 'Mampu Mengoperasikan Komputer',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ];

        Vacanci::insert($vacancis);
    }
}
