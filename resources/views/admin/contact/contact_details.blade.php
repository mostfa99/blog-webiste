@extends('layouts.admin')
@section('title', 'Display Contact Information ')

@section('content')
<div class="row mb-3">
    <div class="col-12">
        <div class="content">
            <h6>{{ __('DETAILS') }}</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>{{ __('phone') }}</th>
                        <th>{{ __('Email') }}</th>
                        <th>{{ __('address') }}</th>
                        <th>{{ __('country') }}</th>
                        <th>{{ __('schedule') }}</th>
                        <th>{{ __('office_time') }}</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contactDetails as $contactDetail)
                    <tr>
                        <td></td>
                        <td>{{ $contactDetail->phone }}</td>
                        <td>{{ $contactDetail->email }}</td>
                        <td>{{ $contactDetail->address }}</td>
                        <td>{{ $contactDetail->country }}</td>
                        <td>{{ $contactDetail->schedule }}</td>
                        <td>{{ $contactDetail->office_time }}</td>
                        <td>
                            <a href="{{ route('contact.update') }}" class="btn btn-sm btn-dark">
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