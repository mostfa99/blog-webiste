@extends('layouts.admin')
@section('title', 'Display all Recive Message ')

@section('content')
<div class="row mb-3">
    <div class="col-12">
        <div class="content">
            <h6>{{ __('All Message') }}</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Email') }}</th>
                        <th>{{ __('Phone') }}</th>
                        <th>{{ __('Subject') }}</th>
                        <th>{{ __('Message') }}</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                    <tr>
                        <td></td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->subject }}</td>
                        <td>{{ $contact->message }}</td>
                    </tr>
                    @endforeach
                </tbody>



            </table>
        </div>
    </div>
</div>
@endsection