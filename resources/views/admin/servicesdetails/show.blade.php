@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $servicesdetails->subject }}</h5>
        <p class="card-text">{{ $servicesdetails->content }}</p>
    </div>
</div>
@endsection