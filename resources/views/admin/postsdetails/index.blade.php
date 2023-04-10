@extends('layouts.admin')
@section('title', 'Display PostsDetails ')

@section('content')
<div class="row mb-3">
    <div class="col-12">
        <div class="content">
            <h6>{{ __('All PostsDetails') }}</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>{{ __('title') }}</th>
                        <th>{{ __('content') }}</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($postsdetails as $postsdetail)
                    <tr>
                        <td></td>
                        <td>{{ $postsdetail->title }}</td>
                        <td>{{ $postsdetail->content }}</td>
                        <td>
                            <a href="{{ route('postsdetails.edit', $postsdetail->id) }}" class="btn btn-sm btn-dark">
                                {{ __('Edit')}}
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection