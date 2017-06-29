@extends('layout.master')

@section('content')
	<div class="col-sm-8 blog-main">
		<div class="blog-post">
          <h2 class="blog-post-title">{{ $post->title }}</h2>
          <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }}</p>

          <p>{{ $post->body }}</p>
          
        </div><!-- /.blog-post -->
		<hr>

		<ul class="list-group">
	        @foreach($post->comments as $comment)
				<li class="list-group-item">
					<strong> {{ $comment->created_at->diffForHumans() }}: &nbsp </strong>
					{{ $comment->body }}
				</li>
	        @endforeach
		</ul>
		<hr>
		<div class="card">  
			<div class="card-block">
				<form method="POST" action="/post/{{$post->id}}/comment">
					{{ csrf_field() }}
				  	<div class="form-group">
					  	<textarea class="form-control" id="body" name="body" placeholder="Your comment here" required></textarea>
				  	</div>
				
				  	<button type="submit" class="btn btn-primary">Add Comment</button>
				</form>
			</div>
		</div>
		
		@include('layout.errors')
	</div>
@endsection