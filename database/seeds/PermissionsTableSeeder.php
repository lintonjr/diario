<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'name' => 'users-view',
                'description' => 'Usuários',
                'area' => 'users'
            ],
            [
                'name' => 'users-create',
                'description' => 'Usuários',
                'area' => 'users'
            ],
            [
                'name' => 'users-edit',
                'description' => 'Usuários',
                'area' => 'users'
            ],
            [
                'name' => 'users-delete',
                'description' => 'Usuários',
                'area' => 'users'
            ]

        ]);

        DB::table('permissions')->insert([
            [
                'name' => 'roles-view',
                'description' => 'Roles',
                'area' => 'roles'
            ],
            [
                'name' => 'roles-create',
                'description' => 'Roles',
                'area' => 'roles'
            ],
            [
                'name' => 'roles-edit',
                'description' => 'Roles',
                'area' => 'roles'
            ],
            [
                'name' => 'roles-delete',
                'description' => 'Roles',
                'area' => 'roles'
            ]

        ]);

        DB::table('permissions')->insert([
            [
                'name' => 'permissions-view',
                'description' => 'Permissões',
                'area' => 'permissions'
            ],
            [
                'name' => 'permissions-create',
                'description' => 'Permissões',
                'area' => 'permissions'
            ],
            [
                'name' => 'permissions-edit',
                'description' => 'Permissões',
                'area' => 'permissions'
            ],
            [
                'name' => 'permissions-delete',
                'description' => 'Permissões',
                'area' => 'permissions'
            ]

        ]);

        DB::table('permissions')->insert([
            [
                'name' => 'clients-view',
                'description' => 'Permissões de Clientes',
                'area' => 'clients'
            ],
            [
                'name' => 'clients-create',
                'description' => 'Permissões de Clientes',
                'area' => 'clients'
            ],
            [
                'name' => 'clients-edit',
                'description' => 'Permissões de Clientes',
                'area' => 'clients'
            ],
            [
                'name' => 'clients-delete',
                'description' => 'Permissões de Clientes',
                'area' => 'clients'
            ]

        ]);

        DB::table('permissions')->insert([
            [
                'name' => 'entities-view',
                'description' => 'Permissões de acesso ao Municípios',
                'area' => 'entities'
            ],
            [
                'name' => 'entities-create',
                'description' => 'Permissões de acesso ao Municípios',
                'area' => 'entities'
            ],
            [
                'name' => 'entities-edit',
                'description' => 'Permissões de acesso ao Municípios',
                'area' => 'entities'
            ],
            [
                'name' => 'entities-delete',
                'description' => 'Permissões de acesso ao Municípios',
                'area' => 'entities'
            ]

        ]);

        DB::table('permissions')->insert([
            [
                'name' => 'register-view',
                'description' => 'Permissão de ver o menu Cadastro',
                'area' => 'register'
            ],
            [
                'name' => 'register-create',
                'description' => 'Permissão de ver o menu Cadastro',
                'area' => 'register'
            ],
            [
                'name' => 'register-edit',
                'description' => 'Permissão de ver o menu Cadastro',
                'area' => 'register'
            ],
            [
                'name' => 'register-delete',
                'description' => 'Permissão de ver o menu Cadastro',
                'area' => 'register'
            ]

        ]);

        DB::table('permissions')->insert([
            [
                'name' => 'transparent-view',
                'description' => 'Permissão de ver menu Transparência',
                'area' => 'transparent'
            ],
            [
                'name' => 'transparent-create',
                'description' => 'Permissão de ver menu Transparência',
                'area' => 'transparent'
            ],
            [
                'name' => 'transparent-edit',
                'description' => 'Permissão de ver menu Transparência',
                'area' => 'transparent'
            ],
            [
                'name' => 'transparent-delete',
                'description' => 'Permissão de ver menu Transparência',
                'area' => 'transparent'
            ]

        ]);

        DB::table('permissions')->insert([
            [
                'name' => 'system-view',
                'description' => 'Permissão de ver menu Sistema',
                'area' => 'system'
            ],
            [
                'name' => 'system-create',
                'description' => 'Permissão de ver menu Sistema',
                'area' => 'system'
            ],
            [
                'name' => 'system-edit',
                'description' => 'Permissão de ver menu Sistema',
                'area' => 'system'
            ],
            [
                'name' => 'system-delete',
                'description' => 'Permissão de ver menu Sistema',
                'area' => 'system'
            ]

        ]);
    }
}
