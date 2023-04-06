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
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $service->title ?? '') }}" placeholder="Enter service Title " required>
    @error('title')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Description  -->
<div class="mb-3">
    <label for="description" class="form-label">{{__('Description')}}</label>
    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description', $service->description ?? '') }} </textarea>
    @error('description')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Icon -->
<div class="mb-3">
    <label for="icon" class="form-label">{{__('Icon')}}</label>
    <select class="form-select @error('icon') is-invalid @enderror" id="icon" name="icon">
        <option value="">--Select an icon--</option>
        <option value="lni lni-capsule" {{ old('icon', isset($service) && $service->icon === 'lni lni-capsule' ? 'selected' : '') }}>Capsule
        </option>
        <option value="lni lni-leaf" {{ old('icon', $service->icon) === 'lni lni-leaf' ? 'selected' : '' }}>Leaf
        </option>
        <option value="lni lni-coffee-cup" {{ old('icon', $service->icon) === 'lni lni-coffee-cup' ? 'selected' : '' }}>
            Coffee Cup</option>
        <!-- Add more options for each icon you want to include -->
    </select>
    @error('icon')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<!-- B
utton
-->

<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $button }}</button>
</div>