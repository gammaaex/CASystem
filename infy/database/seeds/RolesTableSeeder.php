<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Role::class)->create([
            'name' => '主幹'
        ]);

        factory(\App\Models\Role::class)->create([
            'name' => '副主幹'
        ]);

        factory(\App\Models\Role::class)->create([
            'name' => '財務責任者'
        ]);

        factory(\App\Models\Role::class)->create([
            'name' => '財務担当者'
        ]);

        factory(\App\Models\Role::class)->create([
            'name' => '庶務責任者'
        ]);

        factory(\App\Models\Role::class)->create([
            'name' => '教務責任者'
        ]);

        factory(\App\Models\Role::class)->create([
            'name' => '教務担当者'
        ]);

        factory(\App\Models\Role::class)->create([
            'name' => '文化団体連盟本部役員'
        ]);

        factory(\App\Models\Role::class)->create([
            'name' => '合宿委員'
        ]);

        factory(\App\Models\Role::class)->create([
            'name' => 'サーバ管理者'
        ]);

        factory(\App\Models\Role::class)->create([
            'name' => 'ブログ管理者'
        ]);

        factory(\App\Models\Role::class)->create([
            'name' => 'プログラミング班チーフ'
        ]);

        factory(\App\Models\Role::class)->create([
            'name' => 'グラフィックス班チーフ'
        ]);

        factory(\App\Models\Role::class)->create([
            'name' => 'ミュージック班チーフ'
        ]);
    }
}
