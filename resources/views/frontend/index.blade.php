@extends('frontend.layouts.main')
@section('main-container')


    <!--=================== Home Page ===================-->
    <main class="home-page" style="background-color:rgb(242, 168, 168)">
        <!--=================== Slider Section ===================-->
        <section class="main-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{url('frontend/assets/slider-1.jpg')}}" alt="">
                        <div class="carousel-caption">
                            <div class="slider-content-fix">
                                <h1>Drone</h1>
                                <p>The most populer iconic Drone for all special customer</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{url('frontend/assets/slider-2.jpg')}}" alt="...">
                        <div class="carousel-caption">
                            <div class="slider-content-fix">
                                <h1>Strome Fighter</h1>
                                <p>The most populer iconic  for all special customer</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img style="width: 100%"; src="{{url('frontend/assets/slider-3.jpg')}}" alt="...">
                        <div class="carousel-caption">
                            <div class="slider-content-fix">
                                <h1>White Drone</h1>
                                <p>The most populer iconic  for all special customer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================== Banner 1 Section ===================-->
        <section class="banner-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 padding-left-0">
                        <img style="margin-top: 200px"; src="{{url('frontend/assets/image-1.jpg')}}" alt="" class="img-responsive center-block" />
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 banner-bg text-center">
                        <div class="banner-fix">
                            <h1>Running </h1>
                            <p>We just don't build your website we build your business. We Building Your Business with Strong Branding. Our helpful support team is always on standby to help you with any questions or issues.</p>
                            <a href="collection.html" class="btn btn-default btn-lg text-uppercase">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================== Banner Section ===================-->
        <section class="parallex paira-gap-1" style="background: url({{url('frontend/assets/image-1.gif')}}); background-repeat: no-repeat; background-size: cover; no-repeat fixed; height: 100%; ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="parallex-fix">
                            <h1>Baby </h1>
                            <p>We just don't build your website we build your business. We Building Your Business with Strong Branding. Our helpful support team is always on standby to help you with any questions or issues. We have a great team to build your business.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            $(window).load(function() {
                $('.parallex').parallax("50%", 0.3);
            });
        </script>
        <!--=================== Banner 2 Section ===================-->
        <section class="banner-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 banner-bg text-center">
                        <div class="banner-fix">
                            <h1>Why choose </h1>
                            <p>We just don't build your website we build your business. We Building Your Business with Strong Branding. Our helpful support team is always on standby to help you with any questions or issues.</p>
                            <a href="collection.html" class="btn btn-default btn-lg text-uppercase">See More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 padding-right-0">
                        <img style="margin-top: 200px"; src="{{url('frontend/assets/image-3.jpg')}}" alt="" class="img-responsive center-block" />
                    </div>
                </div>
            </div>
        </section>
        <!--=================== Top Selling Product Section ===================-->
        <section class="top-seller text-center paira-gap-2" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h1 class="page-header margin-bottom-0">Top Selling Products</h1>
                    </div>
                    <div class="product-widget">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!--=================== Product ===================-->
                            <div class="paira-product product margin-top-30">
                                <a href="shop">
                                    <img src="{{url('frontend/assets/products/product-1.jpg')}}" alt=" product name 1" class="paira-product-image img-responsive">
                                </a>
                                <div class="product-sale"><span>Sale</span></div>
                                <div class="margin-left-10 margin-right-10 product-title-price">
                                    <h3 class="margin-top-10 text-capitalize"><a href="single-product.html" class="paira-product-title"> product name 1</a></h3>
                                    <div class="display-inline-b margin-right-10 padding-bottom-10 font-size-16"><del><span class="money">$300.00</span></del></div>
                                    <div class="display-inline-b padding-bottom-10 font-size-16"><span class="money">$150.00</span></div>
                                </div>
                                <div class="paira-list-product-des list-product-des" style="display: none">Why choose ThemeTidy We just don't build your website we build your business. We Building Your Business with Strong Branding. Our helpful support team is always on standby to help you with any questions or issues. We have a great...</div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!--=================== Product ===================-->
                            <div class="paira-product product margin-top-30">
                                <a href="shop">
                                    <img src="{{url('frontend/assets/products/product-2.jpg')}}" alt=" product name 1" class="paira-product-image img-responsive">
                                </a>
                                <div class="product-sale"><span>Sale</span></div>
                                <div class="margin-left-10 margin-right-10 product-title-price">
                                    <h3 class="margin-top-10 text-capitalize"><a href="single-product.html" class="paira-product-title"> product name 2</a></h3>
                                    <div class="display-inline-b margin-right-10 padding-bottom-10 font-size-16"><del><span class="money">$300.00</span></del></div>
                                    <div class="display-inline-b padding-bottom-10 font-size-16"><span class="money">$150.00</span></div>
                                </div>
                                <div class="paira-list-product-des list-product-des" style="display: none">Why choose ThemeTidy We just don't build your website we build your business. We Building Your Business with Strong Branding. Our helpful support team is always on standby to help you with any questions or issues. We have a great...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================== Banner Section ===================-->
        <section class="parallex-1 paira-gap-1" style="background: url({{url('frontend/assets/backimage-1.jpg')}}); no-repeat fixed; height: 600px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="parallex-fix parallex-fix-1">
                            <h1>Buy </h1>
                            <p>We just don't build your website we build your business. We Building Your Business with Strong Branding. Our helpful support team is always on standby to help you with any questions or issues. We have a great team to build your business.</p>
                            <div class="text-center">
                                <a href="#" class="play-video" data-toggle="modal" data-target="#playvideo"><i class="fa fa-play fa-5x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            $(window).load(function() {
                $('.parallex-1').parallax("50%", 0.3);
            });
        </script>
        <div class="modal fade in" id="playvideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body">
                        <iframe style="width: 100%" height="480" src="https://www.youtube.com/embed/QJ714s3ZSn0" frameborder="0" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--=================== Collection Section ===================-->
        <section class="collection-list text-center paira-gap-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h1 class="page-header margin-bottom-30">Collections</h1>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-xs-12 paira-gap-2">
                                <div class="collection-item">
                                    <a href="collection.html">
                                        <img src="{{url('frontend/assets/collections/collection-1.jpg')}}" alt="  collection 1" class="img-responsive">
                                    </a>
                                    <div class="padding-left-15 padding-right-15">
                                        <h3 class="text-capitalize"><a href="collection.html">  collection 1</a></h3>
                                        <h5>11 Products</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xs-12 paira-gap-2">
                                <div class="collection-item">
                                    <a href="collection.html">
                                        <img src="{{url('frontend/assets/collections/collection-2.jpg')}}" alt="  collection 1" class="img-responsive">
                                    </a>
                                    <div class="padding-left-15 padding-right-15">
                                        <h3 class="text-capitalize"><a href="collection.html">  collection 2</a></h3>
                                        <h5>11 Products</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================== Blog Post Section ===================-->
        <section class="recent-blog text-center paira-gap-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 paira-gap-1">
                        <h1 class="page-header margin-bottom-0">Blog</h1>
                    </div>
                    <div class="full-width display-inline-b blog-post-widget paira-gap-3">
                        <div class="col-md-6 paira-gap-4 text-left">
                            <div class="featured-image">
                                <a href="blog"><img src="{{url('frontend/assets/articles/blog-1.jpg')}}" alt="" class="img-responsive center-block margin-bottom-20" /></a>
                            </div>
                            <h3 class="text-capitalize"><a href="blog"><strong>  blog post 1</strong></a></h3>
                            <p>Shoppers are also interested in a company’s mission. They’ll use the About Us page to determine if they share core values with the business and to decide if they want to shop with the business or not.</p>
                        </div>
                        <div class="col-md-6 paira-gap-4 text-left">
                            <div class="featured-image">
                                <a href="blog"><img src="{{url('frontend/assets/articles/blog-2.jpg')}}" alt="" class="img-responsive center-block margin-bottom-20" /></a>
                            </div>
                            <h3 class="text-capitalize"><a href="blog"><strong>  blog post 2</strong></a></h3>
                            <p>Shoppers are also interested in a company’s mission. They’ll use the About Us page to determine if they share core values with the business and to decide if they want to shop with the business or not.</p>
                        </div>
                        <a href="blog" class="btn btn-default btn-lg text-uppercase text-center">See All</a>
                    </div>
                </div>
            </div>
        </section>
        <!--=================== Recent Product Section ===================-->
        <section class="recent-product text-center paira-gap-2 paira-gap-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h1 class="page-header margin-bottom-0">Recent Products</h1>
                    </div>
                    <div class="product-widget">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!--=================== Product ===================-->
                            <div class="paira-product product margin-top-30">
                                <a href="/shop">
                                    <img src="{{url('frontend/assets/products/product-3.jpg')}}" alt=" product name 13" class="paira-product-image img-responsive">
                                </a>
                                <div class="product-sale"><span>Sale</span></div>
                                <div class="margin-left-10 margin-right-10 product-title-price">
                                    <h3 class="margin-top-10 text-capitalize"><a href="/shop" class="paira-product-title"> product name 4</a></h3>
                                    <div class="display-inline-b margin-right-10 padding-bottom-10 font-size-16"><del><span class="money">$300.00</span></del></div>
                                    <div class="display-inline-b padding-bottom-10 font-size-16"><span class="money">$200.00</span></div>
                                </div>
                                <div class="paira-list-product-des list-product-des" style="display: none">Why choose ThemeTidy We just don't build your website we build your business. We Building Your Business with Strong Branding. Our helpful support team is always on standby to help you with any questions or issues. We have a great...</div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!--=================== Product ===================-->
                            <div class="paira-product product margin-top-30">
                                <a href="/shop">
                                    <img src="{{url('frontend/assets/products/product-4.jpg')}}" alt=" product name 13" class="paira-product-image img-responsive">
                                </a>
                                <div class="product-sale"><span>Sale</span></div>
                                <div class="margin-left-10 margin-right-10 product-title-price">
                                    <h3 class="margin-top-10 text-capitalize"><a href="/shop" class="paira-product-title"> product name 3</a></h3>
                                    <div class="display-inline-b margin-right-10 padding-bottom-10 font-size-16"><del><span class="money">$300.00</span></del></div>
                                    <div class="display-inline-b padding-bottom-10 font-size-16"><span class="money">$200.00</span></div>
                                </div>
                                <div class="paira-list-product-des list-product-des" style="display: none">Why choose ThemeTidy We just don't build your website we build your business. We Building Your Business with Strong Branding. Our helpful support team is always on standby to help you with any questions or issues. We have a great...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================== Banner Section ===================-->
        <section class="banner-small paira-gap-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 paira-gap-2">
                        <a><img src="{{url('frontend/assets/small-1.jpg')}}" alt="" class="img-responsive center-block"></a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 paira-gap-2">
                        <a><img src="{{url('frontend/assets/small-2.jpg')}}" alt="" class="img-responsive center-block"></a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 paira-gap-2">
                        <a><img  src="{{url('frontend/assets/small-3.jpg')}}" alt="" class="img-responsive center-block"></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @endsection
    <!--=================== Footer Container ===================-->
    