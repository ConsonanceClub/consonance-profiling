<?php

namespace App\Http\Controllers\Admin;

use App\Models\Group;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $groups = Group::all();

        return view('admin.group.index', compact('groups'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.group.create');

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

            'icon_url' => 'required',
            'name' => 'required|unique:groups|max:45',


        ]);

        $input = $request->all();

        if ($file = $request->file('icon_url')){

            $name = time() . $file->getClientOriginalName();

            $file->move('GroupProfilePic', $name);

        }

        $group = new Group;

        $group->icon_url = $name;

        $group->name = $request->name;

        $group->slug = str_slug($request->name, '-');

        $group->active = $request->active ? $request->active : 0;

        $group->save();

        return redirect(route('group.index'))->with('message', 'The Group has been created successfully');

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
        $group = Group::findOrFail($id);

        return view('admin.group.edit', compact('group'));


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

            'name' => 'required|max:45',


        ]);

        $input = $request->all();

        if ($file = $request->file('icon_url')){

            $name = time() . $file->getClientOriginalName();

            $file->move('GroupProfilePic', $name);

        }

        $group = Group::findOrFail($id);

        if ($file = $request->file('icon_url')) {

            $group->icon_url = $name;

        }

        $group->name = $request->name;

        $group->slug = str_slug($request->name, '-');

        $group->active = $request->active ? $request->active : 0;

        $group->save();

        return redirect(route('group.index'))->with('message_update', 'The Group has been updated successfully');

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
        $group = Group::findOrFail($id);

        unlink(public_path('/GroupProfilePic/') . $group->icon_url);

        $group->delete();

        return back()->with('message_delete', 'The Group has been deleted successfully');
    }
}
