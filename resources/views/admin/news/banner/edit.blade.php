@extends('admin.app')
@section('content')
<div class="page-content">
    <div class="container-fluid ">
        <div style="overflow: hidden;width:100%;height: 800px" class="slide position-relative">
            <h1> Update Banner</h1>
            <form action="{{route('banner.update',$banner->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                   
                   <div class="col-md-6">
                       <label for="">Image</label>
                       <input type="file" class="form-control @error('image') is-invalid @enderror mb-2" name="image" >
                       @if ($banner->image)
                       <img src="{{ asset('images_banner/'.$banner->image)}}" width="100px" height="100px" alt="">
                       @endif
                   @error('image')
                      <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                   </div>
                   <div class="col-md-6">
                    <label for="">title</label>
                     <input type="text" class="form-control  @error('title') is-invalid @enderror" name="title" value="{{$banner->title}}">
                     @error('title')
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