<?php

use Illuminate\Database\Seeder;
use App\Models\PrimaryCategory;

class PrimaryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PrimaryCategory::class)->create([
            'id'      => 1,
            'name'    => '水',
            'sort_no' => 1,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 2,
            'name'    => '食',
            'sort_no' => 2,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 3,
            'name'    => '衣料品',
            'sort_no' => 3,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 4,
            'name'    => '装備',
            'sort_no' => 4,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 5,
            'name'    => '衛生',
            'sort_no' => 5,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 6,
            'name'    => '救急',
            'sort_no' => 6,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 7,
            'name'    => '防寒',
            'sort_no' => 7,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 8,
            'name'    => 'その他',
            'sort_no' => 8,
        ]);
    }
}
