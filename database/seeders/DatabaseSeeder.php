<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use App\Models\NewsletterSubscrber;
use App\Models\NewsletterSubscriber;
use App\Models\Social;
use App\Models\Theme;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        NewsletterSubscriber::insert([
           'email' => 'duman@gmail.com',
           'status' =>1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        Admin::insert([
            'account' => 'Admin',
            'name' => 'Думан',
            'surname' => 'Серікбай',
            'shorttext' =>'shorttext',
            'description' => 'Серікбай Думан главный менеджер',
            'email' => 'richparen.com@gmail.com',
            'password' => bcrypt('123456'),
            'image' => '',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        Theme::insert([
            'site_title' => "Richparen"
        ]);

        Social::insert([
            'facebook' => ""
        ]);

        DB::table('categories')->insert([
            [
                'id' => 1,
                'category_name' => 'Саяхат',
                'slug' => 'travel',
                'description'=>'travel',
                'parent_id' => 0,
                'status' =>1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],//1
            [
                'id' => 2,
                'category_name' => 'Lifestyle',
                'slug' => 'lifestyle',
                'description'=>'travel',
                'parent_id' => 0,
                'status' =>1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],//2
            [
                'id' => 3,
                'category_name' => 'Блог',
                'slug' => 'blog',
                'description'=>'blog',
                'parent_id' => 0,
                'status' =>1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],//3
            [
                'id' => 4,
                'category_name' => 'Криптовалюта',
                'slug' => 'cryptocurrency',
                'description'=>'cryptocurrency',
                'parent_id' => 0,
                'status' =>1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],//4
            [
                'id' => 5,
                'category_name' => 'Бизнес',
                'slug' => 'business',
                'description'=>'business',
                'parent_id' => 0,
                'status' =>1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],//5
            [
                'id' => 6,
                'category_name' => 'Жетістік',
                'slug' => 'success',
                'description'=>'success',
                'parent_id' => 0,
                'status' =>1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],//6
            [
                'id' => 7,
                'category_name' => 'Forbes',
                'slug' => 'forbes',
                'description'=>'forbes',
                'parent_id' => 0,
                'status' =>1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],//7
            [
                'id' => 8,
                'category_name' => 'Codeforces',
                'slug' => 'codeforces',
                'description'=>'codeforces',
                'parent_id' => 0,
                'status' =>1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],//8
            [
                'id' => 9,
                'category_name' => 'ACMP',
                'slug' => 'acmp',
                'description'=>'acmp',
                'parent_id' => 0,
                'status' =>1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],//9
            [
                'id' => 10,
                'category_name' => 'Algorithm',
                'slug' => 'algorithm',
                'description'=>'algorithm',
                'parent_id' => 0,
                'status' =>1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],//10
            [
                'id' => 11,
                'category_name' => 'Informatics',
                'slug' => 'informatics',
                'description'=>'informatics',
                'parent_id' => 0,
                'status' =>1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],//11
            [
                'id' => 12,
                'category_name' => 'Java',
                'slug' => 'java',
                'description'=>'java',
                'parent_id' => 0,
                'status' =>1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],//12
            [
                'id' => 13,
                'category_name' => 'C++',
                'slug' => 'cplusplus',
                'description'=>'cplusplus',
                'parent_id' => 0,
                'status' =>1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],//13
            [
                'id' => 14,
                'category_name' => 'Database',
                'slug' => 'database',
                'description'=>'database',
                'parent_id' => 0,
                'status' =>1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],//14
            [
                'id' => 15,
                'category_name' => 'Game Dev',
                'slug' => 'gamedev',
                'description'=>'gamedev',
                'parent_id' => 0,
                'status' =>1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],//15
            [
                'id' => 16,
                'category_name' => 'English',
                'slug' => 'english-language',
                'description'=>'english-language',
                'parent_id' => 0,
                'status' =>1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],//16
            [
                'id' => 17,
                'category_name' => 'Russian',
                'slug' => 'russian-language',
                'description'=>'russian-language',
                'parent_id' => 0,
                'status' =>1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],//17
            [
                'id' => 18,
                'category_name' => 'Math',
                'slug' => 'math',
                'description'=>'russian-language',
                'parent_id' => 0,
                'status' =>1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],//18
            [
                'id' => 19,
                'category_name' => 'Hacking',
                'slug' => 'hacking',
                'description'=>'hacking',
                'parent_id' => 0,
                'status' =>1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],//19
            [
                'id' => 20,
                'category_name' => 'Books',
                'slug' => 'books',
                'description'=>'books',
                'parent_id' => 0,
                'status' =>1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],//20
        ]);
    }
}
