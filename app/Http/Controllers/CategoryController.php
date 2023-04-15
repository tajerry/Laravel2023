<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showCategory(string $category){

        return view('news.category', [
            'newsList'=>$this->getNews($category, $id = null)
        ]);
    }
}
