<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unidade',5);
            $table->string('descricao',30);
            $table->timestamps();
        });
        //adicionar o relaciomentoco com  atable aprodutos
        Schema::table('produtos',function(Blueprint $table){
            $table->integer('unidade_id')->unsigned();
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });

        //adicionar o relaciomento com a tabela de produto_detalhes
        Schema::table('produto_detalhes',function(Blueprint $table){
            $table->integer('unidade_id')->unsigned();
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //remover o relaciomentoco com  atable aprodutos
        Schema::table('produtos',function(Blueprint $table){
            //remover a fk
            $table->dropForeign('produto_detalhes_unidade_id_foreign');
            
            //remover a coluna unidade_id
            $table->dropColumn('unidade_id');
        });

        //remover o relaciomento com a tabela de produto_detalhes
        Schema::table('produtos',function(Blueprint $table){
            //remover a fk
            $table->dropForeign('produtos_unidade_id_foreign');
            
            //remover a coluna unidade_id
            $table->dropColumn('unidade_id');
        });


        Schema::dropIfExists('unidades');
    }
};
