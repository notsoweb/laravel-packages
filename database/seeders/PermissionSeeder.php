<?php namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Notsoweb\LaravelMongoDB\Permission\Models\Role;
use Notsoweb\LaravelMongoDB\Permission\Support\PermissionSupport;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Permisos
        $users = (new PermissionSupport('users','Usuarios'))
            ->addCRUD();
        [
            $userIndex,
        ] = $users->getPermissions();

        // Administrador
        Role::create([
            'name' => __('administrator'),
            'description' => 'Administrador del sistema',
        ])->permissions()->saveMany(array_merge(
            $users->getPermissions()
        ));

        // Supervisor
        Role::create([
            'name' => __('supervisor'),
            'description' => 'Supervisor: Puede ver la información del sistema sin modificarla.',
        ])->permissions()->saveMany([
            $userIndex
        ]);

        // Gestor usuarios
        Role::create([
            'name' => __('users'),
            'description' => 'Usuarios: Administrar usuarios',
        ])->permissions()->saveMany($users->getPermissions());
    }
}
