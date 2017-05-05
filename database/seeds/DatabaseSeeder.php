<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         DB::table('admins')->insert([
            'admin_id' => '2',
            'name' => 'monmoy',
            'password' => Hash::make('monmoy'),
        ]);

        DB::table('accounts')->insert([
            'student_id' => '1',
            'password' => 'x',
            'email' => 'a',
            'fname' => 'c',
            'lname' => 'c',
            'year' => 'c',
            'phone' => 'c',
            'gender' => 'c',

        ]);
     
        DB::table('accounts')->insert([
            'student_id' => '2',
            'password' => 'x',
            'email' => 'b',
            'fname' => 'c',
            'lname' => 'c',
            'year' => 'c',
            'phone' => 'c',
            'gender' => 'c',

        ]);
        DB::table('accounts')->insert([
            'student_id' => '3',
            'password' => 'x',
            'email' => 'c',
            'fname' => 'c',
            'lname' => 'c',
            'year' => 'c',
            'phone' => 'c',
            'gender' => 'c',

        ]);
        DB::table('accounts')->insert([
            'student_id' => '4',
            'password' => 'x',
            'email' => 'd',
            'fname' => 'c',
            'lname' => 'c',
            'year' => 'c',
            'phone' => 'c',
            'gender' => 'c',

        ]);
        DB::table('accounts')->insert([
            'student_id' => '5',
            'password' => 'x',
            'email' => 'e',
            'fname' => 'c',
            'lname' => 'c',
            'year' => 'c',
            'phone' => 'c',
            'gender' => 'c'

        ]);
      
    }
}
