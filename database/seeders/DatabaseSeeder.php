<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RolSeeder;
use Database\Seeders\ProductoSeeder;
use Database\Seeders\formaspagoSeeder;
use Database\Seeders\UsuarioSeeder;
use Database\Seeders\PedidoSeeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolSeeder::Class);
        $this->call(ProductoSeeder::Class);
        $this->call(formasfagoSeeder::Class);
        $this->call(UsuarioSeeder::Class);
        $this->call(PedidoSeeder::Class);
    }
}
