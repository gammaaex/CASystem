<?php

use Illuminate\Database\Seeder;

class AuthoritiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Authority::class)->create([
            'name' => '管理者'
        ]);

        factory(\App\Models\Authority::class)->create([
            'name' => '一般'
        ]);

        factory(\App\Models\Authority::class)->create([
            'name' => 'ゲスト'
        ]);
    }
}
