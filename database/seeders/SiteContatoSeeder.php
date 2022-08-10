<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $contato = new SiteContato();
        // $contato->nome = 'sandonas';
        // $contato->telefone= '+5567998688942';
        // $contato->email = 'san@outlook.com';
        // $contato->motivo_contato= 1;
        // $contato->mensagem= 'Quero um pedido de desculpas pelo roubo das minhas informações';
        // $contato->save();
        SiteContato::factory()->count(100)->create();
    }
}
