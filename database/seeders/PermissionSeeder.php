<?php namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Notsoweb\LaravelMongoDB\Permission\Models\PermissionType;
use Notsoweb\LaravelMongoDB\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Permisos usuarios
        $users = PermissionType::create([
            'prefix' => 'users',
            'name' => 'Usuarios',
        ]);

        [
            $userIndex,
            $userCreate,
            $userEdit,
            $userDestroy
        ] = $users->newCRUDPermission();

        // Administrador
        Role::create([
            'name' => __('administrator'),
            'description' => 'Administrador del sistema',
        ])->givePermissionTo([
            $userIndex,
            $userCreate,
            $userEdit,
            $userDestroy
        ]);

        // Supervisor
        Role::create([
            'name' => __('supervisor'),
            'description' => 'Supervisor: Puede ver la información del sistema sin modificarla.',
        ])->givePermissionTo([
            $userIndex
        ]);

        // Gestor usuarios
        Role::create([
            'name' => __('users'),
            'description' => 'Usuarios: Administrar usuarios',
        ])->givePermissionTo([
            $userIndex,
            $userCreate,
            $userEdit,
            $userDestroy
        ]);
    }
}
