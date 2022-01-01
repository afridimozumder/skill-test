<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class areas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            'id' => id::random(10),
            'name' => Str::random(10),
            'code' => Str::random(10)
        ]);
    }
}
