


@extends('frontend.layouts.main')
@section('main-container')
    <!--=================== Breadcrumb Section ===================-->
    <section class="breadcrumb">
        <div class="container">
            <ul class="list-inline">
                <li><a href="index.html" title="ThemeTidy - Stroller - Free single Product Store Responsive Shopify Theme">Home<i class="fa fa-angle-right"></i></a></li>
                <li>Free demo product name 1</li>
            </ul>
        </div>
    </section>
    <!--=================== Product Template ===================-->
    <main class="product-page">
        <section class="single-product">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row paira-product">
                            <div class="col-md-6 col-sm-6 col-xs-12 paira-gap-1">
                                <div class="paira-product">
                                    <div id="carousel-example-generic" class="carousel slide single-product-fix" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
                                        </ol>
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner paira-single-product-slider paira-single-product-image" role="listbox">
                                            <div class="item active">
                                                <img src="{{url($product['gallery'])}}" alt="" class="paira-product-image">
                                            </div>
                                            <div class="item ">
                                                <img src="{{url('frontend/assets/products/product-3.jpg')}}" alt="" class="paira-product-image">
                                            </div>
                                            <div class="item ">
                                                <img src="{{url('frontend/assets/products/product-4.jpg')}}" alt="" class="paira-product-image">
                                            </div>

                                            <div class="item ">
                                                <img src="{{url('frontend/assets/products/product-1.jpg')}}" alt="" class="paira-product-image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 paira-gap-1">
                               
                                <h3 class="margin-clear paira-product-title margin-bottom-10 text-capitalize">{{$product['name']}}
                                </h3>
                                <div class="single-product-details paira-single-product-details">
                                    <p><label>Vendor :</label> ThemeTidy</p>
                                    <p><label>Type :</label> Free Themes</p>
                                </div>
                                <h3 class="margin-bottom-20 paira-price-preview">
                                    <del class="margin-right-10"><span class="money">$300.00</span></del>
                                    <span class="paira-default-price"><span class="money">{{$product['price']}}</span></span>
                                </h3>
                                <div class="option-switch-dropdown">
                                    <div class="select clearfix">
                                        <div class="selector-wrapper">
                                            <label for="product-select-option-0">Size</label>
                                            <select class="single-option-selector" data-option="option1" id="product-select-option-0">
                                                <option value="s">s</option>
                                                <option value="m">m</option>
                                                <option value="l">l</option>
                                                <option value="xl">xl</option>
                                            </select>
                                        </div>
                                        <div class="selector-wrapper">
                                            <label for="product-select-option-1">Color</label>
                                            <select class="single-option-selector" data-option="option2" id="product-select-option-1">
                                                <option value="green">green</option>
                                                <option value="blue">blue</option>
                                                <option value="grey">grey</option>
                                                <option value="yellow">yellow</option>
                                                <option value="black">black</option>
                                            </select>
                                        </div>
                                        <div class="selector-wrapper">
                                            <label for="product-select-option-2">Material</label>
                                            <select class="single-option-selector" data-option="option3" id="product-select-option-2">
                                                <option value="flax">flax</option>
                                                <option value="wool">wool</option>
                                                <option value="ramie">ramie</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="full-width">
                                    <strong>Quantity</strong>
                                    <div class="input-group paira-quantity-group product-quantity-group margin-top-10">
                                        <div class="input-group-addon" data-direction="down"><i class="fa fa-minus"></i></div>
                                        <input type="text" value="1" class="form-control paira-single-quantity text-center" placeholder="1">
                                        <div class="input-group-addon" data-direction="up"><i class="fa fa-plus"></i></div>
                                    </div>
                                </div>
                                <div class="single-product-buttons">
                                    <form action="/add to cart" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value={{$product['id']}}> 
                                    {{-- <a href="" class="btn btn-default btn-block btn-lg margin-top-30 margin-right-10"><i class="fa fa-shopping-cart"></i> Add To Cart</a> --}}
                                    <button class="btn btn-default btn-block btn-lg margin-top-30 margin-right-10"><i class="fa fa-shopping-cart"></i> Add To Cart
                                    </button>
                                </form>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row paira-gap-1 paira-gap-2">
                            <div class="col-md-12 text-center">
                                <h1 class="page-header">Description</h1>
                            </div>
                           
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="description">
                                        <h4>Why choose
                                        </h4>
                                        {{-- <p>{{$product['description']}}</p> --}}
                                        <h4><span>{{$product['description']}}</span></h4>
                                        <h4><span><a href="#/"></a> customer services</span></h4>
                                        <p><span>*** <a href="#/"></a> installation services &amp; setup</span></p>
                                        <p><span>*** <a href="#/"></a> design services</span></p>
                                        <p><span>*** <a href="#/"></a> development services</span></p>
                                        <p><span>*** <a href="#/"></a> 24/7 customer support</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        $(function() {
            $(document).on("click", ".paira-quantity-group .input-group-addon", function() {
                var t = $(this).attr("data-direction"),
                        n = $(this).parent().children('input[type="text"]'),
                        i = n.val();
                if ("up" == t){
                    i++;
                    n.val(i);
                } else if ("down" == t) {
                    if (1 == i) return;
                    i--;
                    n.val(i);
                }
                $('.paira-add-to-cart').attr('data-item-quantity', n.val());
            });
        });
    </script>
    @endsection
    <!--=================== Footer Container ===================-->
   