<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertBranches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('branches', function (Blueprint $table) {
            DB::table('branches')->insert([
                ['sphere_id' => 1,'name' => 'EXECUTIVO'],
                ['sphere_id' => 1,'name' => 'LEGISLATIVO'],
                ['sphere_id' => 1,'name' => 'JUDICIÁRIO'],
                ['sphere_id' => 2,'name' => 'EXECUTIVO'],
                ['sphere_id' => 2,'name' => 'LEGISLATIVO'],
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
        Schema::table('branches', function (Blueprint $table) {
            //
        });
    }
}
