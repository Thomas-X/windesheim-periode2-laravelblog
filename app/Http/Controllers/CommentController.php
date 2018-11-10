<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return back(301);
//        $comments = Comment::all();
//        return view('comment.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Blog $blog
     * @param Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function create(Blog $blog, Comment $comment)
    {
        return view('comment.create', compact('blog', 'comment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Blog $blog
     * @param Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Blog $blog, Comment $comment)
    {
        $validated = request()->validate(Comment::$validations);
        Comment::create($validated);
        return redirect("/blogs/" . $blog->id . "");
    }

    /**
     * Display the specified resource.
     *
     * @param Blog $blog
     * @param Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog, Comment $comment)
    {
        return view('comment.show', compact('comment', 'blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Blog $blog
     * @param Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog, Comment $comment)
    {
        return view('comment.edit', compact('comment', 'blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Blog $blog
     * @param Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog, Comment $comment)
    {
        $validated = request()->validate(Comment::$validations);
        $comment->update($validated);
        return redirect("/blogs/" . $blog->id . "");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Blog $blog
     * @param Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog, Comment $comment)
    {
        Comment::destroy($comment->id);
        return redirect("/blogs/" . $blog->id . "");
    }
}
