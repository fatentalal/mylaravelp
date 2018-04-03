

@extends('front.master')
@section('content')
<h1> users page </h1>
@if(isset($results))
@foreach($results as $result)
<table>
<tr>
<td>
{{$result->id}}
</td>


 <td>
  {{$result->title}} 
</td>
<td>
<a href="/users/delete/{{$result->id}}">Delete</a>
</td>
</tr>
</table>
@endforeach
@endif
@endsection