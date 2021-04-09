<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        rol::factory()->count(5)->create();
    }
}
