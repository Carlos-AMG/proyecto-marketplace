<?php

namespace Database\Seeders;

use App\Models\Departamento;
use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Departamento::factory(4)
            ->has(Producto::factory()->count(5))
            ->create();
    }
}
