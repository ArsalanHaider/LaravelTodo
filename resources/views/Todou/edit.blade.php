@extends('layouts.app')

@section('content')

<h1 class="text-center my-5"> Edit Todos</h1>

<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card card-default">
      <div class="card-header">
             Edit new todo
      </div>
      <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul class="list-group">
           @foreach ($errors->all() as $error)
               <li class="list-group-item">{{ $error }}</li>
           @endforeach
       </ul>
        </div>
 @endif
        <form action="/Todou/{{$todo->id}}/update-todo" method="post">

          @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="name" value="{{ $todo->name }}"/>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="description" rows="10" placeholder="description">{{ $todo->description }}</textarea>
            </div>

            <div class="form-group text-center">
              <button class="btn btn-primary" type="submit">Edit Task</button>
            </div>

          
          </form>
        </div>
    </div>
</div>
</div>
@endsection
