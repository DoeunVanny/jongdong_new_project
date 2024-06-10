@extends('admin.app')
@section('content')
<div class="page-content">
    <div class="container-fluid ">
        <div style="overflow: hidden;width:100%;height: 800px" class="slide position-relative">
            <h1> Update LOGO FOOTER</h1>
            <form action="{{route('logoFooter.update',$logofooter->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                   
                   <div class="col-md-6">
                       <label for="">Image</label>
                       <input type="file" class="form-control  @error('image') is-invalid @enderror   mb-2"  name="image" >
                       @if ($logofooter->image)
                       <img src="{{ asset('images_logo_footer/'.$logofooter->image)}}" width="100px" height="100px" alt="">
                       @endif
                     @error('image')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                   @enderror
                      
                       
                      
                   </div>
                   <div class="col-md-6">
                    <label for="">Status</label>
                    <select class="form-control  @error('type') is-invalid @enderror" name="type" id="">
                           <option selected> select logo and footer</option>
                           <option value="1" {{ $logofooter->type == 1 ? 'selected' : '' }}>Logo</option>
                           <option value="2" {{ $logofooter->type == 2 ? 'selected' : '' }}>Footer</option>
                    </select>
                    @error('type')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>


                </div>
                <div class="row">
                   <div class="col-md-12 mt-3">
                       <input type="submit" class="btn btn-primary" value="Register">
                   </div>
                </div>
           </form>
            
        </div>
    </div>
</div>
@endsection