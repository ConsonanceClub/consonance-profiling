<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Post;
use App\Models\PostComment;
use Illuminate\Http\Request;
use App\Models\Likeable;

use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {

        $this->middleware('auth')->except('show');

    }

    public function show(Post $post){

        $postsAll = Post::latest()->take(4)->get();


        $activiti = Activity::whereActive(1)->latest()->take(4)->get();



        return view('group.post.show', compact('post','postsAll','activiti'));

    }

    public function comment(Request $request, $post){

        $this->validate($request, [

            'comment' => 'required',

        ]);

        $postn = Post::find($post);

        $comment = new PostComment;

        $comment->comment = $request->comment;

        $comment->user_id = auth()->id();

        $comment->post_id = $postn->id;

        $comment->save();

        return back();

    }

    public function likePost($id)
    {
        // here you can check if product exists or is valid or whatever

        $this->handleLike('App\Models\Post', $id);
        $post = Post::where('id', $id)->first();

        return $post;

//        return auth()->guest() ?  $design : redirect(route('login'));
    }



    public function handleLike($type, $id)
    {
        $existing_like = Likeable::withTrashed()->whereLikeableType($type)->whereLikeableId($id)->whereUserId(Auth::id())->first();

        if (is_null($existing_like)) {
            Likeable::create([
                'user_id'       => Auth::id(),
                'likeable_id'   => $id,
                'likeable_type' => $type,
            ]);
        } else {
            if (is_null($existing_like->deleted_at)) {
                $existing_like->delete();
            } else {
                $existing_like->restore();
            }
        }
    }

}
