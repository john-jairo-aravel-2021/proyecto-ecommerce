<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\pedido;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        pedido::factory()->count(100)->create();
    }
}
