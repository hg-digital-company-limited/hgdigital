<div>

    <head>
        <title>{{$blog->title}} - HG DIGITAL</title>
        <meta property="og:description" content="{{$blog->short_desc}}" />

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
                            <h3 class="page-title">{{$blog->title}}</h3>
                        </div>
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Chi Tiết Tin Tức</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End !-->
    <div class="blog-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 te-blog-details-wrapper">
                    <!-- Post Details Start -->
                    <article class="te-post-item">
                        <div class="te-post-thumbnail">
                            <a href="#">
                                <img src="{{Storage::url($blog->banner)}}" alt="Blog Image" />
                            </a>
                        </div>
                        <div class="te-post-content-wrapper">
                            <div class="te-post-meta">
                                <span><i class="far fa-calendar-check"></i>{{ $blog->created_at->format('F d, Y') }}</span>
                                <span><a href="#"><i class="far fa-user"></i>By Admin</a></span>
                                <span><a href="#"><i class="far fa-eye"></i>{{ $blog->views }} Views</a></span>
                            </div>

                            <div class="te-post-content"> {!! $blog->content !!}</div>
                            <div class="te-single-post-meta">
                                <div class="te-blog-post-tag">
                                    <span>TAGS</span>
                                    <div class="te-post-tag-list">
                                        <a href="#">Auto Repairs</a>
                                        <a href="#">Car Detailing</a>
                                        <a href="#">Fuel Efficiency</a>
                                    </div>
                                </div>
                                <div class="te-social-share">
                                    <span class="te-social-share-title">SHARE</span>
                                    <a class="facebook" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a class="twitter" href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a class="linkedin" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <div class="te-blog-post-nav">
                        <div class="te-post-navigation">
                            <a href="#" class="te-post-img">
                                <img src="/automec/images/blog/r1.jpg" alt="blog 1">
                            </a>
                            <div class="text">
                                <h4><a href="#" rel="prev">Protect Your Home With A Solid Roof</a> </h4>
                                <span>March 8, 2023 . Investor</span>
                            </div>
                        </div>
                        <div class="te-post-navigation">
                            <a href="#" class="te-post-img">
                                <img src="/automec/images/blog/r2.jpg" alt="blog 1">
                            </a>
                            <div class="text">
                                <h4><a href="#" rel="next">Trustworthy Roofing Services No Shortcuts</a> </h4>
                                <span>March 8, 2023 . Investor</span>
                            </div>
                        </div>
                    </div>
                    <!-- Post Author Start -->
                    <div class="te-author-info">
                        <div class="te-author-text">
                            <div class="te-post-author-info">
                                <div class="te-author-thumb">
                                    <a href="#"><img alt="" src="/automec/images/blog/avatar.jpg" class="avatar"
                                            height="120" width="120"></a>
                                </div>
                                <div class="te-post-author-content">
                                    <h3><a href="#">David Max</a></h3>
                                    <span class="designation">Stuff Writer</span>
                                    <div class="te-author-social-profiles">
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                            <p>Aliquam eros justo, posuere lobortis, viverra laoreet augue mattis fermentuer viverra
                                laoreet Aliqerojustoposuere loborti viverra laoreet matti ullamcorper posuere viverra
                                .Aliquam eros justo laoreet augue mattis fermentuer viverra laoreet </p>

                            <div class="te-author-post">
                                <a href="#">View All Posts</a>
                            </div>
                        </div>
                    </div>
                    <!-- Post Author End -->

                    <!-- Comment List Start -->
                    <div class="te-post-comments">
                        <div class="te-comment-title">
                            <h2>14 Comments Found</h2>
                        </div>
                        <div class="te-latest-comments">
                            <ul>
                                <li class="comment">
                                    <div class="te-comments-item">
                                        <div class="te-comments-avatar">
                                            <img src="/automec/images/commenter/commenter-1.jpg" alt="Commenter Author"
                                                height="96" width="96">
                                        </div>
                                        <div class="te-comments-text">
                                            <div class="te-avatar-name">
                                                <h5><a href="#">Avery James</a></h5>
                                                <span>14 August 2023, at 2.00 am</span>
                                                <a href="#" class="te-comment-reply">Reply</a>
                                            </div>
                                            <p>It is a long established fact that a reader williljl being li distracted
                                                by the readable content of amjlk page ghjkl when looking at its layout.
                                                the readable content of amjlk page ghjkl when looking at its layout that
                                                a reader.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="comment depth-1">
                                    <div class="te-comments-item">
                                        <div class="te-comments-avatar">
                                            <img src="/automec/images/commenter/commenter-2.jpg" alt="Commenter Author"
                                                height="96" width="96">
                                        </div>
                                        <div class="te-comments-text">
                                            <div class="te-avatar-name">
                                                <h5><a href="#">Jack David</a></h5>
                                                <span>14 August 2023, at 2.00 am</span>
                                                <a href="#" class="te-comment-reply">Reply</a>
                                            </div>
                                            <p>It is a long established fact that a reader williljl being li distracted
                                                by the readable content of amjlk page ghjkl when looking at its layout.
                                                the readable content of amjlk page ghjkl when looking at its layout that
                                                a reader.</p>
                                        </div>
                                    </div>
                                    <ul class="children">
                                        <li class="comment">
                                            <div class="te-comments-item">
                                                <div class="te-comments-avatar">
                                                    <img src="/automec/images/commenter/commenter-author.jpg"
                                                        alt="Commenter Author" height="96" width="96">
                                                </div>
                                                <div class="te-comments-text">
                                                    <div class="te-avatar-name">
                                                        <h5><a href="#">Jesse Mac</a></h5>
                                                        <span>14 August 2023, at 2.00 am</span>
                                                        <a href="#" class="te-comment-reply">Reply</a>
                                                    </div>
                                                    <p>It is a long established fact that a reader williljl being li
                                                        distracted by the readable content of amjlk page ghjkl when
                                                        looking at its layout. the readable content of amjlk page ghjkl
                                                        when looking at its layout that a reader.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="comment">
                                    <div class="te-comments-item">
                                        <div class="te-comments-avatar">
                                            <img src="/automec/images/commenter/commenter-3.jpg" alt="Commenter Author"
                                                height="96" width="96">
                                        </div>
                                        <div class="te-comments-text">
                                            <div class="te-avatar-name">
                                                <h5><a href="#">Bobby Jack</a></h5>
                                                <span>14 August 2023, at 2.00 am</span>
                                                <a href="#" class="te-comment-reply">Reply</a>
                                            </div>
                                            <p>It is a long established fact that a reader williljl being li distracted
                                                by the readable content of amjlk page ghjkl when looking at its layout.
                                                the readable content of amjlk page ghjkl when looking at its layout that
                                                a reader.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Comment List End -->
                    <!-- Comment Form Start -->
                    <div class="te-post-comments-form">
                        <div class="te-comment-respond">
                            <div class="te-post-comments-title">
                                <h2>Add A Comment</h2>
                            </div>
                            <form action="#"   class="te-comment-form">
                                <div class="row gx-4">
                                    <div class="col-xl-6">
                                        <div class="te-contacts-name">
                                            <input name="author" type="text" placeholder="Your name*">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="te-contacts-email">
                                            <input name="email" type="text" placeholder="Your email*">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="te-contacts-name">
                                            <input name="phone" type="text" placeholder="Your phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="te-contacts-name">
                                            <input name="website" type="text" placeholder="Your website">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="te-contacts-message">
                                            <textarea name="comment" cols="20" rows="3"
                                                placeholder="Start writing comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="te-theme-btn style-2" type="submit">POST COMMENT <i
                                                class="fa-solid fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Comment Form End -->
                    <!-- Post Details End -->
                </div>
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
    <!--- Blog End !-->


</div>