@include('jongdong_news.header')
    <main class="sport">
        <section class="trending">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content-trending">
                            <div class="content-left">
                                RESULT SEARCH
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container">
            <h5>Search Results for "{{ $search }}"</h5>
                <div class="row">
                @foreach ($new_search as $item)
                <div class="col-4">
                        <figure>
                            <a href="{{route('news.details',$item->id)}}">
                                <div class="thumbnail">
                                <img src="{{ asset('images_new/' .$item->image)}}" width="350px" height="200px" alt="">
                                <div class="title">
                                    {{$item->title}}
                                </div>
                                <div class="date">{{($item->created_at)->format('d/F/Y H:i:s')}}</div>
                                <div class="description">
                                    {{$item->description}}
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
