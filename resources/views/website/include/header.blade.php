
<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{asset('/')}}website/assets/img/logo.png" alt=""> -->
            <h1>ZenBlog</h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{route('home')}}">Blog</a></li>
                <li><a href="{{route('single.blog')}}">Single Post</a></li>
                <li class="dropdown">

                    <a href="{{route('category')}}"><span>Categories</span>
                        <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <ul>
                        <li><a href="{{route('category')}}">Business</a></li>
                        <li><a href="{{route('category')}}">Culture</a></li>
                        <li><a href="{{route('category')}}">Sports</a></li>
                        <li><a href="{{route('category')}}">Politics</a></li>
                        <li><a href="{{route('category')}}">Celebrity</a></li>
                        <li><a href="{{route('category')}}">Startups</a></li>
                    </ul>
                </li>

                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </nav><!-- .navbar -->

        <div class="position-relative">
            <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
            <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
            <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

            <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
            <i class="bi bi-list mobile-nav-toggle"></i>

            <!-- ======= Search Form ======= -->
            <div class="search-form-wrap js-search-form-wrap">
                <form action="search-result.html" class="search-form">
                    <span class="icon bi-search"></span>
                    <input type="text" placeholder="Search" class="form-control">
                    <button class="btn js-search-close"><span class="bi-x"></span></button>
                </form>
            </div><!-- End Search Form -->

        </div>

    </div>

</header><!-- End Header -->
