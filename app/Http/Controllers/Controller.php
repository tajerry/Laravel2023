<?php

namespace App\Http\Controllers;
use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function getNews(int $id = null){
        $statusList = ['DRAFT', 'ACTIVE', 'BLOCKED'];
        $faker = Factory::create();
        if($id){
            return [
                'id' => $id++,
                'title' => $faker->jobTitle(),
                'author' => $faker->userName(),
                'image' => $faker->imageUrl(200, 170),
                'status' => $statusList[mt_rand(0,2)],
                'description' => $faker->text(100)
            ];
        }
        $data = [];
        $id = 1;
        for($i = 0; $i < 10; $i++){
            $data[] = [
                'id' => $id++,
                'title' => $faker->jobTitle(),
                'author' => $faker->userName(),
                'image' => $faker->imageUrl(200, 170),
                'status' => $statusList[mt_rand(0,2)],
                'description' => $faker->text(100)
            ];

        }
        return $data;
    }

}
