@extends('front.layout.master')

@section('title', 'Blog')

@section('body')

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="./"><i class="fa fa-home"></i> Home</a>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                    <div class="blog-sidebar">
                        <div class="search-form">
                            <h4>Search</h4>
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="blog-catagory">
                            <h4>Categories</h4>
                            <ul>
                                <li>
                                    <a href="">Clarivo</a>
                                    <span>(1)</span>
                                </li>
                                <li>
                                    <a href="">HaruTheme</a>
                                    <span>(2)</span>
                                </li>
                            </ul>
                        </div>
                        <div class="recent-post">
                            <h4>Recent Post</h4>
                            <div class="recent-blog">
                                <a href="#" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="front/img/blog/single-blog-1.jpg" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>The best Pharmacy WordPress theme</h6>
                                        <p>admin <span>- February 20, 2022</span></p>
                                    </div>
                                </a>
                                <a href="#" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="front/img/blog/single-blog-2.jpg" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>Mirum est notare quam littera gothica</h6>
                                        <p>admin <span>- February 29, 2022</span></p>
                                    </div>
                                </a>
                                <a href="#" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="front/img/blog/single-blog-3.jpg" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>We can make you work better </h6>
                                        <p>admin <span>- February 19, 2022</span></p>
                                    </div>
                                </a>
                                <a href="#" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="front/img/blog/single-blog-4.jpg" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>10 Steps to Writing the Perfect Prospectus</h6>
                                        <p>admin <span>- February 19, 2022</span></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <div class="blog-tags">
                            <h4>Product Tags</h4>
                            <div class="tag-item">
                                <a href="#">Doctor</a>
                                <a href="#">Medical</a>
                                <a href="#">Appointment</a>
                                <a href="#">Dentist</a>
                                <a href="#">Clarivo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="row">
                        <!-- <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="front/img/blog/blog-1.jpg" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="blog-details.html">
                                        <h4>The Personality Trait That Makes Peopel Happier</h4>
                                    </a>
                                    <p>travel <span>- May 19, 2022</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="front/img/blog/blog-2.jpg" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="blog-details.html">
                                        <h4>The Personality Trait That Makes Peopel Happier</h4>
                                    </a>
                                    <p>travel <span>- May 19, 2022</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="front/img/blog/blog-3.jpg" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="blog-details.html">
                                        <h4>The Personality Trait That Makes Peopel Happier</h4>
                                    </a>
                                    <p>travel <span>- May 19, 2022</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="front/img/blog/blog-4.jpg" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="blog-details.html">
                                        <h4>The Personality Trait That Makes Peopel Happier</h4>
                                    </a>
                                    <p>travel <span>- May 19, 2022</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="front/img/blog/blog-5.jpg" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="blog-details.html">
                                        <h4>The Personality Trait That Makes Peopel Happier</h4>
                                    </a>
                                    <p>travel <span>- May 19, 2022</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="front/img/blog/blog-6.jpg" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="blog-details.html">
                                        <h4>The Personality Trait That Makes Peopel Happier</h4>
                                    </a>
                                    <p>travel <span>- May 19, 2022</span></p>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-sm-12 ">
                            <div class="blog-item ">
                                <div class="bi-pic">
                                    <img src="front/img/blog/single-blog-3.jpg" alt="">
                                </div>
                                <div class="bi-text">
                                    <span>February 19, 2022</span>
                                    <a href="./blog/blog_details">
                                        <h4>The best Pharmacy WordPress theme</h4>
                                    </a>
                                    <p>Choose from Six Options: AED 249 for facial injections for gummy smile area AED 349 for facial injections around eyes AED 549 for facial injections for forehead and frown lines...</p>
                                </div>
                                <div class="bi-btn">
                                    <a href="blog/blog_details" class="read-more">Read More</a>
                                </div>
                            </div>
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="front/img/blog/single-blog-2.jpg" alt="">
                                </div>
                                <div class="bi-text">
                                    <span>February 19, 2022</span>
                                    <a href="./blog/blog_details">
                                        <h4>We can make you work better</h4>
                                    </a>
                                    <p>Choose from Six Options: AED 249 for facial injections for gummy smile area AED 349 for facial injections around eyes AED 549 for facial injections for forehead and frown lines...</p>
                                </div>
                                <div class="bi-btn">
                                    <a href="blog/blog_details" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>




                        <div class="col-lg-12">
                            <div class="loading-more">
                                <i class="icon_loading"></i>
                                <a href="#">Loading More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

@endsection
