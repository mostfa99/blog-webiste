@extends('layouts.admin')

@section('title', 'Create Posts')

@section('content')

<form action="{{ route('posts.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include('admin.posts._form',[
    'button'=>'Add',
    ])

</form>
@endsection