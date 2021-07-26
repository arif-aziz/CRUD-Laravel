<?php

class UserSeeder extends Seeder {

    public function run()
    {
        DB::table('m_user')->delete();

        User::create(array(
            'username' => 'superadmin', 
            'password' => Hash::make('superadmin')
            )
        );
    }

}