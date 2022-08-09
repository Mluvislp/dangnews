<?php

namespace Database\Seeders;

use Illuminate\Dussatabase\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Spatie\Permission\Models\Role;


class Permissionseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $addPosts    = Permission::create(['name' => 'add-posts']);
        $updatePosts = Permission::create(['name' => 'update-posts']);
        $deletePosts = Permission::create(['name' => 'delete-posts']);
        $givePermission = Permission::create(['name' => 'give-permission']);

        Role::where('name','admin')->first()->givePermissionTo(Permission::all());
        Role::where('name','writer')->first()->givePermissionTo(['add-posts','update-posts','delete-posts']);
    }
}
