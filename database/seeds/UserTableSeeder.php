<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\User::class, 2)->create()->each(function ($user) {
          // Seed the relation with one customer
          $donor = factory(App\Donor::class)->make();
          $user->donor()->save($donor);
      });
    }
}