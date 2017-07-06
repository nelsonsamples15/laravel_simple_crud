<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;

class todoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = todo::all();
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
      $this->validate($request, [
            'title'=>'required|unique:todos',
            'body'=>'required'
        ]);
      $todo->body = $request->body;
      $todo->title = $request->title;
      $todo->save();
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
        return view('todo.edit', compact('item'));
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
        $this->validate($request, [
            'title'=>'required',
            'body'=>'required'
        ]);
        $todo->body = $request->body;
        $todo->title = $request->title;
        $todo->save();
        session()->flash('message', 'Updated Successfully');
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
        session()->flash('message', 'Delete Successfully');
        return redirect('/todo');
    }
}
