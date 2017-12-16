<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    const TABLE_NAME = 'users';
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table(self::TABLE_NAME)->delete();

        $seeds = [];
        $seeds['name'] = 'やまだ　たろう';
        $seeds['email'] = 'hoge@email.com';
        $seeds['password'] = '123456';

        \DB::table(self::TABLE_NAME)->insert($seeds);
    }
}