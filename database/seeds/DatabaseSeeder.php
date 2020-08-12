<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_admin')->insert([
            'admin_email'=>"thnhthnh1234@gmail.com",
            'admin_password'=>bcsqrt("123"),
            'admin_name'=>"Trịnh Thành",
            'admin_phone'=>"0916465528"
        ]);
    }
}
