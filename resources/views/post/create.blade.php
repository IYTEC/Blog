@extends('layout.master')

@section('content')
	<div class="col-sm-8">
		<h1>Create Post</h1>
		<hr>
		<form method="POST" action="/post">
			 <div class="form-group">
				 {{ csrf_field() }}
				<label for="title">Title</label>
				<input type="text" class="form-control" id="title" name="title" placeholder="Title">
			 </div>
			
		  	<div class="form-group">
				<label for="content">Body</label>
			  		<textarea class="form-control" id="body" placeholder="Body" name="body"></textarea>
		  	</div>
		
		  	<button type="submit" class="btn btn-primary">Publish</button>
		</form>
	</div>

	
@endsection
