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
        //
        schema::table('fornecedores', function (Blueprint $table) {
            $table->string('site', 150)->nullable()->after('nome'); 
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
        schema::table('fornecedores', function (Blueprint $table) {
            $table->dropColumn('site');
        });
    }
};
