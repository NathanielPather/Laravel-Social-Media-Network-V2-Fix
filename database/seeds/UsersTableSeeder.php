<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(App\User::class, 3)
            ->create()
            ->each(function ($user) {
               $user->posts()->save(factory(App\Posts::class)->make());
            });
    }
}
