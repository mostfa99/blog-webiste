@extends('layouts.admin')
@section('title' , 'edit Services')

@section('content')


<form action="{{ route('servicesdetails.update', $servicesdetails->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @include('admin.servicesdetails._form',[
    'button' =>'Update',
    ])
</form>

@endsection