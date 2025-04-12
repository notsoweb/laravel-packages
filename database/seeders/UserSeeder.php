<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Notsoweb\LaravelMongoDB\Permission\Models\Role;
use Notsoweb\LaravelMongoDB\Permission\Traits\UserSecurePassword;

class UserSeeder extends Seeder
{
    use UserSecurePassword;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = $this->securePassword('developer@notsoweb.com');

        User::create([
            'name' => 'Developer',
            'paternal' => 'Notsoweb',
            'email' => $user->email,
            'password' => $user->password,
        ]);
    }
}
