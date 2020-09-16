<?php

use Illuminate\Database\Seeder;
use User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        factory(App\User::class, 2)->create()->each(function ($user) {
=======
<<<<<<< HEAD
        $s1=new Donor;
      
     
        $s1->name="Aye";
        $s1->email="aye@gmail.com";
        $s1->password=Hash::make('123456789');
        $s1->save();
=======
       factory(App\User::class, 2)->create()->each(function ($user) {
>>>>>>> c5f506736adb73120a4dd76a4ee3b83dfeed643d
          // Seed the relation with one customer
          $donor = factory(App\Donor::class)->make();
          $user->donor()->save($donor);
      });
>>>>>>> 3df5c78d11fd672f9ac92cd1e9b3334c3609d857
    }
}
