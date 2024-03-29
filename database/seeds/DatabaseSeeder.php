<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UsersTableSeeder');
        $this->call('NewsTableSeeder');
        $this->call('ProjectsTableSeeder');
        $this->call('AmenitiesTableSeeder');
        $this->call('RegionsTableSeeder');
        $this->call('UnitTypesTableSeeder');
    }
}
