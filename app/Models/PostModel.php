<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    use HasFactory;

    protected $table = "posts";

    public function getAllPosts()
    {
        return $this::latest()->paginate(1);
    }

    public function postCheck($postTitle)
    {
        return $this::where('post_title', $postTitle)->first();
    }

    public function getPostById($id)
    {
        return $this::find($id);
    }

    public function postCheckCategory($id)
    {
        return $this::where('category_id', $id)->get();
    }

    public function postSearch($keyword)
    {
        return $this::where('post_title', 'like', '%' . $keyword . '%')
            ->orWhere('post_content', 'like', '%' . $keyword . '%')
            ->paginate(1);
    }
}
