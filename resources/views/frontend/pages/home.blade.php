@extends('frontend.layouts.master')

@section('title', 'Home')

@section('content')
	<!-- start slider area -->
	<section class="main-slider-area">
	    <div class="active-main-slider owl-carousel">
	  		@foreach ($sliders as $slider)
		    	@php
		    		$img = 'https://i.ibb.co/5xBnJH7/banner-4.jpg'; //asset('storage/' . $slider->images);
		    	@endphp
	  			<div class="main-slider-item" style="background-image: url({{ $img }});">
	  			    <div class="slider-one-content">
	  			        <div class="container">
	  			            <div class="row">
	  			                <div class="col-md-12 text-center">
	  			                    <div class="main-slider-welcome-text">
	  			                        <div class="slider-cell">
	  			                            <h2 class="main-title" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRight">{{ $slider->title }}</h2>
	  			                            <h2 class="sub-title" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRight">{{ $slider->description }}</h2>
	  			                        </div>
	  			                    </div>
	  			                </div>
	  			            </div>
	  			        </div>
	  			    </div>
	  			</div>
	  		@endforeach
	    </div>
	</section>
	<!-- end of slider area -->
	
	<!-- start experience section -->
	<section class="experience-section section-padding">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-6">
	                <div class="experience-content">
	                    <h1>We have <br>
	                    <span>{{ date("Y") - setting('site.company_created_at') }}</span> Years Experience</h1>
	                    <p>offers general contracting services and is mainly located in Arlington, Texas. It has received several awards such as the AGC General Contractor of the Year Award, the Best Of Award from Texas Construction Magazine for Sports / Entertainment Facility Construction.</p>
	                    <div class="our-mission-list">
	                        <h4>Our Mission & Vision</h4>
	                        <p>To maintain the highest levels of professionalism, integrity, honesty and fairness in our relationships with our suppliers.</p>
	                        <ul>
	                            <li>To perform for our customers the highest level of quality construction services at fair and market competitive prices.
	                            </li>
	                            <li>To ensure the longevity of our company through repeat and referral business achieved by customer satisfaction.
	                            </li>
	                            <li>To perform for our customers the highest level of quality construction services at fair and market competitive prices.
	                            </li>
	                            <li>To maintain the highest levels of professionalism, integrity, honesty and fairness in our relationships with our suppliers.
	                            </li>

	                        </ul>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-6 text-right">
	                <div class="single-image">
	                    <img src="{{ asset('frontend/asset/img/aaa.jpg') }}" style="height: 590px;" alt="">
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	<!-- end of experience section -->
	<!-- start counter section -->
	<section class="counter-section">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-6 col-lg-3">
	                <div class="single-counter">
	                    <div class="icon">
	                        <i class="icofont icofont-safety-hat"></i>
	                    </div>
	                    <div class="content">
	                        <h4><span class="counter">{{ setting('site.experience_enginner') }}</span>+</h4>
	                        <p>Experience Enginner</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-6 col-lg-3">
	                <div class="single-counter">
	                    <div class="icon">
	                        <i class="icofont icofont-vehicle-trucktor"></i>
	                    </div>
	                    <div class="content">
	                        <h4><span class="counter">{{ setting('site.own_machine') }}</span>+</h4>
	                        <p>Own Machine</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-6 col-lg-3">
	                <div class="single-counter">
	                    <div class="icon">
	                        <i class="icofont icofont-building-alt"></i>
	                    </div>
	                    <div class="content">
	                        <h4><span class="counter">{{ setting('site.projects_done') }}</span>+</h4>
	                        <p>Projects Done</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-6 col-lg-3">
	                <div class="single-counter">
	                    <div class="icon">
	                        <i class="icofont icofont-trophy"></i>
	                    </div>
	                    <div class="content">
	                        <h4><span class="counter">{{ setting('site.award_won') }}</span>+</h4>
	                        <p>Award Won</p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	<!-- end of counter section -->
	<!-- start services section -->
	<!-- end of services section -->
	
	<!-- start recent work section -->
	<section class="recent-work section-padding">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12 text-center">
	                <div class="section-title">
	                    <h2>Recent Work</h2>
	                    <p>We Completed</p>
	                </div>
	            </div>
	        </div>
	        <div class="row">
	        	@foreach ($recentProjects as $project)
		            <div class="col-md-4 col-lg-3">
		                <div class="single-project">
		                    <div class="project-thumb">
		                        <a href="{{ route('site.projects.details', ['slug' => $project->slug]) }}"><img src="{{ asset('storage/' . $project->firstImage) }}" alt=""></a>
		                    </div>
		                    <div class="project-desc">
		                        <a href="{{ route('site.projects.details', ['slug' => $project->slug]) }}"><h4>{{ $project->title }}</h4></a>
		                        {{-- <p>{{ substr($project->description, 0, 20) }}</p> --}}
		                    </div>
		                </div>
		            </div>
	        	@endforeach
	            <div class="col-md-12 text-center">
	                <div class="load-more-button">
	                    <a href="{{ route('site.projects') }}" class="btn btn-default button-primary">See All Works</a>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	<!-- end of recent work section -->
@endsection