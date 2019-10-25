@extends('frontend.layouts.master')

@section('tilte') {{ $project->title }} @stop

@section('content')
<!-- start page header -->
<section class="page-header-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="paget-title">
                    <h2><span>Project Details</span></h2>
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
                    <li class="active">Project Details</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end of page header -->
<!-- start Project Details section -->
<section class="project-details-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="project-gallery-slider">
                    @foreach ($project->imagesListe as $image)
                        <div class="project-single-image">
                            <img src="{{ asset('storage/' . $image) }}" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-5">
                <div class="project-details">
                    <h4 class="project-heading">{{ $project->title }}</h4>
                    <ul>
                        <li><span>Project Date:</span>{{ dateToFrFormat($project->project_date) }}</li>
                        <li><span>Location:</span>{{ $project->location }}</li>
                        <li><span>Value:</span>{{ priceFormat($project->value) }}</li>
                        <li><span>Categories:</span>{{ optional($project->field)->title }}</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-7">
                <div class="project-description">
                    <h2>Description</h2>
                    <p>{{ $project->description }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of Project Details section -->
<!-- start brand slider -->
<div class="brand-slider" style="background-image: url({{ asset('frontend/asset/img/yellow-rake.png') }})">
    <div class="container">
        <div class="row brand-slider-active">
            @foreach ($partners as $partner)
                <div class="single-brand col-md-3 text-center">
                    <img src="{{ asset('storage/' . $partner->image) }}" alt="">
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- end of brand slider -->
@endsection