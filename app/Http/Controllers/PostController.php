<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data = Post::all();
        return response()->json($data, 200);
    }

    public function show($id)
    {
        $data = Post::find($id);
        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $response = Post::create($data);
        return response()->json($response, 201);
    }

    // Don't forget add attribute _method with value PUT in client request
    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        return response()->json($post, 200);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json(null, 204);
    }
}