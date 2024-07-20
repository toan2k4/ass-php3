@extends('client.layouts.master')
@section('content')
    <div class="main--content col-md-8" data-sticky-content="true">
        <div class="sticky-content-inner">
            <div class="post--item post--single post--title-largest pd--30-0">
                <div class="post--img"> <a href="#" class="thumb"><img src="{{ \Storage::url($post->thumbnail)}}"
                            alt=""></a> <a href="#" class="icon"><i class="fa fa-star-o"></i></a>
                    <div class="post--map">
                        <p class="btn-link"><i class="fa fa-map-o"></i>Location in Google Map</p>
                        <div class="map--wrapper">
                            <div data-map-latitude="23.790546" data-map-longitude="90.375583" data-map-zoom="6"
                                data-map-marker="[[23.790546, 90.375583]]"></div>
                        </div>
                    </div>
                </div>
                <div class="post--tags">
                    <ul class="nav">
                        <li><span><i class="fa fa-tags"></i></span></li>
                        @foreach ($post->tags as $tag)
                            <li><a href="#">{{ $tag->name }}</a></li>
                        @endforeach

                    </ul>
                </div>
                <div class="post--info">
                    <ul class="nav meta">
                        <li><a href="#">Norma R. Hogan</a></li>
                        <li><a href="#">20 April 2017</a></li>
                        <li><span><i class="fa fm fa-eye"></i>45k</span></li>
                        <li><a href="#"><i class="fa fm fa-comments-o"></i>{{ $post->views }}</a></li>
                    </ul>
                    <div class="title">
                        <h2 class="h4">{{ $post->title }}</h2>
                    </div>
                </div>
                <div class="post--content">
                    {!! $post->content !!}
                </div>
            </div>
            <div class="ad--space pd--20-0-40"> <a href="#"> <img src="img/ads-img/ad-728x90-02.jpg" alt=""
                        class="center-block"> </a> </div>
            <div class="post--tags">
                <ul class="nav">
                    <li><span><i class="fa fa-tags"></i></span></li>
                    @foreach ($post->tags as $tag)
                        <li><a href="#">{{ $tag->name }}</a></li>
                    @endforeach

                </ul>
            </div>
            <div class="post--social pbottom--30"> <span class="title"><i class="fa fa-share-alt"></i></span>
                <div class="social--widget style--4">
                    <ul class="nav">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>
                </div>
            </div>


            <div class="post--related ptop--30">
                <div class="post--items-title" data-ajax="tab">
                    <h2 class="h4">You Might Also Like</h2>
                    <div class="nav"> <a href="#" class="prev btn-link" data-ajax-action="load_prev_related_posts">
                            <i class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span>
                        <a href="#" class="next btn-link" data-ajax-action="load_next_related_posts"> <i
                                class="fa fa-long-arrow-right"></i> </a>
                    </div>
                </div>
                <div class="post--items post--items-2" data-ajax-content="outer">
                    <ul class="nav row" data-ajax-content="inner">
                        @foreach ($postCategory as $item)
                            <li class="col-sm-6 pbottom--30">
                            <div class="post--item post--layout-1">
                                <div class="post--img"> <a href="#" class="thumb"><img
                                            src="{{ \Storage::url($item->thumbnail)}}" alt=""></a> <a
                                        href="#" class="cat">{{$item->category->name}}</a> <a href="#" class="icon"><i
                                            class="fa fa-flash"></i></a>
                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="#">{{ date('d F Y', strtotime($item->created_at)) }}</a></li>
                                        </ul>
                                        <div class="title">
                                            <h3 class="h4"><a href="" class="btn-link">{{$item->title}}</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="post--content">
                                </div>
                                <div class="post--action"> <a href="#">Continue Reading... </a> </div>
                            </div>
                        </li>
                        @endforeach
                        
                    </ul>
                    <div class="preloader bg--color-0--b" data-preloader="1">
                        <div class="preloader--inner"></div>
                    </div>
                </div>
            </div>
            <div class="comment--list pd--30-0">
                <div class="post--items-title">
                    <h2 class="h4">03 Comments</h2> <i class="icon fa fa-comments-o"></i>
                </div>
                <ul class="comment--items nav">
                    <li>
                        <div class="comment--item clearfix">
                            <div class="comment--img float--left"> <img src="/theme/client/img/news-single-img/comment-avatar-01.jpg"
                                    alt=""> </div>
                            <div class="comment--info">
                                <div class="comment--header clearfix">
                                    <p class="name">Karla Gleichauf</p>
                                    <p class="date">12 May 2017 at 05:28 pm</p><a href="#" class="reply"><i
                                            class="fa fa-mail-reply"></i></a>
                                </div>
                                <div class="comment--content">
                                    <p>On the other hand, we denounce with righteous indignation and
                                        dislike men who are so beguiled and demoralized by the charms of
                                        pleasure of the moment</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="comment--item clearfix">
                            <div class="comment--img float--left"> <img src="/theme/client/img/news-single-img/comment-avatar-02.jpg"
                                    alt=""> </div>
                            <div class="comment--info">
                                <div class="comment--header clearfix">
                                    <p class="name">M Shyamalan</p>
                                    <p class="date">12 May 2017 at 05:28 pm</p><a href="#" class="reply"><i
                                            class="fa fa-mail-reply"></i></a>
                                </div>
                                <div class="comment--content">
                                    <p>On the other hand, we denounce with righteous indignation and
                                        dislike men who are so beguiled and demoralized by the charms of
                                        pleasure of the moment</p>
                                </div>
                            </div>
                        </div>
                        <ul class="comment--items nav">
                            <li>
                                <div class="comment--item clearfix">
                                    <div class="comment--img float--left"> <img
                                            src="/theme/client/img/news-single-img/comment-avatar-03.jpg" alt="">
                                    </div>
                                    <div class="comment--info">
                                        <div class="comment--header clearfix">
                                            <p class="name">Liz Montano</p>
                                            <p class="date">12 May 2017 at 05:28 pm</p><a href="#"
                                                class="reply"><i class="fa fa-mail-reply"></i></a>
                                        </div>
                                        <div class="comment--content">
                                            <p>On the other hand, we denounce with righteous indignation
                                                and dislike men who are so beguiled and demoralized by
                                                the charms of pleasure of the moment</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="comment--form pd--30-0">
                <div class="post--items-title">
                    <h2 class="h4">Leave A Comment</h2> <i class="icon fa fa-pencil-square-o"></i>
                </div>
                <div class="comment-respond">
                    <form action="#" data-form="validate">
                        <p>Don’t worry ! Your email address will not be published. Required fields are
                            marked (*).</p>
                        <div class="row">
                            <div class="col-sm-6"> <label> <span>Comment *</span>
                                    <textarea name="comment" class="form-control" required></textarea>
                                </label> </div>
                            <div class="col-sm-6"> <label> <span>Name *</span> <input type="text" name="name"
                                        class="form-control" required> </label> <label>
                                    <span>Email Address *</span> <input type="email" name="email"
                                        class="form-control" required> </label> <label>
                                    <span>Website</span> <input type="text" name="website" class="form-control">
                                </label> </div>
                            <div class="col-md-12"> <button type="submit" class="btn btn-primary">Post a
                                    Comment</button> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
