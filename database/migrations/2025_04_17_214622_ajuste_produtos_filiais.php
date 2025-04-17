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
        //criando tabela filiais
        Schema::create('filiais', function (Blueprint $table) {
            $table->id();
            $table->string('filial', 30);
            $table->timestamps();
        });

        //criando tabela produtos_filiais
        Schema::create('produtos_filiais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('filial_id');
            $table->unsignedBigInteger('produto_id');
            $table->decimal('preco_venda',8,2);
            $table->integer('estoque_minimo')->default(0);
            $table->integer('estoque_maximo')->default(0);
            $table->timestamps();

            //foreign key constraints
            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->foreign('produto_id')->references('id')->on('produtos');
        });

        Schema::table('produtos_filiais', function (Blueprint $table) {
            $table->dropColumn('preco_venda');
            $table->dropColumn('estoque_minimo');
            $table->dropColumn('estoque_maximo');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('produtos_filiais', function (Blueprint $table) {
            $table->decimal('preco_venda',8,2);
            $table->integer('estoque_minimo')->default(0);
            $table->integer('estoque_maximo')->default(0);
        });

        Schema::dropIfExists('produtos_filiais');
        Schema::dropIfExists('filiais');
    }
};
