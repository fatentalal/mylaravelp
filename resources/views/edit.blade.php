@extends('front.master')
@section('content')
<h1>Edit</h1>
<div class="row">
<div class="col-lg-10">
<form action="{{route('posts.update',$post->post_id)}}" method="post">
{{ csrf_field() }}
<input name="_method" type="hidden" value="PUT">
<div class="form-group"></br></br>
<lable for="title_input">title</lable>
<input tybe="text" value="{{$post->title}}" class="form-cotrol" name="title"/>
</div>
<div class="form-group">
<lable for="content_input">content</lable>
<textarea rows="4" class="form_control" name="body">{{$post->body}}</textarea>
</div>
<div class="form_group">
<button type="submit" class="btn btn-primary">update</button>
</div>
</form>
</div>
</div>



@endsection