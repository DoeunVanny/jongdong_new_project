@extends('admin.app')
@section('content')

<div class="page-content">
    <div class="container-fluid ">
        <div style="overflow: hidden;width:100%;height: 800px" class="slide position-relative">
            <img class="w-100 h-100 position-absolute" style="object-fit: cover;" src="{{ asset('bg2.jpg') }}" alt="">
            <div style="background-color: #0000007a;" class="container-fluid d-flex align-items-center justify-content-center position-absolute p-0 h-100">
                <div class="box text-center">
                    <h1>Welcome to Admin Dashboard</h1>
                    <h1 class="text-warning">___ Admin Dashboard ___</h1>
                    <h1>Hello</h1>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection