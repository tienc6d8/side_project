<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comment')->insert([
            ['content'=>'Anh Yêu Em','admin_id'=>1],
            ['content'=>'Hello word','admin_id'=>2],
            ['content'=>'Chán VL','admin_id'=>3],
            ['content'=>'Fresher','admin_id'=>4],
            ['content'=>'Loteria','admin_id'=>2],
            ['content'=>'Góc Hà Nội','admin_id'=>1],
            ['content'=>'Admin PHP','admin_id'=>3],
            ['content'=>'Next','admin_id'=>1],
        ]);
    }
}
