<?php

namespace Database\Seeders;

use App\Models\GraniteTile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GraniteTileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GraniteTile::factory(10)->create();
    }
}
