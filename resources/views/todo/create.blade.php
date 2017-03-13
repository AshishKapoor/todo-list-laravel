@extends('layout.app')

@section('body')
	<br>
	<div class="col-lg-4 col-lg-offset-4">
		<h1>Create New Item</h1>
		<form class="form-horizontal" action="/todo" method="post">
		
		{{csrf_field()}}
		
		  <fieldset>

		    <div class="form-group">
		      <div class="col-lg-10">
		        <textarea class="form-control" name="body" rows="5" id="textArea"></textarea>
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
	</div>
@endsection