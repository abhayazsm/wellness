@extends('frontend.layouts.app')

@section('title', 'Blog List')

@section('content')
<style>
    .active {
        font-weight: bold;
        color: #007bff;
    }
</style>

<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('img/common/bg-sub-title.jpg') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title text-white">Blog List</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu text-white">
                    <li class="text-white"><a href="{{ url('/') }}" class="text-white">Home</a></li>
                    <li class="text-white">Blog List</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--==============================
    Blog Area
==============================-->
<section class="vs-blog-wrapper space-top space-extra-bottom mt-4">
    <div class="container">
        <div class="row gx-50">
            <div class="col-lg-8 col-xxl-9">
                @forelse ($blogs as $blog)
                    <div class="vs-blog blog-single has-post-thumbnail">
                        <div class="blog-img">
                            <a href="{{ route('blog-detail', $blog->slug) }}">
                                <img src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('img/default-blog.jpg') }}" alt="{{ $blog->title }}">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-category">
                                <a href="{{ route('blog-list', $blog->category->slug) }}">{{ $blog->category->name }}</a>
                            </div>
                            <h2 class="blog-title">
                                <a href="{{ route('blog-detail', $blog->slug) }}">{{ $blog->title }}</a>
                            </h2>
                            <div class="blog-meta">
                                <a href="#"><i class="fas fa-user"></i>by {{ $blog->author }}</a>
                                <!-- <a href="#"><i class="fas fa-calendar-alt"></i>{{ $blog->created_at->format('F d, Y') }}</a> -->
                                <a href="#"><i class="far fa-comments"></i>{{ $blog->comments_count ?? 0 }} comments</a>
                            </div>
                            <p class="blog-text">{{ Str::limit(strip_tags($blog->content), 150, '...') }}</p>
                            <a href="{{ route('blog-detail', $blog->slug) }}" class="vs-btn">Read More</a>
                        </div>
                    </div>
                @empty
                    <p>No blogs found{{ isset($slug) ? ' for this category' : '' }}.</p>
                @endforelse

                <!-- Pagination -->
                {{ $blogs->links('pagination::bootstrap-4') }}
            </div>

            <div class="col-lg-4 col-xxl-3">
                <aside class="sidebar-area">
                    <!-- Categories Widget -->
                    <div class="widget widget_categories">
                        <h3 class="widget_title">Categories</h3>
                        <ul>
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('blog-list', $category->slug) }}" 
                                    class="{{ isset($slug) && $slug === $category->slug ? 'active' : '' }}">
                                        {{ $category->name }}
                                    </a>
                                    <span>{{ $category->blogs_count }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>


                    <!-- Recent Posts Widget -->
                    <div class="widget">
                        <h3 class="widget_title">Latest Posts</h3>
                        <div class="recent-post-wrap">
                            @foreach ($recentBlogs as $recent)
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{ route('blog-detail', $recent->slug) }}">
                                            <img src="{{ $recent->image ? asset('storage/' . $recent->image) : asset('img/default-blog.jpg') }}" alt="{{ $recent->title }}">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title">
                                            <a class="text-inherit" href="{{ route('blog-detail', $recent->slug) }}">{{ $recent->title }}</a>
                                        </h4>
                                        <div class="recent-post-meta">
                                            <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i>{{ $blog->author }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Tags Widget -->
                    <div class="widget widget_tag_cloud">
                        <h3 class="widget_title">Popular Tags</h3>
                        <div class="tagcloud">
                            @foreach ($tags as $tag)
                                <a href="{{ route('blog-tag', $tag->slug) }}">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

@endsection
