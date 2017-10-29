<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\User;

class UserTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         User::create([
             'name' => 'Awidiya',
             'email' => 'awidiya.dewa@gmail.com',
             'password' => 'ayamterbang',
             'token' => 'abcdefghijkl'
         ]);

         User::create([
            'name' => 'Cimili',
            'email' => 'cimili@gmail.com',
            'password' => 'ayamgoreng',
            'token' => 'xyzabcde'
        ]);

    }
}