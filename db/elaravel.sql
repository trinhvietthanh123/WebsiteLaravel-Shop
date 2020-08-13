-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 08:57 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_08_08_150912_create_tbl_admin_table', 1),
(4, '2020_08_10_024432_create_tbl_category_product', 2),
(5, '2020_08_10_134811_create_tbl_author_product', 3),
(7, '2020_08_10_145811_create_tbl_product', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'thanhtrinhviet09@gmail.com', '123456', 'vietthanh', '0916465528', NULL, NULL),
(2, 'thnhthnh1234@gmail.com', '11', 'Trịnh Thành', '0916465528', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_author_product`
--

DROP TABLE IF EXISTS `tbl_author_product`;
CREATE TABLE `tbl_author_product` (
  `author_id` int(10) UNSIGNED NOT NULL,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Books_By_Author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_author_product`
--

INSERT INTO `tbl_author_product` (`author_id`, `author_name`, `Books_By_Author`, `created_at`, `updated_at`) VALUES
(1, 'Nam Cao', '- Lão Hạc\r\n- Chí Phèo', NULL, NULL),
(2, 'Nguyễn Du', 'Truyện Kiều', NULL, NULL),
(3, 'Ireland Ethel Lilian Voynich', 'Ruồi Trâu', NULL, NULL),
(4, 'Victor Hugo', 'Những người cùng khổ', NULL, NULL),
(5, 'Spriderum', 'Người trong muôn nghề', NULL, NULL),
(6, 'Daniel Kahneman', 'Tư duy nhanh và chậm', NULL, NULL),
(7, 'Thomas L. Friedman', 'Thế giới phẳng', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_product`
--

DROP TABLE IF EXISTS `tbl_category_product`;
CREATE TABLE `tbl_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_id`, `category_name`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(9, 'Sách kinh doanh', 'Các đầu sách về kinh tế và maketing', 1, NULL, NULL),
(10, 'Sách ngoại văn', 'Các đầu sách của nước ngoài', 1, NULL, NULL),
(11, 'Sách khoa học', 'Các đầu sách về kiến thức khoa học', 1, NULL, NULL),
(13, 'Văn Học Việt Nam', 'Các tác phẩm của Việt Nam', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` int(11) NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `product_name`, `author_id`, `product_desc`, `product_content`, `product_price`, `product_image`, `product_status`, `created_at`, `updated_at`) VALUES
(3, 10, 'Ruồi Trâu', 3, 'Sách kinh điển', 'Truyện xoay quanh nhân vật trung tâm là chàng thanh niên Arthur - bí danh “Ruồi trâu”, một thanh niên hiền lành, thánh thiện, hiến dâng tất cả tình cảm riêng tư cho lý tưởng cách mạng. Những thăng trầm trong cuộc sống, quá trình chiến đấu vì lý tưởng đã tôi luyện chàng thanh niên trở thành một con người bản lĩnh, mạnh mẽ và luôn tràn đầy nhiệt huyết. Một trái tim rực cháy lý tưởng nhưng không quên tình yêu sâu đậm dành cho cô gái mà anh yêu thương - Emma.', '56.000đ', 'Ruoitrau63.jpg', 1, NULL, NULL),
(4, 13, 'Chí phèo', 1, 'Truyện ngắn của Nam Cao', 'Chí phèo là tác phẩm kinh điển của văn học Việt Nam', '72.000đ', 'chipheo91.jpg', 1, NULL, NULL),
(5, 13, 'Truyện Kiều', 2, 'Truyện thơ của Nguyễn Du', 'Tác phẩm Truyện Kiều, nguyên tên là Đoạn Trường Tân Thanh, từ khi ra đời đến nay, khoảng 200 năm, trong lịch sử Văn học Việt Nam, chưa có tác phẩm nào được các nhà khảo cứu, phê bình, xuất bản quan tâm đến nó, từ nội dung, hình thức, lẫn văn bản và thời điểm sáng tác đặc biệt đến như vậy. Một trong nguyên nhân chính là vì bản gốc của Nguyễn Du sáng tác không còn nữa.', '28.500đ', 'Truyenkieu70.jpg', 1, NULL, NULL),
(6, 10, 'Những người cùng khổ', 4, 'Tác phẩm kinh điển của thế giới', 'Những người khốn khổ là bộ truyện lớn nhất mà cũng là tác phẩm có giá trị nhất trong sự nghiệp văn chương của Victor Hugo. Ông đã suy nghĩ về tác phẩm này và viết nó trong ngót ba mươi năm. Sau khi hoàn thành bộ tiểu thuyết này, Victor Hugo đã gọi nó là \"một trái núi\". Quả thế, \"một trái núi\", không những vì số trang của nó, vì những vấn đề to lớn nó bàn tới, mà chính vì nó thấm nhuần tư tưởng nhân đạo, ca ngợi đạo đức cao cả của nhân dân lao động, ca ngợi tự do, dân chủ, chống lại cường quyền áp bức, bóc lột. Với những giá trị to lớn của mình, Những người khốn khổ xứng đáng được xưng tụng là một bản hùng ca của nhân loại.', '120.000đ', 'khonkho62.jpg', 1, NULL, NULL),
(7, 9, 'Người trong muôn nghề: Ngành it có gì?', 5, 'Sách của nhóm tác giả trẻ', '\"Học công nghệ thông tin rồi đi lắp máy tính với cài win dạo à?\"\r\n\r\n\"Sao lại lao đầu vào cái nghề toàn số má với mấy dòng lệnh khó hiểu thế?\"\r\n\r\n\"Dân làm máy tính vừa “đụt” vừa khô khan, ai yêu nổi, yêu nổi ai?\"\r\n\r\n\"Lập trình khó lắm, chắc phải siêu sao toán mới học được.\"\r\n\r\n\"Làm công nghệ lương nghìn đô như bỡn!\"\r\n\r\nĐó chắc hẳn là những câu hội thoại, những lời đánh giá mà các bạn đang học/làm Công nghệ thông tin (CNTT) gặp phải ít nhất 1 lần trong đời, còn những người không theo học/làm CNTT từng nghĩ đến ít nhất 1 lần trong đời (trung thực với bản thân và thừa nhận đi!).', '169.000đ', 'Sach2jpg83.jpg', 1, NULL, NULL),
(8, 9, 'Tư duy nhanh - chậm', 6, 'Top 100 sách kinh tế bán chạy của thế giới', 'Bạn nghĩ rằng bạn tư duy nhanh, hay chậm? Bạn tư duy và suy nghĩ theo lối “trông mặt bắt hình dong”, đánh giá mọi vật nhanh chóng bằng cảm quan, quyết định dựa theo cảm xúc hay tư duy một cách cẩn thận, chậm rãi nhưng logic hợp lý về một vấn đề. Tư duy nhanh và chậm sẽ đưa ra và lý giải hai hệ thống tư duy tác động đến con đường nhận thức của bạn. Kahneman gọi đó là: hệ thống 1 và hệ thống 2. Hệ thống 1, còn gọi là cơ chế nghĩ nhanh, tự động, thường xuyên được sử dụng, cảm tính, rập khuôn và tiềm thức. Hệ thống 2, còn gọi là cơ chế nghĩ chậm, đòi hỏi ít nỗ lực, ít được sử dụng, dùng logic có tính toán và ý thức. Trong một loạt thí nghiệm tâm lý mang tính tiên phong, Kahneman và Tversky chứng minh rằng, con người chúng ta thường đi đến quyết định theo cơ chế nghĩ nhanh hơn là ghĩ chậm. Phần lớn nội dung của cuốn sách chỉ ra những sai lầm của con người khi suy nghĩ theo hệ thống 1. Kahneman chứng minh rằng chúng ta tệ hơn những gì chúng ta tưởng: đó là chúng ta không biết những gì chúng ta không biết!', '155.000đ', 'Sach128.jpg', 1, NULL, NULL),
(10, 9, 'Thế giới phẳng', 7, 'Sách hay về kinh tế', 'Toàn cầu hóa là chủ đề vốn phức tạp và thu hút sự quan tâm của dư luận với không ít những ý kiến trái ngược nhau, được Thomas L.Friedman phân tích một cách độc đáo, với lập luận trung tâm về quá trình “trở nên phẳng” của thế giới. Khái niệm “phẳng” ở đây đồng nghĩa với “sự kết nối”. Những dở bỏ rào cản về chính trị cùng với những tiến bộ vượt bậc của cách mạng số đang làm cho thế giới “phẳng ra” và không còn nhiều trở ngại về địa lý như trước. Điều này mở ra cho các nước những phương thức sản xuất kinh doanh, những tình thế địa chính trị và địa kinh tế hoàn toàn mới.', '165.000đ', 'thegioiphang37.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_author_product`
--
ALTER TABLE `tbl_author_product`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_author_product`
--
ALTER TABLE `tbl_author_product`
  MODIFY `author_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
