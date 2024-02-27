@extends('posts.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Laravel Crud</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success m-2" href="{{ route('posts.create') }}">Create new post </a>
        </div>
    </div>
</div>


<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Details</th>
        <th width="290px">Action</th>
    </tr>
    @foreach($posts as $post)
    <tr>
        <td>{{++$i}}</td>
        <td>{{$post->name}}</td>
        <td>{{$post->detail}}</td>
        <td>
            <form action="{{route('posts.destroy',$post->id)}}" method="POST">
            <a class="btn btn-info" href="{{route('posts.show',$post->id)}}">Show</a>
            <a class="btn btn-primary" href="{{route('posts.edit',$post->id)}}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>

            </td>


        </form>
</tr>


@endforeach
</table>


{!! $posts->links() !!}
@endsection