<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ActivityComment;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Likeable;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    //


    public function __construct()
    {

        $this->middleware('auth')->except('index','show');

    }

    public function index(){

        $activities = Activity::whereActive(1)->latest()->paginate(6);

        $activiti = Activity::whereActive(1)->latest()->take(4)->get();

        $postsAll = Post::latest()->take(4)->get();



        $cat = Category::all();

        $met = Category::where('name', 'Meetups')->first();

        $ev = Category::where('name', 'Events')->first();
        $pjt = Category::where('name', 'Projects')->first();

        $meetups = Activity::whereActive(1)->where('category_id', $met->id)->latest()->take(8)->get();

        $events = Activity::whereActive(1)->where('category_id', $ev->id)->latest()->take(8)->get();

        $projects = Activity::whereActive(1)->where('category_id', $pjt->id)->latest()->take(8)->get();

//        return $projects;

        return view('activity.index', compact('activities', 'meetups', 'events', 'projects','activiti','postsAll'));

    }


    public function show(Activity $activity){


        $postsAll = Post::latest()->take(4)->get();

        $activiti = Activity::whereActive(1)->latest()->take(4)->get();


        return view('activity.show', compact('activity','activiti','postsAll'));


    }

    public function comment(Request $request, $activity){

        $this->validate($request, [

            'comment' => 'required',

        ]);

        $activitys = Activity::find($activity);

        $comment = new ActivityComment;

        $comment->comment = $request->comment;

        $comment->user_id = auth()->id();

        $comment->activity_id = $activitys->id;

        $comment->save();

        return back();

    }


    public function likeActivity($id)
    {
        // here you can check if product exists or is valid or whatever

        $this->handleLike('App\Models\Activity', $id);
        $activity = Activity::where('id', $id)->first();

        return $activity;

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
