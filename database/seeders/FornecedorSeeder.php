<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //intanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 120';
        $fornecedor->site = 'fornecedor100.com.br';
        $fornecedor->uf = 'CE';
        $fornecedor->email = 'contato@fornecedor120.com.br';
        $fornecedor->save();

        //o metodo create (sempre sera necessario um cuidado com o atributo fillable da classe)
        Fornecedor::create([
            'nome' => 'Fornecedor 200',
            'site' => 'fornecimento.com.br',
            'uf'   => 'MS',
            'email'=> 'contato@fornecedor200.com.br'
        ]);

        //insert direto pelo metodo DB
        DB::table('fornecedors')->insert([
            'nome' => 'Fornecedor 300',
            'site' => 'fornecimento3.com.br',
            'uf'   => 'MG',
            'email'=> 'contato@fornecedor300.com.br'
        ]);

    }
}
