<?php

namespace Database\Seeders;

use App\Models\Conference;
use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConferencesSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run()
    {
        (new Conference())->insert([
            [
                'title' => Lorem::sentence(5),
                'content' => Lorem::text()
            ],
        [
            'title' => Lorem::sentence(5),
            'content' => Lorem::text()
        ]
    ]);
    }
}
