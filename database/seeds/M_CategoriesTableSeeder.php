<?php

use Illuminate\Database\Seeder;

class M_CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_categories')->insert([
            [
                'id' => 1,
                'category_name' => '魚介類',
            ],
            [
                'id' => 2,
                'category_name' => '果物',
            ],
            [
                'id' => 3,
                'category_name' => '粉物',
            ],
            [
                'id' => 4,
                'category_name' => '酒',
            ],
            [
                'id' => 5,
                'category_name' => '鍋類',
            ],
            [
                'id' => 6,
                'category_name' => '肉類',
            ],
            [
                'id' => 7,
                'category_name' => '野菜',
            ],
        ]);
    }
}
