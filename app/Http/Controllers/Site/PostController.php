<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\PostModel;

class PostController extends Controller
{
    public function index($slug)
    {
        $category = new CategoryModel();
        $categoryList = $category->getCategoryList();

        $post = new PostModel();
        $postLatest = $post->getLatestPosts();
        $postItem = $post->getPostBySlug($slug);

        //dd($postItem);

        return view('Site.Pages.Post', compact(
            'categoryList',
            'postLatest',
            'postItem'
        ));
    }
}
