<?php

namespace App\Http\Controllers;

use App\Models\PostsDetails;
use Illuminate\Http\Request;

class PostDetailsController extends Controller
{
    public function index()
    {
        $postsdetails = PostsDetails::all();
        return view('admin.postsdetails.index', array('postsdetails' => $postsdetails));
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
            'content' => 'required',
        ]);
        $postsdetails = new PostsDetails;
        $postsdetails->title = $request->title;
        $postsdetails->content = $request->content;
        $postsdetails->save();

        return redirect()->route('postsdetails.index');
    }

    public function update(Request $request, $id)
    {
        $postsdetails = PostsDetails::findOrFail($id);
        $postsdetails->title = $request->title;
        $postsdetails->content = $request->content;
        $postsdetails->update($request->all());
        return redirect()->route('postsdetails.index')
            ->with('success', "services details($postsdetails->title) Updated! ");
    }

    public function edit($id)
    {
        $postsdetails = PostsDetails::findOrFail($id);
        return view('admin.postsdetails.edit', compact('postsdetails'));
    }
}
