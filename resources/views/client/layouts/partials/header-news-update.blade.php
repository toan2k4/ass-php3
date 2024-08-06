<div class="news--ticker">
    <div class="container">
        <div class="title">
            <h2>News Updates</h2> <span>(Update 12 minutes ago)</span>
        </div>
        <div class="news-updates--list" data-marquee="true">
            <ul class="nav">
                @foreach ($newUpdate as $key => $item)
                <li>
                    <h3 class="h3"><a href="{{ route('post.detail', $key)}}">{{ $item }}</a></h3>
                </li>
                @endforeach
               
            </ul>
        </div>
    </div>
</div>
<!-- header end -->