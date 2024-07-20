@foreach($posts as $post)
    <li>
        <div class="post--item post--layout-3">
            <div class="post--img">
                <a href="{{ url('news-single', $post->id) }}" class="thumb">
                    <img src="{{ asset('theme/client/img/widgets-img/' . $post->thumbnail) }}" alt="">
                </a>
                <div class="post--info">
                    <ul class="nav meta">
                        {{-- <li><a href="#">{{ $post->author }}</a></li> --}}
                        <li><a href="#">{{ $post->created_at }}</a></li>
                    </ul>
                    <div class="title">
                        <h3 class="h4">
                            <a href="{{ url('news-single', $post->id) }}" class="btn-link">{{ $post->title }}</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </li>
@endforeach
