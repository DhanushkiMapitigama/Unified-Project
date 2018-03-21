<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nodes;

class NodesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nodes = Nodes::all();
        return view('nodes.index')->with('nodes', $nodes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nodes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'station_name' => 'required',
            'river' => 'required',
            'alert_level' => 'required',
            'minor_level' => 'required',
            'major_level' => 'required',
            'current_level' => 'required',
            'node_image' => 'image|nullable|max:1999',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);

        if($request->hasFile('node_image')){
            // file name with extension
            $filenameWithExt = $request->file('node_image')->getClientOriginalName();
            //file name without ext
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //extension
            $extension = $request->file('node_image')->getClientOriginalExtension();
            //new file name
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image storage->app->public create the folder
            // run command php artisan storage:link
            $path = $request->file('node_image')->storeAs('public/node_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $nodes = new Nodes;
        $nodes->station_name = $request->input('station_name');
        $nodes->river = $request->input('river');
        $nodes->alert_level = $request->input('alert_level');
        $nodes->minor_level = $request->input('minor_level');
        $nodes->major_level = $request->input('major_level');
        $nodes->current_level = $request->input('current_level');
        $nodes->node_image = $fileNameToStore;
        $nodes->latitude = $request->input('latitude');
        $nodes->longitude = $request->input('longitude');
        $nodes->save();

        return redirect('/nodes')->with('success','Node created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $node = Nodes::find($id);
        return view('nodes.nodeview')->with('node', $node);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $node = Nodes::find($id);
        return view('nodes.edit')->with('node', $node);
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
        $this->validate($request, [
            'station_name' => 'required',
            'river' => 'required',
            'alert_level' => 'required',
            'minor_level' => 'required',
            'major_level' => 'required',
            'current_level' => 'required'
        ]);

        $nodes = Nodes::find($id);
        $nodes->station_name = $request->input('station_name');
        $nodes->river = $request->input('river');
        $nodes->alert_level = $request->input('alert_level');
        $nodes->minor_level = $request->input('minor_level');
        $nodes->major_level = $request->input('major_level');
        $nodes->current_level = $request->input('current_level');
        $nodes->save();

        return redirect('/nodes')->with('success','Node updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $node = Nodes::find($id);
        $node->delete();
        return redirect('/nodes')->with('success','Node removed');
    }
}
