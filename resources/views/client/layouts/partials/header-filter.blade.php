<div class="posts--filter-bar style--1 hidden-xs">
    <div class="container">
        <ul class="nav">
            <li> <a href="{{ route('posts.type.list', 'is_featured')}}"> <i class="fa fa-star-o"></i> <span>Featured News</span> </a> </li>
            <li> <a href="{{ route('posts.type.list', 'is_most_popular')}}"> <i class="fa fa-heart-o"></i> <span>Most Popular</span> </a> </li>
            <li> <a href="{{ route('posts.type.list', 'is_hot')}}"> <i class="fa fa-fire"></i> <span>Hot News</span> </a> </li>
            <li> <a href="{{ route('posts.type.list', 'is_trending')}}"> <i class="fa fa-flash"></i> <span>Trending News</span> </a> </li>
            <li> <a href="{{ route('posts.type.list', 'is_most_watched')}}"> <i class="fa fa-eye"></i> <span>Most Watched</span> </a> </li>
        </ul>
    </div>
</div>
