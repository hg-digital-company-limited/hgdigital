<div>
    <head>
        <title>Tin Tức - HG DIGITAL</title>
        <meta property="og:description" content="HG DIGITAL cung cấp giải pháp thiết kế website tối ưu, chuẩn SEO, giao diện đẹp mắt và thân thiện người dùng." />

    </head>
    <div class="page-breadcrumb-area">
        <div class="page-bg">
            <div class="page-overlay" style="background-color: rgba(23, 23, 23, 0.0);"></div>
            <img src="/automec/images/section-bg/page-header.jpg" alt="page header">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <div class="page-heading">
                            <h3 class="page-title">Tin Tức</h3> <!-- Có thể giữ nguyên hoặc thay đổi thành "Blog" -->
                        </div>
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a wire:navigate href="{{ route('home') }}">Trang Chủ</a></li>
                                <li class="active">Tin Tức</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End !--><!-- Blog Start !-->
    <div class="blog-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 te-blog-post">
                    <!-- Single Blog Start -->
                    @foreach($blogs as $blog)
                    <article class="te-post-item format-image">
                        <div class="te-post-thumbnail">
                            <a wire:navigate href="{{ route('blog', $blog->slug) }}"> <!-- Thay đổi đường dẫn -->
                                <img src="{{ Storage::url($blog->banner) }}" alt="Blog Image" /> <!-- Giả sử bạn có trường 'image' trong model Blog -->
                            </a>
                        </div>
                        <div class="te-post-content-wrapper">
                            <div class="te-post-meta">
                                <span><i class="fa-regular fa-calendar-days"></i>{{ $blog->created_at->format('F d, Y') }}</span>
                                <span><a href="#"><i class="fa-regular fa-eye"></i> Views ({{ $blog->views }})</a></span>
                                <span><a href="#"><i class="fa-regular fa-user"></i>By Admin</a></span> <!-- Thay đổi tên tác giả -->
                            </div>
                            <h3 class="te-post-title">
                                <a wire:navigate href="{{ route('blog', $blog->slug) }}">{{ $blog->title }}</a>
                            </h3>
                            <div class="te-post-content">
                                <p>{{ Str::limit($blog->short_desc, 200) }}</p> <!-- Giới hạn nội dung -->
                            </div>
                            <div class="te-read-more">
                                <a wire:navigate href="{{ route('blog', $blog->slug) }}" class="te-theme-btn">READ MORE<i class="fa-solid fa-arrow-right-long"></i></a>
                                <div class="te-social-share">
                                    <span class="te-social-share-title">share</span>
                                    <a class="facebook" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a class="twitter" href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a class="linkedin" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
                    <!-- Single Blog End -->
                    <div class="te-basic-pagination">
                        <ul class="pagination">
                            @if ($blogs->onFirstPage())
                                <li><span aria-current="page" class="page-numbers current">1</span></li>
                            @else
                                <li><a class="page-numbers" wire:navigate href="{{ $blogs->url(1) }}">1</a></li>
                            @endif

                            @for ($i = 2; $i <= $blogs->lastPage(); $i++)
                                @if ($i == $blogs->currentPage())
                                    <li><span aria-current="page" class="page-numbers current">{{ $i }}</span></li>
                                @else
                                    <li><a class="page-numbers" wire:navigate href="{{ $blogs->url($i) }}">{{ $i }}</a></li>
                                @endif
                            @endfor

                            @if ($blogs->hasMorePages())
                                <li><a class="next page-numbers" wire:navigate href="{{ $blogs->nextPageUrl() }}"><i class="fa-solid fa-angles-right"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
                <!-- Blog Post List End -->
                <!-- Blog Sidebar Start -->
                <div class="col-lg-4 order-1 order-lg-2">
                    <div class="sidebar">
                        <div class="widget te_widget_search">
                            <div class="te-widget-title">
                                <h4 class="wp-block-heading">Search</h4>
                            </div>
                            <form class="search-form" action="#" method="get">
                                <input type="text" placeholder="Type and Search" />
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget te_widget_latest_post">
                            <div class="te-widget-title">
                                <h4 class="wp-block-heading">Recent Posts</h4>
                            </div>
                            <ul>
                                @foreach($topBlogs as $topBlog)
                                    <li>
                                        <div class="te-latest-post-thumb">
                                            <a href="{{ route('blog', $topBlog->slug) }}">
                                                <img src="{{ Storage::url($topBlog->banner) }}" alt=""  style="height: 75px;object-fit: initial;width: initial;"/>
                                            </a>
                                        </div>
                                        <div class="te-latest-post-desc">
                                            <h3 class="te-latest-post-title">
                                                <a href="{{ route('blog', $topBlog->slug) }}">{{ $topBlog->title }}</a>
                                            </h3>
                                            <span class="te-latest-post-meta"><i class="fa-regular fa-calendar-days"></i>{{ $topBlog->created_at->format('d M, Y') }}</span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget te_widget_categories">
                            <div class="te-widget-title">
                                <h4 class="wp-block-heading">Categories</h4>
                            </div>
                            <div>
                                <ul>
                                    @foreach($categories as $category)
                                        <li>
                                            <a href="#">{{ $category->name }}</a> ({{ $category->blogs_count }})
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="widget te_widget_tag_cloud">
                            <div class="te-widget-title">
                                <h4 class="wp-block-heading">Tags</h4>
                            </div>
                            <div class="tagcloud">
                                <a href="#">Công Nghệ</a>
                                <a href="#">Điện Thoại</a>
                                <a href="#">Phần Mềm</a>
                                <a href="#">Hướng Dẫn</a>
                                <a href="#">Tin Tức</a>
                                <a href="#">Bảo Mật</a>
                                <a href="#">Đánh Giá</a>
                            </div>
                        </div>
                        {{-- <div class="widget te_widget_instagram_feed">
                            <div class="te-widget-title">
                                <h4 class="wp-block-heading">Gallery</h4>
                            </div>
                            <div class="widget-instagram-feed">
                                <div class="single-instagram-feed">
                                    <img src="/automec/images/instagram/instagram-1.jpg" alt="instagram photo">
                                </div>
                                <div class="single-instagram-feed">
                                    <img src="/automec/images/instagram/instagram-2.jpg" alt="instagram photo">
                                </div>
                                <div class="single-instagram-feed">
                                    <img src="/automec/images/instagram/instagram-3.jpg" alt="instagram photo">
                                </div>
                                <div class="single-instagram-feed">
                                    <img src="/automec/images/instagram/instagram-4.jpg" alt="instagram photo">
                                </div>
                                <div class="single-instagram-feed">
                                    <img src="/automec/images/instagram/instagram-5.jpg" alt="instagram photo">
                                </div>
                                <div class="single-instagram-feed">
                                    <img src="/automec/images/instagram/instagram-6.jpg" alt="instagram photo">
                                </div>
                            </div>
                        </div> --}}
                        <div class="widget te_widget_social_profile">
                            <div class="te-widget-title">
                                <h4 class="wp-block-heading">Social</h4>
                            </div>
                            <div class="te-social-profile">
                                <a class="facebook" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a class="twitter" href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a class="linkedin" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a class="instagram" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Sidebar Start -->
            </div>
        </div>
    </div>
    <!-- Blog End !-->

</div>
