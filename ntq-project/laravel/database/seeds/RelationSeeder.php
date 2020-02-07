<?php

use Illuminate\Database\Seeder;

class RelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_sp')->insert([
            [
                'name_sp'=>'Sách',
                'created_at'=>new DateTime()
            ],
            [
                'name_sp'=>'Báo',
                'created_at'=>new DateTime()
            ],
            [
                'name_sp'=>'Truyện',
                'created_at'=>new DateTime()
            ],
            [
                'name_sp'=>'Từ Điển',
                'created_at'=>new DateTime()
            ],

        ]);
        DB::table('info_sp')->insert([
            [
                'price_sp'=>'11111',
                'nha_sx'=> 'Việt Nam',
                'product_id'=>'1',
                'created_at'=>new DateTime()
            ],[
                'price_sp'=>'2222',
                'nha_sx'=> 'Trung Quốc',
                'product_id'=>'2',
                'created_at'=>new DateTime()
            ],[
                'price_sp'=>'3333',
                'nha_sx'=> 'Lào',
                'product_id'=>'1',
                'created_at'=>new DateTime()
            ],[
                'price_sp'=>'4444',
                'nha_sx'=> 'Thái Lan',
                'product_id'=>'3',
                'created_at'=>new DateTime()
            ],[
                'price_sp'=>'5555',
                'nha_sx'=> 'Thụy Sĩ',
                'product_id'=>'3',
                'created_at'=>new DateTime()
            ],[
                'price_sp'=>'2000',
                'nha_sx'=> 'Mỹ',
                'product_id'=>'3',
                'created_at'=>new DateTime()
            ],[
                'price_sp'=>'3000',
                'nha_sx'=> 'Hà Lan',
                'product_id'=>'4',
                'created_at'=>new DateTime()
            ],[
                'price_sp'=>'4090',
                'nha_sx'=> 'Anh',
                'product_id'=>'4',
                'created_at'=>new DateTime()
            ],[
                'price_sp'=>'5000',
                'nha_sx'=> 'Pháp',
                'product_id'=>'4',
                'created_at'=>new DateTime()
            ],

        ]);
        DB::table('nguoidung')->insert([
            [
                'name_nguoidung'=>'Tiến',
                'email'=> 'tien@gmail.com',
                'phone_number'=>'2222222',
                'address'=>'Hà Nội',
                'product_id'=>'1',
                'created_at'=>new DateTime()
            ],[
                'name_nguoidung'=>'Huânxl',
                'email'=> 'huan@gmail.com',
                'phone_number'=>'33333',
                'address'=>'Thái Bình',
                'product_id'=>'2',
                'created_at'=>new DateTime()
            ],[
                'name_nguoidung'=>'Mạnh',
                'email'=> 'manh@gmail.com',
                'phone_number'=>'444444',
                'address'=>'Hồ Chí Minh',
                'product_id'=>'3',
                'created_at'=>new DateTime()
            ],[
                'name_nguoidung'=>'Hà',
                'email'=> 'ha@gmail.com',
                'phone_number'=>'66666',
                'address'=>'Quảng Ngãi',
                'product_id'=>'4',
                'created_at'=>new DateTime()
            ],[
                'name_nguoidung'=>'Hiếu',
                'email'=> 'hieu@gmail.com',
                'phone_number'=>'77777',
                'address'=>'Bắc Giang',
                'product_id'=>'4',
                'created_at'=>new DateTime()
            ],

        ]);
    }
}
