<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Group::class)->create([
            'id' => 1,
            'name' => 'プログラミング班',
            'about' => 'プログラミング言語などを利用してコンテンツを制作'
        ]);

        factory(\App\Models\Group::class)->create([
            'id' => 2,
            'name' => 'グラフィックス班',
            'about' => 'イラストなどの素材を提供'
        ]);

        factory(\App\Models\Group::class)->create([
            'id' => 3,
            'name' => 'ミュージック班',
            'about' => 'BGMなどの素材を提供'
        ]);
    }
}
