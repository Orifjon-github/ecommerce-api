<?php

namespace Database\Seeders;

use App\Models\Settings\Advantage;
use Illuminate\Database\Seeder;

class AdvantageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Advantage::create([
            'num' => 1,
            'title' => 'Only fresh products',
            'url' => 'example url'
        ]);
        Advantage::create([
            'num' => 2,
            'title' => 'Only fresh products',
            'url' => 'example url'
        ]);
        Advantage::create([
            'num' => 3,
            'title' => 'Only fresh products',
            'url' => 'example url'
        ]);
    }
}
