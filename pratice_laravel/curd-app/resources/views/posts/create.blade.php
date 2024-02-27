@extends('posts.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Post</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('posts.index')}}">Back</a>
        </div>
    </div>
</div>

<form action="{{route('posts.store')}}" method="POST">
@csrf
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name</strong>
            <input type="text" name="name" id="" class="form-control" placeholder="Name">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Detail</strong>
            <textarea name="detail" id="" style="height:150px" class="form-control" placeholder="Details"></textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm1-2 col-md-12 text-center">
        <button type="submit" class="btn btn-primary m-4">Submit</button>
    </div>
</div>
</form>

@endsection