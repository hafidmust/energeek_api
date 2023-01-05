<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
