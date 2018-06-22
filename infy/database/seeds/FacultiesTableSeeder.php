<?php

use Illuminate\Database\Seeder;

class FacultiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Faculty::class)->create([
            'name' => '経済'
        ]);

        factory(\App\Models\Faculty::class)->create([
            'name' => '経営'
        ]);

        factory(\App\Models\Faculty::class)->create([
            'name' => '法'
        ]);

        factory(\App\Models\Faculty::class)->create([
            'name' => '現代社会'
        ]);

        factory(\App\Models\Faculty::class)->create([
            'name' => '外国語'
        ]);

        factory(\App\Models\Faculty::class)->create([
            'name' => '国際関係'
        ]);

        factory(\App\Models\Faculty::class)->create([
            'name' => '文化'
        ]);

        factory(\App\Models\Faculty::class)->create([
            'name' => '理'
        ]);

        factory(\App\Models\Faculty::class)->create([
            'name' => 'コンピュータ理工'
        ]);

        factory(\App\Models\Faculty::class)->create([
            'name' => '情報理工'
        ]);

        factory(\App\Models\Faculty::class)->create([
            'name' => '総合生命'
        ]);

        factory(\App\Models\Faculty::class)->create([
            'name' => '生命'
        ]);
    }
}
