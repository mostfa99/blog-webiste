@extends('components.layouts.admin')

@section('title', 'Create Services')

@section('content')

<form action="{{ route('services.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('admin.services._form',[
    'button'=>'Add',
    ])

</form>
@endsection