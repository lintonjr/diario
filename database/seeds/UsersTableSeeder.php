<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Administrador',
                'email' => 'admin@dd.com',
                'password' => bcrypt('@dd@77')
            ],
            [
                'name' => 'Usuário Diagramador',
                'email' => 'diagramador@dd.com',
                'password' => bcrypt('@dd@77')
            ],
            [
                'name' => 'Usuário Editor',
                'email' => 'editor@dd.com',
                'password' => bcrypt('@dd@77')
            ],
            [
                'name' => 'Gestor Imprensa Estadual',
                'email' => 'gestor@imp.com',
                'password' => bcrypt('@dd@77')
            ],
            [
                'name' => 'Operador SEGOV',
                'email' => 'operador@segov.com',
                'password' => bcrypt('@dd@77')
            ],
            [
                'name' => 'Operador SEFAZ',
                'email' => 'operador@sefaz.com',
                'password' => bcrypt('@dd@77')
            ],
            [
                'name' => 'Gestor Associação dos Municípios',
                'email' => 'gestor@am.com',
                'password' => bcrypt('@dd@77')
            ],
            [
                'name' => 'Gestor Prefeitura Modelo',
                'email' => 'gestor@prefeitura.com',
                'password' => bcrypt('@dd@77')
            ],
            [
                'name' => 'Operador Prefeitura Modelo - SEMED',
                'email' => 'operador@semed.com',
                'password' => bcrypt('@dd@77')
            ],
            [
                'name' => 'Operador Prefeitura Modelo - SEMEF',
                'email' => 'operador@semef.com',
                'password' => bcrypt('@dd@77')
            ]            
        ]);
    }
}
