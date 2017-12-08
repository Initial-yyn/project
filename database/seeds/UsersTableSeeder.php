<?php

use Illuminate\Database\Seeder;
use App\User;

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
        $a = User::all()->toArray();
        if(empty($a)){
          User::create([
            'name' => '余义南',
            'email' => '1928705276@qq.com',
            'password' => bcrypt('123456'),
          ]);
        }
    }

}
