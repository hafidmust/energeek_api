<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Candidate;
use App\Models\Job;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Job::create([
            'name' => 'Backend Developer'
        ]);
        Job::create([
            'name' => 'Front End Developer'
        ]);
        Job::create([
            'name' => 'Fullstack Developer'
        ]);

        Skill::create([
            'name' => 'Javascript'
        ]);
        Skill::create([
            'name' => 'PHP'
        ]);
        Skill::create([
            'name' => 'Laravel'
        ]);
        Skill::create([
            'name' => 'Golang'
        ]);
        Skill::create([
            'name' => 'Mongodb'
        ]);
        Skill::create([
            'name' => 'Restful API'
        ]);
        Skill::create([
            'name' => 'GraphQL'
        ]);
        Skill::create([
            'name' => 'Websocket'
        ]);
        Skill::create([
            'name' => 'Javascript'
        ]);
        Skill::create([
            'name' => 'Grpc'
        ]);


    }
}
