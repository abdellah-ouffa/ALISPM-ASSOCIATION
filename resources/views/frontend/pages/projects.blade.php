@extends('frontend.layouts.master')

@section('title', 'Projects')

@section('content')
<!-- start page header -->
<section class="page-header-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="paget-title">
                    <h2>{{ setting('site.title') }} <span>Projects</span></h2>
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
                    <li class="active">Project</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end of page header -->
<section class="recent-work section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="project-nav">
                   <ul>
                        <li class="active" data-filter="*">All Project</li>
                        @foreach ($fields as $field)
                            <li data-filter=".{{ slugify($field->title) }}">{{ $field->title }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row projectactive">
            @foreach ($projects as $project)
                <div class="col-md-4 col-lg-3 {{ slugify(optional($project->field)->title) }}">
                    <div class="single-project" style="height: 300px">
                        <div class="project-thumb">
                            <a href="{{ route('site.projects.details', ['slug' => $project->slug]) }}">
                                <img style="height: 225px !important" src="{{ asset('storage/' . $project->firstImage) }}" alt="">
                            </a>
                        </div>
                        <div class="project-desc">
                            <a href="{{ route('site.projects.details', ['slug' => $project->slug]) }}"><h4>{{ $project->title }}</h4></a>
                            {{-- <p>{{ substr($project->description, 0, 20) }}</p> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection