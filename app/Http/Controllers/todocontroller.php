<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class todocontroller extends Controller
{
  public function index(){

    //fetch all the todos from the dbs

    //show them on the index page
    $todos = Todo::all();
    return view('Todou.index')->with('todos',$todos);
  }

  public function show(Todo $todo){
//dd($todoId); to check if its working or not.
//  $todo = Todo::find($todoId);
  return view('Todou.show')->with('todo',$todo);
  }


  public function create(){
    return view('Todou.create');
  }

  public function store(){
    //dd(request()->all());  // all the instance submitted from create

    $this->validate(request(),[

      'name'=>'required|min:6|max:12',
      'description'=>'required'
    ]);
    $data = request()->all();
    $todo = new Todo();
    $todo->name=$data['name'];
    $todo->description=$data['description'];
    $todo->completed=false;

    $todo->save();
    session()->flash('success','Todo created successfully');

    return(redirect('/Todou'));
  }

  public function edit(Todo $todo){
    return view('Todou.edit')->with('todo',$todo);

  }

  public function update(Todo $todo){
    $this->validate(request(),[

      'name'=>'required|min:6|max:12',
      'description'=>'required'
    ]);
    $data = request()->all();
    $todo->name=$data['name'];
    $todo->description=$data['description'];
    $todo->save();
    session()->flash('success','Todo updated successfully');

    return(redirect('/Todou'));

  }


public function destroy(Todo $todo){
  $todo->delete();
  session()->flash('success','Todo deleted successfully');

  return(redirect('/Todou'));

}


public function completed(Todo $todo){
$todo->completed=true;
$todo->save();

  session()->flash('success','Todo completed successfully');

  return(redirect('/Todou'));
}

}
