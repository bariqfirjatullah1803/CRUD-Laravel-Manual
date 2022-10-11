<?php

namespace Database\Seeders;

use App\Models\Majors;
use Illuminate\Database\Seeder;

class MajorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Majors::factory(10)->create();
    }
}
