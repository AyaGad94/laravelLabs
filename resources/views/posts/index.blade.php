@extends('layouts.master')


@section('content')
<body>
 <table border="1">
 <thead>
<th> title </th>
<th> posted BY </th>
<th>description</th>
<th> created at </th>
<th> Action </th>
</thead>
<tbody>
@foreach ($posts as $post)
<tr> 


    <td>{{$post->title}}</td>
    <td>{{$post->PostedBy}}</td>
    <td>{{$post->description}}</td>
    <td>{{$post->created_at->toDateString()}}</td>

    <td> <a href="/posts/{{$post->id}}"> <input  value="view" class="btn btn-primary"> </a>   </td>
    <td> <a href='posts/{{$post->id}}/edit'> <input  value="edit" class="btn btn-primary"></a> </td>
    <td> <a href='posts/{{$post->id}}'>  <input  value="Delete" class="btn btn-primary"> </a> </td>

</tr>
@endforeach
</tbody>

</table>

<script type="text/javascript" src="lab.js" ></script>    
</body>
@endsection