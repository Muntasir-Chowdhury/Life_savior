<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\User;
use Auth;
class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function storePost(Request $request) {
        $post = new Posts();
        $post->user_id = Auth::id();
        
        $post->bld_grp = $request->bld_grp;
        $post->description = $request->description;
        $post->location = $request->location;
        $post->date = $request->date;
        $post->save();

        return $post;
    }

    public function getPosts(Request $request) {
        $posts = Posts::with('user')->get();

        return $posts;
    }
    public function deletePost(Request $request){
        $post = Posts::find($request->id)->delete();
    }

    public  function editPost(Request $request, $id){
        $post = Posts::where('id',$id)->first();

        $post->bld_grp = $request->get('val_1');
        $post->description = $request->get('val_2');
        $post->location = $request->get('val_3');
        $post->date = $request->get('val_4');
        $post->save();

        return $post;
    }
}
