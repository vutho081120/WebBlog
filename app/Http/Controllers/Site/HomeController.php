<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\PostModel;

class HomeController extends Controller
{
    public function index()
    {
        $category = new CategoryModel();
        $categoryList = $category->getCategoryList();

        $post = new PostModel();
        $postTopFocus = $post->getPostTopFocus();
        $postLatest = $post->getLatestPosts();
        $postWithCategoryTable = $post->getPostWithCategory(4, 6);
        $postLatestTable = $post->getLatestPostTable();
        $postFocus = $post->getPostFocus();
        $postWithCategoryStar = $post->getPostWithCategory(4, 3);
        $postWithCategoryMusik = $post->getPostWithCategory(3, 3);

        //dd($postLatest);

        return view('Site.Pages.Home', compact(
            'categoryList',
            'postTopFocus',
            'postLatest',
            'postWithCategoryTable',
            'postLatestTable',
            'postFocus',
            'postWithCategoryStar',
            'postWithCategoryMusik'
        ));
    }
}
