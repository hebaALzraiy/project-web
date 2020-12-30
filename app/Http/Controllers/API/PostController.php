<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::select('id','title','view')->where('Views','>',50)->get();
        $count = $count($post);
        return response([
            'status'=> 'success',
            'count' => $count,
            'data' => $post
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|max:50',
            'code'=>'required|unique:posts|integer',
            'body' => 'required',
            'category_id' => 'required|integer',
            'author_email' => 'required|email',
            'post_image' => 'required|mimes:jpeg,png,bmp,jpg'
        ];


        $messages = [
            'title.required' => 'The Post title field should be entered',
            'title.max' => 'Title should not be more than 50 character',
            'code.unique' => 'Post code should not duplicated'
        ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return response([
               'status' => 'error',
               'error' => $validator->errors()
            ]);
        }

        $post = Post::create([
            'title' => $request->title,
            'body' => $request ->body,
            'code' => $request ->code,
            'category_id' => $request ->category_id,
            'author_email' => $request ->author_email,

        ]);
        return response([
           'status' => 'post created',
           'post' => $post
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        return response([
            'status' => 'success',
            'data' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        $rules = [
            'title' => 'required|max:50',
            'code'=>'required|unique:posts|integer',
            'body' => 'required',
            'category_id' => 'required|integer',
            'author_email' => 'required|email',
            'post_image' => 'required|mimes:jpeg,png,bmp,jpg'
        ];


        $messages = [
            'title.required' => 'The Post title field should be entered',
            'title.max' => 'Title should not be more than 50 character',
            'code.unique' => 'Post code should not duplicated'
        ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return response([
                'status' => 'error',
                'error' => $validator->errors()
            ]);
        }


        $post->  title = $request->title;
        $post-> body = $request ->body;
        $post-> code = $request ->code;
        $post-> category_id = $request ->category_id;
        $post-> author_email = $request ->author_email;

        $post ->save();


        return response([
            'status' => 'post updated',
            'post' => $post
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        $post ->delete();

        return response([
            'status' => 'post deleted',
            'data' => $post
        ]);
    }
}
