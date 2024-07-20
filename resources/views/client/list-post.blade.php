@extends('client.layouts.master')
@section('content')
    <div class="col-md-8">
        <div class="main--breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="home-1-boxed.html" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
                <li class="active"><span>Blog</span></li>
            </ul>
        </div>
    </div>
    <div class="main-content--section pbottom--30">
        <div class="container">
            <div class="row">
                <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <div class="post--items post--items-5 pd--30-0">
                            <ul class="nav">
                                @foreach ($posts as $item)
                                <li>
                                    <div class="post--item post--title-larger">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 col-xs-4 col-xxs-12">
                                                <div class="post--img"> <a href="{{ route('post.detail',$item->slug )}}"
                                                        class="thumb"><img src="{{ \Storage::url($item->thumbnail) }}"
                                                            alt=""></a> <a href="#" class="cat">{{ $item->category->name}}</a>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-sm-12 col-xs-8 col-xxs-12">
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">{{ date('d F Y', strtotime($item->created_at)) }}</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="{{ route('post.detail',$item->slug )}}"
                                                                class="btn-link">{{ $item->title }}</a></h3>
                                                    </div>
                                                </div>
                                                <div class="post--content">
                                                    {{-- <p>Et harum quidem rerum facilis est et expedita distinctio. Nam
                                                        libero tempore, cum soluta nobis est eligendi optio cumque
                                                        nihil impedit quo minus id quod maxime placeat facere
                                                        possimus.</p> --}}
                                                </div>
                                                <div class="post--action"> <a href="{{ route('post.detail',$item->slug )}}">Continue
                                                        Reading...</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                               
                            </ul>
                        </div>
                        <div class="ad--space"> <a href="#"> <img src="img/ads-img/ad-728x90-03.jpg"
                                    alt="" class="center-block"> </a> </div>
                        <div class="post--items post--items-5 pd--30-0">
                            <ul class="nav">
                                <li>
                                    <div class="post--item post--title-larger">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="post--img"> <a href="news-single-v1-boxed.html"
                                                        class="thumb"><img src="img/blog-img/post-10.jpg"
                                                            alt=""></a> <a href="#" class="cat">World
                                                        News</a>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Onoskelis</a></li>
                                                        <li><a href="#">22 May 2016</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html"
                                                                class="btn-link">What are they doing highly
                                                                efficient manufactured products and enabled
                                                                data.</a></h3>
                                                    </div>
                                                </div>
                                                <div class="post--content">
                                                    <p>Et harum quidem rerum facilis est et expedita distinctio. Nam
                                                        libero tempore, cum soluta nobis est eligendi optio cumque
                                                        nihil impedit quo minus id quod maxime placeat facere
                                                        possimus.</p>
                                                </div>
                                                <div class="post--action"> <a href="news-single-v1-boxed.html">Continue
                                                        Reading...</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post--item post--title-larger">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="post--img"> <a href="news-single-v1-boxed.html"
                                                        class="thumb"><img src="img/blog-img/post-11.jpg"
                                                            alt=""></a> <a href="#"
                                                        class="cat">Sports</a> </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Bune</a></li>
                                                        <li><a href="#">16 April 2016</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html"
                                                                class="btn-link">What are they doing highly
                                                                efficient manufactured products and enabled
                                                                data.</a></h3>
                                                    </div>
                                                </div>
                                                <div class="post--content">
                                                    <p>Et harum quidem rerum facilis est et expedita distinctio. Nam
                                                        libero tempore, cum soluta nobis est eligendi optio cumque
                                                        nihil impedit quo minus id quod maxime placeat facere
                                                        possimus.</p>
                                                </div>
                                                <div class="post--action"> <a href="news-single-v1-boxed.html">Continue
                                                        Reading...</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="pagination--wrapper clearfix bdtop--1 bd--color-2 ptop--60 pbottom--30">
                            <p class="pagination-hint float--left">Page 02 of 03</p>
                            <ul class="pagination float--right">
                                <li><a href="#"><i class="fa fa-long-arrow-left"></i></a></li>
                                <li><a href="#">01</a></li>
                                <li class="active"><span>02</span></li>
                                <li><a href="#">03</a></li>
                                <li> <i class="fa fa-angle-double-right"></i> <i class="fa fa-angle-double-right"></i> <i
                                        class="fa fa-angle-double-right"></i> </li>
                                <li><a href="#">20</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    </div>
@endsection
