<?php

use Illuminate\Database\Seeder;

class PeopleAndUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Person::class, 3)->create([
            'user_id' => function () {
                return factory(\App\Models\User::class)->create()->id;
            },
            'faculty_id' => function () {
                return \App\Models\Faculty::inRandomOrder()->first()->id;
            },
            'group_id' => function () {
                return \App\Models\Group::inRandomOrder()->first()->id;
            },
            'role_id' => function () {
                return \App\Models\Role::inRandomOrder()->first()->id;
            },
        ]);
    }
}
