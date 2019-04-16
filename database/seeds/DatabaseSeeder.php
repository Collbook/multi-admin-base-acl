<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Models\Tag::class, 20)->create();
        // factory(App\Models\Category::class, 20)->create();
        // factory(App\Models\Post::class, 20)->create();

        factory(App\User::class, 10)->create();
        //factory(App\Models\Admin::class, 10)->create();
        factory(App\Models\Category::class, 10)->create();
        factory(App\Models\Post::class, 10)->create();
        factory(App\Models\Tag::class, 10)->create();

        $this->call(AdminTableSeeder::class);
        $this->call(EditorsTableSeeder::class);
        $this->call(AuthorsTableSeeder::class);
    }
}
