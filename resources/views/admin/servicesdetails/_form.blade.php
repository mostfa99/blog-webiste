@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $message)
        <li>
            {{$message}}
        </li>
        @endforeach
    </ul>
</div>
@endif
<!-- Title  -->
<div class="mb-3">
    <label for="title" class="form-label">{{__('Title')}}</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $servicesdetails->title ?? '') }}" placeholder="Enter servicedetails Title " required>
    @error('title')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Description  -->
<div class="mb-3">
    <label for="content" class="form-label">{{__('Content')}}</label>
    <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="3">{{ old('content', $servicesdetails->content ?? '') }} </textarea>
    @error('content')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>


<div class="mb-3">
    <div class="form-group">




        <button type="submit" class="btn btn-primary">{{ $button }}</button>
    </div>
</div>