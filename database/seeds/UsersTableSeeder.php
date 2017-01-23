<?php

use Illuminate\Database\Seeder;
use PublicaSalta\User;
use PublicaSalta\Ad;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          User::truncate();
          Ad::truncate();

          factory(PublicaSalta\User::class, 10)->create()->each(function ($user) {
              $ad = factory(PublicaSalta\Ad::class)->make();
              $user->ads()->save($ad);
          });
    }
}
