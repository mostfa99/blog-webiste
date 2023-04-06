@extends('components.layouts.admin')
@section('title', 'Display all Services')

@section('content')
<div class="row mb-3">
    <div class="col-6">
        <div class="content">
            <h6>{{ __('Create New Service') }}</h6>
            <form method="post" action="{{ route('services.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="subject" class="form-label">{{ __('Subject') }}</label>
                    <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" value="{{ old('subject') }}" placeholder="{{ __('Enter service subject') }}" required>
                    @error('subject')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">{{ __('Content') }}</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="3" placeholder="{{ __('Enter service content') }}" required>{{ old('content') }}</textarea>
                    @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
            </form>
        </div>
    </div>
</div>

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