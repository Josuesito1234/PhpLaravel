<?php

namespace Database\Seeders;

use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('docente')->insert([
            'Nombre' => 'admin',
            'Apellido' => 'admin',
            'Correo' => 'admin@admin.com',
            'Password' => Hash::make('admin'),
        ]);
    }
}
