<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertStates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('states', function (Blueprint $table) {
            DB::table('states')->insert([
                ['name' => 'Acre', 'initials' => 'AC'],
                ['name' => 'Alagoas', 'initials' => 'AL'],
                ['name' => 'Amazonas', 'initials' => 'AM'],
                ['name' => 'Amapá', 'initials' => 'AP'],
                ['name' => 'Bahia', 'initials' => 'BA'],
                ['name' => 'Ceará', 'initials' => 'CE'],
                ['name' => 'Distrito Federal', 'initials' => 'DF'],
                ['name' => 'Espírito Santo', 'initials' => 'ES'],
                ['name' => 'Goiás', 'initials' => 'GO'],
                ['name' => 'Maranhão', 'initials' => 'MA'],
                ['name' => 'Minas Gerais', 'initials' => 'MG'],
                ['name' => 'Mato Grosso do Sul', 'initials' => 'MS'],
                ['name' => 'Mato Grosso', 'initials' => 'MT'],
                ['name' => 'Pará', 'initials' => 'PA'],
                ['name' => 'Paraíba', 'initials' => 'PB'],
                ['name' => 'Pernambuco', 'initials' => 'PE'],
                ['name' => 'Piauí', 'initials' => 'PI'],
                ['name' => 'Paraná', 'initials' => 'PR'],
                ['name' => 'Rio de Janeiro', 'initials' => 'RJ'],
                ['name' => 'Rio Grande do Norte', 'initials' => 'RN'],
                ['name' => 'Rondônia', 'initials' => 'RO'],
                ['name' => 'Roraima', 'initials' => 'RR'],
                ['name' => 'Rio Grande do Sul', 'initials' => 'RS'],
                ['name' => 'Santa Catarina', 'initials' => 'SC'],
                ['name' => 'Sergipe', 'initials' => 'SE'],
                ['name' => 'São Paulo', 'initials' => 'SP'],
                ['name' => 'Tocantins', 'initials' => 'TO'],
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
        Schema::table('states', function (Blueprint $table) {
            //
        });
    }
}
