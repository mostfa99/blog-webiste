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
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $post->title ?? '') }}" placeholder="Enter post Title " required>
    @error('title')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Description  -->
<div class="mb-3">
    <label for="body" class="form-label">{{__('Body')}}</label>
    <textarea class="form-control @error('body') is-invalid @enderror" id="body" name="body" rows="3">{{ old('body', $post->body ?? '') }} </textarea>
    @error('body')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div>
    <div class="mb-3">
        <label for="image">Image</label>
        <input class="form-control @error('body') is-invalid @enderror" type="file" id="image" name="image">
        @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
<!-- Button-->
<div c lass="form-group">
    <button type="submit" class="btn btn-primary">{{ $button }}</button>
</div>