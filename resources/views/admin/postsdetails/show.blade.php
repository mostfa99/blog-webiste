@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $postsdetails->title }}</h5>
        <p class="card-text">{{ $postsdetails->content }}</p>
    </div>
</div>
@endsection