<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            [
                'name'=>'tiennv',
                'password'=>bcrypt('123456'),
                'level'=>1,
                'created_at'=>new DateTime()
            ],
            [
                'name'=>'manhml',
                'password'=>bcrypt('123456'),
                'level'=>1,
                'created_at'=>new DateTime()
            ],
            [
                'name'=>'hieutm',
                'password'=>bcrypt('123456'),
                'level'=>1,
                'created_at'=>new DateTime()
            ],
            [
                'name'=>'hanv',
                'password'=>bcrypt('123456'),
                'level'=>1,
                'created_at'=>new DateTime()
            ],
            [
                'name'=>'huanlx',
                'password'=>bcrypt('123456'),
                'level'=>1,
                'created_at'=>new DateTime()
            ],
            [
                'name'=>'hello',
                'password'=>bcrypt('123456'),
                'level'=>1,
                'created_at'=>new DateTime()
            ],
            [
                'name'=>'bigas',
                'password'=>bcrypt('123456'),
                'level'=>1,
                'created_at'=>new DateTime()
            ],
            [
                'name'=>'hehehehehehe',
                'password'=>bcrypt('123456'),
                'level'=>1,
                'created_at'=>new DateTime()
            ],
            [
                'name'=>'finter',
                'password'=>bcrypt('123456'),
                'level'=>1,
                'created_at'=>new DateTime()
            ],
            [
            'name'=>'hjhjhjhj',
            'password'=>bcrypt('123456'),
            'level'=>1,
            'created_at'=>new DateTime()
            ]
        ]);

    }
}
