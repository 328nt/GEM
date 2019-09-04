-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 03, 2019 lúc 05:37 AM
-- Phiên bản máy phục vụ: 10.3.15-MariaDB
-- Phiên bản PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `gem`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_provinces` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `districts`
--

INSERT INTO `districts` (`id`, `id_provinces`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Huyện Ba Vì', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(2, 1, 'Huyện Chương Mỹ', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(3, 1, 'Huyện Đan Phượng', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(4, 1, 'Huyện Đông Anh', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(5, 1, 'Huyện Gia Lâm', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(6, 1, 'Huyện Hoài Đức', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(7, 1, 'Huyện Mê Linh', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(8, 1, 'Huyện Mỹ Đức', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(9, 1, 'Huyện Phú Xuyên', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(10, 1, 'Huyện Phúc Thọ', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(11, 1, 'Huyện Quốc Oai', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(12, 1, 'Huyện Sóc Sơn', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(13, 1, 'Huyện Thạch Thất', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(14, 1, 'Huyện Thanh Oai', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(15, 1, 'Huyện Thanh Trì', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(16, 1, 'Huyện Thường Tín', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(17, 1, 'Quận Bắc Từ Liêm', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(18, 1, 'Huyện Ứng Hòa', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(19, 1, 'Quận Ba Đình', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(20, 1, 'Quận Cầu Giấy', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(21, 1, 'Quận Đống Đa', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(22, 1, 'Quận Hai Bà Trưng', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(23, 1, 'Quận Hoàn Kiếm', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(24, 1, 'Quận Hoàng Mai', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(25, 1, 'Quận Long Biên', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(26, 1, 'Quận Tây Hồ', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(27, 1, 'Quận Thanh Xuân', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(28, 1, 'Quận Hà Đông', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(29, 1, 'Thành phố Sơn Tây', '2019-08-16 20:28:44', '2019-08-16 20:28:44'),
(30, 1, 'Quận Nam Từ Liêm', '2019-08-16 20:28:44', '2019-08-16 20:28:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `sbd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `members`
--

INSERT INTO `members` (`id`, `sbd`, `name`, `email`, `day`, `created_at`, `updated_at`) VALUES
(3305, '1', 'Miss Maeve O\'Conner I', 'jerald02@example.net', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:00'),
(3306, '2', 'Barbara Schroeder', 'ada.schulist@example.com', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:00'),
(3307, '3', 'Maximo Kerluke', 'wrippin@example.org', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:00'),
(3308, '4', 'Cora Bechtelar', 'freddie.padberg@example.com', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:00'),
(3309, '5', 'Ismael Yundt', 'karl40@example.org', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:00'),
(3310, '6', 'Ladarius Lind Sr.', 'roberts.camille@example.com', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:00'),
(3311, '7', 'Lorine Adams', 'elroy14@example.com', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:00'),
(3312, '8', 'Telly Smitham', 'gkuvalis@example.org', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:00'),
(3313, '9', 'Edison Kessler', 'zconnelly@example.org', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:00'),
(3314, '10', 'Marco Ruecker', 'shayne.mccullough@example.net', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:00'),
(3315, '11', 'Columbus Wiza', 'elva.zulauf@example.net', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:00'),
(3316, '12', 'Sean Herzog', 'pjakubowski@example.org', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:00'),
(3317, '13', 'Justina Carter', 'sammie16@example.com', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:01'),
(3318, '14', 'Eugene Halvorson', 'goldner.jada@example.org', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:01'),
(3319, '15', 'Aglae Hagenes', 'nlemke@example.org', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:01'),
(3320, '16', 'Orin Blick', 'newton.gleichner@example.com', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:01'),
(3321, '17', 'Mrs. Carole Wisozk', 'gfay@example.org', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:01'),
(3322, '18', 'Prof. Kellen Fay DDS', 'spinka.patience@example.org', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:01'),
(3323, '19', 'Rosalinda Paucek I', 'wisoky.myrna@example.net', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:01'),
(3324, '66', 'tiendat', 'dat123@gmail.com', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:01'),
(3325, '67', 'tiendat', 'dat@gmail.com', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:01'),
(3326, '68', 'tiendat', 'dat1@gmail.com', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:01'),
(3327, '69', 'datmember', 'datmember@gmail.com', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:01'),
(3328, '70', 'dat23344', 'rgtrhg@gmail.com', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:01'),
(3329, '71', 'dat123', 'd.atnt@ieg.vn', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:01'),
(3330, '76', 'tên', '1', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:01'),
(3331, '77', 'tên2', '2', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:01'),
(3332, '78', 'tên3', '3', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:01'),
(3333, '79', 'tên', 'email', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:01'),
(3334, '80', 'tên2', 'email2', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:01'),
(3335, '81', 'tên3', 'email3', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:01'),
(3336, '100', 'tiendat', 'da.t@gmail.com', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:01'),
(3337, '101', NULL, 'wqeqw@3e', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:01'),
(3338, '102', 'Đạt', 'datmemvvber@gmail.com', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:02'),
(3339, '103', 'Đạtfff', 'dat4444123@gmail.com', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:02'),
(3340, '110', 'dwdw', 'datmefffwmvvber@gmail.com', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:02'),
(3341, '111', 'dwd', 'dat4ff444123@gmail.comd', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:02'),
(3342, '112', 'dsf', 'dat1fffff23@gmail.com', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:02'),
(3343, '113', 'dat', 'sdfsdfsfsdsdf@gmail.com', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:02'),
(3344, '114', 'fff', 'datmefffsdfwefmber@gmail.com', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:02'),
(3345, '116', '1', '1@324234', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:02'),
(3346, '117', 'tên2', '2@222', NULL, '2019-08-12 01:17:38', '2019-08-12 19:40:02'),
(3347, '118', '3', '3@33', NULL, '2019-08-12 01:17:38', '2019-08-12 19:43:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_15_082126_add_level_to_users', 2),
(4, '2019_07_15_090106_add_level_to_users_table', 3),
(7, '2019_07_16_042907_create_news_table', 4),
(8, '2019_07_23_020239_create_members_table', 5),
(9, '2019_08_01_022702_add_new_column_in_users_table', 6),
(10, '2019_08_07_042435_add_sbd_to_users_table', 7),
(12, '2019_08_07_101955_create_table_scores', 8),
(13, '2019_08_17_020724_create_provinces_table', 9),
(14, '2019_08_17_020742_create_districts_table', 9),
(15, '2019_08_17_020814_create_schools_table', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titlenone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hightlight` int(11) NOT NULL DEFAULT 0,
  `view` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `titlenone`, `description`, `content`, `image`, `hightlight`, `view`, `created_at`, `updated_at`) VALUES
(1, 'Juventus ra mắt sao 0 đồng: Lương 400.000 bảng/tuần, quyết giành cúp C1', 'juventus-ra-mat-sao-0-dong-luong-400000-bangtuan-quyet-gianh-cup-c1', 'Juventus vừa chính thức ra mắt tiền vệ Ramsey, sao 0 đồng của CLB trong mùa hè này với mức lương 400.000 bảng/tuần.', '<p>Sau nhiều ngày chờ đợi, cuối cùng CĐV Juventus cũng được chào đón bản hợp đồng mới của CLB mang tên Aaron Ramsey. Tiền vệ người xứ Wales gia nhập \"Lão bà thành Turin\" với giá 0 đồng sau khi đạt thỏa thuận ở kỳ chuyển nhượng mùa đông trước. Ramsey đã chia tay Arsenal sau nhiều năm gắn bó bởi không tiếp tục gia hạn với đội bóng thành London. Theo tin đồn từ báo chí thì nguyên nhân lớn nhất chính là vấn đề tiền lương, Arsenal không chịu nâng lương hợp lý cho Ramsey trong khi Juventus sẵn sàng trả tới 400.000 bảng/tuần trong vòng 4 năm tới cho tiền vệ người xứ Wales. Tại Juventus, Ramsey sẽ tiếp tục được đeo chiếc áo số 8 yêu thích tại Arsenal trước kia và ĐTQG xứ Wales. Đây cũng là số áo được nhiều huyền thoại của Juve nắm giữ như Antoine Conte, Didier Deschamps hay gần nhất là Claudio Marchisio. Ramsey tỏ ra hào hứng nhưng cũng rất sẵn sàng cho áp lực nặng nề phía trước sau khi tiếp nhận chiếc áo huyền thoại. \"Tôi muốn được mặc chiếc áo số 8, đó là số áo của tôi tại Arsenal và tại đây, nó đang được để trống nên tôi không thể bỏ lỡ cơ hội này. Tôi biết những cầu thủ từng đeo số này đều là huyền thoại của đội bóng. Tôi hiểu trách nhiệm và sẵn sàng cho mọi thử thách\". Theo tin đồn từ báo chí thì nguyên nhân lớn nhất chính là vấn đề tiền lương, Arsenal không chịu nâng lương hợp lý cho Ramsey trong khi Juventus sẵn sàng trả tới 400.000 bảng/tuần trong vòng 4 năm tới cho tiền vệ người xứ Wales. Tại Juventus, Ramsey sẽ tiếp tục được đeo chiếc áo số 8 yêu thích tại Arsenal trước kia và ĐTQG xứ Wales. Đây cũng là số áo được nhiều huyền thoại của Juve nắm giữ như Antoine Conte, Didier Deschamps hay gần nhất là Claudio Marchisio. Ramsey tỏ ra hào hứng nhưng cũng rất sẵn sàng cho áp lực nặng nề phía trước sau khi tiếp nhận chiếc áo huyền thoại. \"Tôi muốn được mặc chiếc áo số 8, đó là số áo của tôi tại Arsenal và tại đây, nó đang được để trống nên tôi không thể bỏ lỡ cơ hội này. Tôi biết những cầu thủ từng đeo số này đều là huyền thoại của đội bóng. Tôi hiểu trách nhiệm và sẵn sàng cho mọi thử thách\".</p>', 'Y5O2-Untitled.png', 0, 0, '2019-07-16 01:26:19', '2019-08-16 00:34:00'),
(2, 'Juventus ra mắt sao 0 đồtrêtrtrng: Lương 400.000 bảng/tuần, quyết giành cúp C1', 'juventus-ra-mat-sao-0-dotretrtrng-luong-400000-bangtuan-quyet-gianh-cup-c1', 'test tom tat', 'Chiều 16/7, thông tin từ Sở GTVT tỉnh Đắk Nông cho biết, xe Quốc Đạt mang BKS 43B - 030.78 đã gây tai nạn vào sáng cùng ngày trên địa bàn tỉnh Đắk Lắk đã được Sở GTVT thành phố Đà Nẵng cấp phù hiệu chạy tuyến cố định hoạt động tuyến Bến xe Đà Nẵng – Bến xe Quảng Khê (huyện Đắk G’long, tỉnh Đắk Nông).\r\n\r\nTheo đó, chiếc xe trên đăng kí chạy theo đường Hồ Chí Minh (Quốc lộ 14 cũ) – Quốc lộ 19 – Quốc lộ 1A.\r\n\r\nTuy nhiên, vào thời gian xảy ra tai nạn, chiếc xe khách trên không di chuyển theo lịch trình đăng kí mà chạy trên đường Hồ Chí Minh, khi đến địa bàn xã Ea Tu (TP Buôn Ma Thuột, tỉnh Đắk Lắk) thì rẽ trái đi qua Quốc lộ 26. Do đó, chiếc xe này đã đi sai lịch trình.\r\n\r\nVẫn chưa hết bàng hoàng khi nhớ lại thời khắc kinh hoàng, em Trương Văn Hoàng Sơn đang được điều trị tại Bệnh viện Đa khoa vùng Tây Nguyên cho hay, em đón xe tại Quãng Ngãi để về Đắk Nông. Trên đường đi do mệt nên em ngủ thiếp đi. Sau đó, em cảm nhận chiếc xe chao đảo, rung lắc mạnh nên tỉnh giấc.\r\n\r\n“Tuy nhiên chỉ sau 3 giây, chiếc xe tông mạnh vào cây rồi lật nghiêng, kính xe vỡ bắn tung tóe khắp nơi. Mọi người trong xe lúc này nhớn nhác, hoảng loạn tìm chỗ thoát thân, tuy nhiên em bị mắc kẹt nên không thể ra được. Do bị thương ở tay nên em được đưa vào bệnh viện cấp cứu”, Sơn hãi hùng kể lại.', 'VRFA-65805781_2603898416289831_2664872687129591808_n.png', 0, 0, '2019-07-16 03:11:26', '2019-07-16 03:11:26'),
(3, 'Juventus ra mắt sao 0 đồtrêtrtrng: Lương 400.000 bảng/tuần, quyết giành cúp C1', 'juventus-ra-mat-sao-0-dotretrtrng-luong-400000-bangtuan-quyet-gianh-cup-c1', 'test tom tat3423', '<p>Chiều 16/7, thông tin từ Sở GTVT tỉnh Đắk Nông cho biết, xe Quốc Đạt mang BKS 43B - 030.78 đã gây tai nạn vào sáng cùng ngày trên địa bàn tỉnh Đắk Lắk đã được Sở GTVT thành phố Đà Nẵng cấp phù hiệu chạy tuyến cố định hoạt động tuyến Bến xe Đà Nẵng – Bến xe Quảng Khê (huyện Đắk G’long, tỉnh Đắk Nông). Theo đó, chiếc xe trên đăng kí chạy theo đường Hồ Chí Minh (Quốc lộ 14 cũ) – Quốc lộ 19 – Quốc lộ 1A. Tuy nhiên, vào thời gian xảy ra tai nạn, chiếc xe khách trên không di chuyển theo lịch trình đăng kí mà chạy trên đường Hồ Chí Minh, khi đến địa bàn xã Ea Tu (TP Buôn Ma Thuột, tỉnh Đắk Lắk) thì rẽ trái đi qua Quốc lộ 26. Do đó, chiếc xe này đã đi sai lịch trình. Vẫn chưa hết bàng hoàng khi nhớ lại thời khắc kinh hoàng, em Trương Văn Hoàng Sơn đang được điều trị tại Bệnh viện Đa khoa vùng Tây Nguyên cho hay, em đón xe tại Quãng Ngãi để về Đắk Nông. Trên đường đi do mệt nên em ngủ thiếp đi. Sau đó, em cảm nhận chiếc xe chao đảo, rung lắc mạnh nên tỉnh giấc. “Tuy nhiên chỉ sau 3 giây, chiếc xe tông mạnh vào cây rồi lật nghiêng, kính xe vỡ bắn tung tóe khắp nơi. Mọi người trong xe lúc này nhớn nhác, hoảng loạn tìm chỗ thoát thân, tuy nhiên em bị mắc kẹt nên không thể ra được. Do bị thương ở tay nên em được đưa vào bệnh viện cấp cứu”, Sơn hãi hùng kể lại.</p>', 'p8DK-Untitled.png', 0, 0, '2019-07-16 03:50:38', '2019-08-05 20:19:27'),
(5, 'fwefwefwef wefwe o 0 đồtrêtrtrng: Lương 400.000 bảng/tuần, quyết giành cúp C1', 'fwefwefwef-wefwe-o-0-dotretrtrng-luong-400000-bangtuan-quyet-gianh-cup-c1', 'test tom tat333333333333', '<p>Chiều 16/7, thông tin từ Sở GTVT tỉnh Đắk Nông cho biết, xe Quốc Đạt mang BKS 43B - 030.78 đã gây tai nạn vào sáng cùng ngày trên địa bàn tỉnh Đắk Lắk đã được Sở GTVT thành phố Đà Nẵng cấp phù hiệu chạy tuyến cố định hoạt động tuyến Bến xe Đà Nẵng – Bến xe Quảng Khê (huyện Đắk G’long, tỉnh Đắk Nông). Theo đó, chiếc xe trên đăng kí chạy theo đường Hồ Chí Minh (Quốc lộ 14 cũ) – Quốc lộ 19 – Quốc lộ 1A. Tuy nhiên, vào thời gian xảy ra tai nạn, chiếc xe khách trên không di chuyển theo lịch trình đăng kí mà chạy trên đường Hồ Chí Minh, khi đến địa bàn xã Ea Tu (TP Buôn Ma Thuột, tỉnh Đắk Lắk) thì rẽ trái đi qua Quốc lộ 26. Do đó, chiếc xe này đã đi sai lịch trình. Vẫn chưa hết bàng hoàng khi nhớ lại thời khắc kinh hoàng, em Trương Văn Hoàng Sơn đang được điều trị tại Bệnh viện Đa khoa vùng Tây Nguyên cho hay, em đón xe tại Quãng Ngãi để về Đắk Nông. Trên đường đi do mệt nên em ngủ thiếp đi. Sau đó, em cảm nhận chiếc xe chao đảo, rung lắc mạnh nên tỉnh giấc. “Tuy nhiên chỉ sau 3 giây, chiếc xe tông mạnh vào cây rồi lật nghiêng, kính xe vỡ bắn tung tóe khắp nơi. Mọi người trong xe lúc này nhớn nhác, hoảng loạn tìm chỗ thoát thân, tuy nhiên em bị mắc kẹt nên không thể ra được. Do bị thương ở tay nên em được đưa vào bệnh viện cấp cứu”, Sơn hãi hùng kể lại.</p>', 'u85h-64706417_2577779982235008_7813566128797515776_n.png', 1, 0, '2019-07-16 03:56:10', '2019-07-16 03:57:03'),
(6, 'đây là title', 'day-la-title', 'đây là tóm tắt', '<p>đây là nội dung rất dài nên mình copy&nbsp;đây là nội dung rất dài nên mình copyđây là nội dung rất dài nên mình copyđây là nội dung rất dài nên mình copyđây là nội dung rất dài nên mình copy&nbsp;đây là nội dung rất dài nên mình copy</p>', 'u1Tq-65805781_2603898416289831_2664872687129591808_n.png', 0, 0, '2019-08-05 19:35:08', '2019-08-16 00:35:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `provinces`
--

CREATE TABLE `provinces` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `provinces`
--

INSERT INTO `provinces` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'TP Hà Nội', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(2, 'TP Hồ Chí Minh', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(3, 'An Giang', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(4, 'Bà Rịa - Vũng Tàu', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(5, 'Bắc Kạn', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(6, 'Bắc Giang', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(7, 'Bạc Liêu', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(8, 'Bắc Ninh', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(9, 'Bến Tre', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(10, 'Bình Định', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(11, 'Bình Dương', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(12, 'Bình Phước', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(13, 'Bình Thuận', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(14, 'Cà Mau', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(15, 'TP Cần Thơ', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(16, 'Cao Bằng', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(17, 'TP Đà Nẵng', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(18, 'Đăk Lăk', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(19, 'Điện Biên', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(20, 'Đồng Nai', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(21, 'Đồng Tháp', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(22, 'Gia Lai', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(23, 'Hà Giang', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(24, 'Hà Nam', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(25, 'Hà Tĩnh', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(26, 'Hải Dương', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(27, 'TP Hải Phòng', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(28, 'Hòa Bình', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(29, 'Hưng Yên', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(30, 'Khánh Hòa', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(31, 'Kiên Giang', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(32, 'Kon Tum', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(33, 'Lai Châu', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(34, 'Lâm Đồng', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(35, 'Lạng Sơn', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(36, 'Lào Cai', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(37, 'Long An', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(38, 'Nam Định', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(39, 'Nghệ An', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(40, 'Ninh Bình', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(41, 'Ninh Thuận', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(42, 'Phú Thọ', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(43, 'Phú Yên', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(44, 'Quảng Bình', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(45, 'Quảng Nam', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(46, 'Quảng Ngãi', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(47, 'Quảng Ninh', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(48, 'Quảng Trị', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(49, 'Sóc Trăng', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(50, 'Sơn La', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(51, 'Tây Ninh', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(52, 'Thái Bình', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(53, 'Thái Nguyên', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(54, 'Thanh Hóa', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(55, 'Thừa Thiên Huế', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(56, 'Tiền Giang', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(57, 'Trà Vinh', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(58, 'Tuyên Quang', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(59, 'Vĩnh Long', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(60, 'Vĩnh Phúc', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(61, 'Yên Bái', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(62, 'Đắc Nông', '2019-08-16 19:58:43', '2019-08-16 19:58:43'),
(63, 'Hậu Giang', '2019-08-16 19:58:43', '2019-08-16 19:58:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `schools`
--

CREATE TABLE `schools` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_districts` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `scores`
--

CREATE TABLE `scores` (
  `id` int(10) UNSIGNED NOT NULL,
  `iduser` int(10) UNSIGNED NOT NULL,
  `scores` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `scores`
--

INSERT INTO `scores` (`id`, `iduser`, `scores`, `created_at`, `updated_at`) VALUES
(43, 1, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(44, 2, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(45, 3, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(46, 4, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(47, 5, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(48, 6, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(49, 7, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(50, 8, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(51, 9, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(52, 10, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(53, 11, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(54, 12, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(55, 13, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(56, 14, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(57, 15, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(58, 16, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(59, 17, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(60, 18, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(61, 19, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(62, 66, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(63, 67, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(64, 68, '4', '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(65, 69, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(66, 70, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(67, 71, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(68, 76, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(69, 77, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(70, 78, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(71, 79, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(72, 80, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(73, 81, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(74, 100, 'sdsad', '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(75, 101, NULL, '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(76, 102, 'Nguyễn Tiến', '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(77, 103, 'Nguyễn Tiến', '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(78, 110, 'Nguyễn Tiếndwd', '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(79, 111, 'dwddd', '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(80, 112, 'sfsdf', '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(81, 113, 'fd', '2019-08-07 04:05:03', '2019-08-07 04:05:03'),
(82, 114, 'fff', '2019-08-07 04:05:03', '2019-08-07 04:05:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grade` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sbd` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`, `birthday`, `address`, `district`, `city`, `class`, `grade`, `school`, `parentname`, `mobile`, `link`, `role`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `sbd`) VALUES
(1, 'Miss Maeve O\'Conner I', '', 'jerald02@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '', '', '', '', '', '', '', '', NULL, 0, '2019-07-11 21:17:22', '9nAjreuJFz', '2019-07-11 21:17:22', '2019-07-11 21:17:22', NULL),
(2, 'Barbara Schroeder', '', 'ada.schulist@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '', '', '', '', '', '', '', '', NULL, 0, '2019-07-11 21:17:22', 'DCntmtXwm9', '2019-07-11 21:17:23', '2019-07-11 21:17:23', NULL),
(3, 'Maximo Kerluke', '', 'wrippin@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '', '', '', '', '', '', '', '', NULL, 0, '2019-07-11 21:17:22', 'VqckkzdVXB', '2019-07-11 21:17:23', '2019-07-11 21:17:23', NULL),
(4, 'Cora Bechtelar', '', 'freddie.padberg@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '', '', '', '', '', '', '', '', NULL, 0, '2019-07-11 21:17:22', 'mwgm2DDkNU', '2019-07-11 21:17:23', '2019-07-11 21:17:23', NULL),
(5, 'Ismael Yundt', '', 'karl40@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '', '', '', '', '', '', '', '', NULL, 0, '2019-07-11 21:17:22', 'ubAS41kn8b', '2019-07-11 21:17:23', '2019-07-11 21:17:23', NULL),
(6, 'Ladarius Lind Sr.', '', 'roberts.camille@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '', '', '', '', '', '', '', '', NULL, 0, '2019-07-11 21:17:22', 'x4hqBs8PWw', '2019-07-11 21:17:23', '2019-07-11 21:17:23', NULL),
(7, 'Lorine Adams', '', 'elroy14@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '', '', '', '', '', '', '', '', NULL, 0, '2019-07-11 21:17:22', 'pRmfPioij1', '2019-07-11 21:17:23', '2019-07-11 21:17:23', NULL),
(8, 'Telly Smitham', '', 'gkuvalis@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '', '', '', '', '', '', '', '', NULL, 0, '2019-07-11 21:17:22', 'NHoTjkyNuQ', '2019-07-11 21:17:23', '2019-07-11 21:17:23', NULL),
(9, 'Edison Kessler', '', 'zconnelly@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '', '', '', '', '', '', '', '', NULL, 0, '2019-07-11 21:17:22', 'vKvXZKJQgM', '2019-07-11 21:17:23', '2019-07-11 21:17:23', NULL),
(10, 'Marco Ruecker', '', 'shayne.mccullough@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '', '', '', '', '', '', '', '', NULL, 0, '2019-07-11 21:17:22', 'eiBSSSFzZi', '2019-07-11 21:17:23', '2019-07-11 21:17:23', NULL),
(11, 'Columbus Wiza', '', 'elva.zulauf@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '', '', '', '', '', '', '', '', NULL, 0, '2019-07-11 21:17:22', 'ScVb3FvdAO', '2019-07-11 21:17:23', '2019-07-11 21:17:23', NULL),
(12, 'Sean Herzog', '', 'pjakubowski@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '', '', '', '', '', '', '', '', NULL, 0, '2019-07-11 21:17:22', 'yRHPLO7qm9', '2019-07-11 21:17:23', '2019-07-11 21:17:23', NULL),
(13, 'Justina Carter', '', 'sammie16@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '', '', '', '', '', '', '', '', NULL, 0, '2019-07-11 21:17:22', 'tJDkdEwuxv', '2019-07-11 21:17:23', '2019-07-11 21:17:23', NULL),
(14, 'Eugene Halvorson', '', 'goldner.jada@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '', '', '', '', '', '', '', '', NULL, 0, '2019-07-11 21:17:22', '7hks5DWFX7', '2019-07-11 21:17:23', '2019-07-11 21:17:23', NULL),
(15, 'Aglae Hagenes', '', 'nlemke@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '', '', '', '', '', '', '', '', NULL, 0, '2019-07-11 21:17:22', 'tF3Q2ztK81', '2019-07-11 21:17:23', '2019-07-11 21:17:23', NULL),
(16, 'Orin Blick', '', 'newton.gleichner@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '', '', '', '', '', '', '', '', NULL, 0, '2019-07-11 21:17:22', '9u9MoR2a4U', '2019-07-11 21:17:24', '2019-07-11 21:17:24', NULL),
(17, 'Mrs. Carole Wisozk', '', 'gfay@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '', '', '', '', '', '', '', '', NULL, 0, '2019-07-11 21:17:22', '0ouTpoxCQY', '2019-07-11 21:17:24', '2019-07-11 21:17:24', NULL),
(18, 'Prof. Kellen Fay DDS', '', 'spinka.patience@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '', '', '', '', '', '', '', '', NULL, 0, '2019-07-11 21:17:22', 'fjx5rdk6He', '2019-07-11 21:17:24', '2019-07-11 21:17:24', NULL),
(19, 'Rosalinda Paucek I', '', 'wisoky.myrna@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', '', '', '', '', '', '', '', '', NULL, 0, '2019-07-11 21:17:22', 'clbjUBvcaB', '2019-07-11 21:17:24', '2019-07-11 21:17:24', NULL),
(66, 'tiendat', '', 'dat123@gmail.com', '$2y$10$eeJ4VzqNRvP75LvlZGKg2ea6ScMKlo5R85YhRKMwO2XQwWqBBZTTi', '', '', '', '', '', '', '', '', '', NULL, 0, NULL, NULL, '2019-07-12 20:48:52', '2019-07-12 20:48:52', NULL),
(67, 'tiendat', '', 'dat@gmail.com', '$2y$10$IWi6RExmNtKJ6ApHNorgLe7CSopGm/THlycfd2Vj3ohUImiZbZPPm', '', '', '', '', '', '', '', '', '', NULL, 1, NULL, NULL, '2019-07-15 02:56:13', '2019-07-15 02:56:13', NULL),
(68, 'tiendat', '', 'dat1@gmail.com', '$2y$10$/PSHEii5re.XaI5fqtOAkONfbOmw1hZpt6yeyrayCfpeXJWkKgRhW', '', '', '', '', '', '', '', 'DAT', '', 'https://www.youtube.com/watch?v=j8baN2yTJEw', 1, NULL, NULL, '2019-07-15 02:59:26', '2019-08-08 19:41:19', NULL),
(69, 'datmember', '', 'datmember@gmail.com', '$2y$10$T5Nqp.iYP0vQkCKEUWy3zOsJjFPTu1RzpYU7O3TftUKIkkPQA7/Ny', '', '', '', '', '', '', '', '', '', NULL, 0, NULL, NULL, '2019-07-15 04:09:27', '2019-07-15 20:11:01', NULL),
(70, 'dat23344', '', 'rgtrhg@gmail.com', '$2y$10$Ijl4GHxIjUaX7wbKK6yyR.1.E8T2BCUECPVRxJpT3nvuH31M//Xx6', '', '', '', '', '', '', '', '', '', NULL, 0, NULL, NULL, '2019-07-15 04:13:29', '2019-07-15 20:02:09', NULL),
(71, 'dat123', '', 'd.atnt@ieg.vn', '$2y$10$XTd7Pd0IujmP9QGUgbe8juOL2fw741OXvenVMXQeeQB8jFmYTTXq2', '', '', '', '', '', '', '', '', '', NULL, 0, NULL, NULL, '2019-07-18 03:03:56', '2019-07-18 03:03:56', NULL),
(76, 'tên', '', '1', '$2y$10$elZeBlIu39JY2p1pU9SPEOGRCNjn1xuns.6f9JlVxgnWbZn60vbAy', '', '', '', '', '', '', '', '', '', NULL, 0, NULL, NULL, '2019-07-22 21:31:56', '2019-07-22 21:31:56', NULL),
(77, 'tên2', '', '2', '$2y$10$U2rYJh8N.2qu9ErPzw557e.OznRtOhYznNczypFjOKNe2ZXJyE0L2', '', '', '', '', '', '', '', '', '', NULL, 0, NULL, NULL, '2019-07-22 21:31:57', '2019-07-22 21:31:57', NULL),
(78, 'tên3', '', '3', '$2y$10$ox5qYZq93GAkCSLJV0S8eeetx6jBuBfJS.f5xyk924pBsddIx1wnq', '', '', '', '', '', '', '', '', '', NULL, 0, NULL, NULL, '2019-07-22 21:31:57', '2019-07-22 21:31:57', NULL),
(79, 'tên', '', 'email', '$2y$10$rmf6FAhD11n/dZ/gP7M7wOxn3ybLARMCDnNoMcfNcJEbx3jwEP6hO', '', '', '', '', '', '', '', '', '', NULL, 0, NULL, NULL, '2019-07-22 21:33:01', '2019-07-22 21:33:01', NULL),
(80, 'tên2', '', 'email2', '$2y$10$OKp1DFD5vseQemO60/n4OuNWqmyBjajaC4VnOKnRfswf4ywwIEHNO', '', '', '', '', '', '', '', '', '', NULL, 0, NULL, NULL, '2019-07-22 21:33:02', '2019-08-09 03:51:13', '44'),
(81, 'tên3', '', 'email3', '$2y$10$j2eqnfoJnuKjn1peUJlbyOB7Wxv5ibkSwX.IxHShkHRnNCU7H2NJG', '', '', '', '', '', '', '', '', '', NULL, 0, NULL, NULL, '2019-07-22 21:33:02', '2019-08-09 03:51:13', '34'),
(100, 'tiendat', 'sdsad', 'da.t@gmail.com', '$2y$10$varwfQyhd3X1bsiegm6wkeXymgywiK0cBei09n0R0huk2wQQlx7GO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NULL', 0, NULL, NULL, '2019-08-01 04:07:01', '2019-08-09 03:51:13', '5345'),
(101, NULL, NULL, 'wqeqw@3e', '$2y$10$27khhKMBvQcRAOO9FupHGek0ioAam2.ErByz.DaRfH0sOFYNBLMq.', '70-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NULL', 0, NULL, NULL, '2019-08-02 20:38:59', '2019-08-09 03:52:29', '345'),
(102, 'Đạt', 'Nguyễn Tiến', 'datmemvvber@gmail.com', '$2y$10$clemUZnIDbNqYfLt0HGwO.mDAAz/cngn2MmyRW67lt3dNJJ.yEfz6', '95-09-21', '128', 'dd', 'hn', '1', '2', '3', NULL, '1111111111', 'NULL', 0, NULL, NULL, '2019-08-02 20:49:04', '2019-08-09 03:52:30', '34534'),
(103, 'Đạtfff', 'Nguyễn Tiến', 'dat4444123@gmail.com', '$2y$10$qYe0qIE.V3603FzTOyXn7e8h9pQreBhOqAWFk81YtH8vPxaS8rjjm', '01-01-1970', '43294fdsf', 'sf32fdsj', 'fwef3f', '1', '2', '3', NULL, '1111111111', 'https://www.youtube.com/watch?v=FM7MFYoylVs&list=RDQqccaHauSKQ&index=21', 1, NULL, NULL, '2019-08-02 20:54:23', '2019-08-09 03:52:30', '543'),
(110, 'dwdw', 'Nguyễn Tiếndwd', 'datmefffwmvvber@gmail.com', NULL, '95-09-21', '128', 'dd', 'hn', '1', '2', '3', NULL, '1111111111', 'NULL', 0, NULL, NULL, '2019-08-05 01:20:29', '2019-08-09 03:52:30', '534'),
(111, 'dwd', 'dwddd', 'dat4ff444123@gmail.comd', NULL, '10959', '43294fdsf', 'sf32fdsj', 'fwef3f', '1', '2', '3', NULL, '1111111111', 'https://www.youtube.com/watch?v=FM7MFYoylVs&list=RDQqccaHauSKQ&index=21', 0, NULL, NULL, '2019-08-05 01:20:29', '2019-08-09 03:52:30', '534'),
(112, 'dsf', 'sfsdf', 'dat1fffff23@gmail.com', '$2y$10$CFpepnjfZ1xynJ3tuv.wPOuT4pzldc1DW5GX5LCXStrYsH9JAsMTC', '01-01-1970', '4324r', '342ferg', 'egergregr', '1', '2', '3', NULL, '1111111111', 'NULL', 0, NULL, NULL, '2019-08-06 02:03:35', '2019-08-09 03:52:30', '5435'),
(113, 'dat', 'fd', 'sdfsdfsfsdsdf@gmail.com', '$2y$10$pQrGNON6VTAuieTYD40s.eyMQXZD9CV0ijUvA4YATnbm3JeVlyc52', '1970-01-01', '111111', '111111', '111111', '1', '2', '3', NULL, '1111111111', 'NULL', 0, NULL, NULL, '2019-08-06 02:07:29', '2019-08-09 03:52:30', '345'),
(114, 'fff', 'fff', 'datmefffsdfwefmber@gmail.com', '$2y$10$1eN6JWJE6y9GapXRghCBL.UT0ESPuwj22xxxDwA.m9XLEmncCBpbG', '21/09/1995', '111111', '111111', '111', '1', '2', '3', NULL, '1111111111', 'NULL', 0, NULL, NULL, '2019-08-06 02:08:27', '2019-08-09 03:52:30', '435'),
(116, '1', '1', '1@324234', '$2y$10$W1rbpNpieyrwX4OZ7Llyo.cc9R1pt7mXl8ui4S0eQKcPCZtG4PS8m', '1/1/1', '1', '1', '1', '1', '1', '1', NULL, '1111111111', 'NULL', 0, NULL, NULL, '2019-08-06 21:43:11', '2019-08-09 03:52:30', '345'),
(117, 'tên233', '2', '2@222', '$2y$10$x/vNe85eblZUKTcV2Z450OPrhxuHqCFAPUTFynda2xVp0J.6q5e4q', '2/2/2', '2', '2', '2', '2', '2', '2', '2', '2222222222', 'abc', 0, NULL, NULL, '2019-08-07 02:51:04', '2019-08-19 00:58:38', '34534'),
(118, '31', '3', NULL, '$2y$10$hJd.A7GDoyiNSu5Ajnn37e1LZpS.80OhsFKw2NeLqvDanQ.6eg9cC', '3/3/3', '3', '3', '3', '3', '3', '3', '3', '3333333333', 'https://www.youtube.com/watch?v=j8baN2yTJEw', 0, NULL, NULL, '2019-08-07 04:06:22', '2019-08-19 00:40:49', '534'),
(119, '13', 't', NULL, '$2y$10$B/Tz.Xe8aBh.iIEV3/zxKu6v56T15XyaCl9mWP36hAiMq5lZsUKrG', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, 0, NULL, NULL, '2019-08-18 21:13:32', '2019-08-19 00:38:46', NULL),
(120, 'dattt', 'tien', 'clonebyby1@gmail.com', '$2y$10$L.TQMwhBTPeqMoaaIFCYsOxAe9ORJPLxdMk3UH1qCG.TaW2UUL/M.', '12/12/2012', '36  Doctors Drive', 'LA', 'LA', '1', '2', '3', 'dat34243', '1111111111', NULL, 0, NULL, NULL, '2019-09-02 20:32:16', '2019-09-02 20:32:16', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_id_provinces_foreign` (`id_provinces`);

--
-- Chỉ mục cho bảng `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schools_id_districts_foreign` (`id_districts`);

--
-- Chỉ mục cho bảng `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `scores_iduser_foreign` (`iduser`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3348;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `scores`
--
ALTER TABLE `scores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_id_provinces_foreign` FOREIGN KEY (`id_provinces`) REFERENCES `provinces` (`id`);

--
-- Các ràng buộc cho bảng `schools`
--
ALTER TABLE `schools`
  ADD CONSTRAINT `schools_id_districts_foreign` FOREIGN KEY (`id_districts`) REFERENCES `districts` (`id`);

--
-- Các ràng buộc cho bảng `scores`
--
ALTER TABLE `scores`
  ADD CONSTRAINT `scores_iduser_foreign` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
