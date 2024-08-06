<div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
    <div class="sticky-content-inner">
        <div class="widget">
            <div class="widget--title">
                <h2 class="h4">Featured News</h2> <i class="icon fa fa-newspaper-o"></i>
            </div>
            <div class="list--widget list--widget-1">
                <div class="list--widget-nav" data-ajax="tab">
                    <ul class="nav nav-justified">
                        <li> <a href="#" data-ajax-action="load_widget_hot_news">Hot News</a> </li>
                        <li class="active"> <a href="#" data-ajax-action="load_widget_trendy_news">Trendy News</a>
                        </li>
                        <li> <a href="#" data-ajax-action="load_widget_most_watched">Most
                                Watched</a> </li>
                    </ul>
                </div>
                <div class="post--items post--items-3" data-ajax-content="outer">
                    <ul class="nav" data-ajax-content="inner">
                        <li>
                            <div class="post--item post--layout-3">
                                <div class="post--img"> <a href="news-single-v1.html" class="thumb"><img
                                            src="{{ asset('theme/client/img/widgets-img/news-widget-01.jpg') }}"
                                            alt=""></a>
                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="#">Ninurta</a></li>
                                            <li><a href="#">16 April 2017</a></li>
                                        </ul>
                                        <div class="title">
                                            <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long
                                                    established fact that a
                                                    reader will be distracted</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post--item post--layout-3">
                                <div class="post--img"> <a href="news-single-v1.html" class="thumb"><img
                                            src="{{ asset('theme/client/img/widgets-img/news-widget-02.jpg') }}"
                                            alt=""></a>
                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="#">Orcus</a></li>
                                            <li><a href="#">16 April 2017</a></li>
                                        </ul>
                                        <div class="title">
                                            <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long
                                                    established fact that a
                                                    reader will be distracted</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post--item post--layout-3">
                                <div class="post--img"> <a href="news-single-v1.html" class="thumb"><img
                                            src="{{ asset('theme/client/img/widgets-img/news-widget-03.jpg') }}"
                                            alt=""></a>
                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="#">Rahab</a></li>
                                            <li><a href="#">16 April 2017</a></li>
                                        </ul>
                                        <div class="title">
                                            <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long
                                                    established fact that a
                                                    reader will be distracted</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post--item post--layout-3">
                                <div class="post--img"> <a href="news-single-v1.html" class="thumb"><img
                                            src="{{ asset('theme/client/img/widgets-img/news-widget-04.jpg') }}"
                                            alt=""></a>
                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="#">Tannin</a></li>
                                            <li><a href="#">16 April 2017</a></li>
                                        </ul>
                                        <div class="title">
                                            <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long
                                                    established fact that a
                                                    reader will be distracted</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="preloader bg--color-0--b" data-preloader="1">
                        <div class="preloader--inner"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget">
            <div class="widget--title">
                <h2 class="h4">Tags</h2> <i class="icon fa fa-tags"></i>
            </div>
            <div class="tags--widget style--1">
                <ul class="nav">
                    @foreach ($tags as $item)
                        <li><a href="{{ route('posts.tag.list', $item->id)}}">{{$item->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="widget">
            <div class="widget--title">
                <h2 class="h4">Catagory</h2> <i class="icon fa fa-folder-open-o"></i>
            </div>
            <div class="nav--widget">
                <ul class="nav">
                    @foreach ($headCategories as $item)
                        <li><a
                                href="#"><span>{{ ucfirst($item->name) }}</span><span>{{ $item->posts()->count() }}</span></a>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>

        <div class="widget">
            <div class="widget--title">
                <h2 class="h4">Get Newsletter</h2> <i class="icon fa fa-envelope-open-o"></i>
            </div>
            <div class="subscribe--widget">
                <div class="content">
                    <p>Subscribe to our newsletter to get latest news, popular news and exclusive
                        updates.</p>
                </div>
                <form
                    action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&amp;id=f4e0e93d1d"
                    method="post" name="mc-embedded-subscribe-form" target="_blank" data-form="mailchimpAjax">
                    <div class="input-group"> <input type="email" name="EMAIL" placeholder="E-mail address"
                            class="form-control" autocomplete="off" required>
                        <div class="input-group-btn"> <button type="submit" class="btn btn-lg btn-default active"><i
                                    class="fa fa-paper-plane-o"></i></button> </div>
                    </div>
                    <div class="status"></div>
                </form>
            </div>
        </div>
    </div>
</div>
