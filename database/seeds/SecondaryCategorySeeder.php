<?php

use Illuminate\Database\Seeder;
use App\Models\SecondaryCategory;

class SecondaryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SecondaryCategory::class)->create([
            'id'                  => 1,
            'name'                => '飲料水',
            'sort_no'             => 1,
            'primary_category_id' => 1,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 2,
            'name'                => '乾パン',
            'sort_no'             => 2,
            'primary_category_id' => 2,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 3,
            'name'                => '缶詰',
            'sort_no'             => 3,
            'primary_category_id' => 2,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 4,
            'name'                => 'レトルト食品',
            'sort_no'             => 4,
            'primary_category_id' => 2,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 5,
            'name'                => '下着・靴下',
            'sort_no'             => 5,
            'primary_category_id' => 3,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 6,
            'name'                => '長袖・長ズボン',
            'sort_no'             => 6,
            'primary_category_id' => 3,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 7,
            'name'                => '防寒用ジャケット・雨具',
            'sort_no'             => 7,
            'primary_category_id' => 3,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 8,
            'name'                => 'ヘルメット・防災ずきん',
            'sort_no'             => 8,
            'primary_category_id' => 4,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 9,
            'name'                => '懐中電灯',
            'sort_no'             => 9,
            'primary_category_id' => 4,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 10,
            'name'                => '長靴',
            'sort_no'             => 10,
            'primary_category_id' => 4,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 11,
            'name'                => 'マスク',
            'sort_no'             => 11,
            'primary_category_id' => 5,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 12,
            'name'                => '消毒液',
            'sort_no'             => 12,
            'primary_category_id' => 5,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 13,
            'name'                => 'ティッシュペーパー・ウェットティッシュ',
            'sort_no'             => 13,
            'primary_category_id' => 5,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 14,
            'name'                => '救急用品セット',
            'sort_no'             => 14,
            'primary_category_id' => 6,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 15,
            'name'                => '処方箋の控え',
            'sort_no'             => 15,
            'primary_category_id' => 6,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 16,
            'name'                => '胃腸薬・便秘薬・持病の薬',
            'sort_no'             => 16,
            'primary_category_id' => 6,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 17,
            'name'                => '携帯用カイロ',
            'sort_no'             => 17,
            'primary_category_id' => 7,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 18,
            'name'                => '毛布',
            'sort_no'             => 18,
            'primary_category_id' => 7,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 19,
            'name'                => 'その他',
            'sort_no'             => 19,
            'primary_category_id' => 8,
        ]);
    }
}
