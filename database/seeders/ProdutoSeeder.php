<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::Table('produtos')->insert([
                [
                    'nome' => 'Camiseta vermelha',
                    'descricao'=> 'Camiseta para ser usada como camiseta, e a cor é vermelha',
                    'preco' => 129,
                    'foto' => 'https://cdn.awsli.com.br/1960/1960866/produto/125390796/a12dd9ac46.jpg'
                    'user_id' => 1,

                ],

                    [
                    
                    'nome'=> 'TS9mm Armas',
                    'descricao'=> 'Arma de fogo utilizada pela policia americana',
                    'preco' => 8700,
                    'foto' => 'https://www.taurusarmas.com.br/assets/img/content/products/thumbs/product-247-photo-1_690x460.jpg'
                    'user_id' =>1,
                    ],
                    [
                    'nome'=> 'Ferrari',
                    'descricao'=> 'carro veloz e top',
                    'preco' => 600000,
                    'foto' => 'https://quatrorodas.abril.com.br/wp-content/uploads/2022/05/ferrari-sp48-unica.jpg?crop=1&resize=1212,909'
                     'user_id' =>1,

                    ],

                ]);
    }
}
