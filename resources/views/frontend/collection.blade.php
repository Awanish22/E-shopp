@extends('frontend.layouts.main')
@section('main-container')
    <!--=================== Breadcrumb Section ===================-->
    <section class="breadcrumb">
        <div class="container">
            <ul class="list-inline">
                <li><a href="index.html" title="ThemeTidy - Stroller - Free single Product Store Responsive Shopify Theme">Home<i class="fa fa-angle-right"></i></a></li>
                <li>Products</li>
            </ul>
        </div>
    </section>
    <!--=================== Collection Template ===================-->
    <main class="collection-page">
        <!--=================== Collections Product Section ===================-->
        <section class="collection-content paira-gap-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 paira-gap-1 text-center">
                        <div class="paira-collection-content">
                            <h1 class="page-header">Products</h1>
                            <div class="text-justify margin-bottom-20"></div>
                            {{-- <div class="row hidden-xs">
                                <div class="col-md-4 col-sm-4 col-xs-12 margin-bottom-20 overflow-h">
                                    <div class="form-group pull-left margin-clear">
                                        <label class="margin-right-10">Sort by: </label>
                                        <select class="sort-by paira-sort-by">
                                            <option value="manual">Featured</option>
                                            <option value="best-selling">Best Selling</option>
                                            <option value="title-ascending">Alphabetically, A-Z</option>
                                            <option value="title-descending">Alphabetically, Z-A</option>
                                            <option value="price-ascending">Price, low to high</option>
                                            <option value="price-descending">Price, high to low</option>
                                            <option value="created-descending">Date, new to old</option>
                                            <option value="created-ascending">Date, old to new</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 overflow-h margin-bottom-20">
                                    <div class="form-group pull-left margin-clear">
                                        <label class="margin-right-10">Sort by Category: </label>
                                        <select class="sort-by paira-filter-category">
                                            <option value="stroller-free-demo-collection-1">stroller free demo collection 1</option>
                                            <option value="stroller-free-demo-collection-2">stroller free demo collection 2</option>
                                            <option value="stroller-free-demo-collection-3">stroller free demo collection 3</option>
                                            <option value="stroller-free-demo-collection-4">stroller free demo collection 4</option>
                                            <option value="stroller-free-demo-collection-5">stroller free demo collection 5</option>
                                            <option value="stroller-free-demo-collection-6">stroller free demo collection 6</option>
                                            <option value="stroller-free-demo-collection-7">stroller free demo collection 7</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 overflow-h margin-bottom-20">
                                    <div class="form-group pull-right margin-clear">
                                        <label class="margin-right-10">Sort By Tag: </label>
                                        <select class="sort-by paira-filter-tag">
                                            <option value="best-free-shopify-templates">Best free shopify templates</option>
                                            <option value="best-free-shopify-themes">Best free shopify themes</option>
                                            <option value="free-shopify-apps">Free shopify apps</option>
                                            <option value="free-shopify-templates">Free shopify templates</option>
                                            <option value="free-shopify-themes">Free shopify themes</option>
                                            <option value="free-templates">Free templates</option>
                                            <option value="free-themes">Free themes</option>
                                            <option value="paire-shopify-framework">Paire shopify framework</option>
                                            <option value="shopify-theme-framework">Shopify theme framework</option>
                                        </select>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row paira-grid-view">
                                @foreach ($products as $item)
                                    
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <!--=================== Product ===================-->
                                    <div class="paira-product product margin-top-30">
                                        {{-- <a href="{{url('/singleproduct')}}"> --}}
                                            <a href="single-product/{{$item['id']}}">
                                            <img src={{$item['gallery']}} alt="Free demo product name 1" class="paira-product-image img-responsive">
                                        </a>
                                        <div class="product-sale"><span>Sale</span></div>
                                        <div class="margin-left-10 margin-right-10 product-title-price">
                                            <h3 class="margin-top-10 text-capitalize"><a href="single-product.html" class="paira-product-title">{{$item['name']}}</a></h3>
                                            <div class="display-inline-b margin-right-10 padding-bottom-10 font-size-16"><del><span class="money">$300.00</span></del></div>
                                            <div class="display-inline-b padding-bottom-10 font-size-16"><span class="money">{{$item['price']}}</span></div>
                                        </div>
                                    </div>
                                        
                                </div>
                                @endforeach
                                {{-- <div class="col-md-6 col-sm-6 col-xs-12">
                                    <!--=================== Product ===================-->
                                    <div class="paira-product product margin-top-30">
                                        <a href="{{url('/single-product')}}">
                                            <img src="{{url('frontend/assets/products/stroller-html-template-product-2.jpg')}}" alt="Free demo product name 1" class="paira-product-image img-responsive">
                                        </a>
                                        <div class="product-sale"><span>Sale</span></div>
                                        <div class="margin-left-10 margin-right-10 product-title-price">
                                            <h3 class="margin-top-10 text-capitalize"><a href="single-product.html" class="paira-product-title">Free demo product name 2</a></h3>
                                            <div class="display-inline-b margin-right-10 padding-bottom-10 font-size-16"><del><span class="money">$300.00</span></del></div>
                                            <div class="display-inline-b padding-bottom-10 font-size-16"><span class="money">$150.00</span></div>
                                        </div>
                                        <div class="paira-list-product-des list-product-des" style="display: none">Why choose ThemeTidy We just don't build your website we build your business. We Building Your Business with Strong Branding. Our helpful support team is always on standby to help you with any questions or issues. We have a great...</div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <!--=================== Product ===================-->
                                    <div class="paira-product product margin-top-30">
                                        <a href="{{url('/single-product')}}">
                                            <img src="{{url('frontend/assets/products/stroller-html-template-product-3.jpg')}}" alt="Free demo product name 1" class="paira-product-image img-responsive">
                                        </a>
                                        <div class="product-sale"><span>Sale</span></div>
                                        <div class="margin-left-10 margin-right-10 product-title-price">
                                            <h3 class="margin-top-10 text-capitalize"><a href="single-product.html" class="paira-product-title">Free demo product name 3</a></h3>
                                            <div class="display-inline-b margin-right-10 padding-bottom-10 font-size-16"><del><span class="money">$300.00</span></del></div>
                                            <div class="display-inline-b padding-bottom-10 font-size-16"><span class="money">$150.00</span></div>
                                        </div>
                                        <div class="paira-list-product-des list-product-des" style="display: none">Why choose ThemeTidy We just don't build your website we build your business. We Building Your Business with Strong Branding. Our helpful support team is always on standby to help you with any questions or issues. We have a great...</div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <!--=================== Product ===================-->
                                    <div class="paira-product product margin-top-30">
                                        <a href="{{url('/single-product')}}">
                                            <img src="{{url('frontend/assets/products/stroller-html-template-product-4.jpg')}}" alt="Free demo product name 1" class="paira-product-image img-responsive">
                                        </a>
                                        <div class="product-sale"><span>Sale</span></div>
                                        <div class="margin-left-10 margin-right-10 product-title-price">
                                            <h3 class="margin-top-10 text-capitalize"><a href="single-product.html" class="paira-product-title">Free demo product name 4</a></h3>
                                            <div class="display-inline-b margin-right-10 padding-bottom-10 font-size-16"><del><span class="money">$300.00</span></del></div>
                                            <div class="display-inline-b padding-bottom-10 font-size-16"><span class="money">$150.00</span></div>
                                        </div>
                                        <div class="paira-list-product-des list-product-des" style="display: none">Why choose ThemeTidy We just don't build your website we build your business. We Building Your Business with Strong Branding. Our helpful support team is always on standby to help you with any questions or issues. We have a great...</div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <!--=================== Product ===================-->
                                    <div class="paira-product product margin-top-30">
                                        <a href="{{url('/single-product')}}">
                                            <img src="{{url('frontend/assets/products/stroller-html-template-product-5.jpg')}}" alt="Free demo product name 1" class="paira-product-image img-responsive">
                                        </a>
                                        <div class="product-sale"><span>Sale</span></div>
                                        <div class="margin-left-10 margin-right-10 product-title-price">
                                            <h3 class="margin-top-10 text-capitalize"><a href="single-product.html" class="paira-product-title">Free demo product name 5</a></h3>
                                            <div class="display-inline-b margin-right-10 padding-bottom-10 font-size-16"><del><span class="money">$300.00</span></del></div>
                                            <div class="display-inline-b padding-bottom-10 font-size-16"><span class="money">$150.00</span></div>
                                        </div>
                                        <div class="paira-list-product-des list-product-des" style="display: none">Why choose ThemeTidy We just don't build your website we build your business. We Building Your Business with Strong Branding. Our helpful support team is always on standby to help you with any questions or issues. We have a great...</div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <!--=================== Product ===================-->
                                    <div class="paira-product product margin-top-30">
                                        <a href="{{url('/single-product')}}">
                                            <img src="{{url('frontend/assets/products/stroller-html-template-product-6.jpg')}}" alt="Free demo product name 1" class="paira-product-image img-responsive">
                                        </a>
                                        <div class="product-sale"><span>Sale</span></div>
                                        <div class="margin-left-10 margin-right-10 product-title-price">
                                            <h3 class="margin-top-10 text-capitalize"><a href="single-product.html" class="paira-product-title">Free demo product name 6</a></h3>
                                            <div class="display-inline-b margin-right-10 padding-bottom-10 font-size-16"><del><span class="money">$300.00</span></del></div>
                                            <div class="display-inline-b padding-bottom-10 font-size-16"><span class="money">$150.00</span></div>
                                        </div>
                                        <div class="paira-list-product-des list-product-des" style="display: none">Why choose ThemeTidy We just don't build your website we build your business. We Building Your Business with Strong Branding. Our helpful support team is always on standby to help you with any questions or issues. We have a great...</div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <!--=================== Product ===================-->
                                    <div class="paira-product product margin-top-30">
                                        <a href="{{url('/single-product')}}">
                                            <img src="{{url('frontend/assets/products/stroller-html-template-product-7.jpg')}}" alt="Free demo product name 1" class="paira-product-image img-responsive">
                                        </a>
                                        <div class="product-sale"><span>Sale</span></div>
                                        <div class="margin-left-10 margin-right-10 product-title-price">
                                            <h3 class="margin-top-10 text-capitalize"><a href="single-product.html" class="paira-product-title">Free demo product name 7</a></h3>
                                            <div class="display-inline-b margin-right-10 padding-bottom-10 font-size-16"><del><span class="money">$300.00</span></del></div>
                                            <div class="display-inline-b padding-bottom-10 font-size-16"><span class="money">$150.00</span></div>
                                        </div>
                                        <div class="paira-list-product-des list-product-des" style="display: none">Why choose ThemeTidy We just don't build your website we build your business. We Building Your Business with Strong Branding. Our helpful support team is always on standby to help you with any questions or issues. We have a great...</div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <!--=================== Product ===================-->
                                    <div class="paira-product product margin-top-30">
                                        <a href="{{url('/single-product')}}">
                                            <img src="{{url('frontend/assets/products/stroller-html-template-product-8.jpg')}}" alt="Free demo product name 1" class="paira-product-image img-responsive">
                                        </a>
                                        <div class="product-sale"><span>Sale</span></div>
                                        <div class="margin-left-10 margin-right-10 product-title-price">
                                            <h3 class="margin-top-10 text-capitalize"><a href="single-product.html" class="paira-product-title">Free demo product name 8</a></h3>
                                            <div class="display-inline-b margin-right-10 padding-bottom-10 font-size-16"><del><span class="money">$300.00</span></del></div>
                                            <div class="display-inline-b padding-bottom-10 font-size-16"><span class="money">$150.00</span></div>
                                        </div>
                                        <div class="paira-list-product-des list-product-des" style="display: none">Why choose ThemeTidy We just don't build your website we build your business. We Building Your Business with Strong Branding. Our helpful support team is always on standby to help you with any questions or issues. We have a great...</div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <!--=================== Product ===================-->
                                    <div class="paira-product product margin-top-30">
                                        <a href="{{url('/single-product')}}">
                                            <img src="{{url('frontend/assets/products/stroller-html-template-product-9.jpg')}}" alt="Free demo product name 1" class="paira-product-image img-responsive">
                                        </a>
                                        <div class="product-sale"><span>Sale</span></div>
                                        <div class="margin-left-10 margin-right-10 product-title-price">
                                            <h3 class="margin-top-10 text-capitalize"><a href="single-product.html" class="paira-product-title">Free demo product name 9</a></h3>
                                            <div class="display-inline-b margin-right-10 padding-bottom-10 font-size-16"><del><span class="money">$300.00</span></del></div>
                                            <div class="display-inline-b padding-bottom-10 font-size-16"><span class="money">$150.00</span></div>
                                        </div>
                                        <div class="paira-list-product-des list-product-des" style="display: none">Why choose ThemeTidy We just don't build your website we build your business. We Building Your Business with Strong Branding. Our helpful support team is always on standby to help you with any questions or issues. We have a great...</div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <!--=================== Product ===================-->
                                    <div class="paira-product product margin-top-30">
                                        <a href="{{url('/single-product')}}">
                                            <img src="{{url('frontend/assets/products/stroller-html-template-product-10.jpg')}}" alt="Free demo product name 1" class="paira-product-image img-responsive">
                                        </a>
                                        <div class="product-sale"><span>Sale</span></div>
                                        <div class="margin-left-10 margin-right-10 product-title-price">
                                            <h3 class="margin-top-10 text-capitalize"><a href="single-product.html" class="paira-product-title">Free demo product name 10</a></h3>
                                            <div class="display-inline-b margin-right-10 padding-bottom-10 font-size-16"><del><span class="money">$300.00</span></del></div>
                                            <div class="display-inline-b padding-bottom-10 font-size-16"><span class="money">$150.00</span></div>
                                        </div>
                                        <div class="paira-list-product-des list-product-des" style="display: none">Why choose ThemeTidy We just don't build your website we build your business. We Building Your Business with Strong Branding. Our helpful support team is always on standby to help you with any questions or issues. We have a great...</div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <!--=================== Product ===================-->
                                    <div class="paira-product product margin-top-30">
                                        <a href="{{url('/single-product')}}">
                                            <img src="{{url('frontend/assets/products/stroller-html-template-product-11.jpg')}}" alt="Free demo product name 1" class="paira-product-image img-responsive">
                                        </a>
                                        <div class="product-sale"><span>Sale</span></div>
                                        <div class="margin-left-10 margin-right-10 product-title-price">
                                            <h3 class="margin-top-10 text-capitalize"><a href="single-product.html" class="paira-product-title">Free demo product name 11</a></h3>
                                            <div class="display-inline-b margin-right-10 padding-bottom-10 font-size-16"><del><span class="money">$300.00</span></del></div>
                                            <div class="display-inline-b padding-bottom-10 font-size-16"><span class="money">$150.00</span></div>
                                        </div>
                                        <div class="paira-list-product-des list-product-des" style="display: none">Why choose ThemeTidy We just don't build your website we build your business. We Building Your Business with Strong Branding. Our helpful support team is always on standby to help you with any questions or issues. We have a great...</div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <!--=================== Product ===================-->
                                    <div class="paira-product product margin-top-30">
                                        <a href="{{url('/single-product')}}">
                                            <img src="{{url('frontend/assets/products/stroller-html-template-product-12.jpg')}}" alt="Free demo product name 1" class="paira-product-image img-responsive">
                                        </a>
                                        <div class="product-sale"><span>Sale</span></div>
                                        <div class="margin-left-10 margin-right-10 product-title-price">
                                            <h3 class="margin-top-10 text-capitalize"><a href="single-product.html" class="paira-product-title">Free demo product name 12</a></h3>
                                            <div class="display-inline-b margin-right-10 padding-bottom-10 font-size-16"><del><span class="money">$300.00</span></del></div>
                                            <div class="display-inline-b padding-bottom-10 font-size-16"><span class="money">$150.00</span></div>
                                        </div>
                                        <div class="paira-list-product-des list-product-des" style="display: none">Why choose ThemeTidy We just don't build your website we build your business. We Building Your Business with Strong Branding. Our helpful support team is always on standby to help you with any questions or issues. We have a great...</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row paira-gap-3">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <!--=================== pagination ===================-->
                                    <ul class="list-inline pagination margin-clear">
                                        <li class="disabled"><a><i class="fa fa-angle-left"></i></a></li>
                                        <li class="active font-bold"><span>1</span></li>
                                        <li><a href="#"><span>2</span></a></li>
                                        <li><a href="#" class="prev-page"><i class=" fa fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </section>
    </main>
    @endsection
    <!--=================== Footer Container ===================-->
   