<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i += 1) {
            \App\Models\Article::factory()
                ->count(1)
                ->create([
                    'title' => Str::random(10),
                    'body' => Str::random(100),
//                    'link' => Str::random('100'),
                    'link_name' => Str::random('15'),
//                    'date_added' => now()
                ]);
        }
    }

//    /**
//     * Run the database seeds.
//     *
//     * @return void
//     */
//    public function run()
//    {
//        DB::table('articles')->insert([
//            'title' => Str::random(10),
//            'body' => Str::random(100),
//            'link' => Str::random('100'),
//            'link-name'=>Str::random('15'),
//        ]);
//
//    }
}
//$table->bigIncrements('id');
//            $table->string('title');
//            $table->text('body');
//            $table->string('link')->nullable();
//            $table->string('link-name')->nullable();
