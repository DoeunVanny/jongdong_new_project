@include('jongdong_news.header')
    <main class="home">
        <section class="trending">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content-trending">
                            <div class="content-left">
                                ព័ត៌មានថ្មីៗ
                            </div>   
                            <div class="content-right">
                                <marquee behavior="" direction="left">
                                    <div class="text-news">
                                        <i class="fas fa-angle-double-right"></i>
                                        <a href="">ពិធីសម្ពោធដាក់ឱ្យប្រើប្រាស់នូវកំណាត់ផ្លូវជាតិលេខ២៦ ប្រវែងជិត ៦៤គីឡូម៉ែត្រ </a> &ensp;
                                        <i class="fas fa-angle-double-right"></i>
                                        <a href="">ពិធីសម្ពោធដាក់ឱ្យប្រើប្រាស់នូវកំណាត់ផ្លូវជាតិលេខ២៦ ប្រវែងជិត ៦៤គីឡូម៉ែត្រ </a>
                                    </div>
                                </marquee>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @php
              $banner = App\Models\Banner::limit(1)->get();

        @endphp 
        <section class="latest-news">
            <div class="container">
                <div class="row">
                    @foreach($banner as $item)
                    <div class="col-8 content-left">
                        <figure>
                            <a href="">
                                <div class="thumbnail">
                                    <img src="{{ asset('images_banner/'.$item->image)}}" width="730px" height="415" alt="">
                                    <div class="title">
                                        {{$item->title}}
                                    </div>
                                </div>
                            </a>
                        </figure>
                    </div>
                    @endforeach
                    @php
                      $new = App\Models\News::where("type","=","1")->limit(2)->get();

                   @endphp 
                    <div class="col-4 content-right">
                           @foreach($new as $item)
                    <div class="col-12">
                        <figure>
                            <a href="">
                                <div class="thumbnail">
                                <img src="{{ asset('images_new/' .$item->image)}}" width="350px" height="200px" alt="">
                                <div class="title">
                                    {{$item->title}}
                                </div>
                                </div>
                            </a>
                        </figure>
                    </div>
                @endforeach    
                    </div>
                </div>
            </div>
        </section>

        <section class="trending">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content-trending">
                            <div class="content-left">
                                ព័ត៌មានថ្មីៗ
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @php
              $new = App\Models\News::where("type","=","1")->latest()->limit(3)->get();

        @endphp 
        <section class="news">
            <div class="container">
                <div class="row">
                @foreach($new as $item)
                    <div class="col-4">
                        <figure>
                            <a href="{{route('news.details',$item->id)}}">
                                <div class="thumbnail">
                                <img src="{{ asset('images_new/' .$item->image)}}" width="350px" height="200px" alt="">
                                <div class="title">
                                    {{$item->title}}
                                </div>
                                </div>
                            </a>
                        </figure>
                    </div>
                @endforeach    
                </div>
            </div>
        </section>

        <section class="trending">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content-trending">
                            <div class="content-left">
                                ហិរញ្ញវត្ថុ
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @php
              $new = App\Models\News::where("type","=","2")->limit(3)->get();

        @endphp 
        <section class="news">
            <div class="container">
                <div class="row">
                @foreach($new as $item)
                    <div class="col-4">
                        <figure>
                            <a href="{{route('news.details',$item->id)}}">
                                <div class="thumbnail">
                                <img src="{{ asset('images_new/' .$item->image)}}" width="350px" height="200px" alt="">
                                <div class="title">
                                    {{$item->title}}
                                </div>
                                </div>
                            </a>
                        </figure>
                    </div>
                @endforeach    
                </div>
            </div>
        </section>
        <section class="trending">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content-trending">
                            <div class="content-left">
                                ចាប់ផ្តើមអាជីវកម្ម
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @php
              $new = App\Models\News::where("type","=","3")->limit(3)->get();

        @endphp 
        <section class="news">
            <div class="container">
                <div class="row">
                @foreach($new as $item)
                    <div class="col-4">
                        <figure>
                            <a href="{{route('news.details',$item->id)}}">
                                <div class="thumbnail">
                                <img src="{{ asset('images_new/' .$item->image)}}" width="350px" height="200px" alt="">
                                <div class="title">
                                    {{$item->title}}
                                </div>
                                </div>
                            </a>
                        </figure>
                    </div>
                @endforeach    
                </div>
            </div>
        </section>
    </main>
@include('jongdong_news.footer')