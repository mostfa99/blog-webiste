@extends('layouts.admin')
@section('title' , 'edit Services')

@section('content')


<form action="{{route('services.update',$service->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    @include('admin.services._form',[
    'button' =>'Update',
    ])
</form>

@endsection