<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $user_id = auth()->id();
        $image = $request->file('image');
        $filename = null;
        if ($image) {
            $filename = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $filename);
        }

        Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'slug' => Str::slug($request->title, '-'),
            'published_at' => Carbon::now(),
            'user_id' => $user_id,
            'image' => $filename,
        ]);
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post->published_at = Carbon::parse($post->published_at);
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $image = $request->file('image');
        $filename = $post->image;
        if ($image) {
            if ($filename) {
                Storage::delete('public/images/' . $filename);
            }
            $filename = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $filename);
        }

        $post->update([
            'title' => $request->title,
            'body' => $request->body,
            'slug' => Str::slug($request->title, '-'),
            'published_at' => Carbon::now(),
            'image' => $filename,
        ]);

        return redirect()->route('posts.show', $post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
