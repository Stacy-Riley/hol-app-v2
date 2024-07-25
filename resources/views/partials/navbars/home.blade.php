<!--============================= HEADER =============================-->
<header>
    <div class="container nav-menu">
        <div class="row">
            <div class="col-md-12">
                <a href="index.html"><img src="{{env('APP_URL')}}/assets/images/responsive-logo.png" class="responsive-logo img-fluid" alt="responsive-logo"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                        <span class="icon-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/about">About<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Services
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/services/education">Education Services</a></li>
                                    <li><a class="dropdown-item" href="/services/corporate">Corporate Services</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/ghana/project">Ghana Project</a>
                            </li>
                            <li class="nav-logo">
                                <a href="/" class="navbar-brand"><img src="{{env('APP_URL')}}/assets/images/logo.png" class="img-fluid" alt="logo"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/products">Products</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Media &amp; Partners
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/community_center">Learning &amp; Community Center</a></li>
                                    <li><a class="dropdown-item" href="/partners">Partners</a></li>
                                    <li><a class="dropdown-item" href="/press">Press</a></li>
                                    <li><a class="dropdown-item" href="/blog">Blog</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="slider_img">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block" src="{{env('APP_URL')}}/assets/images/slider.jpg" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Creative Thinking &amp; Innovation</h1>
                            <h4>Proactively utilize open-source users for process-centric total linkage.<br> Energistically reinvent web-enabled initiatives with premium <br>processes. Proactively drive.</h4>
                            <div class="slider-btn">
                                <a href="#" class="btn btn-default">SEE Programs</a>
                                <a href="#" class="btn btn-default">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{env('APP_URL')}}/assets/images/slider-2.jpg" alt="Second slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>We foster wisdom</h1>
                            <h4>Proactively utilize open-source users for process-centric total linkage.<br> Energistically reinvent web-enabled initiatives with premium <br>processes. Proactively drive.</h4>
                            <div class="slider-btn">
                                <a href="#" class="btn btn-default">SEE Programs</a>
                                <a href="#" class="btn btn-default">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{env('APP_URL')}}/assets/images/slider-3.jpg" alt="Third slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Campus life @ Unisco</h1>
                            <h4>Proactively utilize open-source users for process-centric total linkage.<br> Energistically reinvent web-enabled initiatives with premium <br>processes. Proactively drive.</h4>
                            <div class="slider-btn">
                                <a href="campus-life.html" class="btn btn-default">Campus Life</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</header>
<!--//END HEADER -->
