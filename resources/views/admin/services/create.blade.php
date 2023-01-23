@extends('components.layouts.admin')

@section('title', 'Create Services')

@section('content')

<form action="#" method="post" enctype="multipart/form-data">
    @csrf
    <!-- Name  -->
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Default file input example</label>
        <input class="form-control" type="file" id="formFile">
    </div>

    <!-- Button -->
    <div class="form-group">
        <button type="submit" class="btn btn-primary"> Add </button>
    </div>
</form>

@endsection