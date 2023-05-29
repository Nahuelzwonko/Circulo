<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderByDesc('created_at')->get();
        return view ('posts.index', compact('posts'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->cuerpo = $request->input('cuerpo', '');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $path = Storage::putFile('storage/images', $request->file('image'));
            $nuevo_path = str_replace('public/', '', $path);
            $post->image_url = $nuevo_path;
        }
        if ($request->hasFile('pdf')) {
        $pdf = $request->file('pdf');
        $pdfPath = $pdf->store('public/pdfs');
        $post->pdf_url = str_replace('public/', '', $pdfPath);
    }
        $post->save();
        return redirect()->route('posts.index')->with('success', 'Post creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function view ($post)
    {
        //
        $post = Post::find($post);
        return view('view', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->cuerpo = $request->input('cuerpo', '');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = Storage::putFile('public/images', $file);
            $nuevo_path = str_replace('public/', '', $path);
            $post->image_url = $nuevo_path;
        }

        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $pdfPath = $pdf->store('public/pdfs');
            $post->pdf_url = str_replace('public/', '', $pdfPath);
        }

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($post_id)
    {
        $post = Post::find($post_id);
        $post->delete();
        return redirect()->route('posts.index');
    }
}