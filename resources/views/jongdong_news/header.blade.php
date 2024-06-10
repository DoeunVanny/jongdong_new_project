<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CMS News</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- @style -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/sport.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/news-detail.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/search.css') }}">
        <!-- @google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kantumruy&display=swap" rel="stylesheet">
        <!-- @google font -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <!-- @slick slider -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <!-- @funcy box -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    </head>
<body>
    <header>
         @php
              $logofooter = App\Models\Logos_Footers::where("type","=","1")->limit(1)->get();

        @endphp 
        <div class="container">
            @foreach ($logofooter as $item)
            <div class="logo">
                <a href="">
                <img src="{{ asset('images_logo_footer/'.$item->image)}}" width="100px" height="70px" alt="">
                </a>
            </div>
            @endforeach
            <ul class="menu">
                <li><a href="{{route('index')}}">ទំព័រដើម</a></li>
                <li><a href="{{route('LatestNews')}}">ព័ត៌មានថ្មីៗ</a></li>
                <li><a href="{{route('Finance')}}">ហិរញ្ញវត្ថុ</a></li>
                <li><a href="{{route('StartBusiness')}}">ចាប់ផ្តើមអាជីវកម្ម</a></li>
                <li><a href="{{route('contact')}}">ទំនាក់ទំនង</a></li>
            </ul>
            <div class="search">
                <form action="{{route('search')}}" method="get">
                @csrf
                    <input type="text" class="box" placeholder="Search Here" name="search" value="{{request('search')}}">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>    
        </div>
    </header>