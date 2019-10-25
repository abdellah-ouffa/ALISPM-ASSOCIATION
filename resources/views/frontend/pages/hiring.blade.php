@extends('frontend.layouts.master')
@section('title', 'Contact')
@section('content')
<!-- start page header -->
<section class="page-header-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="paget-title">
                    <h2>{{ setting('site.title') }} <span>Hiring</span></h2>
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
                    <li class="active">Hiring</li>
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
                    <h4>Hiring area</h4>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <br>
                <div class="contact-form">
                    <form action="{{ route('site.hiring.save') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-input">
                                    <label for="full_name">Full Name</label>
                                    <input id="full_name" name="full_name" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input">
                                    <label for="gender">Gender</label>
                                    <select name="gender" id="gender">
                                        <option value="Female">Female</option>
                                        <option value="Male">Male</option>
                                    </select>
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                <div class="single-input">
                                    <label for="email">Email</label>
                                    <input id="email" name="email" type="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input">
                                    <label for="tel">TEL</label>
                                    <input id="tel" name="tel" type="tel">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input">
                                    <label for="education_level">Job level</label>
                                    <select name="education_level" id="education_level">
                                        @foreach (job_levels() as $level)
                                            <option value="{{ $level }}">{{ $level }}</option>
                                        @endforeach
                                    </select>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input">
                                    <label for="cv">CV</label>
                                    <input id="cv" class="form-control" name="cv" type="file">
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