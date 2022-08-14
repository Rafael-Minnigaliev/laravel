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

    public function getNews(int $id = null)
    {
        $faker = Factory::create();
        if($id){
            return [
                'title' => $faker->jobTitle,
                'author' => $faker->userName,
                'status' => 'DRAFT',
                'description' => $faker->text(100),
                'crated_at' => now('Europe/Moscow')
            ];
        }

        $news = [];
        for($i = 1; 10 > $i; $i++){
            $news[$i] = [
                'title' => $faker->jobTitle,
                'author' => $faker->userName,
                'status' => 'DRAFT',
                'description' => $faker->text(100),
                'crated_at' => now('Europe/Moscow')
            ];
        }
        return $news;
    }
}
