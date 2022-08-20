<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getNews(int $id = null, string $category = null)
    {
        $faker = Factory::create();

        if ($category) {
            $news = [];
            for ($i = 1; 20 > $i; $i++) {
                if($category === self::getCategoryRand()){
                    $news[$i] = [
                        'title' => $faker->jobTitle,
                        'author' => $faker->userName,
                        'status' => 'DRAFT',
                        'description' => $faker->text(300),
                        'crated_at' => now('Europe/Moscow'),
                        'category' => $category
                    ];
                }
            }
            return $news;
        }

        if ($id) {
            return [
                'title' => $faker->jobTitle,
                'author' => $faker->userName,
                'status' => 'DRAFT',
                'description' => $faker->text(100),
                'crated_at' => now('Europe/Moscow')
            ];
        }

        $news = [];
        for ($i = 1; 20 > $i; $i++) {
            $news[$i] = [
                'title' => $faker->jobTitle,
                'author' => $faker->userName,
                'status' => 'DRAFT',
                'description' => $faker->text(300),
                'crated_at' => now('Europe/Moscow'),
                'category' => self::getCategoryRand()
            ];
        }
        return $news;
    }

    public function getCategoryRand()
    {
        $category = [
            1 => 'sport',
            2 => 'politics',
            3 => 'economy',
            4 => 'technologies',
            5 => 'animals'
        ];
        return $category[rand(1, 5)];
    }

    public function getCategories()
    {
        return [
            1 => 'sport',
            2 => 'politics',
            3 => 'economy',
            4 => 'technologies',
            5 => 'animals'
        ];
    }
}
