<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Produto::create([
            'nome' => 'Brigadeiro',
            'descricao' => 'doce absurdamente doce',
            'categoria_id' => 1
       ]);

       Produto::create([
        'nome' => 'Coxinha',
        'descricao' => 'coxinha de frango',
        'categoria_id' => 2
        ]);

        Produto::create([
            'nome' => 'Joelho',
            'descricao' => 'Joelho de frango',
            'categoria_id' => 2
            ]);

    }
}
