<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Http\Resources\BlogResource;

class BlogController extends Controller
{
    public function getBlogs()
    {
        // Mengambil semua blog posts dari database
        $blogs = blog::all();

        // Mengembalikan data blog dalam bentuk JSON menggunakan BlogResource
        return BlogResource::collection($blogs);
    }
}
