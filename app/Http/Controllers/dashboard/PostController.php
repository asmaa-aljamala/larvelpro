<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::all();
//        $categories = category::all();
        return view('admin.posts.index',compact('posts'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.add',compact('categories'));
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
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'required',
            'category_id' => 'required',

        ]);

        $post = new  post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;


          if(  $request->image != Null){

            $imgName = $post->id.'_post'.time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move('uploads/images/posts',$imgName);
            $post->image= $imgName;
        }
        $post->save();

        return redirect()->back();
    }
    /**
     * Display the specified resource.
     *
     * @param  ient  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::find($id);
        $categories = category::all();
        return view('admin.posts.edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'required',
            'category_id' => 'required',

        ]);

        $post = post::findOrFail($id);

        if(  $request->image != Null){

            $imgName = $post->id.'_post'.time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move('uploads/images/posts',$imgName);
            $post->image= $imgName;
        }
        $post->save();
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::find($id);
        $post->delete();
        return redirect()->back();
    }
}
