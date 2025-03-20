-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 20, 2025 at 09:19 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hgdigital`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1742460797),
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1742460797;', 1742460797),
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1742457246),
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1742457246;', 1742457246);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_03_20_120437_create_services_table', 2),
(5, '2025_03_20_145433_add_columns_to_services_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `views` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `slug`, `name`, `created_at`, `updated_at`, `title`, `image`, `short_desc`, `content`, `views`) VALUES
(1, 'thiet-ke-website-ban-hang', 'Thiết kế website Bán hàng', '2025-03-20 05:12:49', '2025-03-20 09:04:32', 'Thiết Kế Website Bán Hàng: Tại Sao Nó Quan Trọng?', '01JPSAJFXFV7QS1EPD6KCZWQ0J.png', 'Trong thời đại công nghệ số hiện nay, việc sở hữu một website bán hàng chuyên nghiệp không chỉ là một lợi thế mà còn là một yêu cầu thiết yếu cho bất kỳ doanh nghiệp nào muốn phát triển. Dưới đây là những lý do và yếu tố quan trọng trong thiết kế website bán hàng.', '<h2>Thiết Kế Website Bán Hàng: Tại Sao Nó Quan Trọng?</h2><p>Trong thời đại công nghệ số hiện nay, việc sở hữu một website bán hàng chuyên nghiệp không chỉ là một lợi thế mà còn là một yêu cầu thiết yếu cho bất kỳ doanh nghiệp nào muốn phát triển. Dưới đây là những lý do và yếu tố quan trọng trong thiết kế website bán hàng.</p><h3>1. Tăng Cường Hiện Diện Trực Tuyến</h3><p>Với sự gia tăng của người tiêu dùng trực tuyến, một website bán hàng giúp doanh nghiệp của bạn tiếp cận được nhiều khách hàng hơn. Một trang web được tối ưu hóa tốt sẽ giúp bạn xuất hiện trên các công cụ tìm kiếm, từ đó thu hút traffic tự nhiên.</p><h3>2. Cải Thiện Trải Nghiệm Người Dùng</h3><p>Thiết kế website bán hàng không chỉ cần đẹp mà còn phải dễ sử dụng. Một giao diện thân thiện sẽ giúp khách hàng dễ dàng tìm kiếm sản phẩm, thêm vào giỏ hàng và hoàn tất thanh toán. Hãy chắc chắn rằng trang web của bạn tương thích với cả máy tính và thiết bị di động.</p><h3>3. Tăng Tỷ Lệ Chuyển Đổi</h3><p>Một website được thiết kế tốt có thể làm tăng tỷ lệ chuyển đổi. Sử dụng các yếu tố như nút kêu gọi hành động (CTA) rõ ràng, hình ảnh sản phẩm chất lượng cao và mô tả sản phẩm hấp dẫn sẽ khuyến khích khách hàng thực hiện giao dịch.</p><h3>4. Tích Hợp Các Phương Thức Thanh Toán</h3><p>Để thuận tiện cho khách hàng, website bán hàng cần tích hợp nhiều phương thức thanh toán khác nhau như thẻ tín dụng, ví điện tử và chuyển khoản ngân hàng. Điều này không chỉ tạo sự tin tưởng mà còn giúp quá trình mua sắm diễn ra suôn sẻ.</p><h3>5. Phân Tích và Theo Dõi Hiệu Suất</h3><p>Sử dụng các công cụ phân tích như Google Analytics để theo dõi hành vi người dùng trên website của bạn. Điều này sẽ giúp bạn hiểu rõ hơn về khách hàng, từ đó điều chỉnh chiến lược marketing và cải thiện trải nghiệm người dùng.</p><h3>Kết Luận</h3><p>Thiết kế website bán hàng là một yếu tố quan trọng trong việc xây dựng thương hiệu và phát triển doanh nghiệp. Đầu tư vào một trang web chất lượng sẽ mang lại nhiều lợi ích lâu dài, giúp bạn kết nối tốt hơn với khách hàng và tăng trưởng doanh thu. Hãy bắt đầu ngay hôm nay để không bỏ lỡ cơ hội trong thị trường trực tuyến đầy tiềm năng này!</p><p><br></p>', 0),
(2, 'thiet-ke-website-bat-dong-san', 'Thiết kế website Bất động sản', '2025-03-20 05:13:04', '2025-03-20 09:06:23', 'Thiết Kế Website Bất Động Sản: Tạo Nền Tảng Vững Chắc Cho Doanh Nghiệp', '01JPSB5PHT3TAT1W5B9STJNJ3Y.png', 'Trong ngành bất động sản, việc có một website chuyên nghiệp không chỉ giúp bạn quảng bá sản phẩm mà còn tạo nên sự tin tưởng trong mắt khách hàng. Dưới đây là những yếu tố quan trọng và lợi ích của việc thiết kế website bất động sản.', '<h2>Thiết Kế Website Bất Động Sản: Tạo Nền Tảng Vững Chắc Cho Doanh Nghiệp</h2><p>Trong ngành bất động sản, việc có một website chuyên nghiệp không chỉ giúp bạn quảng bá sản phẩm mà còn tạo nên sự tin tưởng trong mắt khách hàng. Dưới đây là những yếu tố quan trọng và lợi ích của việc thiết kế website bất động sản.</p><h3>1. Hiện Diện Đáng Tin Cậy</h3><p>Một website bất động sản được thiết kế chuyên nghiệp thể hiện sự nghiêm túc và tin cậy của doanh nghiệp. Khách hàng thường có xu hướng tìm kiếm thông tin trực tuyến trước khi đưa ra quyết định mua bán, vì vậy một trang web chất lượng sẽ tạo ấn tượng tốt và thu hút khách hàng.</p><h3>2. Trình Bày Thông Tin Rõ Ràng</h3><p>Website bất động sản cần cung cấp thông tin chi tiết về các sản phẩm như nhà đất, căn hộ, biệt thự, và các dự án khác. Điều này bao gồm hình ảnh chất lượng cao, mô tả chi tiết, giá cả và các tiện ích xung quanh. Một giao diện dễ dàng điều hướng sẽ giúp khách hàng tìm kiếm thông tin nhanh chóng.</p><h3>3. Tính Năng Tìm Kiếm Nâng Cao</h3><p>Khách hàng thường muốn tìm kiếm bất động sản theo nhiều tiêu chí khác nhau như vị trí, giá cả, diện tích, và loại hình. Việc tích hợp chức năng tìm kiếm nâng cao giúp khách hàng dễ dàng tìm thấy sản phẩm phù hợp với nhu cầu của họ.</p><h3>4. Tích Hợp Bản Đồ và Định Vị</h3><p>Sử dụng bản đồ tích hợp giúp khách hàng dễ dàng xác định vị trí của bất động sản. Điều này không chỉ giúp họ hình dung rõ hơn về khu vực mà còn tạo cảm giác an tâm khi quyết định đầu tư.</p><h3>5. Cập Nhật Thông Tin Thường Xuyên</h3><p>Ngành bất động sản luôn thay đổi và cập nhật nhanh chóng. Một website cần được duy trì và cập nhật thường xuyên với các thông tin mới nhất về dự án, giá cả, và các chương trình khuyến mãi. Điều này giúp khách hàng luôn nhận được thông tin chính xác và kịp thời.</p><h3>Kết Luận</h3><p>Thiết kế website bất động sản là một yếu tố quan trọng không thể bỏ qua trong chiến lược kinh doanh của bạn. Một trang web chất lượng không chỉ giúp bạn thu hút khách hàng mà còn nâng cao uy tín thương hiệu. Hãy đầu tư vào một website chuyên nghiệp để tận dụng tối đa tiềm năng của thị trường bất động sản!</p><p><br></p>', 0),
(3, 'thiet-ke-website-noi-that', 'Thiết kế website Nội thất', '2025-03-20 05:13:08', '2025-03-20 09:06:32', 'Thiết Kế Website Nội Thất: Nâng Tầm Thương Hiệu Của Bạn', '01JPSBF6TQAFB4HSYBBWMZVE9A.png', 'Trong lĩnh vực nội thất, việc sở hữu một website chuyên nghiệp là rất quan trọng để thu hút khách hàng và giới thiệu sản phẩm của bạn. Dưới đây là những yếu tố cần thiết và lợi ích của việc thiết kế website nội thất.', '<h2>Thiết Kế Website Nội Thất: Nâng Tầm Thương Hiệu Của Bạn</h2><p>Trong lĩnh vực nội thất, việc sở hữu một website chuyên nghiệp là rất quan trọng để thu hút khách hàng và giới thiệu sản phẩm của bạn. Dưới đây là những yếu tố cần thiết và lợi ích của việc thiết kế website nội thất.</p><h3>1. Tạo Ấn Tượng Đầu Tiên</h3><p>Website là bộ mặt của doanh nghiệp bạn trên internet. Một thiết kế đẹp mắt, hiện đại và chuyên nghiệp sẽ tạo ấn tượng tốt với khách hàng ngay từ cái nhìn đầu tiên. Hình ảnh sản phẩm sắc nét và bố cục hài hòa sẽ giúp khách hàng dễ dàng hình dung về phong cách và chất lượng của nội thất bạn cung cấp.</p><h3>2. Trình Bày Danh Mục Sản Phẩm</h3><p>Website nội thất cần có một danh mục sản phẩm rõ ràng và dễ dàng điều hướng. Hãy chắc chắn rằng các sản phẩm được phân loại hợp lý (như bàn, ghế, giường, tủ, v.v.) và có mô tả chi tiết, bao gồm kích thước, chất liệu và giá cả. Điều này giúp khách hàng dễ dàng tìm kiếm và so sánh các sản phẩm.</p><h3>3. Tính Năng Tùy Chọn Thiết Kế</h3><p>Một số website nội thất hiện đại cung cấp tính năng cho phép khách hàng tùy chỉnh sản phẩm. Điều này có thể bao gồm việc chọn màu sắc, chất liệu hoặc kích thước. Tính năng này không chỉ thu hút khách hàng mà còn giúp họ cảm thấy mình có sự tham gia trong quá trình tạo ra sản phẩm.</p><h3>4. Cung Cấp Ý Tưởng Thiết Kế</h3><p>Ngoài việc bán sản phẩm, website của bạn cũng có thể trở thành nguồn cảm hứng cho khách hàng. Hãy tạo một phần blog hoặc thư viện hình ảnh để chia sẻ các ý tưởng thiết kế, mẹo trang trí và xu hướng nội thất mới. Điều này không chỉ thu hút khách hàng mà còn tăng cường uy tín thương hiệu của bạn.</p><h3>5. Tích Hợp Các Phương Thức Liên Hệ</h3><p>Đảm bảo rằng khách hàng có thể liên hệ với bạn một cách dễ dàng thông qua website. Tích hợp các phương thức liên hệ như biểu mẫu liên hệ, số điện thoại, và các trang mạng xã hội. Điều này giúp khách hàng cảm thấy thoải mái khi cần tư vấn hoặc hỗ trợ.</p><h3>Kết Luận</h3><p>Thiết kế website nội thất không chỉ là một công cụ bán hàng mà còn là cách để xây dựng thương hiệu và kết nối với khách hàng. Một trang web chất lượng sẽ giúp bạn nổi bật trong thị trường cạnh tranh và thu hút được nhiều khách hàng hơn. Hãy bắt đầu ngay hôm nay để nâng tầm thương hiệu nội thất của bạn!</p><p><br></p>', 0),
(4, 'thiet-ke-website-giao-duc', 'Thiết kế website Giáo dục', '2025-03-20 05:13:15', '2025-03-20 09:07:23', 'Thiết Kế Website Giáo Dục: Xây Dựng Nền Tảng Học Tập Hiệu Quả', '01JPSBP3P8ZFP5EH9VN0PFAFCG.png', 'Trong thời đại công nghệ số, việc thiết kế một website giáo dục chuyên nghiệp là cần thiết để cung cấp thông tin và hỗ trợ học tập cho học sinh, sinh viên cũng như người học ở mọi lứa tuổi. Dưới đây là những yếu tố quan trọng và lợi ích của việc thiết kế website giáo dục.', '<h2>Thiết Kế Website Giáo Dục: Xây Dựng Nền Tảng Học Tập Hiệu Quả</h2><p>Trong thời đại công nghệ số, việc thiết kế một website giáo dục chuyên nghiệp là cần thiết để cung cấp thông tin và hỗ trợ học tập cho học sinh, sinh viên cũng như người học ở mọi lứa tuổi. Dưới đây là những yếu tố quan trọng và lợi ích của việc thiết kế website giáo dục.</p><h3>1. Cung Cấp Thông Tin Đầy Đủ và Rõ Ràng</h3><p>Website giáo dục cần cung cấp thông tin chi tiết về các khóa học, chương trình học, giảng viên, và các hoạt động ngoại khóa. Hãy đảm bảo rằng thông tin được trình bày một cách rõ ràng và dễ hiểu, giúp người dùng dễ dàng tìm kiếm và nắm bắt thông tin.</p><h3>2. Giao Diện Thân Thiện và Dễ Sử Dụng</h3><p>Một giao diện người dùng thân thiện sẽ giúp học sinh và phụ huynh dễ dàng điều hướng website. Sử dụng menu rõ ràng, biểu tượng và màu sắc hài hòa để tạo cảm giác dễ chịu cho người dùng. Hãy đảm bảo rằng website tương thích với cả máy tính và thiết bị di động.</p><h3>3. Tính Năng Đăng Ký và Quản Lý Khóa Học</h3><p>Website giáo dục nên có tính năng cho phép học sinh đăng ký các khóa học trực tuyến. Các giảng viên cũng nên có quyền truy cập để quản lý thông tin khóa học, điểm số và thông báo cho học sinh về các hoạt động mới. Điều này giúp tối ưu hóa quy trình học tập và quản lý.</p><h3>4. Tích Hợp Hệ Thống Học Tập Trực Tuyến</h3><p>Việc tích hợp các công cụ học tập trực tuyến, như video bài giảng, tài liệu học tập và diễn đàn thảo luận, sẽ giúp nâng cao trải nghiệm học tập. Học sinh có thể học tập mọi lúc, mọi nơi, từ đó tạo điều kiện cho việc học tập linh hoạt.</p><h3>5. Cung Cấp Tài Nguyên Học Tập</h3><p>Hãy tạo một thư viện tài nguyên học tập, bao gồm sách điện tử, bài viết, video và các công cụ hỗ trợ học tập khác. Điều này không chỉ giúp học sinh nâng cao kiến thức mà còn khuyến khích họ tự học và khám phá.</p><h3>Kết Luận</h3><p>Thiết kế website giáo dục là một yếu tố quan trọng trong việc nâng cao chất lượng giáo dục và kết nối với học sinh. Một trang web chất lượng sẽ không chỉ thu hút người dùng mà còn tạo ra những trải nghiệm học tập tích cực và hiệu quả. Hãy bắt tay vào thiết kế một website giáo dục chuyên nghiệp để góp phần vào sự phát triển của giáo dục trong thời đại số!</p><p><br></p>', 0),
(5, 'thiet-ke-website-du-lich', 'Thiết kế website Du lịch', '2025-03-20 05:13:27', '2025-03-20 09:06:55', 'Thiết Kế Website Du Lịch: Khám Phá Thế Giới Qua Màn Hình', '01JPSBNSBPAXRTQX310R398C5R.png', 'Trong thời đại công nghệ số, việc sở hữu một website du lịch đẹp và chuyên nghiệp không chỉ là một lợi thế mà còn là yếu tố quyết định sự thành công trong ngành du lịch. Một trang web ấn tượng có thể thu hút hàng triệu khách hàng tiềm năng, tạo dựng thương hiệu và tăng cường sự hiện diện trên thị trường.', '<h2>Thiết Kế Website Du Lịch: Khám Phá Thế Giới Qua Màn Hình</h2><p>Trong thời đại số, một website du lịch chuyên nghiệp không chỉ giúp bạn quảng bá các tour du lịch mà còn tạo ra những trải nghiệm thú vị cho người dùng. Dưới đây là những yếu tố cần thiết và lợi ích của việc thiết kế website du lịch.</p><h3>1. Tạo Ấn Tượng Đầu Tiên</h3><p>Website là bộ mặt của doanh nghiệp bạn trên internet. Một thiết kế đẹp mắt, với hình ảnh hấp dẫn và bố cục hợp lý sẽ thu hút khách hàng ngay từ cái nhìn đầu tiên. Hãy đảm bảo rằng các địa điểm du lịch nổi bật là điểm nhấn chính trong thiết kế của bạn.</p><h3>2. Cung Cấp Thông Tin Chi Tiết</h3><p>Website du lịch cần cung cấp thông tin chi tiết về các tour, địa điểm, giá cả và các dịch vụ đi kèm. Thông tin rõ ràng và dễ hiểu giúp khách hàng dễ dàng tìm kiếm và lựa chọn tour phù hợp với nhu cầu của họ.</p><h3>3. Tính Năng Đặt Tour Trực Tuyến</h3><p>Hãy tích hợp tính năng cho phép khách hàng đặt tour trực tuyến, bao gồm lựa chọn ngày đi, số lượng người và các dịch vụ đi kèm. Điều này giúp tối ưu hóa quy trình đặt tour và tăng cường trải nghiệm người dùng.</p><h3>4. Đánh Giá và Nhận Xét</h3><p>Cung cấp phần đánh giá và nhận xét từ khách hàng trước đó giúp tăng cường sự tin tưởng cho người dùng mới. Những đánh giá tích cực sẽ khuyến khích khách hàng lựa chọn dịch vụ của bạn.</p><h3>5. Tích Hợp Các Công Cụ Hỗ Trợ</h3><p>Tích hợp các công cụ như tìm kiếm chuyến bay, đặt phòng khách sạn và thuê xe sẽ giúp khách hàng có trải nghiệm toàn diện hơn. Điều này không chỉ làm tăng giá trị cho website mà còn tạo ra sự tiện lợi cho người dùng.</p><h3>Kết Luận</h3><p>Thiết kế website du lịch là một yếu tố quan trọng trong việc thu hút khách hàng và quảng bá dịch vụ của bạn. Một trang web chất lượng sẽ không chỉ giúp bạn nổi bật trong thị trường cạnh tranh mà còn tạo ra những trải nghiệm du lịch đáng nhớ cho khách hàng. Hãy bắt đầu ngay hôm nay để đưa doanh nghiệp du lịch của bạn lên một tầm cao mới!</p><p><br></p>', 0),
(6, 'thiet-ke-website-xe-hoi', 'Thiết kế website Xe hơi', '2025-03-20 05:13:33', '2025-03-20 09:07:15', 'Thiết Kế Website Xe Hơi: Nâng Tầm Trải Nghiệm Khách Hàng', '01JPSBQMQYMAX3GJJTVM29S3T8.png', 'Trong ngành công nghiệp ô tô, một website chuyên nghiệp không chỉ giúp bạn quảng bá các sản phẩm mà còn tạo ra những trải nghiệm thú vị cho khách hàng. Dưới đây là những yếu tố quan trọng và lợi ích của việc thiết kế website xe hơi.', '<h2>Thiết Kế Website Xe Hơi: Nâng Tầm Trải Nghiệm Khách Hàng</h2><p>Trong ngành công nghiệp ô tô, một website chuyên nghiệp không chỉ giúp bạn quảng bá các sản phẩm mà còn tạo ra những trải nghiệm thú vị cho khách hàng. Dưới đây là những yếu tố quan trọng và lợi ích của việc thiết kế website xe hơi.</p><h3>1. Tạo Ấn Tượng Đầu Tiên</h3><p>Website là bộ mặt của doanh nghiệp bạn trên internet. Một thiết kế hiện đại và bắt mắt sẽ thu hút khách hàng ngay từ cái nhìn đầu tiên. Hình ảnh sắc nét và mô tả chi tiết về các mẫu xe sẽ giúp người dùng dễ dàng hình dung và lựa chọn.</p><h3>2. Cung Cấp Thông Tin Sản Phẩm Chi Tiết</h3><p>Website xe hơi cần có thông tin chi tiết về các mẫu xe, bao gồm thông số kỹ thuật, tính năng, giá cả và các tùy chọn đi kèm. Thông tin rõ ràng và dễ hiểu giúp khách hàng dễ dàng so sánh và đưa ra quyết định.</p><h3>3. Tính Năng Đặt Lịch Thử Xe</h3><p>Tích hợp tính năng cho phép khách hàng đặt lịch thử xe trực tuyến là một điểm cộng lớn. Điều này không chỉ giúp tối ưu hóa quy trình mà còn tạo cảm giác thuận tiện cho khách hàng khi muốn trải nghiệm sản phẩm.</p><h3>4. Đánh Giá và Nhận Xét</h3><p>Cung cấp phần đánh giá và nhận xét từ khách hàng trước đó giúp tăng cường sự tin tưởng cho người dùng mới. Những phản hồi tích cực sẽ khuyến khích khách hàng lựa chọn các mẫu xe của bạn.</p><h3>5. Tin Tức và Xu Hướng Ngành Ô Tô</h3><p>Một phần tin tức và xu hướng ngành ô tô trên website sẽ giúp khách hàng cập nhật thông tin mới nhất. Điều này không chỉ tạo giá trị cho người dùng mà còn thể hiện sự chuyên nghiệp của thương hiệu.</p><h3>Kết Luận</h3><p>Thiết kế website xe hơi là một yếu tố quan trọng trong việc thu hút khách hàng và quảng bá sản phẩm của bạn. Một trang web chất lượng sẽ không chỉ giúp bạn nổi bật trong thị trường cạnh tranh mà còn tạo ra những trải nghiệm đáng nhớ cho khách hàng. Hãy bắt đầu ngay hôm nay để nâng tầm thương hiệu xe hơi của bạn!</p><p><br></p>', 0),
(7, 'thiet-ke-website-lam-dep', 'Thiết kế website Làm đẹp', '2025-03-20 05:13:39', '2025-03-20 09:07:41', 'Thiết Kế Website Làm Đẹp: Tạo Dựng Hình Ảnh Thương Hiệu Quyến Rũ', '01JPSBSHTKGHWDZTXP71GMF9H6.png', 'Trong ngành công nghiệp làm đẹp, một website chuyên nghiệp không chỉ giúp bạn quảng bá dịch vụ mà còn tạo ra những trải nghiệm thú vị cho khách hàng. Dưới đây là những yếu tố quan trọng và lợi ích của việc thiết kế website làm đẹp.', '<h2>Thiết Kế Website Làm Đẹp: Tạo Dựng Hình Ảnh Thương Hiệu Quyến Rũ</h2><p>Trong ngành công nghiệp làm đẹp, một website chuyên nghiệp không chỉ giúp bạn quảng bá dịch vụ mà còn tạo ra những trải nghiệm thú vị cho khách hàng. Dưới đây là những yếu tố quan trọng và lợi ích của việc thiết kế website làm đẹp.</p><h3>1. Tạo Ấn Tượng Đầu Tiên</h3><p>Website là bộ mặt của doanh nghiệp bạn trên internet. Một thiết kế hấp dẫn, với màu sắc và hình ảnh phù hợp sẽ thu hút khách hàng ngay từ cái nhìn đầu tiên. Hãy sử dụng hình ảnh chất lượng cao để thể hiện sự chuyên nghiệp trong dịch vụ làm đẹp của bạn.</p><h3>2. Cung Cấp Thông Tin Dịch Vụ Chi Tiết</h3><p>Website cần có thông tin chi tiết về các dịch vụ làm đẹp mà bạn cung cấp, bao gồm mô tả, giá cả và quy trình thực hiện. Thông tin rõ ràng và dễ hiểu giúp khách hàng dễ dàng lựa chọn dịch vụ phù hợp với nhu cầu của họ.</p><h3>3. Tính Năng Đặt Lịch Hẹn Trực Tuyến</h3><p>Tích hợp tính năng cho phép khách hàng đặt lịch hẹn trực tuyến là một điểm cộng lớn. Điều này không chỉ giúp tối ưu hóa quy trình mà còn tạo cảm giác thuận tiện cho khách hàng khi muốn trải nghiệm dịch vụ.</p><h3>4. Đánh Giá và Nhận Xét</h3><p>Cung cấp phần đánh giá và nhận xét từ khách hàng trước đó giúp tăng cường sự tin tưởng cho người dùng mới. Những phản hồi tích cực sẽ khuyến khích khách hàng lựa chọn dịch vụ của bạn.</p><h3>5. Blog và Xu Hướng Làm Đẹp</h3><p>Một phần blog về các mẹo làm đẹp, xu hướng mới và sản phẩm hot sẽ giúp khách hàng cập nhật thông tin và tạo sự kết nối với thương hiệu. Điều này không chỉ tạo giá trị cho người dùng mà còn thể hiện sự chuyên nghiệp của bạn trong ngành.</p><h3>Kết Luận</h3><p>Thiết kế website làm đẹp là một yếu tố quan trọng trong việc thu hút khách hàng và quảng bá dịch vụ của bạn. Một trang web chất lượng sẽ không chỉ giúp bạn nổi bật trong thị trường cạnh tranh mà còn tạo ra những trải nghiệm đáng nhớ cho khách hàng. Hãy bắt đầu ngay hôm nay để nâng tầm thương hiệu làm đẹp của bạn!</p><p><br></p>', 0),
(8, 'thiet-ke-website-tin-tuc', 'Thiết kế website Tin tức', '2025-03-20 05:13:47', '2025-03-20 09:08:11', 'Thiết Kế Website Tin Tức: Cung Cấp Thông Tin Nhanh Chóng và Chính Xác', '01JPSBVRHWY39JC5JSA1EJY4TE.png', 'Trong thời đại thông tin hiện nay, một website tin tức chuyên nghiệp không chỉ giúp bạn truyền tải thông tin mà còn tạo ra những trải nghiệm tốt cho độc giả. Dưới đây là những yếu tố quan trọng và lợi ích của việc thiết kế website tin tức.', '<h2>Thiết Kế Website Tin Tức: Cung Cấp Thông Tin Nhanh Chóng và Chính Xác</h2><p>Trong thời đại thông tin hiện nay, một website tin tức chuyên nghiệp không chỉ giúp bạn truyền tải thông tin mà còn tạo ra những trải nghiệm tốt cho độc giả. Dưới đây là những yếu tố quan trọng và lợi ích của việc thiết kế website tin tức.</p><h3>1. Giao Diện Thân Thiện và Dễ Dàng Điều Hướng</h3><p>Website tin tức cần có một giao diện trực quan, dễ sử dụng để độc giả có thể nhanh chóng tìm thấy thông tin họ cần. Sử dụng các danh mục rõ ràng và bộ lọc thông tin giúp cải thiện trải nghiệm người dùng.</p><h3>2. Cung Cấp Nội Dung Đa Dạng</h3><p>Nội dung là yếu tố cốt lõi của một website tin tức. Hãy đảm bảo rằng bạn cung cấp đầy đủ các loại tin tức, từ tin tức chính trị, kinh tế, xã hội đến các sự kiện thể thao và giải trí. Đa dạng hóa nội dung sẽ thu hút nhiều loại độc giả khác nhau.</p><h3>3. Tính Năng Cập Nhật Tin Tức Tức Thì</h3><p>Một website tin tức cần có khả năng cập nhật thông tin nhanh chóng và liên tục. Hãy tích hợp tính năng thông báo hoặc bản tin để độc giả có thể nhận thông tin mới nhất ngay lập tức.</p><h3>4. Tích Hợp Các Công Cụ Chia Sẻ Xã Hội</h3><p>Tích hợp các nút chia sẻ trên mạng xã hội sẽ giúp độc giả dễ dàng chia sẻ bài viết của bạn đến với bạn bè và người thân. Điều này không chỉ tăng cường sự hiện diện của bạn trên mạng mà còn mở rộng phạm vi tiếp cận độc giả.</p><h3>5. Đánh Giá và Nhận Xét</h3><p>Cung cấp một phần để độc giả có thể bình luận và đánh giá bài viết giúp tạo ra sự tương tác và kết nối với cộng đồng. Những phản hồi này sẽ giúp bạn cải thiện nội dung và phục vụ tốt hơn cho độc giả.</p><h3>Kết Luận</h3><p>Thiết kế website tin tức là một yếu tố quan trọng trong việc cung cấp thông tin nhanh chóng và chính xác cho độc giả. Một trang web chất lượng sẽ giúp bạn nổi bật trong thị trường cạnh tranh và thu hút được nhiều độc giả hơn. Hãy bắt đầu ngay hôm nay để xây dựng một website tin tức chuyên nghiệp và hiệu quả!</p><p><br></p>', 0),
(9, 'thiet-ke-website-thuc-pham', 'Thiết kế website Thực phẩm', '2025-03-20 05:13:54', '2025-03-20 09:08:35', 'Thiết Kế Website Thực Phẩm: Kết Nối Hương Vị và Khách Hàng', '01JPSBX577VG10ENY274XH2V2G.png', 'Trong ngành thực phẩm, việc sở hữu một website chuyên nghiệp không chỉ giúp bạn quảng bá sản phẩm mà còn tạo ra những trải nghiệm thú vị cho khách hàng. Dưới đây là những yếu tố quan trọng và lợi ích của việc thiết kế website thực phẩm.', '<h2>Thiết Kế Website Thực Phẩm: Kết Nối Hương Vị và Khách Hàng</h2><p>Trong ngành thực phẩm, việc sở hữu một website chuyên nghiệp không chỉ giúp bạn quảng bá sản phẩm mà còn tạo ra những trải nghiệm thú vị cho khách hàng. Dưới đây là những yếu tố quan trọng và lợi ích của việc thiết kế website thực phẩm.</p><h3>1. Giao Diện Hấp Dẫn và Thân Thiện</h3><p>Website thực phẩm cần có giao diện hấp dẫn, với hình ảnh chất lượng cao về sản phẩm. Màu sắc tươi sáng và bố cục hợp lý sẽ thu hút khách hàng ngay từ cái nhìn đầu tiên, tạo cảm giác ngon miệng và hấp dẫn.</p><h3>2. Cung Cấp Thông Tin Chi Tiết về Sản Phẩm</h3><p>Hãy đảm bảo rằng website của bạn cung cấp thông tin chi tiết về các sản phẩm thực phẩm, bao gồm nguyên liệu, giá cả, và các lợi ích sức khỏe. Thông tin rõ ràng sẽ giúp khách hàng dễ dàng lựa chọn sản phẩm phù hợp với nhu cầu của họ.</p><h3>3. Tính Năng Đặt Hàng Trực Tuyến</h3><p>Tích hợp tính năng cho phép khách hàng đặt hàng trực tuyến là một điểm cộng lớn. Điều này không chỉ giúp tối ưu hóa quy trình mua sắm mà còn tạo cảm giác thuận tiện cho khách hàng khi muốn thưởng thức sản phẩm của bạn.</p><h3>4. Blog và Công Thức Nấu Ăn</h3><p>Một phần blog chia sẻ công thức nấu ăn, mẹo chế biến và thông tin dinh dưỡng sẽ giúp khách hàng cảm thấy gắn bó hơn với thương hiệu của bạn. Điều này không chỉ tạo giá trị cho người dùng mà còn tăng cường sự trung thành với thương hiệu.</p><h3>5. Đánh Giá và Nhận Xét</h3><p>Cung cấp phần đánh giá và nhận xét từ khách hàng giúp tăng cường sự tin tưởng cho khách hàng mới. Những phản hồi tích cực sẽ khuyến khích khách hàng lựa chọn sản phẩm của bạn.</p><h3>Kết Luận</h3><p>Thiết kế website thực phẩm là một yếu tố quan trọng trong việc thu hút khách hàng và quảng bá sản phẩm của bạn. Một trang web chất lượng sẽ không chỉ giúp bạn nổi bật trong thị trường cạnh tranh mà còn tạo ra những trải nghiệm đáng nhớ cho khách hàng. Hãy bắt đầu ngay hôm nay để nâng tầm thương hiệu thực phẩm của bạn!</p><p><br></p>', 0),
(10, 'thiet-ke-website-cong-ty', 'Thiết kế website Công ty', '2025-03-20 05:14:04', '2025-03-20 09:08:55', 'Thiết Kế Website Công Ty: Xây Dựng Hình Ảnh Chuyên Nghiệp và Đáng Tin Cậy', '01JPSBZHZCENH4ZYFZE78Y2QF0.png', 'Trong môi trường kinh doanh hiện đại, một website công ty chuyên nghiệp không chỉ là công cụ quảng bá mà còn là cầu nối giữa bạn và khách hàng. Dưới đây là những yếu tố quan trọng và lợi ích của việc thiết kế website công ty.', '<h2>Thiết Kế Website Công Ty: Xây Dựng Hình Ảnh Chuyên Nghiệp và Đáng Tin Cậy</h2><p>Trong môi trường kinh doanh hiện đại, một website công ty chuyên nghiệp không chỉ là công cụ quảng bá mà còn là cầu nối giữa bạn và khách hàng. Dưới đây là những yếu tố quan trọng và lợi ích của việc thiết kế website công ty.</p><h3>1. Giao Diện Chuyên Nghiệp và Thân Thiện</h3><p>Website công ty cần có giao diện chuyên nghiệp, dễ dàng điều hướng để người dùng có thể tìm kiếm thông tin một cách nhanh chóng. Sử dụng màu sắc và hình ảnh phù hợp với thương hiệu sẽ tạo ra ấn tượng tích cực ngay từ cái nhìn đầu tiên.</p><h3>2. Cung Cấp Thông Tin Chi Tiết Về Doanh Nghiệp</h3><p>Hãy đảm bảo rằng website của bạn cung cấp đầy đủ thông tin về công ty, bao gồm lịch sử hình thành, sứ mệnh, tầm nhìn và các giá trị cốt lõi. Điều này giúp khách hàng hiểu rõ hơn về doanh nghiệp và tạo sự tin tưởng.</p><h3>3. Giới Thiệu Sản Phẩm và Dịch Vụ</h3><p>Một phần quan trọng của website là giới thiệu các sản phẩm và dịch vụ mà công ty cung cấp. Cung cấp thông tin chi tiết, hình ảnh và giá cả sẽ giúp khách hàng dễ dàng lựa chọn giải pháp phù hợp với nhu cầu của họ.</p><h3>4. Tính Năng Liên Hệ Dễ Dàng</h3><p>Tích hợp các phương thức liên hệ rõ ràng, bao gồm biểu mẫu liên hệ, số điện thoại và địa chỉ email, sẽ giúp khách hàng dễ dàng kết nối với bạn. Điều này không chỉ tăng cường sự tin tưởng mà còn tạo điều kiện thuận lợi cho việc giao tiếp.</p><h3>5. Tin Tức và Cập Nhật</h3><p>Một phần tin tức hoặc blog sẽ giúp bạn cập nhật thông tin mới nhất về công ty, ngành nghề và các sự kiện quan trọng. Điều này không chỉ giữ cho khách hàng thông thái mà còn thể hiện sự chuyên nghiệp và năng động của doanh nghiệp.</p><h3>Kết Luận</h3><p>Thiết kế website công ty là một yếu tố quan trọng trong việc xây dựng hình ảnh thương hiệu và thu hút khách hàng. Một trang web chất lượng sẽ không chỉ giúp bạn nổi bật trong thị trường cạnh tranh mà còn tạo ra những trải nghiệm đáng nhớ cho khách hàng. Hãy bắt đầu ngay hôm nay để nâng tầm thương hiệu công ty của bạn!</p><p><br></p>', 0),
(11, 'thiet-ke-landing-page', 'Thiết kế Landing Page', '2025-03-20 05:14:19', '2025-03-20 09:09:20', 'Thiết Kế Landing Page: Tối Ưu Hóa Tỷ Lệ Chuyển Đổi', '01JPSC1QQVSBN6J35SZWD3HJ1A.png', 'Landing Page (trang đích) là một công cụ quan trọng trong marketing trực tuyến, giúp thu hút khách hàng và tối ưu hóa tỷ lệ chuyển đổi. Dưới đây là những yếu tố cần thiết để thiết kế một landing page hiệu quả.', '<h2>Thiết Kế Landing Page: Tối Ưu Hóa Tỷ Lệ Chuyển Đổi</h2><p>Landing Page (trang đích) là một công cụ quan trọng trong marketing trực tuyến, giúp thu hút khách hàng và tối ưu hóa tỷ lệ chuyển đổi. Dưới đây là những yếu tố cần thiết để thiết kế một landing page hiệu quả.</p><h3>1. Mục Tiêu Rõ Ràng</h3><p>Trước khi bắt tay vào thiết kế, hãy xác định rõ mục tiêu của landing page. Bạn muốn thu hút khách hàng đăng ký, mua hàng, hay tải xuống tài liệu? Mục tiêu rõ ràng sẽ giúp bạn định hình nội dung và bố cục trang.</p><h3>2. Tiêu Đề Hấp Dẫn</h3><p>Tiêu đề là phần đầu tiên mà khách hàng nhìn thấy. Hãy đảm bảo rằng tiêu đề của bạn nổi bật, ngắn gọn và hấp dẫn, đồng thời thể hiện rõ giá trị mà sản phẩm hoặc dịch vụ của bạn mang lại.</p><h3>3. Hình Ảnh và Video Chất Lượng</h3><p>Sử dụng hình ảnh và video chất lượng cao để minh họa cho sản phẩm hoặc dịch vụ. Hình ảnh hấp dẫn sẽ thu hút sự chú ý và giúp khách hàng dễ dàng hình dung về những gì bạn cung cấp.</p><h3>4. Nội Dung Ngắn Gọn và Đầy Đủ</h3><p>Nội dung trên landing page cần ngắn gọn nhưng đầy đủ thông tin. Hãy tập trung vào lợi ích mà sản phẩm hoặc dịch vụ của bạn mang lại cho khách hàng. Sử dụng các bullet point để dễ dàng đọc và tiếp nhận thông tin.</p><h3>5. Tính Năng Ghi Danh hoặc Đặt Hàng Dễ Dàng</h3><p>Tích hợp các nút gọi hành động (CTA) rõ ràng và nổi bật như \"Đăng Ký Ngay\", \"Mua Ngay\" hoặc \"Tải Xuống\". Đảm bảo rằng hành động mà bạn muốn khách hàng thực hiện là dễ dàng và trực quan.</p><h3>6. Đánh Giá và Chứng Nhận</h3><p>Thêm phần đánh giá từ khách hàng hoặc chứng nhận từ các tổ chức uy tín sẽ giúp tăng cường độ tin cậy và khuyến khích khách hàng thực hiện hành động.</p><h3>7. Tối Ưu Hóa Cho Di Động</h3><p>Với sự gia tăng của người dùng di động, hãy đảm bảo rằng landing page của bạn được tối ưu hóa cho các thiết bị di động. Giao diện phải thân thiện và dễ dàng điều hướng trên màn hình nhỏ.</p><h3>Kết Luận</h3><p>Thiết kế landing page hiệu quả là một yếu tố quan trọng trong việc tối ưu hóa tỷ lệ chuyển đổi và gia tăng doanh số bán hàng. Bằng cách chú trọng vào nội dung, hình ảnh và trải nghiệm người dùng, bạn có thể tạo ra một landing page thu hút và mang lại kết quả cao. Hãy bắt đầu ngay hôm nay để nâng cao hiệu quả marketing trực tuyến của bạn!</p><p><br></p>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3Ow3mdjimTYswli1VJtGbMZZOoIQiiRGJ644z8pG', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36 OPR/117.0.0.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiMGtpNm9qY212Y3I5SWhvTE1YdDBUREtUbGh6TXY0azR1UVNoMFFxZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zZXJ2aWNlL3RoaWV0LWtlLXdlYnNpdGUtY29uZy10eSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkMVFYMnFZR2dWc1p5Y1JKM2xINklnZW16UmN5UGNDdmc5THE2dFZ4L0xCeUZnWTZNVnVkMkMiO3M6ODoiZmlsYW1lbnQiO2E6MDp7fX0=', 1742462377);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'admin@gmail.com', NULL, '$2y$12$1QX2qYGgVsZycRJ3lH6IgemzRcyPcCvg9Lq6tVx/LByFgY6MVud2C', NULL, '2025-03-20 05:02:16', '2025-03-20 05:02:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
