<?php

use Illuminate\Database\Seeder;

class ButaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Butai::class, 10)->create();
    }
}
