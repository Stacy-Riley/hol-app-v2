<!--============================= HEADER =============================-->
<header>
    <div class="container-fluid m-0 p-0">
        <div class="row pl-3">
            <div class="col-md-12">
                <div class="responsive-logo-container">
                    <a href="/">
                        <img fetchpriority="high"
                             src="{{env('APP_URL')}}/assets/images/home/House-of-Light-logo-large.jpeg"
                             srcset="{{env('APP_URL')}}/assets/images/home/House-of-Light-logo-small.jpeg 480w,
                                    {{env('APP_URL')}}/assets/images/home/House-of-Light-logo-medium.jpeg 800w,
                                    {{env('APP_URL')}}/assets/images/home/House-of-Light-logo-large.jpeg 1200w"
                             class="responsive-logo img-fluid"
                             sizes="(max-width: 600px) 480px, (max-width: 1200px) 800px, 1200px"
                             alt="House of Light logo"
                        />
                    </a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav class="navbar navbar-toggleable-md bg-faded p-0">
                    <button class="mr-2 navbar-toggler navbar-toggler-right" type="button" aria-label="drowdown navbar button" data-toggle="collapse" data-target="#navbarNavDropdown">
                        <span class="icon-menu"></span>
                    </button>
                    <div class="p-0 col-md-12 navbars-site-pages collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-1">
                            <li class="nav-item nav-item-left-side pl-0 mx-0">
                                <a class="nav-link navbar-dark-text" href="/about">About<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown nav-item-left-side">
                                <a class="nav-link dropdown-toggle navbar-dark-text" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Services
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item navbar-dark-text" href="/services/education">Education Services</a></li>
                                    <li><a class="dropdown-item navbar-dark-text" href="/services/corporate">Corporate Services</a></li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-left-side">
                                <a class="nav-link navbar-dark-text" href="/ghana/project">Ghana Project</a>
                            </li>
                            <li class="nav-logo">
                                <a href="/" class="navbar-brand navbar-dark-text"><img src="{{env('APP_URL')}}/assets/images/home/House-of-Light-logo.jpg" width="325" height="auto" class="img-fluid" alt="logo"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link navbar-dark-text" href="/products">Products</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle navbar-dark-text" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Media &amp; Partners
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item navbar-dark-text" href="/community_center">Learning &amp; Community Center</a></li>
                                    <li><a class="dropdown-item navbar-dark-text" href="/partners">Partners</a></li>
                                    <li><a class="dropdown-item navbar-dark-text" href="/press">Press</a></li>
                                    <li><a class="dropdown-item navbar-dark-text" href="/blog">Blog</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link navbar-dark-text" href="/contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row m-0 p-0">
            <div class="col-md-12 m-0 p-0">
                <div class="hero-text-content-wrapper m-0 p-0">
                    <div class="hero-text-content-container text-center m-0 p-0">
                        <h1 class="m-0 pb-1">Making a Difference Beyond the Classroom</h1>
                        <h2 class="mx-3">Consulting, education, &amp; training services to improve the lives of those who are blind &amp; visually impaired.
                        </h2>
                    </div>
                    <img
                        class="img-fluid m-0 p-0"
                        src="{{env('APP_URL')}}/assets/images/home/hero-image-large.jpeg"
                        srcset="
                        {{env('APP_URL')}}/assets/images/home/hero-image-small.jpeg 480w,
                        {{env('APP_URL')}}/assets/images/home/hero-image-medium.jpeg 800w,
                        {{env('APP_URL')}}/assets/images/home/hero-image-large.jpeg 1200w,
                        {{env('APP_URL')}}/assets/images/home/hero-image-extra-large.jpeg 1920w"
                        alt="CEO Sierra Dockery meeting with members of the school in Ghana"
                    />
                </div>
            </div>
        </div>
    </div>
</header>

<!--//END HEADER -->
