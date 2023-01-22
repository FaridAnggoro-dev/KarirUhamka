<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profiles = [
            [
                'detail_id' => 1,
                'industri' => 'konsultan',
                'alamat' => 'JALAN K.H RAMLI NO. 6, MENTENG DALAM, TEBET, JAKARTA SELATAN'
            ],
        ];

        Profile::insert($profiles);
    }
}
