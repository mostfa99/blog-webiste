@extends('layouts.admin')
@section('title', 'Display all Posts')

@section('content')
<div class="row mb-3">
    <div class="col-12">
        <div class="content">
            <h6>{{ __('All Posts') }}</h6>
            <a href="{{route('posts.create')}}" target="_blank" rel="noopener noreferrer">create</a>

            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>{{ __('Imgae') }}</th>
                        <th>{{ __('Title') }}</th>
                        <th>{{ __('Body') }}</th>
                        <th>{{ __('Published at') }}</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td></td>
                        <td>
                            @if ($post->image)
                            <img src="{{ asset('storage/images/' . $post->image) }}" alt="{{ $post->title }}" style="max-width: 100%;">
                            @endif
                        </td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->body }}</td>
                        <td>{{ $post->published_at }}</td>
                        <td>
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-dark">
                                {{ __('Edit')}}
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-sm btn-dark">
                                {{ __('Show')}}
                            </a>
                        </td>
                        <td>
                            <form action="{{route('posts.destroy',$post)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger"> Delete</button>
                            </form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>




            </table>
        </div>
    </div>
</div>













@endsection