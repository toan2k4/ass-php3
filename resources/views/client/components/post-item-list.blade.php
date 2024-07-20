<div class="col-md-6 ptop--30 pbottom--30">
    @php
        // dd($data);
        $data1 = array_shift($data);
    @endphp
    <div class="post--items-title" data-ajax="tab">
        <h2 class="h4">{{ $title }}</h2>
        <div class="nav"> <a href="#" class="prev btn-link" data-ajax-action="load_prev_technology_posts"> <i
                    class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span> <a href="#"
                class="next btn-link" data-ajax-action="load_next_technology_posts"> <i
                    class="fa fa-long-arrow-right"></i> </a> </div>
    </div>
    <div class="post--items post--items-3" data-ajax-content="outer">
        <ul class="nav" data-ajax-content="inner">
            <li>
                <div class="post--item post--layout-1">
                    <div class="post--img"> <a href="{{ route('post.detail',$data1->slug )}}" class="thumb"><img
                                src="{{ \Storage::url($data1->thumbnail) }}" alt=""></a> <a
                            href="#" class="cat">{{ $title }}</a> <a href="#" class="icon"><i
                                class="fa fa-heart-o"></i></a>
                        <div class="post--info">
                            <ul class="nav meta">
                                <li><a href="#">{{ date('D  g:i a', strtotime($data1->created_at)) }}</a></li>
                            </ul>
                            <div class="title">
                                <h3 class="h4"><a href="{{ route('post.detail',$data1->slug )}}"
                                        class="btn-link">{{ $data1->title }}</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            @foreach ($data as $item)
                <li>
                    <div class="post--item post--layout-3">
                        <div class="post--img"> <a href="{{ route('post.detail',$item->slug )}}" class="thumb"><img
                                    src="{{ \Storage::url($item->thumbnail) }}" alt=""></a>
                            <div class="post--info">
                                <ul class="nav meta">
                                    <li><a href="#">{{ date('d F Y', strtotime($item->created_at)) }}</a></li>
                                </ul>
                                <div class="title">
                                    <h3 class="h4"><a href="{{ route('post.detail',$item->slug )}}" class="btn-link">{{ $item->title }}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach


        </ul>
        <div class="preloader bg--color-0--b" data-preloader="1">
            <div class="preloader--inner"></div>
        </div>
    </div>
</div>
