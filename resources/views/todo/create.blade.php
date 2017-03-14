@extends('layout.app')

@section('body')
	<br>
	@include('todo.partial.message')

	<div class="col-lg-4 col-lg-offset-4">
		<h1>{{ucfirst(substr(Route::currentRouteName(),5))}} Item</h1>
		<form class="form-horizontal" action="/todo/@yield('editId')" method="post">

		{{csrf_field()}}

		@section('editMethod') @show
		  <fieldset>

			<div class="form-group">
  		      <div class="col-lg-10">
  		        <input type="text" name="title" class="form-control" placeholder="Title" value="@yield('editTitle')"/>
  		      </div>
  		    </div>

		    <div class="form-group">
		      <div class="col-lg-10">
		        <textarea class="form-control" name="body" rows="5" id="textArea" placeholder="Body">@yield('editBody')</textarea>
		      </div>
		    </div>

		    <div class="form-group">
		      <div class="col-lg-10 col-lg-offset-2">
				<a href="/todo" class="btn btn-info">Back</a>
		        <button type="submit" class="btn btn-success">Submit</button>
		      </div>
		    </div>

		  </fieldset>
		</form>

		@include('todo.partial.errors')

	</div>
@endsection
