<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();

        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){

        $uploaded_image = $request->file('profile_image');
         
        if($request->hasFile('profile_image') && $uploaded_image->isValid()){
           $file_name = $request->file('profile_image')->getCientOriginalName();
           $path = $request->file('profile_image')->storeAs('profiles', 'file_name');
        }

        return view('blogs.create');

        }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Blog $blog) 
    {
        $request->validate([
                       'title' => 'required',
                       'content' => 'required',
                   ]);
                    
        //$blog = new Blog();
        //$blog->title = $request->input('title');
        //$blog->content = $request->input('content');
         //ファイル名を取得
         $filename = $request->file('image')->getClientOriginalName();
         // 配列のimageの値を書き換える
         $storedata =  array_replace($request->all(), array('image' => $filename));
         $blog->fill($storedata)->save();        
         // ファイルの保存
        $request->file('image')->storeAs('public/'.$blog->id.'/', $filename);
        //$blog->save();

        return redirect()->route('blogs.show', ['id' => $blog->id])->with('message', 'Post was successfully created.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
                       'title' => 'required',
                       'content' => 'required',
                   ]);
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->save();

  return redirect()->route('blogs.show', ['id' => $blog->id])->with('message', 'Post was successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blogs.index');
    }
}
