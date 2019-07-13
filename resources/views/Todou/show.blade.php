

@extends('layouts.app')

@section('content')

  <h1 class="text-center my-5">Todo Details</h1>
   <div class="row justify-content-center">
     <div class="col-md-8">
     <div class="card card-default">
       <div class="card-header">
         Todos item:  {{ $todo->name }}
       </div>


       <div class="card-body">
        <h4>Description: </h4> {{ $todo->description }}
       </div>

     </div>
     <a href="/Todou/{{ $todo->id }}/edit" class="btn btn-info my-2">Edit<a>
       <a href="/Todou/{{ $todo->id }}/delete" class="btn btn-danger my-2">Delete<a>

   </div>

   </div>
@endsection
