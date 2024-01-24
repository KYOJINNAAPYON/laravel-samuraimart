<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $major_category_names = [
        '食品', '家電製品', '本'
        ];

        $food_categories = [
        'フルーツ', '野菜', 'アメリカン', 'メキシカン',
        '和食', '韓国料理', 'イタリアン', 'スパニッシュ', '中華料理'
        ];

        $computer_categories = [
        'PC', 'スマートフォン', 'アクセサリー'
        ];

        $book_categories = [
        'サスペンス', '恋愛' ,'その他'
        ];

        foreach ($major_category_names as $major_category_name) {
        if ($major_category_name == '食品') {
            foreach ($food_categories as $food_category) {
                Category::create([
                    'name' => $food_category,
                    'description' => $food_category,
                    'major_category_name' => $major_category_name
                ]);
            }
        }

        if ($major_category_name == '家電製品') {
            foreach ($computer_categories as $computer_category) {
                Category::create([
                    'name' => $computer_category,
                    'description' => $computer_category,
                    'major_category_name' => $major_category_name
                ]);
            }
        }

        if ($major_category_name == '本') {
            foreach ($book_categories as $book_category) {
                Category::create([
                    'name' => $book_category,
                    'description' => $book_category,
                    'major_category_name' => $major_category_name
                ]);
            }
        }
    }
    }
}
