<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            DB::table('categories')->insert([
                ['branch_id' => 1,'name' => 'SECRETARIA'],
                ['branch_id' => 1,'name' => 'AUTARQUIA'],
                ['branch_id' => 1,'name' => 'EMPRESA PÚBLICA'],
                ['branch_id' => 1,'name' => 'FUNDAÇÃO PÚBLICA'],
                ['branch_id' => 1,'name' => 'ECONOMIA MISTA'],
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            //
        });
    }
}
