@extends('layouts.admin')

@section('title', 'Create Services')

@section('content')

<form action="{{ route('postsdetails.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('admin.postsdetails._form',[
    'button'=>'Add',
    ])
</form>
@endsection