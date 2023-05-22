<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        $categories = Category::with('subcategories')->get();
      
        if (auth()->guest()) {
            return view('user.posts.posts', compact('posts','categories'));
            // User is not authenticated
            // Perform some action for guests
        } else {
            return view('admin.posts.index', compact('posts','categories'));
         
            // User is authenticated
            // Perform some action for authenticated users
        }
       
    }
    

    public function create()
    {
        $categories = Category::with('subcategories')->get();
        $subcategories = Subcategory::all();
        return view('admin.posts.create', compact('categories'),['subcategories' => $subcategories]);
    }

    public function store(Request $request)
    {
    
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'published_at' => 'required',
            ]);
        if ($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = $image->getClientOriginalName();
                $image->move(public_path('images'), $filename);
        }
        else {
            $filename = null; // default value if no file was uploaded
        } 
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->description = $request->description;
        $post->published_at = $request->published_at;
        $post->subcategory_id = $request->subcategory_id;
        $post->image = $filename;
        $post->save();
        return redirect('/admin')->with('success','Post created successfully!');
    }

    public function show(Post $post, $subcategory)
    {
        $categories = Category::with('subcategories')->get();

        if (auth()->guest()) {
            $posts = DB::table('posts')->where('subcategory_id', $subcategory)->get();
            return view('user.posts.posts', compact('posts','categories'));
            // User is not authenticated
            // Perform some action for guests
        } else {
            return view('admin.posts.show', compact('post'));
            // User is authenticated
            // Perform some action for authenticated users
        }
       
    }
    public function post(Post $post)
    {
        
         if (auth()->guest()) {

            return view('user.posts.post', compact('post'));
            // User is not authenticated
            // Perform some action for guests
        } else {
            return view('admin.posts.show', compact('post'));
            // User is authenticated
            // Perform some action for authenticated users
        }
    }
    


    public function edit(Post $post)
    {
        
        if (!auth()->guest()) {
            return view('admin.posts.edit', compact('post'));
            // User is not authenticated
            // Perform some action for guests
        }
    }
    

    public function update(Post $post, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'published_at' => 'required',
            ]);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->published_at = $request->published_at;
        $post->subcategory_id = $request->subcategory_id;
        $post->save();
        return redirect('/home')->with('success','Post updated successfully!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/admin')->with('success','Post deleted successfully!');
    }

    public function photos()
    {
        $posts = Post::all();
        return view('admin.posts.create_photos', compact('posts'));
    }

}

