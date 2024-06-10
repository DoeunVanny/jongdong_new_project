@include('jongdong_news.header')
<main class="home">
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
              $new = App\Models\News::where("type","=","2")->latest()->get();

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