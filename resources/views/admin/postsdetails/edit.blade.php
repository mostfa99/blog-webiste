@extends('layouts.admin')
@section('title' , 'edit Services')

@section('content')


<form action="{{ route('postsdetails.update', $postsdetails->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @include('admin.postsdetails._form',[
    'button' =>'Update',
    ])
</form>

@endsection