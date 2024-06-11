<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ProfilesSeeder extends Seeder {
    public function run(): void
    {
        DB::table('profiles')->insert([
            'id' => User::ADMINISTRATOR,
            'name' => 'Administrador',
            'Description' => 'Administrador de la pagina'
        ]);
        DB::table('profiles')->insert([
            'id' => User::CLIENT,
            'name' => 'Cliente',
            'Description' => 'Acceso a compras, historial de pedidos, etc.'
        ]);
    }
}
