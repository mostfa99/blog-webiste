@extends('layouts.admin')
@section('title', 'Display all Services')

@section('content')
<div class="row mb-3">
    <div class="col-12">
        <div class="content">
            <h6>{{ __('All Services') }}</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>{{ __('Icon') }}</th>
                        <th>{{ __('Title') }}</th>
                        <th>{{ __('Description') }}</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                    <tr>
                        <td></td>
                        <td>
                            <div class="service-icon">
                                <i class="{{ $service->icon }}"></i>
                            </div>
                        </td>
                        <td>{{ $service->title }}</td>
                        <td>{{ $service->description }}</td>
                        <td>
                            <a href="{{ route('services.edit', $service->id) }}" class="btn btn-sm btn-dark">
                                {{ __('Edit')}}
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
        </div>
    </div>
</div>
@endsection