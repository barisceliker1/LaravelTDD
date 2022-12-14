<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
class seederData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([[
            'title' => 'underworld',
            'name' => 'life of underworld',
            'price' => 255,
            'whenWritten' => Carbon::now(),
        ],
            [
                'title' => 'underworld2',
                'name' => 'life of underworld2',
                'price' => 300,
                'whenWritten' => Carbon::now(),
            ]]
        );
    }
}
