<?php

use Illuminate\Database\Seeder;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('info')->insert([
            [
                'address'=>'Hà Nội',
                'phone_number'=> '0998888888',
                'email'=>'tien@gmail.com',
                'admin_id'=>1,
                'created_at'=>new DateTime()
            ],[
                'address'=>'Hà Nam',
                'phone_number'=>'0998888888',
                'email'=>'aaa@gmail.com',
                'admin_id'=>2,
                'created_at'=>new DateTime()
            ],[
                'address'=>'Hưng Yên',
                'phone_number'=>'0998888888',
                'email'=>'dsdsad@gmail.com',
                'admin_id'=>3,
                'created_at'=>new DateTime()
            ],[
                'address'=>'Thái Bình',
                'phone_number'=>'0998888888',
                'email'=>'MTP@gmail.com',
                'admin_id'=>4,
                'created_at'=>new DateTime()
            ],[
                'address'=>'Hồ Chí Minh',
                'phone_number'=>'0998888888',
                'email'=>'Bac@gmail.com',
                'admin_id'=>5,
                'created_at'=>new DateTime()
            ],

        ]);

    }
}
