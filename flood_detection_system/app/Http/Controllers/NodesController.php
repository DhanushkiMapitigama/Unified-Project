<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nodes;

class NodesController extends Controller
{
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
            'current_level' => 'required'
        ]);

        $nodes = new Nodes;
        $nodes->station_name = $request->input('station_name');
        $nodes->river = $request->input('river');
        $nodes->alert_level = $request->input('alert_level');
        $nodes->minor_level = $request->input('minor_level');
        $nodes->major_level = $request->input('major_level');
        $nodes->current_level = $request->input('current_level');
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
        //
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
    }
}
