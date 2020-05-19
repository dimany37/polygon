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
        $data = [
            [
            'name'    => 'Дима Юркевич',
            'email'   => 'dimany37@mail.ru',
            'password' => bcrypt(str_random(16)),
        ],
        [
            'name'    => 'Муслим Кобзон',
            'email'   => '123@mail.ru',
            'password' => bcrypt(('123')),
        ],
            ];

        DB::table('users')->insert($data);
    }
}
