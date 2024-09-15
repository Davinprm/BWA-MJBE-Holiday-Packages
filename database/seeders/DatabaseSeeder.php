<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user1 =User::factory()->create([
            'name' => 'Indoneyacht',
            'email' => 'indoneyacht123@gmail.com',
            'password' => bcrypt('indoneyacht123'),
        ]);
        $user2 =User::factory()->create([
            'name' => 'Davin Permana',
            'email' => 'davinpermana123@gmail.com',
            'password' => bcrypt('asdasd123'),
        ]);
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'guest']);
        $user1->assignRole($role1);
        $user2->assignRole($role2);
    }
}
