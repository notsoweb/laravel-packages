<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Notsoweb\LaravelMongoDB\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Developer',
            'paternal' => 'Notsoweb',
            'email' => 'developer@notsoweb.com',
            'password' => bcrypt('password'),
        ])->assignRole(__('administrator'));
    }
}
