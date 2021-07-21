@extends('frontend.layouts.main')
@section('main-container')
    <!--=================== Breadcrumb Section ===================-->
    <section class="breadcrumb">
        <div class="container">
            <ul class="list-inline">
                <li><a href="index.html" title="ThemeTidy - Stroller - Free single Product Store Responsive Shopify Theme">Home<i class="fa fa-angle-right"></i></a></li>
                <li>Search</li>
            </ul>
        </div>
    </section>
    <!--=================== Search Template ===================-->
    <main class="search-page">
        <section class="search-content paira-gap-1 paira-gap-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-header">Search</h1>
                    </div>
                    <div class="col-md-12  text-center">
                        <h3 class="margin-bottom-20">What You Want! Search Here...</h3>
                        <form class="navbar-form search" action="http://demo.enpek.com/html-templates/stroller/search.html">
                            <div class="form-group">
                                <input type="text" name="q" class="form-control" placeholder="Search Our Store" value="">
                            </div>
                            <button type="submit" class="btn btn-default btn-lg"><i class="fa fa-search"></i> Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @endsection
    <!--=================== Footer Container ===================-->
    