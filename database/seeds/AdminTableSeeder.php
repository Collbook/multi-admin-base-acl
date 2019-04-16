<?php

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;


class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        //admins
        //administrator
        DB::table('admins')->insert([
            'id' => '1',
            'name'    => 'administrator',
            'email'    => 'admin.collbook@gmail.com',
            'password' => bcrypt('admin'),
            'image' => $faker->imageUrl(),
            'phone' => $faker->phoneNumber,
            'status' => true,
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        // roles

        DB::table('roles')->insert([
            'id' => '1',
            'name'    => 'administrator',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        // permissions
        DB::table('permissions')->insert([
            'id'    => '1',
            'name'  => 'create-posts',
            'for'   => 'post',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        
        DB::table('permissions')->insert([
            'id'    => '2',
            'name'  => 'update-posts',
            'for'   => 'post',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('permissions')->insert([
            'id'    => '3',
            'name'  => 'delet-posts',
            'for'   => 'post',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        
        DB::table('permissions')->insert([
            'id'    => '4',
            'name'  => 'crud-posts',
            'for'   => 'post',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('permissions')->insert([
            'id'    => '5',
            'name'  => 'create-users',
            'for'   => 'user',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('permissions')->insert([
            'id'    => '6',
            'name'  => 'uddate-users',
            'for'   => 'user',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('permissions')->insert([
            'id'    => '7',
            'name'  => 'delete-users',
            'for'   => 'user',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('permissions')->insert([
            'id'    => '8',
            'name'  => 'crud-users',
            'for'   => 'user',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('permissions')->insert([
            'id'    => '9',
            'name'  => 'crud-tags',
            'for'   => 'other',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('permissions')->insert([
            'id'    => '10',
            'name'  => 'crud-category',
            'for'   => 'other',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('permissions')->insert([
            'id'    => '11',
            'name'  => 'crud-permision',
            'for'   => 'other',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('permissions')->insert([
            'id'    => '12',
            'name'  => 'crud-roles',
            'for'   => 'other',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        // admin_role

        
        DB::table('admin_roles')->insert([
            'admin_id'    => '1',
            'role_id'  => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        // permission_role
        for($i = 1;$i<=12;$i++)
        {
            if($i == 11)
                continue;
            DB::table('permission_role')->insert([
                'role_id'    => '1',
                'permission_id'  => $i
                // 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                // 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }    
    }
}

