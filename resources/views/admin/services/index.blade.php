@extends('components.layouts.admin')
@section('title' , 'display all Services')


@section('content')

<table class="table">
    <thead>
        <tr>

            <th></th>
            <th>title</th>
            <th>description</th>
            <th>Create At</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($services as $service )


        <tr>
            <!-- to do loop number  -->
            <td><img src="#" width="60" alt=""></td>
            <td>{{$service->title}}</td>
            <td>{{$service->description}}</td>
            <td>
                <a href="{{route('services.edit',$service->id)}}" class="btn btn-sm btn-dark">
                    Edit
                </a>
            </td>
            <td>
                <form action="{{route('services.destroy',$service->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger"> Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection