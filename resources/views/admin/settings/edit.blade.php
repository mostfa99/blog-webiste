@extends('layouts.admin')
@section('title', 'Settings')

@section('content')
<form action="{{ route('settings') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="website_name">{{ __('Website Name') }}</label>
        <input type="text" name="config[app.name]" class="form-control" value="{{config('app.name')}}">
    </div>
    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
</form>
@endsection