<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produto::create([
            'name' => 'Celular 1',
            'description' => 'Celular teste descricao 01',
            'price' => 1800,
            'amount' => 1,
            'user_id' =>1,
            'venda_id' =>1,
        ]);

        Produto::create([
            'name' => 'Celular 2',
            'description' => 'Celular teste descricao 02',
            'price' => 3200,
            'amount' => 2,
            'user_id' =>1,
            'venda_id' =>1,
        ]);
    }
}
