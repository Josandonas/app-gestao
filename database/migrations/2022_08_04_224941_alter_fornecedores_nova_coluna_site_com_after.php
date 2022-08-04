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
        // forma como posso adicionar uma nova coluna escolhendo antes de outra ou após
        Schema::table('fornecedors', function (Blueprint $table) {
            $table->string('site',150)->after('nome')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fornecedors', function (Blueprint $table) {
            $table->dropColumn('site');

        });
    }
};
