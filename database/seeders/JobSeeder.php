<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::create([
           'name' => 'Backend Developer'
        ]);
        Job::create([
           'name' => 'Front End Developer'
        ]);
        Job::create([
           'name' => 'Fullstack Developer'
        ]);

    }
}
