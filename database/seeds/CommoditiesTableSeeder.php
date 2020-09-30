<?php

use Illuminate\Database\Seeder;

class CommoditiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Commodity::class, 50)->create()->each(function ($commodity) {
            $commodity->skus()->saveMany(factory(\App\Models\CommoditySku::class, random_int(2, 5))->make());
        });
    }
}
