<?php

namespace App\Http\Controllers\Admin;

use App\Models\Activity;
use App\Models\Category;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $activities  = Activity::all();

        return view('admin.activity.index', compact('activities'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();

        $admins = User::where('role_id', 1)->get();

        return view('admin.activity.create', compact('categories','admins'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $this->validate(request(), [

            'image_url' => 'required',
            'title' => 'required',
            'category_id' => 'required',
            'user_id' => 'required',
            'body' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',

        ]);

        $input = $request->all();

        if ($file = $request->file('image_url')){

            $name = time() . $file->getClientOriginalName();

            $file->move('ActivityPics', $name);

//            $photo = Photo::create(['name'=>$name]);

        }

        $activity = new Activity;

        $activity->image_url = $name;

        $activity->title = $request->title;

        $activity->user_id = $request->user_id;

        $activity->category_id = $request->category_id;

        $activity->body = $request->body;

        $activity->active = $request->active ? $request->active : 0;


        $activity->start_date = $request->start_date;

        $activity->end_date = $request->end_date;


        $activity->save();

        return redirect(route('activity.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
        //
        $activity = Activity::findOrFail($id);

        $categories = Category::all();

        $admins = User::where('role_id', 1)->get();

        return view('admin.activity.edit', compact('categories','admins', 'activity'));

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
        //

        $this->validate(request(), [

            'image_url' => 'required',
            'title' => 'required',
            'category_id' => 'required',
            'user_id' => 'required',
            'body' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',

        ]);

        $input = $request->all();

        if ($file = $request->file('image_url')){

            $name = time() . $file->getClientOriginalName();

            $file->move('ActivityPics', $name);

//            $photo = Photo::create(['name'=>$name]);

        }

        $activity =  Activity::findOrFail($id);

        $activity->image_url = $name;

        $activity->title = $request->title;

        $activity->user_id = $request->user_id;

        $activity->category_id = $request->category_id;

        $activity->body = $request->body;

        $activity->active = $request->active ? $request->active : 0;


        $activity->start_date = $request->start_date;

        $activity->end_date = $request->end_date;


        $activity->save();

        return redirect(route('activity.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $activity = Activity::findOrFail($id);

        unlink(public_path('/ActivityPics/') . $activity->image_url);

        $activity->delete();

        return back();

    }
}
