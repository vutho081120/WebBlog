<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\PostModel;

class CategoryController extends Controller
{
    public function index($slug)
    {
        $category = new CategoryModel();
        $categoryList = $category->getCategoryList();

        $post = new PostModel();
        $postTopFocus = $post->getPostTopFocusByCategorySlug($slug);
        $postLatest = $post->getLatestPostByCategorySlug($slug);

        //dd($postLatest);

        return view('Site.Pages.Category', compact(
            'categoryList',
            'postTopFocus',
            'postLatest'
        ));
    }
}
