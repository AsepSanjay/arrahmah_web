<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stidges\Post;

class PostsController extends Controller
{
	public function show($id)
	{
	    // We will just be quick here and fetch the post 
	    // using the Post model.
	    $post = Post::find($id);

	    // Next, we will fire off an event and pass along 
	    // the post as its payload
	    Event::fire('posts.view', $post);

	    // Finally, return some view that displays our post 
	    // and pass along the post model
	    return View::make('posts.show')->withPost($post);
	}
}
