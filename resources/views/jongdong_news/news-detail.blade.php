@include('jongdong_news.header')
    <main class="news-detail">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        @foreach($new_detail as $item)
                        <div class="main-news">
                            <div class="thumbnail">
                            <img src="{{ asset('images_new/' .$item->image)}}" width="730px" height="415px" alt="">
                            </div>
                            <div class="detail">
                                <h3 class="title">{{$item->title}}</h3>
                                <div class="date">{{($item->created_at)->format('d/F/Y H:i:s')}}</div>
                                <div class="description">
                                    {{$item->description}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                   
                    <div class="col-4">
                        <div class="relate-news">
                            <h3 class="main-title">Related News</h3>
                            @foreach($new_related as $item)
                            <figure>
                                <a href="">
                                    <div class="thumbnail">                                 
                                    <img src="{{ asset('images_new/' .$item->image)}}" width="350px" height="200px" alt="">
                                    </div>
                                    <div class="detail">
                                        <h3 class="title">{{$item->title}}</h3>
                                        <div class="date">{{($item->created_at)->format('d/F/Y H:i:s')}}</div>
                                        <div class="description">
                                            {{$item->description}}
                                        </div>
                                    </div>
                                </a>
                            </figure>
                            @endforeach
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>
    @include('jongdong_news.footer')