@extends('front.master')
@section('content')
<div class="row">
<div class="col-lg-10">
<form action="{{route('posts.store')}}" method="post">
{{ csrf_field() }}
<div class="form-group"></br></br>
<lable for="title_input">title</lable>
<input tybe="text" class="form-cotrol" name="title"/>
</div>
<div class="form-group">
<lable for="content_input">content</lable>
<textarea rows="4" class="form_control" name="body"></textarea>
</div>
<div class="form_group">
<button type="submit" class="btn btn-primary">save</button>
</div>
</form>
</div>
</div>



@endsection