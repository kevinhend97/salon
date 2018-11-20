<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(array(
        	[
        		'name'		=> 'Ayu',
        		'alamat'	=> 'Jalan Sukun',
        		'email'		=> 'ayurestyaningsih@gmail.com',
        		'no_telp'	=> '085742182518',
        		'jabatan'	=> 'Pemilik',
        		'password'	=> bcrypt('12345678'),
        	],

        	[
        		'name'		=> 'Kevin',
        		'alamat'	=> 'Jalan Wuni',
        		'email'		=> 'amedia92@gmail.com',
        		'no_telp'	=> '085742182518',
        		'jabatan'	=> 'Karyawan',
        		'password'	=> bcrypt('12345678'),
        	]
        ));
    }
}
