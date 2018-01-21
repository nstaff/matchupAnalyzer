<?php

use Illuminate\Database\Seeder;

class AllBreadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ArchetypesBreadSeeder::class);
        $this->call(FormatsBreadSeeder::class);

        //Do this one at the end
        $this->call(PermissionRoleTableSeeder::class);
    }
}
