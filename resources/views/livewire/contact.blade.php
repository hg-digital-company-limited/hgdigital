<div>

    <head>
        <title>Liên Hệ - HG DIGITAL</title>
        <meta property="og:description"
            content="HG DIGITAL cung cấp giải pháp thiết kế website tối ưu, chuẩn SEO, giao diện đẹp mắt và thân thiện người dùng." />

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
                            <h3 class="page-title">Liên hệ với chúng tôi</h3>
                        </div>
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a href="index.php">Trang chủ</a></li>
                                <li class="active">Liên hệ với chúng tôi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End !--><!-- Contact Form Section Start -->
    <div class="contact-form-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="te-map-widget">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2658.2348715502594!2d106.64056959999999!3d10.851590999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752b001b76fa17%3A0x2992f7528f02492b!2sC%C3%94NG%20TY%20TNHH%20HG%20DIGITAL!5e1!3m2!1svi!2s!4v1742445672227!5m2!1svi!2s"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <!-- Contact Info Section Start !-->
                    <div class="te-contact-info-wrapper">
                        <div class="te-title-wrapper">
                            <h2 class="title">Hãy Cho Chúng Tôi Biết Về <br /> Dự Án Tiếp Theo Của Bạn</h2>
                        </div>
                        <div class="te-contact-info">
                            <div class="te-icon-card style-2">
                                <div class="icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">Địa chỉ</h3>
                                    <span class="desc">67 Đường ĐHT 22, Phường Đông Hưng Thuận, Quận 12, Thành phố Hồ
                                        Chí Minh, Việt Nam
                                    </span>
                                </div>
                            </div>
                            <div class="te-icon-card style-2">
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">Số điện thoại</h3>
                                    <a href="tel:0966579217" class="desc">+84 966579217</a>
                                </div>
                            </div>
                            <div class="te-icon-card style-2">
                                <div class="icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">Email</h3>
                                    <a href="mailto:hgdigital.company@gmail.com"
                                        class="desc">hgdigital.company@gmail.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="te-social-profile-link">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <!-- Contact Info Section End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form Section End -->
    <div class="contact-form te-pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Comment Form Start -->
                    <div class="te-comment-respond mt-0">
                        @if (session()->has('message'))
                            <div class="alert alert-danger">{{ session('message') }}</div>
                        @endif
                        @if (session()->has('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <form wire:submit.prevent="sendMail" class="te-comment-form">
                            <h3>Chúng Tôi Có Thể Giúp Doanh Nghiệp Bạn <br /> Phát Triển Mạnh Mẽ</h3>
                            <div class="row gx-4">
                                <div class="col-xl-6">
                                    <div class="te-contacts-email">
                                        <input wire:model="email" name="email" type="email" placeholder="Email của bạn*"
                                            required>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="te-contacts-name">
                                        <input wire:model="phone" name="phone" type="text"
                                            placeholder="Số điện thoại của bạn">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="te-contacts-message">
                                        <textarea wire:model="content" name="message" cols="20" rows="3"
                                            placeholder="Viết tin nhắn của bạn ở đây" required></textarea>
                                    </div>
                                </div>

                                <div class="col-xl-6" wire:ignore>
                                    <div class="te-contacts-email">
                                        @livewire('inc.capcha')

                                    </div>
                                </div>
                                <div class="col-12">
                                    <button wire:loading.attr="disabled" wire:target="sendMail"
                                        class="te-theme-btn style-2" type="submit">
                                        <span wire:loading wire:target="sendMail">Đang gửi...</span>
                                        <span wire:loading.remove wire:target="sendMail">Gửi Ngay</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Comment Form End -->
                </div>
            </div>
        </div>
    </div>
    <style>
        @media (max-width: 768px) {
            .te-comment-respond {
                padding: 20px;
            }
            .content {
            text-align: center;
        }

        h2.title {
            font-size: 28px !important;
            text-align: center;
        }
        }


    </style>
</div>