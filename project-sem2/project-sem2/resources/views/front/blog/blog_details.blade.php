@extends('front.layout.master')

@section('title', 'Blog Details')

@section('body')

    <!-- Blog Details Section Begin -->
    <div class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="blog-details-inner">
                        <div class="blog-detail-title">
                            <h2>The best Pharmacy WordPress theme</h2>
                            <p>Admin <span>- February 19, 2022</span></p>
                        </div>
                        <div class="blog-large-pic">
                            <img src="front/img/blog/single-blog-3.jpg" alt="">
                        </div>
                        <div class="blog-detail-desc">
                            <p>Choose from Six Options: AED 249 for facial injections for gummy smile area AED 349 for facial injections around eyes AED 549 for facial injections for forehead and frown lines...</p>
                        </div>
                        <div class="blog-quote">
                            <p>Choose from Six Options:</p>
                            <ul>
                                <li>AED 249 for facial injections for gummy smile area</li>
                                <li>AED 349 for facial injections around eyes</li>
                                <li>AED 549 for facial injections for forehead and frown lines</li>
                                <li>AED 749 for facial injections for whole face</li>
                                <li>AED 799 for a 1ml facial filler for any facial area</li>
                                <li>AED 649 for one Aquashine injection</li>
                            </ul>
                        </div>
                        <div class="blog-question">
                            <em>* What is a facial injection or filler?</em>
                            <p>An injection puts a small amount of filler into a chosen area with the aim of helping to temporarily reduce the visibility of fine lines. Facial injections are available for various areas, and a filler treatment is available for targeting various small, specific areas around the lower face.
                                 Customers are advised to contact the merchant for further details on specific areas that can be targeted.</p>
                            <em>What is a bio-revitalisation Aquashine injection?</em>
                            <p>Bio-revitalisation Aquashine injection is a revitalising product composed of bioactive ingredients including hyaluronic acid, vitamins and amino acids</p>
                        </div>
                        <div class="blog-more">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="front/img/blog/single-blog-7.jpg" alt="">
                                </div>
                                <div class="col-sm-4">
                                    <img src="front/img/blog/single-blog-8.jpg" alt="">
                                </div>
                                <div class="col-sm-4">
                                    <img src="front/img/blog/single-blog-9.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tag-share">
                            <div class="details-tag">
                                <ul>
                                    <li><i class="fa fa-tags"></i></li>
                                    <li><a href="">Doctor</a></li>
                                    <li><a href="">Medical</a></li>
                                    <li><a href="">Dentist</a></li>
                                    <li><a href="">Appointment</a></li>
                                    <li><a href="">Clarivo</a></li>
                                </ul>
                            </div>
                            <div class="blog-share">
                                <span>Share: </span>
                                <div class="social-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post">
                            <div class="row">
                                <div class="col-lg-5 col-md-6">
                                    <a href="#" class="prev-blog">
                                        <div class="pb-pic">
                                            <i class="ti-arrow-left"></i>
                                            <img src="front/img/blog/prev-blog.png" alt="">
                                        </div>
                                        <div class="pb-text">
                                            <span>Previous Post:</span>
                                            <h5>The Personality Trai That Makes People Happier</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-5 col-md-6 offset-lg-2">
                                    <a href="#" class="next-blog">
                                        <div class="nb-pic">
                                            <img src="front/img/blog/next-blog.png" alt="">
                                            <i class="ti-arrow-right"></i>
                                        </div>
                                        <div class="nb-text">
                                            <span>New Post:</span>
                                            <h5>The Personality Trai That Makes People Happier</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="posted-by">
                            <div class="pb-pic">
                                <img src="front/img/blog/post-by.png" alt="">
                            </div>
                            <div class="pb-text">
                                <h5>Shane Lynch - <span>April 19, 2022</span></h5>
                                <p>American Medical Center provides wide range of quality Medical,
                                     dental, and aesthetic services in areas such as gynecology, pediatrics, dermatology, and dentistry. They also boast an aesthetic section where all Aesthetic/ Cosmetic/ Laser procedures can be done like hair removal, facial injection, fillers, PRP.</p>
                            </div>
                        </div>
                        <div class="leave-comment">
                            <h4>Leave a comment</h4>
                            <form action="#" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Message"></textarea>
                                        <button type="submit" class="site-btn">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Details Section End -->

@endsection
