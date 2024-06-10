@extends('admin.app')
@section('content')
<div class="page-content">
    <div class="container-fluid ">
        <div style="overflow: hidden;width:100%;height: 800px" class="slide position-relative">
            <h1> Update Banner</h1>
            <form action="{{ route('new.update', $new->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-md-6">
            <label for="type">Type</label>
            <select class="form-control @error('type') is-invalid @enderror" name="type" id="type">
                <option value="" selected disabled>Select News Type</option>
                <option value="1" {{ $new->type == 1 ? 'selected' : '' }}>ព័ត៌មានថ្មីៗ (Latest News)</option>
                <option value="2" {{ $new->type == 2 ? 'selected' : '' }}>ហិរញ្ញវត្ថុ (Finance)</option>
                <option value="3" {{ $new->type == 3 ? 'selected' : '' }}>ចាប់ផ្តើមអាជីវកម្ម (Start Business)</option>
            </select>
            @error('type')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="image">Image (Optional)</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
            @if ($new->image)
                <img src="{{ asset('images_new/' . $new->image) }}" width="100px" height="100px" alt="">
            @endif
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="image_detail">Image Detail (Optional)</label>
            <input type="file" class="form-control @error('image_detail') is-invalid @enderror" name="image_detail">
            @if ($new->image_detail)
                <img src="{{ asset('images_new/' . $new->image_detail) }}" width="100px" height="100px" alt="">
            @endif
            @error('image_detail')
                <span class="feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $new->title) }}" name="title">
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="title_detail">Title Detail</label>
            <input type="text" class="form-control @error('title_detail') is-invalid @enderror" value="{{ old('title_detail', $new->title_detail) }}" name="title_detail">
            @error('title_detail')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="description">Description</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" value="{{ old('description', $new->description) }}" name="description">
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
                <div class="row">
                   <div class="col-md-12 mt-3">
                       <input type="submit" class="btn btn-primary" value="Update">
                   </div>
                </div>
           </form>
            
        </div>
    </div>
</div>
@endsection