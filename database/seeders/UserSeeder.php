<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** @var User $admin */
        $admin = User::factory()->create(['email' => 'admin@admin.com']);
        $admin->roles()->attach(Role::where('name', 'Administrator')->value('id'));

        /** @var User $editor */
        $editor = User::factory()->create(['email' => 'editor@edit.com']);
        $editor->roles()->attach(Role::where('name', 'Editor')->value('id'));
    }
}
