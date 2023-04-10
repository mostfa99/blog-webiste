@extends('layouts.admin')
@section('title' , 'edit Services')

@section('content')


<form action="{{route('posts.update',$post)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    @include('admin.posts._form',[
    'button' =>'Update',
    ])
</form>

@endsection