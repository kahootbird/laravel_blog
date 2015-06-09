@extends('app')
@section('content')
<h3> Add a blog post</h3>
<form action="{{ URL::route('createPost')}}" method="post">
	<div class="form-group">
	<input name="title" class="form-control" type="text" placeholder="Title" />
	</div>
	<div class="form-group">
	<textarea name="content" class="form-control" placeholder="WriteHere" >
	WriteHere
	</textarea>
	</div>
	<input type="submit" class="btn btn-primary" value="Submit Post" />
</form>
@stop