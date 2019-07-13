@extends('layouts.app')

@section('content')

  <h1 class="text-center my-5">Todo</h1>
   <div class="row justify-content-center">
     <div class="col-md-8">
     <div class="card card-default">
       <div class="card-header">
         Todos
       </div>

       <div class="card-body">
         <ul class="list-group">
         @foreach($todos as $todo)

           <li class="list-group-item">
               {{ $todo->name }}

               @if(!$todo->completed)
               <a href="/Todou/{{ $todo->id}}/completed" style="color:white" class="btn btn-warning btn-sm float-right">completed</a>

               @endif

               <a href="/Todou/{{ $todo->id}}" class="btn btn-primary mr-2 btn-sm float-right">View</a>

           </li>

        @endforeach
      </ul>

       </div>
     </div>
   </div>

   </div>

   @endsection
