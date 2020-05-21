<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profiles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Profile $Profile) 
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
         $profile->fill($storedata)->save();        
         // ファイルの保存
        $request->file('image')->storeAs('public/'.$profile->id.'/', $filename);
        //$blog->save();

        return redirect()->route('profiles.show', ['id' => $profile->id])->with('message', 'Post was successfully created.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        return view('profiles.show', compact('profile'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        return view('profiles.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
$profile->title = $request->input('title');
$profile->content = $request->input('content');
$profile->save();

return redirect()->route('profiles.show', ['id' => $profile->id])->with('message', 'Post was successfully updated.');
}
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        $profile->delete();

        return redirect()->route('profiles.index');
    }
}
