<?php


    namespace App\Http\Controllers;

    use App\Models\Post;  // Correctly import the Post model
    use Illuminate\Http\Request;
    
    class PostController extends Controller
    {
        public function index()
        {
            // eager load authors and comments
            $posts = Post::with('author', 'comments')->get();
        
            // return posts.blade.php view with posts data
            return view('posts.index', compact('posts')); 
        }
    
        public function show($id)
        {
            $post = Post::with('comments')->findOrFail($id);
            return view('posts.show', compact('post'));  
        }
    }
    
    


