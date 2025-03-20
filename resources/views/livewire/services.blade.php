<div>
    <head>
        <title>Dịch Vụ - HG DIGITAL</title>
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
                            <h3 class="page-title">Dịch Vụ</h3>
                        </div>
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a href="{{ route('home') }}">Trang Chủ</a></li>
                                <li class="active">Dịch Vụ</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End !--><!-- Service Page Area Start-->
    <div class="service-page te-py-120">
        <div class="container">
            <div class="feature-area-wrapper">
                <div class="row gy-4">
                    @foreach($services as $service)
                    <!-- single Service start -->
                    <div class="col-md-6 col-lg-4 ">
                        <div class="te-info-card style-2">
                            <div class="te-info-card-inner">
                                <div class="image">
                                    <img src="{{Storage::url($service->image)}}" alt="image"/>
                                </div>
                                <div class="te-content-wrapper">
                                    <div class="icon">
                                        <img src="/automec/images/icon/info-card/v-2/icon-1.png" alt="image"/>
                                    </div>
                                    <div class="te-title-wrapper">
                                        <h2 class="title"><a wire:navigate href="{{ route('service', ['slug' => $service->slug]) }}">{{$service->name}}</a></h2>
                                    </div>
                                    <div class="content">
                                        <p class="desc">{{ Str::limit($service->short_desc, 120) }}</p>
                                        <div class="te-read-more">
                                            <a wire:navigate href="{{ route('service', ['slug' => $service->slug]) }}" class="te-theme-btn">READ MORE <i class="fa-solid fa-arrow-right-long"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single Service end -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Service Page Area End !-->
</div>
