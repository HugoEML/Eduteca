<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Registered Users
        Permission::create([
            'name'          => 'Ver archivos subidos',
            'slug'          => 'users.index',
            'description'   => 'Lista y visualiza todos los archivos que ha subido el usuario',
        ]);
        Permission::create([
            'name'          => 'Ver detalle archivo subido',
            'slug'          => 'users.show',
            'description'   => 'Ver en detalle un archivo que ha subido el usuario',
        ]);
        Permission::create([
            'name'          => 'Editar archivo subido',
            'slug'          => 'users.edit',
            'description'   => 'Editar un archivo que ha subido el usuario',
        ]);
        Permission::create([
            'name'          => 'Eliminar archivo subido',
            'slug'          => 'users.destroy',
            'description'   => 'Eliminar un archivo que ha subido el usuario',
        ]);

        // Roles
        Permission::create([
            'name'          => 'Ver lista de roles',
            'slug'          => 'roles.index',
            'description'   => 'Lista y visualiza todos los roles del sistema',
        ]);
        Permission::create([
            'name'          => 'Crear roles',
            'slug'          => 'roles.create',
            'description'   => 'Crear roles del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle rol subido',
            'slug'          => 'roles.show',
            'description'   => 'Ver en detalle un rol del sistema',
        ]);
        Permission::create([
            'name'          => 'Editar rol subido',
            'slug'          => 'roles.edit',
            'description'   => 'Editar un rol del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar rol subido',
            'slug'          => 'roles.destroy',
            'description'   => 'Eliminar un rol del sistema',
        ]);

        // Posts
        Permission::create([
            'name'          => 'Ver lista de posts',
            'slug'          => 'posts.index',
            'description'   => 'Lista y visualiza todos los posts del sistema',
        ]);
        Permission::create([
            'name'          => 'Crear post',
            'slug'          => 'posts.create',
            'description'   => 'Crear post del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle post',
            'slug'          => 'posts.show',
            'description'   => 'Ver en detalle un post del sistema',
        ]);
        Permission::create([
            'name'          => 'Editar post',
            'slug'          => 'posts.edit',
            'description'   => 'Editar un post del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar post',
            'slug'          => 'posts.destroy',
            'description'   => 'Eliminar un post del sistema',
        ]);
    }
}
