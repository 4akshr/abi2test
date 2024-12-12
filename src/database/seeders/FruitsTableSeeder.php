<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FruitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'kiwi',
            'price' => '800',
            'season' => 'fall,winter'
        ];
        DB::table('fruits')->insert($param);
        $param = [
            'name' => 'strawberry',
            'price' => '1,200',
            'season' => 'spring'
        ];
        DB::table('fruits')->insert($param);
        $param = [
            'name' => 'orange',
            'price' => '850',
            'season' => 'winter'
        ];
        DB::table('fruits')->insert($param);
        $param = [
            'name' => 'watermelon',
            'price' => '700',
            'season' => 'summer'
        ];
        DB::table('fruits')->insert($param);
        $param = [
            'name' => 'peach',
            'price' => '1,000',
            'season' => 'summer'
        ];
        DB::table('fruits')->insert($param);
        $param = [
            'name' => 'muscat',
            'price' => '1,400',
            'season' => 'summer,fall'
        ];
        DB::table('fruits')->insert($param);
        $param = [
            'name' => 'pineapple',
            'price' => '800',
            'season' => 'spring,summer'
        ];
        DB::table('fruits')->insert($param);
        $param = [
            'name' => 'grapes',
            'price' => '1,100',
            'season' => 'summer,fall'
        ];
        DB::table('fruits')->insert($param);
        $param = [
            'name' => 'banana',
            'price' => '600',
            'season' => 'summer'
        ];
        DB::table('fruits')->insert($param);
        $param = [
            'name' => 'melon',
            'price' => '900',
            'season' => 'spring,summer'
        ];
        DB::table('fruits')->insert($param);
    }
}
