<div>
    <head>
        <title>{{$service->title}} - HG Digital</title>
        <meta name="description" content="{{$service->short_desc}}">
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
                            <h3 class="page-title">{{$service->title}}</h3>
                        </div>
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a wire:navigate href="{{ route('home') }}">Home</a></li>
                                <li><a wire:navigate href="{{ route('home') }}">Dịch vụ</a></li>
                                <li class="active">{{$service->name}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End !--><!-- Service Details Page Start !-->
    <div class="service-details-page">
        <div class="container">
            <div class="row">
                <!-- Service Details Content Start -->
                <div class="col-lg-8">
                    <div class="te-service-details-wrapper">
                        <div class="service-details">
                            <div class="content">
                                {!! $service->content !!}

                            </div>
                        </div>

                    </div>
                </div>
                <!-- Service Details Content End -->
                <!-- sidebar Start -->
                <div class="col-lg-4">
                    <div class="service-sidebar">
                        <div class="widget te_widget_categories">
                            <div class="te-widget-title">
                                <h4 class="wp-block-heading">Services List</h4>
                            </div>
                            <ul>
                                <li><a href="#">Gearbox Guru</a></li>
                                <li><a href="#">Turbo Tech Services</a></li>
                                <li><a href="#">Pro Drive Repairs</a></li>
                                <li><a href="#">Consumer Sector</a></li>
                                <li><a href="#">Apex Auto Clinic</a></li>
                                <li><a href="#">Precision Auto</a></li>
                            </ul>
                        </div>
                        <div class="widget te_widget_pdf">
                            <div class="te-widget-title">
                                <h4 class="wp-block-heading">Brochure</h4>
                            </div>

                            <a href="#" class="pdf-download-btn">
                                <div class="icon">
                                    <i class="fa-light fa-file-pdf"></i>
                                </div>
                                <div class="content">
                                    <span class="title">Download Brochure</span>
                                </div>
                            </a>
                            <a href="#" class="pdf-download-btn">
                                <div class="icon">
                                    <i class="fa-light fa-file-pdf"></i>
                                </div>
                                <div class="content">
                                    <span class="title">Company Details</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- sidebar Start -->
            </div>
        </div>
    </div>
    <!-- Service Details Page End !-->
    <style>
        h3 {
        font-size: 30px;
        line-height: 1.5;
        font-weight: bold;
    }
    @media only screen and (min-width: 0px) and (max-width: 767px) {
    h3 {
        font-size: 24px;
    }
}
    </style>
</div>
