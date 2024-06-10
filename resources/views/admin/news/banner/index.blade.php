@extends('admin.app')
@section('content')
<div class="page-content">
    <div class="container-fluid ">
        <div style="overflow: hidden;width:100%;height: 800px" class="slide position-relative">
             <h1>BANNER</h1>
             @if(session('success'))
         <div class="alert alert-success">
        {{ session('success') }}
         </div>
        @endif

             <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($banner  as $key => $banners)
                    <tr>
                        <td scope="col">{{++$key}}</td> 
                        <td scope="col">
                            <img src="{{ asset('images_banner/'.$banners->image)}}" width="100px" height="100px" alt="">
                        </td>
                        <td scope="col">
                            {{$banners->title}}
                              
                        </td>

                        <td  scope="col">
                            <a href="{{ route('banner.edit',$banners->id)}}">
                              <button class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil square-o" aria-hidden="true">Edit</i>
                              </button>
                            </a>

                            <form action="{{ route('banner.destroy',$banners->id)}}" method="post" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">delete</button>
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