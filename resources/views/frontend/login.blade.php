@extends('frontend.layouts.main')
@section('main-container')
    <!--=================== Breadcrumb Section ===================-->
    <section class="breadcrumb">
        <div class="container">
            <ul class="list-inline">
                <li><a href="/" title="ThemeTidy - Stroller - Free single Product Store Responsive Shopify Theme">Home<i class="fa fa-angle-right"></i></a></li>
                <li>Account</li>
            </ul>
        </div>
    </section>
    <!--=================== Login Template ===================-->
    <main class="login-page">
        <section class="login-content paira-gap-1 paira-gap-2">
            <div class="container">
                <div class="row">
                    <div id="login">
                        <div class="col-md-12 text-center">
                            <h1 class="page-header margin-bottom-40">Login</h1>
                        </div>
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST" action="/" id="customer_login" accept-charset="UTF-8"><input type="hidden" value="customer_login" name="form_type" enctype="multipart/form-data" /><input type="hidden" name="utf8" value="✓" />
                                        @csrf
                                        <label>Email</label>
                                        <input type="email" value="" name="email" class="form-control margin-bottom-20" id="customer_email" />
                                        <label>Password</label>
                                        <input type="password" value="" name="password" class="form-control margin-bottom-20" id="customer_password" size="16" />
                                        <button type="submit" class="btn btn-default pull-left">Log In</button>
                                        <a href="#" class="pull-right"><h5>Forgot your password?</h5></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 text-center">
                            <h4 class="margin-bottom-20 margin-top-40">New Customer?</h4>
                            <a href="register" class="btn btn-primary btn-lg">Create An Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @endsection
    <!--=================== Footer Container ===================-->
 