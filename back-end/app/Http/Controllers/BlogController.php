<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $blogs = Blog::all();
        return response()->json($blogs , 200);
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
        //  $blog = $request->validate([
        //     'title' => 'required|string',
        //     'description' => 'required'
        // ]);
        // $blog = Blog::create([
        //     'titre' => $request->titre,
        //     'description' => $request->description
        // ]);
        $blog = new Blog();
        $blog->titre = $request->titre;
        $blog->description = $request->description;
        $blog->save();
        return response()->json($blog , 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
        return $blog;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $blog->update($request->all());
        // return $blog;
        $blog = Blog::findOrFail($id);
        $blog->titre = $request->titre;
        $blog->description = $request->description;
        $blog->save();
        return response()->json(['message reuissi',200]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
            $blog = Blog::findOrFail($id);
            $blog->delete();
            return response()->json($blog, 200);
    }
}
