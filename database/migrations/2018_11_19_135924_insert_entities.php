<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertEntities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('entities', function (Blueprint $table) {
            DB::table('entities')->insert([
                ['state_id' => 1, 'name' => 'Acrelândia'],
                ['state_id' => 1, 'name' => 'Assis Brasil'],
                ['state_id' => 1, 'name' => 'Brasiléia'],
                ['state_id' => 1, 'name' => 'Bujari'],
                ['state_id' => 1, 'name' => 'Capixaba'],
                ['state_id' => 1, 'name' => 'Cruzeiro do Sul'],
                ['state_id' => 1, 'name' => 'Epitaciolândia'],
                ['state_id' => 1, 'name' => 'Feijó'],
                ['state_id' => 1, 'name' => 'Jordão'],
                ['state_id' => 1, 'name' => 'Mâncio Lima'],
                ['state_id' => 1, 'name' => 'Manoel Urbano'],
                ['state_id' => 1, 'name' => 'Marechal Thaumaturgo'],
                ['state_id' => 1, 'name' => 'Plácido de Castro'],
                ['state_id' => 1, 'name' => 'Porto Acre'],
                ['state_id' => 1, 'name' => 'Porto Walter'],
                ['state_id' => 1, 'name' => 'Rio Branco'],
                ['state_id' => 1, 'name' => 'Rodrigues Alves'],
                ['state_id' => 1, 'name' => 'Santa Rosa do Purus'],
                ['state_id' => 1, 'name' => 'Sena Madureira'],
                ['state_id' => 1, 'name' => 'Senador Guiomard'],
                ['state_id' => 1, 'name' => 'Tarauacá'],
                ['state_id' => 1, 'name' => 'Xapuri'],
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
        Schema::table('entities', function (Blueprint $table) {
            //
        });
    }
}
