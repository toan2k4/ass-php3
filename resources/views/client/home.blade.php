@extends('client.layouts.master')

@section('banner')
    @php
        $bannerRight = $data[0][0];
        $bannerLeftTop = array_splice($data[0], 1, 2);
        $bannerLeftBottom = $data[0][1];
    @endphp
    <div class="main--content">
        <div class="post--items post--items-1 pd--30-0">
            <div class="row gutter--15">

                <div class="col-md-6">
                    <div class="post--item post--layout-1 post--title-larger">
                        <div class="post--img"> <a href="news-single-v1.html" class="thumb"><img
                                    src="{{ \Storage::url($bannerRight->thumbnail) }}" alt=""></a>
                            <a href="#" class="cat">{{ $bannerRight->category_name }}</a>
                            {{-- <a href="#" class="icon"><i class="fa fa-flash"></i></a> --}}
                            <div class="post--map">
                                <p class="btn-link"><i class="fa fa-map-o"></i>Location in Google Map</p>
                                <div class="map--wrapper">
                                    <div data-map-latitude="23.790546" data-map-longitude="90.375583" data-map-zoom="6"
                                        data-map-marker="[[23.790546, 90.375583]]"></div>
                                </div>
                            </div>
                            <div class="post--info">
                                <ul class="nav meta">
                                    <li><a href="#">{{ date('d F Y', strtotime($bannerRight->created_at)) }}</a></li>
                                </ul>
                                <div class="title">
                                    <h2 class="h4"><a href="{{ route('post.detail',$bannerRight->slug )}}"
                                            class="btn-link">{{ $bannerRight->title }}</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row gutter--15">
                        @foreach ($bannerLeftTop as $item)
                            <div class="col-xs-6 col-xss-12">
                                <div class="post--item post--layout-1 post--title-large">
                                    <div class="post--img"> <a href="news-single-v1.html" class="thumb"><img
                                                src="{{ \Storage::url($item->thumbnail) }}"
                                                alt=""></a>
                                        <a href="#" class="cat">{{ $item->category_name }}</a> <a href="#" class="icon"><i
                                                class="fa fa-flash"></i></a>
                                        <div class="post--info">
                                            <ul class="nav meta">
                                                <li><a href="#">{{ date('d F Y', strtotime($item->created_at)) }}</a></li>
                                            </ul>
                                            <div class="title">
                                                <h2 class="h4"><a href="{{ route('post.detail',$item->slug )}}" class="btn-link">{{ $item->title }}</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach



                        <div class="col-sm-12 hidden-sm hidden-xs">
                            <div class="post--item post--layout-1 post--title-larger">
                                <div class="post--img"> <a href="news-single-v1.html" class="thumb"><img
                                            src="{{ \Storage::url($bannerLeftBottom->thumbnail) }}" alt=""></a>
                                    <a href="#" class="cat">{{ $bannerLeftBottom->category_name }}</a> <a href="#" class="icon"><i
                                            class="fa fa-fire"></i></a>
                                    <div class="post--info">
                                        <ul class="nav meta">
                                            {{-- <li><a href="#">Balam</a></li> --}}
                                            <li><a href="#">{{ date('d F Y', strtotime($bannerLeftBottom->created_at)) }}</a></li>
                                        </ul>
                                        <div class="title">
                                            <h2 class="h4"><a href="{{ route('post.detail',$item->slug )}}" class="btn-link">{{ $bannerLeftBottom->title }}</a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
        <div class="sticky-content-inner">
            <div class="row">

                @include('client.components.post-item-col', ["data" => $data[1], "title" => $titles[1]])

                @include('client.components.post-item-list', ["data" => $data[2], "title" => $titles[2]])

                <div class="col-md-12 ptop--30 pbottom--30">
                    <div class="ad--space"> <a href="#"> <img
                                src="{{ asset('theme/client/img/ads-img/ad-728x90-01.jpg') }}" alt=""
                                class="center-block"> </a> </div>
                </div>

                @include('client.components.post-item-grid', ["data" => $data[3], "title" => $titles[3]])

                @include('client.components.post-item-col', ["data" => $data[4], "title" => $titles[4]])
                
                @include('client.components.post-item-list', ["data" => $data[5], "title" => $titles[5]])
            </div>
        </div>
    </div>
@endsection

@section('video')
    <div class="main--content pd--30-0">
        <div class="post--items-title" data-ajax="tab">
            <h2 class="h4">Audio &amp; Videos</h2>
            <div class="nav"> <a href="#" class="prev btn-link" data-ajax-action="load_prev_audio_video_posts">
                    <i class="fa fa-long-arrow-left"></i>
                </a> <span class="divider">/</span> <a href="#" class="next btn-link"
                    data-ajax-action="load_next_audio_video_posts"> <i class="fa fa-long-arrow-right"></i>
                </a> </div>
        </div>
        <div class="post--items post--items-4" data-ajax-content="outer">
            <ul class="nav row" data-ajax-content="inner">
                <li class="col-md-8">
                    <div class="post--item post--layout-1 post--type-video post--title-large">
                        <div class="post--img"> <a href="news-single-v1.html" class="thumb"><img
                                    src="{{ asset('theme/client/img/home-img/audio-video-01.jpg') }}" alt=""></a>
                            <a href="#" class="cat">Wave</a> <a href="#" class="icon"><i
                                    class="fa fa-eye"></i></a>
                            <div class="post--info">
                                <ul class="nav meta">
                                    <li><a href="#">Succubus</a></li>
                                    <li><a href="#">Today 03:52 pm</a></li>
                                </ul>
                                <div class="title">
                                    <h2 class="h4"><a href="news-single-v1.html" class="btn-link">Standard
                                            chunk of Lorem Ipsum used since the 1500s is reproduced below
                                            for those interested. Sections 1.10.32 and 1.10.33 from "de
                                            Finibus Bonorum</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="divider hidden-md hidden-lg">
                </li>
                <li class="col-md-4">
                    <ul class="nav">
                        <li>
                            <div class="post--item post--type-audio post--layout-3">
                                <div class="post--img"> <a href="news-single-v1.html" class="thumb"><img
                                            src="{{ asset('theme/client/img/home-img/audio-video-02.jpg') }}"
                                            alt=""></a>
                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="#">Maclaan John</a></li>
                                            <li><a href="#">16 April 2017</a></li>
                                        </ul>
                                        <div class="title">
                                            <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long
                                                    established fact that a reader
                                                    will be distracted by the readable</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post--item post--type-video post--layout-3">
                                <div class="post--img"> <a href="news-single-v1.html" class="thumb"><img
                                            src="{{ asset('theme/client/img/home-img/audio-video-03.jpg') }}"
                                            alt=""></a>
                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="#">Maclaan John</a></li>
                                            <li><a href="#">16 April 2017</a></li>
                                        </ul>
                                        <div class="title">
                                            <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long
                                                    established fact that a reader
                                                    will be distracted by the readable</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post--item post--type-video post--layout-3">
                                <div class="post--img"> <a href="news-single-v1.html" class="thumb"><img
                                            src="{{ asset('theme/client/img/home-img/audio-video-04.jpg') }}"
                                            alt=""></a>
                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="#">Maclaan John</a></li>
                                            <li><a href="#">16 April 2017</a></li>
                                        </ul>
                                        <div class="title">
                                            <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long
                                                    established fact that a reader
                                                    will be distracted by the readable</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post--item post--type-audio post--layout-3">
                                <div class="post--img"> <a href="news-single-v1.html" class="thumb"><img
                                            src="{{ asset('theme/client/img/home-img/audio-video-05.jpg') }}"
                                            alt=""></a>
                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="#">Maclaan John</a></li>
                                            <li><a href="#">16 April 2017</a></li>
                                        </ul>
                                        <div class="title">
                                            <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long
                                                    established fact that a reader
                                                    will be distracted by the readable</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="preloader bg--color-0--b" data-preloader="1">
                <div class="preloader--inner"></div>
            </div>
        </div>
    </div>
@endsection
