<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::truncate();
        Company::create([
            'description'=> 'Team Ini di dirikan bertujuan untuk melaksanakan UJIAN AKHIR SEMESTER 4 PEMROGRAMAN WEB',
        ]);
    }
}
