<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;
use DB;
use DateTime;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = @todo::all();
        return view('todo.home', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $todo = new todo;

        $this->validate($request, ['title'=>'required|unique:todos']);
        $this->validate($request, ['body'=>'required']);

        $todo->title = $request->title;
        $todo->body = $request->body;

        $todo->save();

        session()->flash('message',"Created  ".$todo->id." Successfully");


        return redirect('todo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = todo::find($id);
        return view('todo.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = todo::find($id);
        return view('todo.edit',compact('item'));
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
        $todo = todo::find($id);
        $now = new DateTime();

        $this->validate($request, ['title'=>'required']);
        $this->validate($request, ['body'=>'required']);

        $todo->title = $request->title;
        $todo->body = $request->body;

        $todo->save();

        session()->flash('message',"Updated " .$todo->id. " Successfully");

        return redirect('todo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = todo::find($id);
        $item->delete();
        session()->flash('message',"Deleted ".$item->id." Successfully");

        return redirect('/todo');
    }
}
