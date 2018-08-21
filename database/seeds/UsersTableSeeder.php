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
        	// [
        	// 	'user_name'=>'admin',
        	// 	'email'=>'admin@gmail.com',
        	// 	'password'=>bcrypt('123456'),
         //        'user_img'=>'dcss',
         //        'user_level'=>1,
         //        'token' => str_random(40),
         //        'status' => 1,
        	// ],
        	// [
        	// 	'user_name'=>'Nguyễn Thành Khiêm',
        	// 	'email'=>'nguyentkhiem96@gmail.com',
        	// 	'password'=>bcrypt('123456'),
         //        'user_img'=>'dsvlkdlk',
         //        'user_level'=>1,
         //        'token' => str_random(40),
         //        'status' => 1,
        	// ],
        	[
        		'user_name'=>'Nguyễn Mai Trang',
        		'email'=>'nguyenmaitrang@gmail.com',
        		'password'=>bcrypt('123456'),
                'user_img'=>'dckkk',
                'user_level'=>3,
                'token' => str_random(40),
                'status' => 1,
        	],
        	[
        		'user_name'=>'Nguyễn Minh Tâm',
        		'email'=>'nguyenminhtam@gmail.com',
        		'password'=>bcrypt('123456'),
                'user_img'=>'dsvlkdlk',
                'user_level'=>3,
                'token' => str_random(40),
                'status' => 1,
        	],
        ];

        DB::table('mp_users')->insert($data);
    }
}
