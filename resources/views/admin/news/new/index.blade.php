@extends('admin.app')
@section('content')
<div class="page-content">
    <div class="container-fluid ">
        <div style="overflow: hidden;width:100%;height: 800px" class="slide position-relative">
             <h1>News </h1>
             @if(session('success'))
         <div class="alert alert-success">
        {{ session('success') }}
         </div>
        @endif

             <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Title detail</th>
                        <th scope="col">Image </th>
                        <th scope="col">Image detail</th>
                        <th scope="col">Type</th>
                       

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($new  as $key => $news)
                    <tr>
                        <td scope="col">{{++$key}}</td> 
                        <td scope="col"> {{$news->title}}  </td>
                        <td scope="col"> {{$news->title_detail}}  </td>
                        <td scope="col">
                            <img src="{{ asset('images_new/'.$news->image)}}" width="100px" height="100px" alt="">
                        </td>
                        <td scope="col">
                        <img src="{{ asset('images_new/'. $news->image_detail) }}" width="100">
                        </td>
                        <td scope="col">
                            @if ($news->type == 1)
                                 <p class=" py-0 text-success">ព័ត៌មានថ្មីៗ<</p>
                            @elseif($news->type == 2)
                               <p class=" py-0 text-primary">ហិរញ្ញវត្ថុ</p>
                            @else
                               <p class="btn py-0 text-danger">ចាប់ផ្តើមអាជីវកម្ម</p>
                            @endif
                              
                        </td>
                       
                        <td  scope="col">
                            <a href="{{ route('new.edit',$news->id)}}">
                              <button class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil square-o" aria-hidden="true">Edit</i>
                              </button>
                            </a>

                            <form action="{{ route('new.destroy',$news->id)}}" method="post" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
               
            </table>

            {{ $new->links() }}
        </div>
    </div>
</div>
@endsection