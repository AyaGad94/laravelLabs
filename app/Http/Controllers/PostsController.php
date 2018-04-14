<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Http\Requests\PostsStoreRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PostsController extends Controller
{


    public function index()
    {
        $posts = Post::all();
        return view('posts.index',[
        'posts' => $posts
        ]);
    }
///////////////////////////////////////////////////




public function show($id)
    {
        $post = Post::find($id);
         
        return view('posts.show',[
            'post'=>$post
        ]);
}
///////////////////////////////////////////////




public function edit($id)
    {

             $post = Post::find($id);   
            $users= User::all();
            return view('posts.edit',[
            'post'=>$post,
            'users'=>$users
            ]);
    
        }

//////////////////////////
public function create()
    {
        $users = User::all();

        return view('posts.create',[
            'users' => $users
        ]);
    }
    //////////////////////////////////////////////////////

    public function update(Request $request,Post $post)
    {
       
       
        $new_post = $request->only(['title', 'description', 'user_id']);
        $post->slug= null;
        $post->update($new_post);
        
       return redirect('/posts'); 
        
    }


////////////////////////////////
    public function store(PostsStoreRequest $request)
    {
        // dd($request->all());
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user_id
        ]);
        
       return redirect('posts'); 
    }
    //////////////////////////////////////
    public function destroy($id)
    {
        Post::destroy([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user_id,
            'created_at' => $request->created_at

        ]);
        //////////////
        $posts=Post::find($id);
        $posts->delete();
        return Redirect::to('posts');
        
    }




   









}
