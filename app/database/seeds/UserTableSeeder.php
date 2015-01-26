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

        $users = [
            [
                'email'     => 'jimzter@gmail.com',
                'password'  => Hash::make('jimzter'),
                'firstName' => 'jim wisley',
                'lastName'  => 'merioles',
                'age'       =>  25,
                'address'   => '4508 nivel hills lahug, cebu city',
            ],
            [
                'email'     => 'slinky@gmail.com',
                'password'  => Hash::make('slinky'),
                'firstName' => 'slinky',
                'lastName'  => 'doo',
                'age'       => 3,
                'address'   => '4508 nivel hill lahug, cebu city'
            ],
            [
                'email'     => 'maria@gmail.com',
                'password'  => Hash::make('banana'),
                'firstName' => 'maria',
                'lastName'  => 'banana',
                'age'       => 21,
                'address'   => 'vistabella, lapu lapu city'
            ],
        ];

        foreach($users as $user)
        {
            User::create($user);
            $this->command->info('User: '.$user['firstName'].' added!');
        }

        $this->command->info('ALL USERS ADDED!');
    }

}