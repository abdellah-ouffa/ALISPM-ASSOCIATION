@extends('frontend.layouts.master')

@section('title', 'Contact')

@section('content')
<!-- start page header -->
<section class="page-header-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="paget-title">
                    <h2>{{ setting('site.title') }} <span>Contact</span></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-left">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home &gt; </a></li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- start contact us section -->
<section class="contact-us-section padding-top">
    <div class="container">
        <div class="row">
        </div>
        <div class="row justify-content-center contactformbg">
            <div class="col-md-12 text-center">
                <div class="get-in-touch">
                    <h4>Get In Touch</h4>
                </div>
            </div>
            <div class="col-md-5 col-lg-5">
                <div class="contact-address">
                    <div class="single-contact-address">
                        <div class="icon">
                            <i class="icofont icofont-phone"></i>
                        </div>
                        <div class="content">
                            <p>{{ setting('site.company_tel') }}</p>
                            <p>{{ setting('site.company_fix') }}</p>
                        </div>
                    </div>
                    <div class="single-contact-address">
                        <div class="icon">
                            <i class="icofont icofont-envelope"></i>
                        </div>
                        <div class="content">
                            <p>{{ setting('site.ceo_email') }}</p>
                            <p>{{ setting('site.company_email') }}</p>
                        </div>
                    </div>
                    <div class="single-contact-address">
                        <div class="icon">
                            <i class="icofont icofont-social-google-map"></i>
                        </div>
                        <div class="content">
                            <p>{{ setting('site.company_address') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-lg-5">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                       {{ session()->get('success') }}
                    </div>
                @endif
                <br>
                <div class="contact-form">
                    <form action="{{ route('site.contact.mail.send') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-input">
                                    <label for="fname">First name</label>
                                    <input id="fname" name="fname" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input">
                                    <label for="lname">Last name</label>
                                    <input id="lname" name="lname" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input">
                                    <label for="email">Email</label>
                                    <input id="email" name="email" type="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input">
                                    <label for="message">Message</label>
                                    <textarea id="message" name="message" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-left">
                                <div class="submitbtn">
                                    <button type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of contact us section -->
<!-- start google map section -->
<div class="googlemap">
    <div id="gmap"></div>
</div>
<!-- end of google map section -->
@endsection