<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s1=new Donor;
      
     
        $s1->name="Aye";
        $s1->email="aye@gmail.com";
        $s1->password=Hash::make('123456789');
        $s1->save();    }
}
