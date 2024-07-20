<!DOCTYPE html>
<html dir="ltr" lang="en">
<!-- Mirrored from themelooks.us/demo/usnews/html/home-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jul 2024 07:33:06 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>USNews - Multipurpose News, Magazine and Blog HTML5 Template</title>
    <meta name="author" content="ThemeLooks">
    <meta name="description" content="USNews - Multipurpose News and Magazine Template">
    <meta name="keywords"
        content="news, newspaper, magazine, blog, post, article, editorial, publishing, modern, responsive, html5, template">

    @include('client.layouts.partials.css')
</head>

<body>

    <div class="wrapper">
        <!-- header start -->
        <header class="header--section header--style-1">
            @include('client.layouts.partials.header-top')
        </header>
        
        @include('client.layouts.partials.header-filter')
        
        @include('client.layouts.partials.header-news-update')

        <div class="main-content--section pbottom--30">
            <div class="container">

                @yield('banner')

                <div class="row">

                    @yield('content')

                    @include('client.layouts.partials.sidebar')
                </div>

                @yield('video')
            </div>
        </div>

        <footer class="footer--section">
            @include('client.layouts.partials.footer')
        </footer>

    </div>

    <div id="backToTop"> <a href="#"><i class="fa fa-angle-double-up"></i></a> </div>


    @include('client.layouts.partials.js')

</body>
<!-- Mirrored from themelooks.us/demo/usnews/html/home-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jul 2024 07:33:47 GMT -->

</html>
