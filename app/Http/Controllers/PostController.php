<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;
use App\Http\Resources\Post as PostResource;
class PostController extends Controller
{
    public function index():JsonResponse
    {
        // get all posts ordered by published date
        $posts = Post::orderby('date', 'desc')->get();
        // wrap posts in a resource
        return PostResource::collection($posts)->response();
    }
}
