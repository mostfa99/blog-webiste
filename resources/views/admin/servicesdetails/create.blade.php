@extends('layouts.admin')

@section('title', 'Create Services')

@section('content')

<form action="{{ route('servicesdetails.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('admin.servicesdetails._form',[
    'button'=>'Add',
    ])
</form>
@endsection