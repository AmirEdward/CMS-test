<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newss = News::all();
        return view('admin.news.index', compact('newss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'string|required|max:255',
            'body' => 'required|string|max:255',
            'main_photo' => 'image|mimes:jpg,jpeg,png|nullable|max:1000',
            'category' => 'required',
        ]);

        News::create([
            'title' => $request->title,
            'content' => $request->body,
            'category_id' => $request->category
        ]);

        return redirect('admin/news')->with('success' , 'News Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
//        $news = News::find($news);
        return view('admin.news.news', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $this->validate($request, [
            'title' => 'string|required|max:255',
            'body' => 'required|string|max:255',
            'main_photo' => 'image|mimes:jpg,jpeg,png|nullable|max:1000',
            'category' => 'required',
        ]);

        $news->update([
            'title' => $request->title,
            'content' => $request->body,
            'category_id' => $request->category
        ]);

        return redirect('admin/news')->with('success', 'News Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect('admin/news')->with('success', 'News Deleted Successfully');
    }
}
