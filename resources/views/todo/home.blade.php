@extends('layout.app')

@section('body')
    <br>
    <a href="todo/create" class="btn btn-info">Add New</a>
    <div class="col-lg-4 col-lg-offset-4">
        <h1>Todo Lists</h1>
        <ul class="list-group">
            @foreach ($todos as $todo)
            
              <li class="list-group-item">
                {{$todo->body}}
              </li>

          @endforeach
        </ul>

    </div>
@endsection
