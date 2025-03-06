<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    // Mengambil blog posts dan mengonversi gambar BLOB menjadi Base64
    public function getBlogPosts(Request $request)
    {
        $blogs = Blog::all();

        // Loop untuk mengonversi gambar menjadi Base64
        foreach ($blogs as $blog) {
            // Jika blog memiliki gambar, konversi gambar BLOB menjadi Base64
            if ($blog->image) {
                $imageData = base64_encode($blog->image); // Mengonversi BLOB ke Base64
                $blog->image = 'data:image/jpeg;base64,' . $imageData; // Format Base64 dengan MIME type
            }
        }

        // Mengembalikan response JSON dengan data blog
        return response()->json([
            'data' => $blogs,
        ]);
    }

    public function getBlogPost($id)
    {
        // Cari blog berdasarkan ID
        $blog = Blog::find($id);

        if (!$blog) {
            return response()->json(['message' => 'Blog not found'], 404);
        }

        // Mengonversi gambar BLOB menjadi Base64
        if ($blog->image) {
            $imageData = base64_encode($blog->image); // Mengonversi BLOB ke Base64
            $blog->image = 'data:image/jpeg;base64,' . $imageData; // Format Base64 dengan MIME type
        }

        return response()->json($blog);
    }

}
