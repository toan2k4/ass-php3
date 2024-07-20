<div class="header--navbar style--1 navbar bd--color-1 bg--color-1" data-trigger="sticky">
    <div class="container">
        <div class="navbar-header"> <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#headerNav" aria-expanded="false" aria-controls="headerNav"> <span class="sr-only">Toggle
                    Navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span
                    class="icon-bar"></span>
            </button> </div>

        <div id="headerNav" class="navbar-collapse collapse float--left">
            <ul class="header--menu-links nav navbar-nav" data-trigger="hoverIntent">
                <li > <a href="{{ route('home')}}" >Home</a>

                </li>

                <li class="dropdown active"> <a href="#" class="dropdown-toggle"
                        data-toggle="dropdown">Categories<i class="fa flm fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        
                        @foreach ($headCategories as $item)
                            <li class=""><a href="{{ route('posts.category.list', $item->id)}}">{{$item->name}}</a></li>
                        @endforeach

                    </ul>
                </li>
            </ul>
        </div>
        <form action="{{ route('posts.search') }}" method="POST" class="header--search-form float--right"
            data-form="validate">
            @csrf

            <input type="search" name="search" placeholder="Search..." class="header--search-control form-control"
                required>
            <button type="submit" class="header--search-btn btn"><i
                    class="header--search-icon fa fa-search"></i></button>
        </form>
    </div>
</div>
