@extends('frontend.layouts.main')
@section('main-container')
    <!--=================== Breadcrumb Section ===================-->
    <section class="breadcrumb">
        <div class="container">
            <ul class="list-inline">
                <li><a href="index.html" title="ThemeTidy - Stroller - Free single Product Store Responsive Shopify Theme">Home<i class="fa fa-angle-right"></i></a></li>
                <li>Your Cart</li>
            </ul>
        </div>
    </section>
    <!--=================== Cart Template ===================-->
    <main class="cart-page">
        <section class="cart-content paira-gap-2 paira-gap-1">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h1 class="page-header text-center margin-bottom-0">Shopping Cart</h1>
                    </div>
                    <form action="/cart">
                        
                        <div class="col-md-12 col-sm-12 col-xs-12 margin-top-40">
                            <div class="cart-item-list">
                                <h6 class="text-capitalize panel-title cart-title">Product Lists</h6>
                                @foreach($products as $item)
                                <ul class="list-unstyled paira-cart-page-list overflow-h margin-bottom-20">
                                    
                                    <li>
                                        <div class="col-md-2 col-sm-2 col-xs-12 margin-top-40 ">
                                            <a href="">
                                                <img class="img-responsive thumbnail" src="{{$item->gallery}}">
                                            </a>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12 margin-top-40 ">
                                            <h4 class="margin-clear text-capitalize"><a href="">{{$item->name}}</a></h4>
                                            <h4 class="margin-top-20 margin-bottom-10"><span class="money">{{$item->price}}</span></h4>
                                        </div>
                                       
                                        <div class="col-md-3 col-sm-3 col-xs-12 margin-top-20 text-center">
                                            {{-- <label>Quantity</label>
                                            <div class="full-width">
                                                <input type="number" size="4" name="updates[]" min="0" value="1" class="form-control display-inline-b text-center margin-top-10 paira-cart-quantity-23023032129 margin-bottom-10">
                                            </div> --}}
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12 margin-top-20 text-right cart-center-xs">
                                            <div class="full-width">
                                                <a href="#" class="btn btn-primary display-inline-b margin-left-10 margin-right-10  margin-bottom-10 paira-cart-page-update"><i class="fa fa-pencil"></i> Update</a>
                                                <a href="/removecart/{{$item->cart_id}}" class="btn btn-default display-inline-b paira-cart-page-delete  margin-bottom-10"><i class="fa fa-times"></i> Remove</a>
                                            </div>
                                        </div>
                                    </li>
                                    
                                </ul>
                                @endforeach
                            </div>
                        </div>
                       
                        <aside class="col-md-4 col-sm-5 col-xs-12 margin-top-40 pull-right">
                            <figure class="margin-bottom-30">
                                {{-- <figcaption><h4 class="panel-heading">Sub Total</h4></figcaption>
                                <div class="cart-sub-total paira-cart-sub-total">
                                    <h2 class="margin-top-5 margin-bottom-20"><span class="money">$0.00</span></h2>
                                    <textarea id="note" name="note" class="margin-top-10 margin-bottom-10 form-control" placeholder="Special instructions..."></textarea> --}}
                                   {{-- <a href="form"> <input type="submit" id="checkout" class="btn btn-default btn-lg btn-block text-uppercase" name="checkout" value="Proceed To Checkout"></a> --}}
                                    <a href="form"> <input id="checkout" class="btn btn-default btn-lg btn-block text-uppercase" name="checkout" value="Proceed To Checkout"></a>

                                </div>
                            </figure>
                        </aside>
                       
                    </form>
                    
                </div>
            </div>
        </section>
    </main>
    @endsection
    <!--=================== Footer Container ===================-->
    