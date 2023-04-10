@extends('layouts.admin')
@section('title', 'Display Services details ')

@section('content')
<div class="row mb-3">
    <div class="col-12">
        <div class="content">
            <h6>{{ __('All Services') }}</h6>
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
                    @foreach ($servicesdetails as $servicesdetail)
                    <tr>
                        <td></td>
                        <td>{{ $servicesdetail->title }}</td>
                        <td>{{ $servicesdetail->content }}</td>
                        <td>
                            <a href="{{ route('servicesdetails.edit', $servicesdetail->id) }}" class="btn btn-sm btn-dark">
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