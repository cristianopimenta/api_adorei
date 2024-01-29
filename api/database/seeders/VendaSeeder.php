<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Venda;
use App\Models\Produto;

class VendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $venda = Venda::create([
            'sales_id' => '202301011',
            'amount' => 8200,
            'user_id' => 1,
        ]);


        $produtos = [
            [
                'name' => 'Celular 1',
                'price' => 1800,
                'amount' => 1,
                'user_id'=>1,
            ],
            [
                'name' => 'Celular 2',
                'price' => 3200,
                'amount' => 2,
                'user_id'=>1,
            ],
        ];

        foreach ($produtos as $produto) {
            $venda->produtos()->create($produto);
        }


    }

}
