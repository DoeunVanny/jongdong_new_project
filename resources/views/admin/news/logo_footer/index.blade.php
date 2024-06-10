@extends('admin.app')
@section('content')
<div class="page-content">
    <div class="container-fluid ">
        <div style="overflow: hidden;width:100%;height: 800px" class="slide position-relative">
             <h1>LOGO FOOTER</h1>
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
                        <th scope="col">Type</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($logofooter  as $key => $logofooters)
                    <tr>
                        <td scope="col">{{++$key}}</td> 
                        <td scope="col">
                            <img src="{{ asset('images_logo_footer/'.$logofooters->image)}}" width="100px" height="100px" alt="">
                        </td>
                        <td scope="col">
                            @if ($logofooters->type == 1)
                                 <p class="btn py-0 btn-success">Logo</p>
                            @else
                               <p class="btn py-0 btn-primary">Footer</p>
                            @endif
                              
                        </td>

                        <td  scope="col">
                            <a href="{{ route('logoFooter.edit',$logofooters->id)}}">
                              <button class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil square-o" aria-hidden="true">Edit</i>
                              </button>
                            </a>

                            <form action="{{ route('logoFooter.destroy',$logofooters->id)}}" method="post" style="display: inline">
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