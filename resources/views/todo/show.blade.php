@extends('layout.app')

@section('body')
    <br>
    <div class="col-lg-offset-4 col-lg-4">
        <h1>{{$item->title}}</h1>
        {{$item->body}}
        {{$item->created_at}}
        {{$item->updated_at}}
    </div>
@endsection
