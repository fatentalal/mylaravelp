
@extends('front.master')
@section('content')
<h1>all posts
<a href="{{route('posts.create')}}" class="btn btn-sn btn-primary">create new post</a>

</h1>
<div class="row">
<div class="col-lg-10">
<center>
<table>
<tr>
<th>
id
</th>
<th>
title
</th>
<th>
content
</th>

</tr>
@foreach ($posts as $rs)

<tr>
<td>{{ $rs->post_id}}</td>
<td>{{ $rs->title}}</td>
<td>{{ $rs->body}}</td>
<td>
<a href="{{route('posts.edit',$rs->post_id)}}" class="btn btn-sn btn-primary">Edit</a>
</td>
</tr>
@endforeach


</table>
</center>
</div>
</div>

@endsection