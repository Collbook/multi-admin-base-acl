<?php

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;


class EditorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        //admins
        //edittors
        DB::table('admins')->insert([
            'id' => '2',
            'name'    => 'edittors',
            'email'    => 'edittors.collbook@gmail.com',
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
            'id' => '2',
            'name'    => 'edittors',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        // admin_role
        DB::table('admin_roles')->insert([
            'admin_id'    => '2',
            'role_id'  => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        // permission_role
        for($i = 1;$i<=12;$i++)
        {
            if($i == 5 || $i == 6 || $i == 7 || $i == 8 || $i == 11 || $i == 12 )
                continue;
            DB::table('permission_role')->insert([
                'role_id'    => '2',
                'permission_id'  => $i
                // 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                // 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }    
    }
}

