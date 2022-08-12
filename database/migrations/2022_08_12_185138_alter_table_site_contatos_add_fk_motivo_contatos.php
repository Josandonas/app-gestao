<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\SiteContato;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //add coluna motivo_contatos_id
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->integer('motivo_contatos_id');
        });
        //atribuindo motivo_contato para  a nova coluna motivo_contato_id
        DB::statement('update site_contatos set motivo_contatos_id = motivo_contatos');

        //create da fk e remover a coluna motivo_contato
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->foreign('motivo_contatos_id')->references('id')->on('motivo_contatos',);
            $table->dropColumn('motivo_contatos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        //criar a coluna motivo_contato e removendo a fk
        Schema::table('site_contatos', function (Blueprint $table) {
            $tbale->dropColumn('motivo_contatos');
            $table->dropForeign('site_contatos_motivo_contatos_id_foreign');
            // $table->dropForeign('<table>_<coluna>_foreign');
        });


        //atribuindo motivo_contato para  a nova coluna motivo_contato_id
        DB::statement('update site_contatos set motivo_contatos = motivo_contato_id');

        //exluindo a coluna
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->dropColumn('motivo_contatos_id');
        });

    }
};
