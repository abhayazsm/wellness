@extends('frontend.layouts.app')

@section('title', $blog->title)

@section('content')

<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('img/common/bg-sub-title.jpg') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title text-white">Blog <span class="inner-text text-white">Details</span></h1>
            <div class="breadcumb-menu-wrap text-white">
                <ul class="breadcumb-menu">
                    <li class="text-white"><a href="{{ url('/') }}" class="text-white">Home</a></li>
                    <li class="text-white">Blog <span class="inner-text text-white">Details</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--==============================
    Blog Details Area
==============================-->
<section class="vs-blog-wrapper blog-details space-top space-extra-bottom mt-4">
    <div class="container">
        <div class="row gx-50">
            <div class="col-lg-8 col-xxl-9">
                <div class="vs-blog blog-single has-post-thumbnail">
                    <div class="blog-img">
                        <img src="{{ Storage::url($blog->image) }}" alt="{{ $blog->title }}">
                    </div>
                    <div class="blog-content">
                        <div class="blog-category">
                            <a href="#">{{ $blog->category->name ?? 'Uncategorized' }}</a>
                        </div>
                        <h2 class="blog-title">{{ $blog->title }}</h2>
                        <div class="blog-meta">
                            <a href="#"><i class="fas fa-user"></i>by {{ $blog->author ?? 'Admin' }}</a>
                            <a href="#"><i class="fas fa-calendar-alt"></i>{{ $blog->created_at->format('F d, Y') }}</a>
                            <a href="#"><i class="far fa-comments"></i>{{ $blog->comments_count ?? 0 }} comments</a>
                        </div>
                        <p>{!! $blog->content !!}</p>
                    </div>
                    <div class="share-links clearfix">
                        <div class="row justify-content-between">
                            <div class="col-md-auto">
                                <span class="share-links-title">Tags:</span>
                                <div class="tagcloud">
                                    @foreach ($blog->tags as $tag)
                                        <a href="#">{{ $tag->name }}</a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-auto text-xl-end">
                                <span class="share-links-title">Share:</span>
                                <ul class="social-links">
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xxl-3">
                <aside class="sidebar-area">
                    <div class="widget widget_categories">
                        <h3 class="widget_title">Categories</h3>
                        <ul>
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('blog-list', $category->slug) }}">{{ $category->name }}</a>
                                    <span>{{ $category->blogs_count }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                        <h3 class="widget_title">Latest post</h3>
                        <div class="recent-post-wrap">
                            @foreach ($latestPosts as $post)
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{ route('blog-detail', $post->slug) }}">
                                            <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title">
                                            <a class="text-inherit" href="{{ route('blog-detail', $post->slug) }}">
                                                {{ $post->title }}
                                            </a>
                                        </h4>
                                        <div class="recent-post-meta">
                                            <a href="#"><i class="fas fa-calendar-alt"></i>{{ $post->created_at->format('F d, Y') }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

@endsection
