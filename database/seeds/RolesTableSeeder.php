<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => 'Administrador',
                'description' => 'Administrador do Sistema'
            ],
            [
                'name' => 'Editor',
                'description' => 'Editor de Publicações'
            ],
            [
                'name' => 'Diagramador',
                'description' => 'Diagramador de Publicações'
            ],
            [
                'name' => 'Gestor do Cliente',
                'description' => 'Gestor do Cliente'
            ],
            [
                'name' => 'Gestor da Entidade',
                'description' => 'Gestor da Entidade'
            ],
            [
                'name' => 'Operador',
                'description' => 'Operador de Publicações'
            ]
        ]);
    }
}
