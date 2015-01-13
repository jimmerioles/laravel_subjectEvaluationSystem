<?php
/**
 * Created by PhpStorm.
 * User: TheHamsterOfGod
 * Date: 1/13/2015
 * Time: 2:51 PM
 */

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->truncate();

        User::create([
            'email' => 'jimzter@gmail.com',
            'name' => 'jimzter merioles',
            'password' => 'jimzter',
        ]);
        $this->command->info('Added user 1');

        User::create([
            'email' => 'slinky@gmail.com',
            'name' => 'slinky doo',
            'password' => Hash::make('slinky'),
        ]);
        $this->command->info('Added user 2');

        User::create([
            'email' => 'maria@gmail.com',
            'name' => 'maria banana',
            'password' => Hash::make('banana'),
        ]);
        $this->command->info('Added user 3');
    }

}