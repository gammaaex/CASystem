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
        $this->call([
            AuthoritiesTableSeeder::class,
            GroupsTableSeeder::class,
            FacultiesTableSeeder::class,
            RolesTableSeeder::class,
            PeopleAndUsersTableSeeder::class
        ]);
    }
}
