-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 22, 2024 lúc 03:13 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `testadmin`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `advises`
--

CREATE TABLE `advises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tittle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `describe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display` tinyint(4) NOT NULL,
  `outstand` tinyint(4) DEFAULT NULL,
  `number` int(11) NOT NULL,
  `seo_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `advises`
--

INSERT INTO `advises` (`id`, `link`, `tittle`, `describe`, `content`, `image`, `display`, `outstand`, `number`, `seo_id`) VALUES
(3, 'tybsdrt', 'ntd', 'ryt', 'rbd', 'images (3).jpeg', 1, NULL, 1, 99);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `image`, `tittle`, `link`, `display`) VALUES
(1, 'z4917504915707_c96830289c31704f282531369167eec6.jpg', 'banner1', '', 1),
(2, 'banner2.jpg', 'banner2', '', 1),
(3, 'banner3.jpg', 'banner3', '', 1),
(4, 'banner4.jpg', 'banner4', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `tittle`, `image`, `content`, `create_at`, `update_at`, `created_at`, `updated_at`) VALUES
(1, '5 Laptop bán tốt dưới 20 triệu đồng', 'blog1.jpg', 'Laptop dưới 20 triệu đồng là phân khúc bán chạy tại Việt Nam nhờ cấu hình tốt, đa dạng cổng kết nối, phù hợp nhu cầu họp học trực tuyến.\n\nGhi nhận tại một số hệ thống bán lẻ cho thấy, máy tính xách tay bán chạy nhất là các dòng từ 12 triệu đến 20 triệu đồng, với mức tăng trưởng 50% so với năm ngoái. Trong đó, các phiên bản của Acer, Dell, Asus, HP, Lenovo được nhiều người quan tâm.\n\nAcer Aspire 3 A315 (12 triệu đồng)\n\nAcer Aspire 3 A315.\nAcer Aspire 3 A315.\n\nVới giá rẻ, màn hình lớn, Aspire 3 là lựa chọn tốt cho người có nhu cầu mua laptop thay thế máy để bàn. Do không còn ổ đĩa quang, cân nặng của sản phẩm chỉ 1,7 kg, nhẹ hơn mức trung bình trước đây khoảng 1,8-2 kg. Màn hình máy 15,6 inch độ phân giải chuẩn Full HD, tấm nền IPS cho góc nhìn rộng. Bàn phím có kích thước đầy đủ, thêm dãy phím số riêng biệt, hỗ trợ tốt cho người dùng văn phòng, nhập liệu.\n\nAspire 3 A315 phiên bản bán chạy nhất có cấu hình cơ bản với chip xử lý Core i3-1005G1, RAM 4 GB có thể nâng cấp do có hai khe cắm, ổ SSD 256 GB cho tốc độ khởi động, mở ứng dụng nhanh hơn hẳn so với ổ HDD truyền thống.\n\nDell Inspiron 15 N515 (19,5 triệu đồng)\n\nDell Inspiron 15 N515.\nDell Inspiron 15 N515.\n\nThuộc phân khúc tầm trung nhưng Inspiron 15 N515 có thiết kế viền màn hình mỏng, cân nặng 1,69 kg. Máy sử dụng tấm nền màn hình IPS 15,6 inch có lớp phủ chống lóa, độ phân giải chuẩn Full HD. Laptop trang bị hai cổng USB 3.2, một USB 2.0 nhưng không có USB-C.\n\nInspiron 15 N515 có cấu hình tốt so với tầm giá gồm chip AMD Ryzen 5 3500U, RAM 8 GB, ổ SSD 256 GB chuẩn PCIe NVMe M.2, chip đồ họa Radeon Vega 8, pin 42 Whr.\n\nAsus Vivobook X415E (16,4 triệu đồng)\n\nAsus Vivobook X415E.\nAsus Vivobook X415E.\n\nSo với các đối thủ cùng tầm, Vivobook X415E có dung lượng RAM ít hơn (4 GB) nhưng lại trội hơn về chip xử lý với Intel Core i5-1135G7 thế hệ 11 mới nhất và ổ SSD dung lượng 512 GB. Model của Asus cũng có lợi thế về cổng kết nối khi có USB-C chuẩn 3.2 mới thay vì chỉ cổng USB Type A truyền thống.\n\nMáy có màn hình 14 inch độ phân giải chuẩn Full HD, phủ lớp chống lóa tương tự model của Dell. X415E có trọng lượng 1,6 kg, nhẹ hơn so với các đối thủ dùng màn hình 15,6 inch.\n\nHP Pavilion 15-eg0505TU (18,9 triệu đồng)\n\nHP Pavilion 15-eg0505TU.\nHP Pavilion 15-eg0505TU.\n\nLaptop của HP có thế mạnh về hệ thống loa sử dụng công nghệ Bang & Olufsen cho chất âm nổi bật so với các đối thủ. Máy cũng dùng chip Core i5-1135G7 thế hệ 11 mới nhất, RAM 8 GB và bộ nhớ SSD lớn 512 GB.\n\nPavilion 15-eg0505TU tích hợp màn hình lớn 15,6 inch, độ phân giải chuẩn Full HD, tấm nền IPS, độ sáng cao 250 nit. Sản phẩm có thiết kế đẹp với khung kim loại, cổng USB-C mới, khe cắm thẻ nhớ microSD nhưng cân nặng hơi lớn so với các đối thủ là 1,75 kg.\n\nLenovo Ideapad 3 15ITL05 (19,1 triệu đồng)\n\nLenovo Ideapad 3 15ITL05.\nLenovo Ideapad 3 15ITL05.\n\nGiống sản phẩm của Dell và HP, Ideapad 3 15ITL05 sử dụng màn hình 15,6 inch độ phân giải Full HD, tấm nền IPS nhưng độ sáng nhỉnh hơn là 300 nit. Phiên bản bán tốt nhất có cấu hình với chip Intel i5-1135G7, RAM 8 GB và bộ nhớ trong 512 GB. Ngoài ra, dòng sản phẩm của Lenovo còn các tùy chọn khác như AMD Ryzen 3, Ryzen 5.\n\nIdeapad 3 15ITL05 nặng 1,7 kg, trang bị khe cắm thẻ nhớ SD, cổng USB-C mới nhất nhưng chỉ hỗ trợ truyền dữ liệu thay vì cả sạc như một số model đối thủ. Một ưu điểm khác của sản phẩm là bàn phím kích thước tiêu chuẩn, có phím số phụ riêng biệt và hệ thống đèn nền.\n\nTuấn Hưng \nGhi nhận tại một số hệ thống bán lẻ cho thấy, máy tính xách tay bán chạy nhất là các dòng từ 12 triệu đến 20 triệu ', '2023-12-13 03:48:24', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(4) NOT NULL,
  `seo_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `content`, `image`, `display`, `seo_id`) VALUES
(1, 'wagwfwqrt34et', 'images (4).jpeg', 1, 19);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact_letters`
--

CREATE TABLE `contact_letters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `topic` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `confirm` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `contact_letters`
--

INSERT INTO `contact_letters` (`id`, `name`, `phone`, `email`, `address`, `topic`, `content`, `note`, `confirm`) VALUES
(1, 'lê quốc thiện', '0363008204', 'quocthien0404@gmail.com', '276 thống nhất', '??nh gi?', '......', '......', NULL),
(2, 'l? qu?c thi?n', '0363008204', 'quocthien0404@gmail.com', '276 th?ng nh?t', '??nh gi?', '......', '......', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `criterias`
--

CREATE TABLE `criterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `describe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer_supports`
--

CREATE TABLE `customer_supports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display` tinyint(4) NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zalo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer_supports`
--

INSERT INTO `customer_supports` (`id`, `tittle`, `display`, `phone`, `zalo`, `content`) VALUES
(1, 'Hỗ trợ khách hàng', 1, '0363008204', '0363008204', 'aegrrr23542');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_products`
--

CREATE TABLE `detail_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` int(20) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `describe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `outstand` tinyint(4) DEFAULT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display` tinyint(4) NOT NULL,
  `new` tinyint(4) DEFAULT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acreage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level2_product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `seo_id` bigint(20) UNSIGNED DEFAULT NULL,
  `level3_product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `level1_product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tag_product_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detail_products`
--

INSERT INTO `detail_products` (`id`, `number`, `image`, `tittle`, `link`, `content`, `describe`, `outstand`, `discount`, `display`, `new`, `product_code`, `price`, `address`, `size`, `acreage`, `contact`, `direction`, `location`, `new_price`, `level2_product_id`, `seo_id`, `level3_product_id`, `level1_product_id`, `tag_product_id`) VALUES
(535, 2, '8ba249a3ab67321494cf6123e9670fdd-2677.jpg', 'CPU-I3 6100', 'cpu-i3-6100', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', 30, 1, 102, 2, 1),
(536, 3, '21712intelg4560-5946.jpg', 'CPU-G4560', 'cpu-g4560', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', 30, 2, 101, 2, 1),
(537, 4, '0557ce8cb6a616ab15f01ba8b583670djpg800x800q100-4900.jpg', 'CPU G4400', 'cpu-g4400', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', 30, 3, 101, 2, 1),
(538, 0, '43691giant117307-5590.jpg', 'MAIN ASUS H110M-K CŨ', 'main-asus-h110m-k-cu', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', 31, 4, 97, 2, 1),
(539, 0, '500-2-2628.png', 'MAIN GIGABYTE H110M - DS2 CŨ', 'main-gigabyte-h110m-ds2-cu', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', 31, 5, 96, 2, 1),
(540, 0, 'unnamed-3350.jpg', 'MAIN ASUS H110M-E CŨ', 'main-asus-h110m-e-cu', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', 31, 6, 97, 2, 1),
(541, 0, '3576-p2-1557217394-1016.jpg', 'MAIN ASUS H110M-D CŨ', 'main-asus-h110m-d-cu', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', 31, 7, 97, 2, 1),
(543, 0, '400vm0105-7197.jpg', 'CPU G5400', 'cpu-g5400', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', 29, 8, 97, 2, 1),
(544, 0, 'line-1771.jpg', 'MAIN ASUS H81M-K CŨ', 'main-asus-h81m-k-cu', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', 31, 9, 96, 2, 1),
(545, 0, 'unnamed-7992.jpg', 'MAIN GIGABYTE-H61 DS2 CŨ', 'main-gigabyte-h61-ds2-cu', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', 31, 10, 96, 2, 1),
(546, 0, 'a97e412a8eb00f798df1b62b06296233-6199.jpg', 'MAIN ASUS H81M-D CŨ', 'main-asus-h81m-d-cu', NULL, NULL, 0, '', 0, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', 31, 11, 97, 2, 1),
(547, 0, 'b8931518b7694c6980651c129f32b807-9837.jpg', 'MAIN ASUS H81M-E CŨ', 'main-asus-h81m-e-cu', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', 31, 12, 97, 2, 1),
(548, 0, '12938145490h61mk-1886.jpg', 'MAIN ASUS H61M-K CŨ', 'main-asus-h61m-k-cu', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', 31, 13, 97, 2, 1),
(549, 0, 'palit1050tidualfan-7536.jpg', 'VGA Palit GTX 1050Ti 4G DUAL (2 Fan)', 'vga-palit-gtx-1050ti-4g-dual-2fan', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', 36, 14, 92, 2, 1),
(550, 0, 'htb18tqkxpluk1rjy0fhq6xpdfxap-9568.jpg', 'MAIN ASUS H61M-D CŨ', 'main-asus-h61m-d-cu', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', 31, 15, 97, 2, 1),
(551, 0, '6fe4382b7be81732a1300a1585429f391-1-5201.jpg', 'VISION GAMING VM01', 'vision-gaming-vm01', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', NULL, 16, NULL, 1, 1),
(552, 0, 'e1b61f2ef53d3f63662c-3714.jpg', 'Thanh Lý Phòng Net A- Z', 'thanh-ly-phong-net-a-z', NULL, NULL, 0, '', 0, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', NULL, 17, NULL, 3, 1),
(553, 0, 'aoc-27inch-2970.jpg', 'LCD 27” AOC I2769V Full HD IPS', 'lcd-27-aoc-i2769v-full-hd-ips', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', NULL, 18, NULL, 2, 1),
(554, 0, 'vsp-19-9843.jpg', 'LCD 19 VSP VE19(LE1902) Chính Hãng', 'lcd-19-vsp-le1902-chinh-hang', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', NULL, 19, NULL, 4, 1),
(555, 0, 'default_image.jpg', 'Thanh Lý Phòng Net A- Z Giá Cao', 'thanh-ly-phong-net-a-z-gia-cao', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', NULL, 20, NULL, 3, 1),
(556, 0, 'default_image.jpg', 'Nguồn Jetek Q9800-Gaming (80 Plus Gold)', 'nguon-jetek-q9800-gaming-80-plus-gold', NULL, NULL, 0, '', 0, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', NULL, 21, NULL, 2, 1),
(557, 0, 'default_image.jpg', 'LCD 20 VSP VS20', 'vsp-20-5179', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', NULL, 22, NULL, 4, 1),
(558, 0, 'e2210h01-7272.jpg', 'LCD VSP 22 Inch LED Monitor E2210H', 'lcd-vsp-22-inch-led-monitor-e2210h', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', NULL, 23, NULL, 4, 1),
(559, 0, '16-7627.jpg', 'Thanh Lý Phòng Net A- Z Giá Cao Bình Dương', 'thanh-ly-phong-net-a-z-gia-cao-binh-duong', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', NULL, 24, NULL, 3, 1),
(560, 0, 'v2205h03-3230.jpg', 'Màn Hình LED Monitor VSP 22inch V2205H', 'man-hinh-led-monitor-vsp-22-inch-v2205h', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', NULL, 25, NULL, 4, 1),
(561, 0, 'aeed8f8c5c9f96c1cf8e-4736.jpg', 'Thanh Lý Phòng Net A- Z Giá Cao Khu Vực Miền Nam', 'thanh-ly-phong-net-a-z-gia-cao-khu-vuc-mien-nam', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, 3, 1),
(562, 0, 'v2408s02-7749.jpg', 'Màn Hình Phẳng LED Tràn Viền Slim Bezel VSP V2408S', 'man-hinh-phang-led-tran-vien-slim-bezel-vsp-v24085', NULL, NULL, 0, '', 0, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, 4, 1),
(563, 0, 'aaaa-2490.jpg', 'Màn Hình ViewSonic VA2408-H 24\" IPS 75Hz', 'man-hinh-view-sonic-va2408-h-24-ips-75hz', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, 4, 1),
(564, 0, '24-benq-6169.jpg', 'Màn Hình BenQ GL2760H LED Full HD - 27 Inch', 'man-hinh-benq-gl2760h-led-full-hd-27-inch', NULL, NULL, 0, '', 0, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, 4, 1),
(565, 0, 'lcd-lg-24m47-7267.jpg', 'Màn Hình LED LG 24 Inch 24M47VQ-P', 'man-hinh-led-lg-24-inch-24m47vq-p', NULL, NULL, 0, '', 0, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, 2, 1),
(566, 0, 'man-hinh-aoc-22-6580.jpg', 'LCD 22AOC 2270SW', 'lcd-22aoc-2270sw', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, 2, 1),
(567, 0, '22-philip-ips-8145.jpg', 'Màn Hình Máy Tính Philips 224E5QHSB', 'man-hinh-may-tinh-philips-224E5QHSB', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, 2, 1),
(568, 0, '23-aoc-1908.jpg', 'Màn Hình Máy Tính AOC E2360SD 23 Inch LED', 'man-hinh-may-tinh-aoc-e52369sd-23-inch-led', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, 2, 1),
(569, 0, '31136nguonfsphydroseries700wmodelhd70000001-8749.jpg', 'Nguồn FSP Power Supply HYDRO Series Model HD700 Active PFC (80 Plus Bronze/Màu Đen)', 'nguon-fps-power-supply-hudro-series-model-hd-700-active', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, 1, 1),
(570, 0, 'man-hinh-lcd-27-lg-27ea33va-ips-cu-black30201-6868.jpg', 'Màn Hình LCD 27” LG 27EA33VA IPS', 'man-hinh-lcd-27-lg-27ea33va-ips', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, 2, 1),
(571, 0, 'g5400v-6520.jpg', 'GAMING HEADSET H120G HP', 'gaming-headset-h120g-hp', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', 42, NULL, NULL, 5, 1),
(572, 0, 'linh-kien-laptop-hcm-hienlaptop-01-7371.png', 'CHUYÊN NÂNG CẤP LAPTOP, THAY THẾ LINH KIỆN. GIÁ TỐT NHẤT BÌNH DƯƠNG', 'chuyen-nang-cap-laptop-thay-the-linh-kien-gia-tot-nhat-binh-duong', NULL, NULL, 0, '', 0, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', 40, NULL, NULL, 6, 1),
(573, 0, 'heaphone-run-mus-k804-1-2320.jpg', 'PHONE RUN MUS K8 LED GAMING', 'phone-run-mus-k8-led-gaming', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', 42, NULL, NULL, 5, 1),
(574, 0, '6fe4382b7be81732a1300a1585429f391-1-5201 (1).jpg', 'Phát Wifi PIX-LINK LV-WR08', 'phat-wifi-pix-link-lv-wr08', NULL, NULL, 1, '', 1, 0, '', '', '', NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_quotations`
--

CREATE TABLE `detail_quotations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wholesale_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guarantee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(4) NOT NULL DEFAULT 1,
  `seo_id` bigint(20) UNSIGNED DEFAULT NULL,
  `level1_quotation_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detail_quotations`
--

INSERT INTO `detail_quotations` (`id`, `tittle`, `link_product`, `unit_price`, `wholesale_price`, `guarantee`, `display`, `seo_id`, `level1_quotation_id`) VALUES
(3, 'BỘ NHỚ RAM', 'LCD-22-VSP-E2210H-Chinh-hang', '1.350.000đ', '1.350.000đ', '24 THÁNG', 1, 18, NULL),
(4, 'DDR4 Serve', 'ddr4-serve', '1.350.000đ', '1.350.000đ', '24 THÁNG', 1, 21, 5),
(5, 'DDR3 PC', 'LCD-22-VSP-E2210H-Chinh-hang', '1.350.000đ', '1.350.000đ', '24 THÁNG', 1, 20, 3),
(6, 'LCD VSP V2407S Full Viền Chính Hãng 75Hz	', 'lcs-vsp-v2407s-full-vien-chinh-hang-75hz', '1.800.000đ	', '1.800.000đ', '24 Tháng\r\n', 1, 10, 3),
(7, 'LCD 27\' VSP phẳng LED tràn viền Slim Bezel VSP V2704S 75hz	', 'lcs-27-vsp-phang-led-tran-vien-slim-bezel-vsp-c2704s-75hz', '2.500.000đ	', '2.500.000đ	', '24 THÁNG\r\n', 1, 14, 3),
(8, 'SSD VSP TECH 512G	', 'ssd-vsp-tech-512G', '610.000đ', '610.000đ	', '36 THÁNG\r\n', 1, 1, 4),
(10, 'SSD VSP TECH 256G Hộp nhựa', 'ssd-vsp-tech-256g-hop-nhua', '360.000đ', '360.000đ', '36 THÁNG', 1, 18, 3),
(11, 'SSD 240G VSPTECH 860QVE	', 'ssd-240g-vsptech-860qve', '340.000đ', '340.000đ', '36 THÁNG\r\n', 1, 28, 4),
(12, 'LCD 22\" VSP E2210H Chính hãng', 'LCD-22-VSP-E2210H-Chinh-hang', '1.350.000đ', '1.350.000đ', '24 THÁNG', 1, 4, 3),
(13, 'SSD VSP TECH 128G Hộp nhôm	', 'ssd-csp-tech-128g-hop-nhom', '240.000đ	', '240.000đ	', '36 THÁNG\r\n', 1, 4, 4),
(14, 'SSD OSCOO 256GB M.2 2280	', 'ssd-oscoo-256gb-m2-2280', '380.000đ	', '380.000đ	', '36 THÁNG\r\n', 1, 1, 4),
(15, 'SSD VSP NVMe - PCIe N-256Gb	', 'ssd-vsp-nvme-pcie-n-256gb', '440.000đ', '440.000đ', '36 THÁNG\r\n', 1, 4, 4),
(16, 'SSD 240G KINGTON SUV500-CHÍNH HÃNG	', 'ssd-240g-kington-suv500-chinh-hang', '380.000đ	', '380.000đ	', '12THÁNG\r\n', 1, 4, 4),
(17, 'SSD 120G KINGTON	', 'ssd-120-kington', '260.000đ', '260.000đ', '36 THÁNG\r\n', 1, 1, 4),
(18, 'SSD Sandisk X300 128GB 2.5 Inch sata	', 'ssd-sandisk-x300-128gb-25-inch-sata', '240.000đ', '240.000đ', '36 THÁNG\r\n', 1, 27, 4),
(19, 'SSD Xstar 128GB	', 'ssd-xstar-128gb', '260.000đ	', '260.000đ	', '36 THÁNG\r\n', 1, 4, 4),
(20, 'RAM Laptop DDR4 8G Bus 2666 X-STAR	', 'ram-laptop-ddr4', '390.000đ	', '390.000đ	', '36 THÁNG\r\n', 1, 1, 5),
(21, 'RAM DDR4 PC 16G/2400 HYNIX/SAMSUNG/MICRON/KINGSTON... Tháo máy bộ (Box)	', 'ram-ddr4-pc-16g-2400-hynic-samsung-micron-kingston', '600.000đ', '600.000đ', '36 Tháng\r\n', 1, 1, 5),
(22, 'RAM Kingston DDR4 PC 8Gb 2666 (Tản nhiệt) Chính Hãng	', 'ram-kingston-ddr4-pc-8gb-2666', '360.000đ', '360.000đ', '36 Tháng\r\n', 1, 15, 5),
(23, 'Ram PC Kingston 8GB DDR3 Bus 1600Mhz	', 'ram-pc-kingston-8gb-ddr3-bus-1600mhz', '240.000đ', '240.000đ', '36 THÁNG', 1, 1, 5),
(24, 'Mainboard GIGA H310M-DS2V	', 'mainboard-giga0h310m-ds2v', '1.220.000đ', '1.220.000đ', '36 Tháng\r\n', 1, 1, 6),
(25, 'Mainboard SK 1151v1 GIGABYTE H110M-DS2 Box RENEW	', 'mainboard-sk-1151v11-gigabyte-h110m-ds2-box-renew', '870.000đ	', '870.000đ	', '36 THÁNG\r\n', 1, 1, 6),
(26, 'Mainboard SK 1150 GIGABYTE H81M-DS2 Box RENEW	', 'mainboard-sk-1150-gigabyte-h81m-ds2-box-renew', '760.000đ', '760.000đ', '36 THÁNG\r\n', 1, 1, 6),
(27, 'LC 22\' VSP  E2210H Chính hãng', 'LCD-22-VSP-E2210H-Chinh-hang', '1.350.000đ', '1.350.000đ', '24 THÁNG', 1, 32, 5),
(28, 'HDD 4T WD PURPLER CHÍNH HÃNG	', 'hđ-4t-wd-purpler-chinh-hang', '1.250.000đ', '1.250.000đ', '24 THÁNG\r\n', 1, 1, 7),
(29, 'HDD WD PC 2T PURPLER Chính hãng	', 'HDD-WD-PC-2T-PURPLER-Chinh-hang	', '730.000đ', '730.000đ', '24 THÁNG\r\n', 1, 11, 7),
(30, 'HDD PC SEAGATE 1T SkyHawk Chính hãng (5900 RPM)	', 'HDD-PC-SEAGATE-1T-SkyHawk-Chinh-hang-5900-RPM	', '490.000đ', '490.000đ', '24 THÁNG\r\n', 1, 11, 7),
(31, 'HDD PC SEAGATE 500G NEW (Không giờ chạy)	', 'HDD-PC-SEAGATE-500G-NEW	', '170.000đ	', '170.000đ	', '24 THÁNG\r\n', 1, 11, 7),
(32, 'HDD PC WD 500G GREEN 2N	', 'HDD-PC-WD-500G-GREEN-2N	', '170.000đ	', '170.000đ	', '24 THÁNG\r\n', 1, 11, 7),
(33, 'HDD PC WD 320G GREEN 1N	', 'HDD-PC-WD-320G-GREEN-1N	', '140.000đ	', '140.000đ	', '12 THÁNG\r\n', 1, 11, 7),
(34, 'HDD 250G SEAGATE MỎNG 24 THÁNG	', 'HDD-250G-SEAGATE-MONG-24-THANG', '120.000đ	', '115.000đ', '24 THÁNG\r\n', 1, 11, 7),
(35, 'HDD 160G SEAGATE	', 'hdd-160g-seagate', '70.000đ	', '70.000đ	', '12 THÁNG\r\n', 1, 11, 7),
(37, 'CASE  VSP 28XX', 'case-vsp-28xx', '175.000đ', '175.000đ', 'TEST', 1, 11, 8),
(38, 'CASE VISION 37XX', 'case-vision-37xx', '195.000đ', '195.000đ', 'TEST', 1, 11, 8),
(39, 'CASE VISION KB08 Đen Kính Cường Lực', 'case-vision-kb08-den-kinh-cuong-luc', '390.000đ', '390.000đ', 'TEST', 1, 11, 8),
(40, 'CASE VISION KB08 Trắng Kính Cường Lực', 'case-vision-kb08-trang-kinh-cuong-luc', '410.000đ', '410.000đ', '	 12 THÁNG', 1, 11, 8),
(41, 'CASE VSP V202', 'case-vsp-v202', '310.000đ', '310.000đ', 'TEST', 1, 11, 8),
(42, 'CASE VSP V211', 'case-vsp-v211', '320.000đ', '320.000đ', 'TEST', 1, 11, 8),
(43, 'CASE VSB KA 220 KÍNH CƯỜNG LỰC', 'case-vsb-ka-220-kinh-cuong-luc', '430.000đ', '430.000đ', 'TEST', 1, 11, 8),
(44, 'Case VSP T510 PINK (Hồng)', 'case-vsp-t510-pink', '620.000đ', '620.000đ', 'TEST', 1, 11, 8),
(45, 'CASE VSP KA 280 KÍNH CƯỜNG LỰC', 'case-vsp-ka-280-kinh-cuong-luc', '430.000đ', '425.000đ', 'TEST', 1, 11, 8),
(46, 'CASE VSB KB 06 KÍNH CƯỜNG LỰC', 'case-vsb-kb-06-kinh-cuong-luc', '440.000đ', '440.000đ', '', 1, 11, 8),
(47, 'CASE VSP V3 607 KÍNH CƯỜNG LỰC', 'case-vsp-v3-607-kinh-cuong-luc', '430.000đ', '430.000đ', 'TEST', 1, 11, 8),
(48, 'CASE VSB KA 240 KÍNH CƯỜNG LỰC', 'case-vsb-ka-240-kinh-cuong-luc', '440.000đ', '440.000đ', 'TEST', 1, 11, 8),
(49, 'Case VSP LED Gaming OMG-II ATX - Hồng - Xanh', 'case-vsp-led-gaming-omg-ii-atx-hong-xanh', '590.000đ', '570.000đ', 'TEST', 1, 11, 8),
(50, 'Case VSP LED Gaming OMG-II ATX - Đen', 'case-vsp-led-gaming-omg-ii-atx-den', '530.000đ', '530.000đ', 'TEST', 1, 11, 8),
(51, 'CASE VSP GAME OMG E-ATX-Đỏ', 'case-vsp-game-omg-e-atx-do', '655.000đ', '655.000đ', 'TEST', 1, 11, 8),
(52, 'CASE VSP 400G1', 'case-vsp-400g1', '285.000đ', '285.000đ', 'TEST', 1, 11, 8),
(53, 'FAN 12 ĐÈN LED MỘT MÀU XANH DƯƠNG', 'fan-12-den-led-mot-mau-xanh-duong', '50.000đ', '45.000đ', 'BAO TEST', 1, 11, 9),
(54, 'Fan Case VSP V202B LED', 'fan-case-vsp-v202b-led', '80.000đ', '80.000đ', 'BAO TEST\r\n', 1, 11, 9),
(55, 'Bộ Kit 3 Fan VSP V309C LED RGB', 'bo-kit-3-fan-vsp-v309c-led-rgb', '340.000đ', '340.000đ', '03 THÁNG', 1, 11, 9),
(56, 'Bộ kit 3 Fan Led RGB + Hub COOLMOON', 'bo-kit-3-fan-lè-rgb-hub-coolmoom', '350.000đ', '345.000đ', '03 THÁNG', 1, 11, 9),
(57, 'WEBCAM 1080P', 'webcam-1080p', '260.000đ', '255.000đ', '03 THÁNG', 1, 11, 9),
(58, 'Tản nhiệt khí CPU 2 ống đồng VSP T200i 1 fan 12cm RGB Đa năng', 'tan-nhiet-khi-cpu-2-ong-dong-vsp-t200i-1-fan-12cm-rgb-da-nang', '180.000đ', '175.000đ', '03 THÁNG', 1, 11, 8),
(59, 'Keo tản nhiệt ống chích LỚN xám xịn', 'keo-tan-nhiet-ong-chich-lon-xam-xin', '20.000đ', '20.000đ', 'BAO TEST', 1, 11, 9),
(60, 'Tản Nhiệt CPU VSP 215 Led RGB', 'tan-nhiet-cpu-vsp-215-led-rgb', '270.000đ', '270.000đ', '12 THÁNG', 1, 11, 9),
(61, 'Nguồn VSPTECH - iForgame AK700 80PLUS BRONZE', 'nguon-vsptech-iforgame-ak700-80plus-bronze', '850.000đ', '850.000đ', '24 THÁNG', 1, 11, 9),
(62, 'Nguồn VSP Elite V650W', 'nguon-vsp-elite-v650w', '800.000đ', '800.000đ', '24 Tháng', 1, 11, 9),
(63, 'Nguồn  VSPTECH - iForgame AK600 80PLUS BRONZE', 'nguon-vsp-tech-iforgame-ak600-80plus-bronze', '770.000đ', '770.000đ', '36 THÁNG', 1, 11, 9),
(64, 'Nguồn VSP Elite V550W', 'nguon-vsp-elite-v550w', '670.000đ', '670.000đ', '12 Tháng', 1, 1, 9),
(65, 'Nguồn VSPTECH eSPORT GAMING LED VE500W', 'nguon-vsptech-esport-gaming-led-ve500w', '540.000đ', '540.000đ', '36 Tháng', 1, 11, 8),
(66, 'Nguồn VSP Delta P550W', 'nguon-vsp-delta-p550w', '520.000đ', '520.000đ', '24 Tháng', 1, 1, 9),
(67, 'Nguồn VSP Delta P450W', 'nguon-vsp-delta-p450w', '470.000đ', '470.000đ', '24 Tháng', 1, 11, 9),
(68, 'Nguồn VSP ATX 420W CÔNG XUẤT THỰC', 'nguon-vsp-atx-420w-cong-xuat-thuc', '370.000đ', '370.000đ', '24 Tháng', 1, 11, 9),
(69, 'Tản Nhiệt CPU VSPTech V400 Plus RGB Air Cooling', 'tan-nhiet-cpu-vsptech-v400-rgb-air-cooling', '340.000đ', '340.000đ', '12 Tháng', 1, 1, 9),
(70, 'Nguồn máy tính VSP ATX  350W CÔNG XUẤT THỰC', 'nguon-may-tinh-vsp-atx-350w-cong-xuat-thuc', '320.000đ', '320.000đ', '24 Tháng', 1, 11, 8),
(71, 'Nguồn máy tính VSP 750W', 'nguon-may-tinh-vsp-750w', '230.000đ', '230.000đ', '12 THÁNG', 1, 11, 9),
(72, 'Nguồn máy tính VSP 550W', 'nguon-may-tinh-vsp-550w', '190.000đ', '190.000đ', '12 Tháng', 1, 11, 9),
(73, 'KEY COMBO BOSSTON G837 LED 7 MÀU', 'key-combo-bosston-g837-led-7-mau', '190.000đ', '185.000đ', '12 Tháng', 1, 11, 12),
(74, 'KEY COMBO BOSSTON KHÔNG DÂY WS800', 'key-combo-bosston-khong-day-ws800', '190.000đ', '190.000đ', '12 Tháng', 1, 11, 12),
(75, 'KEY VISION GAME G9', 'key-vision-game-g9', '95.000đ', '95.000đ', '12 THÁNG', 1, 11, 12),
(76, 'KEY VISION GAMING KL-95 CƠ', 'key-vision-gaming-kl-95-co', '380.000đ', '380.000đ', '12 Tháng', 1, 11, 12),
(77, 'Key Bosston X19 Đèn Led', 'key-bosston-x19-den-led', '130.000đ', '130.000đ', '12 Tháng', 1, 11, 12),
(78, 'KEY VISION GAME G7', 'key-vision-game-g7', '85.000đ', '85.000đ', '12 Tháng', 1, 11, 12),
(79, 'KEY VSP GAMING VM01 CƠ', 'key-vsp-gaming-vm01-co', '360.000đ', '360.000đ', '12 Tháng', 1, 11, 12),
(80, 'KEY (COMPO PHÍM CHUỘT) MITSUMI KFK-EA5XT CHÍNH HÃNG', 'key-combo-phim-chuot-mitsumu-kfk-ea5xt-chinh-hang', '190.000đ', '190.000đ', '12 Tháng', 1, 11, 12),
(81, 'MOUSE KHÔNG DÂY Q8', 'mouse-khong-day-08', '120.000đ', '115.000đ', '12 Tháng', 1, 11, 13),
(82, 'MOUSE GENIUS USB/110X/120', 'mouse-genius-usb-110x-120', '75.000đ', '75.000đ', '12 Tháng', 1, 11, 13),
(83, 'MOUSE Vision G8', 'mouse-vision-g8', '55.000đ', '55.000đ', '12 Tháng', 1, 11, 13),
(84, 'MOUSE GAME G8 1610 USB LED ĐEN', 'mouse-game-g8-1610-use-led-den', '90.000đ', '90.000đ', '12 Tháng', 1, 11, 13),
(85, 'MOUSE GAME NEWMEN G7', 'mouse-game-newmen-g7', '180.000đ', '180.000đ', '12 Tháng', 1, 11, 13),
(86, 'Mouse LOGITECH G302 Gaming USB', 'mouse-logitech-g302-gaming-usb', '145.000đ', '145.000đ', '12 Tháng', 1, 11, 13),
(87, 'MOUSE GAME BOSSTON GM100', 'mouse-game-bosston-gm100', '110.000đ', '110.000đ', '12 Tháng', 1, 11, 13),
(88, 'Mouse Gaming Bosston M710 Đèn Led RGB', 'mouse-gaming-bosston-m710-den-led-rgb', '170.000đ', '170.000đ', '12 Tháng', 1, 11, 13),
(89, 'Mouse gaming Bosston M750 USB2.0', 'mouse-gaming-bosston-m750-usb2.0', '160.000đ', '160.000đ', '12 THáng', 1, 11, 13),
(90, 'Chuột Bosston M730 LED Gaming - màu ngẫu nhiên', 'chuot-bosston-m730-led-gaming-mau-ngau-nhien', '150.000đ', '150.000đ', '12 Tháng', 1, 11, 13),
(91, 'TAI NGHE RUN MUS K8 LED GAMING', 'tai-nghe-run-mus-k8-led-gaming', '260.000đ', '260.000đ', '06 Tháng', 1, 11, 14),
(92, 'Tai Nghe HP GAMING HEADSET H120G', 'tai-nghe-hp-gaming-headset-h120g', '290.000đ', '290.000đ', '06 Tháng', 1, 11, 14),
(93, 'Tai Nghe EXAVP CAO CẤP GAMING/DJ N61 LED FULL BOX', 'tai-nghe-exavp-cao-cap-gaming-dj-n61-led-full-box', '220.000đ', '220.000đ', '06 Tháng', 1, 11, 14),
(94, 'Tai Nghe VSP EXAVP CAO CẤP Gaming / DJ EX 220 LED FULL BOX', 'tai-nghe-vsp-exavp-cao-cap-gaming-dj-ex-220-led-full-box', '170.000đ', '170.000đ', '06 Tháng', 1, 11, 14),
(95, 'Tai nghe game thủ có dây HP BOSSTON A1', 'tai-nghe-game-thu-co-day-hp-bosston-a1', '210.000đ', '210.000đ', '06 Tháng', 1, 11, 14),
(96, 'Tai Nghe Có Dây Lenovo G30', 'tai-nghe-co-day-lenovo-g30', '280.000đ', '280.000đ', '06 Tháng', 1, 11, 14),
(97, 'Loa Vi Tính Bluetooth Mini Kisonli TM8000A', 'loa-vi-tính-bluetooth-mini-kisonli-TM8000A', '400.000đ', '400.000đ', '12 Tháng', 1, 11, 15),
(98, 'Loa vi tính 2.0 mini Kisonli L-1040 led RGB', 'loa-vi-tinh-2-0-mini-kisonli-l-1040-led-rgb', '125.000đ', '125.000đ', '12 Tháng', 1, 11, 15),
(99, 'Loa Di Động Kisonli 2.0 X9', 'loa-di-dong-kisonli-2-0-x9', '220.000đ', '220.000đ', '12 Tháng', 1, 1, 15),
(100, 'LOA DI ĐỘNG - X8', 'loa-di-dong-x8', '220.000đ', '220.000đ', '12 Tháng', 1, 1, 15),
(101, 'Loa vi tính 2.0 Kisonli X7', 'loa-vi-tinh-2-0-kisonli-x7', '145.000đ', '145.000đ', '12 Tháng', 1, 1, 15),
(102, 'Loa Vi Tính Bosston T1800', 'loa-vi-tinh-bosston-t1800', '590.000đ', '590.000đ', '12 Tháng', 1, 1, 15),
(103, 'Loa vi tính Bosston bluetooth 2.1 T1850-BT', 'loa-vi-tinh-bosston-bluetooth-2-1-t1850-bt', '550.000đ', '550.000đ', '12 Tháng', 1, 1, 15),
(104, 'Loa vi tính 2.0 Kisonli I-510', 'loa-vi-tinh-2-0-kisonli-i-510', '155.000đ', '155.000đ', '12 Tháng', 1, 1, 15),
(105, 'Loa vi tính Bosston bluetooth 2.1 T1900-BT', 'loa-vi-tinh-bosston-bluetooth-2-1-t1900-bt', '550.000đ', '550.000đ', '12 Tháng', 1, 11, 15),
(106, 'Loa vi tính Kisonli 2.0 L-8080', 'loa-vi-tinh-kisonli-2-0-l-8080', '145.000đ', '145.000đ', '12 Tháng', 1, 11, 15),
(107, 'Loa cặp vi tính Kisonli L-3030', 'loa-cap-vi-tinh-kisonli-l-3030', '136.000đ', '136.000đ', '12 Tháng', 1, 11, 15),
(108, 'Loa Kisonli KS-05', 'loa-kisonli-ks-05', '135.000đ', '135.000đ', '12 Tháng', 1, 11, 15),
(109, 'Loa Di Động Bosston Z220 Led RGB', 'loa-di-dong-bosston-z220-led-rgb', '225.000đ', '225.000đ', '12 Tháng', 1, 11, 15),
(110, 'Loa 2.0 Kisonli L-2020 LED RGB', 'loa-2-0-kisonli-l-2020-led-rgb', '140.000đ', '140.000đ', '12 Tháng', 1, 11, 15),
(111, 'Loa vi tính 2.0 Kisonli K100', 'loa-vi-tinh-2-0-kisonli-k100', '130.000', '130.000', '12 Tháng', 1, 11, 15),
(112, 'Loa vi tính 2.0 Kisonli A-909', 'loa-vi-tinh-2-0-kisonlo-a-909', '120.000đ', '120.000đ', '12 Tháng', 1, 11, 15),
(113, 'Loa 2.0 Ruizu D09', 'loa-2-0-ruizu-d09', '145.000đ', '145.000đ', '12 Tháng', 1, 7, 15),
(114, 'Loa Di Động Ruizu RS-320 2.0', 'loa-di-dong-ruizu-rs-320-2-0', '140.000đ', '140.000đ', '12 Tháng', 1, 7, 15),
(115, 'Loa Vi Tính 2.0 Kisonli L-1020', 'loa-vi-tinh-2-0-kisonli', '185.000đ', '185.000đ', '12 Tháng', 1, 7, NULL),
(116, 'Loa Vi Tính 2.0 Kisonli L-1020', 'loa-vi-tinh-2-0-kisonli-l-10120', '185.000đ', '185.000đ', '12 Tháng', 1, 7, 15),
(117, 'Loa Vi Tính Kisonli L-1010 2.0', 'loa-vi-tinh-kisonli-l-1010-2-0', '155.000đ', '155.000đ', '12 Tháng', 1, 29, 15),
(118, 'LOA VI TÍNH 2.0 kISONLI T-013', 'loa-vi-tinh-2-0-kisonli-t-013', '195.000đ', '195.000đ', '12 Tháng', 1, 29, 15),
(119, 'Loa vi tính 2.0 Kisonli T-012', 'loa-vi-tinh-2-0-kisonli-t-012', '195.000đ', '195.000đ', '12 Tháng', 1, 29, 15),
(120, 'Loa Kisonli T-008A 2.0', 'loa-kisonli-t-008a-2-0', '185.000đ', '185.000đ', '12 Tháng', 1, 30, 15),
(121, 'Loa Bluetooth Kisonli TM-4000U', 'loa-bluetooth-kisonli-tm-400u', '360.000đ', '360.000đ', '12 Tháng', 1, 30, 15),
(122, 'LOA KISONLI L-9090', 'loa-kisonli-l-9090', '150.000đ', '150.000đ', '12 Tháng', 1, 30, 15),
(123, 'Loa 2.0 kisonli AC-9001', 'loa-2-0-kisonli-ac-9001', '225.000đ', '225.000đ', '12 Tháng', 1, 30, 15),
(124, 'LOA BOSSTON Z203BT', 'loa-bosston-z203bt', '280.000đ', '280.000đ', '12 Tháng', 1, 30, 15),
(125, 'Loa Bluetooth Kisonli TM-1000U', 'loa-bluetooth-kisonli-tm-1000u', '420.000đ', '420.000đ', '12 Tháng', 1, 30, 15),
(126, 'Loa Kisonli i-600', 'loa-kisonli-i-600', '175.000đ', '175.000đ', '12 Tháng', 1, 30, 15),
(127, 'LOA  NANSIN  630S', 'loa-nansin-630s', '220.000đ', '215.000đ', '12 Tháng', 1, 30, 15),
(128, 'Loa Vi Tính Kisonli K500 2.0', 'loa-vi-tinh-kisonli-k500-2-0', '160.000đ', '160.000đ', '12 Tháng', 1, 29, 15),
(129, 'LOA VI TÍNH 2.1 KISONLI U-3000BT', 'loa-vi-tinh-2-1-kisonli-u-3000bt', '220.000đ', '220.000đ', '12 Tháng', 1, 29, 15),
(130, 'LOA NANSIN SV-3000', 'loa-nansin-sv-3000', '385.000đ', '380.000đ', '12 Tháng', 1, 30, 15),
(131, 'Loa Vi Tính Kisonli TM-6000U', 'loa-vi-tinh-kisonli-tm-6000u', '340.000đ', '340.000đ', '12 Tháng', 1, 29, 15),
(132, 'Loa Vi Tính Kisonli TM-6000U', 'loa-vi-tinh-kisonli-tm-6000u', '300.000đ', '290.000đ', '12 Tháng', 1, 29, 15),
(133, 'Loa Vi Tính 2.0 Kisonli V310', 'loa-vi-tinh-2-0-kisonli-v310', '85.000đ', '85.000đ', '12 Tháng', 1, 29, 15),
(134, 'Loa vi tính 2.1 Kisonli U-2900', 'loa-vi-tinh-2-1-kisonli-u2900', '170.000đ', '170.000đ', '12 Tháng', 1, 29, 15),
(135, 'Loa Vi Tính Kisonli A606', 'loa-vi-tinh-kisonli-a606', '125.000đ', '125.000đ', '12 Tháng', 1, 29, 15),
(136, 'Loa Kisonli 2.0 A-101S', 'loa-kisonli-2-0-a-101s', '145.000đ', '145.000đ', '12 Tháng', 1, 30, 15),
(137, 'Loa vi tính 2.0 Kisonli A-707', 'loa-vi-tinh-2-0-kisonli-a-707', '115.000đ', '115.000đ', '12 Tháng', 1, 30, 15),
(138, 'Loa vi tính 2.0 Kisonli S999', 'loa-vi-tinh-2-0-kisonli-s999', '115.000đ', '115.000đ', '12 Tháng', 1, 30, 3),
(139, 'Loa vi tính 2.0 Kisonli V360', 'loa-vi-tinh-2-0-kisonli-v360', '95.000đ', '95.000đ', '12 Tháng', 1, 30, 15),
(140, 'Loa Vi Tính 2.0 Kisonli V410', 'loa-vi-tinh-2-0-kisonli-v410', '85.000đ', '85.000đ', '12 Tháng', 1, 29, 15),
(141, 'Loa Vi Tính Kisonli V400', 'loa-vi-tinh-kisonli-v400', '85.000đ', '85.000đ', '12 Tháng', 1, 29, 15),
(142, 'Phát Wifi PIX-LINKLV-WR08', 'phat-wifi-pix-linklv-wr08', '295.000đ', '295.000đ', '12 Tháng', 1, 1, 16),
(143, 'TP-LINK - WR841N PHÁT HAI RÂU', 'tp-link-wr841n-phat-hai-rau', '295.000đ', '295.000đ', '12 Tháng', 1, 1, 16),
(144, 'CARD THU WIFI TPLINK 751', 'card-thu-wifi-tplink-751', '180.000đ', '180.000đ', '12 Tháng', 1, 1, 16),
(145, 'USB THU WIFI TPLINK 722', 'usb-thu-wifi-tplink-722', '180.000đ', '180.000đ', '12 Tháng', 1, 1, 16),
(146, 'USB WiFi Wireless 11N', 'usb-wifi-wireless-11n', '70.000đ', '70.000đ', '12 Tháng', 1, 1, 16),
(147, 'USB WiFi Wireless UW-300T', 'usb-wifi-wireless-uw-300t', '90.000đ', '90.000đ', '12 Tháng', 1, 1, 16),
(148, 'CABLE SFTB CAT 5E VISION CHỐNG  NHIỄU', 'cable-sftb-cat-5e-vision-chong-nhieu', '720.000đ', '720.000đ', 'BAO TEST', 1, 1, 16),
(149, 'Đầu Mạng VP-Link CAT5E Xuyên Thấu RJ45 (100pcs) - Hàng chính hãng', 'dau-mang0vp-link0cat5e-xuyen-thau-rj45', '100.000đ', '100.000đ', 'BAO TEST', 1, 1, 16),
(150, 'CABLE  UTP 5E VISION DÂY MÀU CAM', 'cable-utp-5e-vision-day-mau-cam', '720.000đ', '720.000đ', 'BAO TEST', 1, 1, 16),
(151, 'CABLE 6E VISION MÀU XANH DƯƠNG LÕI CHỬ THẬP', 'cable-6e-vision-mau-xanh-duong-loi-chu-thap', '490.000đ', '490.000đ', 'BAO TEST', 1, 1, 16),
(152, 'CABLE SFTB 6E VISION CHỐNG NHIỄU 2 LỚP', 'cable-sftb-6e-vision-chong-nhieu-2-lop', '890.000đ', '890.000đ', 'BAO TEST', 1, 1, 16),
(153, 'MAIN INTEL S1200 V3RP SK1150', 'main-intel-s1200-v3rp-sk1150', '600.000đ', '600.000đ', '03 THÁNG', 1, 3, 18),
(154, 'MAIN INTEL S1200 V2 SK 1155', 'main-intel-s1200-v2-sk-1155', '400.000', '400.000', '03 THÁNG', 1, 3, 17),
(155, 'DD3 8G/1333 KINGTON  ECC', 'dd3-8g-1333-kington-ecc', '400.000đ', '400.000đ', '03 Tháng', 1, 20, 17),
(156, 'DD3 8G/1600 KINGTON  ECC', 'dd3-8g-1600-kington-ecc', '450.000đ', '450.000đ', '03 Tháng', 1, 20, 17),
(157, 'HDD Western 1TB Black Chính Hãng', 'hdd-western-1tb-black-chinh-hang', '550.000đ', '550.000đ', '03 Tháng', 1, 9, 17),
(158, 'HDD Western 1TB Black Chính Hãng\r\n', 'hdd-western-1tb-black-chinh-hang', '550.000đ', '550.000đ', '03 THÁNG\r\n', 1, 9, 17),
(159, 'SSD - 480G KINGTON SEVER\r\n', 'ssd-480g-kington-serve', '550.000đ\r\n', '550.000đ\r\n', '03 THÁNG\r\n', 1, 9, 17),
(160, 'SSD KINGMAX 480G\r\n', 'ssd-kingmax-480g', '550.000đ\r\n', '550.000đ\r\n', '03 THÁNG\r\n', 1, 9, 17),
(161, 'SSD - 240G - INTEL SEVER\r\n', 'ssd-240g-intel-serve', '350.000đ', '350.000đ', '03 Tháng', 1, 9, 17),
(162, 'SSD INTEL - 120G SEVER\r\n', 'ssd-intel-120g-serve', '280.000đ', '280.000đ', '03 THÁNG\r\n', 1, 9, 17),
(163, 'SSD KINGTON 120G SEVER\r\n', 'ssd-kington-120g-serve', '250.000đ', '250.000đ', '03 THÁNG\r\n', 1, 9, 17),
(164, 'CASE SERVER ĐẸP\r\n', 'case-serve-dep', '200.000đ\r\n', '200.000đ\r\n', '03 THÁNG\r\n', 1, 1, 17),
(165, 'NGUỒN 500W SEVER\r\n', 'nguon-500w-serve', '450.000đ\r\n', '450.000đ\r\n', '03 THÁNG\r\n', 1, 1, 17),
(166, 'Máy Bộ Barebone HP Compaq 6200/8200/6300/8300 SFF\r\n', 'may-bo-barebone-hp-compaq-6200-8200-6300-8300-sff', '1.600.000đ\r\n', '1.600.000đ\r\n', '03 Tháng\r\n', 1, 1, 17),
(167, 'MAIN GIGABYTE B365M-D2V CÒN BẢO HÀNH HÃNG 2 NĂM\r\n', 'main-gigabte-b365m-d2v-con-bao-hanh-hang-2-nam', '850.000đ\r\n', '850.000đ\r\n', '03 THÁNG\r\n', 1, 14, 18),
(168, 'MAIN MSI B360M PRO-VD (Chipset Intel B360/ Socket LGA1151/ VGA onboard) CÒN BẢO HÀNH HÃNG\r\n', 'main-msi-b360m-pro-vd', '780.000đ', '780.000đ', '03 THÁNG\r\n', 1, 16, 18),
(169, 'MAIN GIGABYTE H310M DS2\r\n', 'main-gigabyte-h310m-ds2', '700.000đ\r\n', '700.000đ\r\n', '03 THÁNG\r\n', 1, 14, 18),
(170, 'MAIN GIGABYTE H310M S2V CÒN BẢO HÀNH HÃNG 2 NĂM\r\n', 'main-gigabyte-h310m-s2v-con-bao-hanh-hang-2-nam', '820.000đ\r\n', '820.000đ\r\n', '03 THÁNG\r\n', 1, 16, 18),
(171, 'MAIN ASUS PRIME H310M-K\r\n', 'main-asus-prime-h310m-k', '670.000đ', '670.000đ', '03 THÁNG\r\n', 1, 15, 18),
(172, 'MAIN ASUS PRIME H310M-E R2.0 / CSM\r\n', 'main-asus-prime-h310m-e-r2-0-csm', '650.000đ', '650.000đ', '03 THÁNG\r\n', 1, 15, 18),
(173, 'MAIN ASUS PRIME H310M-D\r\n', 'main-asus-prime-h310m-d', '650.000đ\r\n', '650.000đ\r\n', '03 THÁNG\r\n', 1, 15, 18),
(174, 'MAIN COLORFULL Battle AXE C.B250M-HD V20\r\n', 'main-colorfull-battle-axe-c-b250m0hd0v20', '650.000đ', '650.000đ', '03 THÁNG\r\n', 1, 17, 18),
(175, 'MAIN GIGABYTE H110M - DS2\r\n', 'main-gigabyte-h110m-ds2', '650.000đ', '650.000đ', '03 THÁNG\r\n', 1, 14, 18),
(176, 'MAIN ASUS H110M-K\r\n', 'main-asus-h110m-k', '600.000đ\r\n', '600.000đ\r\n', '03 THÁNG\r\n', 1, 15, 18),
(177, 'MAIN ASUS H110M-D\r\n', 'main-asus-h110m-d', '600.000đ', '600.000đ', '03 THÁNG\r\n', 1, 15, 18),
(178, 'MAIN ASUS H110M-E\r\n', 'main-asus-h110m-e', '600.000đ\r\n', '600.000đ\r\n', '03 THÁNG\r\n', 1, 15, 18),
(179, 'MAIN COLORFULL H110M-D plus V22\r\n', 'main-colorffull-h110m-d-plus-v22', '550.000đ', '550.000đ', '03 THÁNG\r\n', 1, 17, 18),
(180, 'MAIN MSI H110M PRO-VD PLUS\r\n', 'main-msi-h110m-pro-vd-plus', '550.000đ\r\n', '550.000đ\r\n', '03 THÁNG\r\n', 1, 16, 18),
(181, 'MAIN ASROCK H110M-HDV\r\n', 'main-asrock-h110m-hdv', '550.000đ', '550.000đ', '03 THÁNG\r\n', 1, 15, 18),
(182, 'MAIN GIGABYTE-B85M-D3V\r\n', 'main-gigabyte-b85m-d3v', '700.000đ\r\n', '700.000đ\r\n', '03 THÁNG\r\n', 1, 14, 18),
(183, 'MAIN GIGABYTE H81 DS2 REV 3.0 CÒN BẢO HÀNH CHÍNH HÃNG\r\n', 'main-gigabyte0h81-ds2-rev-3-0-con-bao-hanh-chinh-hang', '550.000đ\r\n', '550.000đ\r\n', '03 tháng\r\n', 1, 14, 18),
(184, 'MAIN GIGABYTE H81M-S2PV\r\n', 'main-gigabyte-h81m-s2pv', '550.000đ\r\n', '550.000đ\r\n', '03 THÁNG\r\n', 1, 14, 18),
(185, 'MAIN GIGABYTE H81M-DS2 REV 3.0\r\n', 'main-gigabyte-h81m-hs2-rev-3-0', '550.000đ\r\n', '550.000đ\r\n', '03 THÁNG\r\n', 1, 14, 18),
(186, 'MAIN GIGABYTE H81 DS2 ,REV 2.1\r\n', 'main-gigabyte-h81-ds2-rev-2-1', '550.000đ', '550.000đ', '03 THÁNG\r\n', 1, 14, 18),
(187, 'MAIN ASUS H81M-D\r\n', 'main-asus-h81m-d', '500.000đ\r\n', '500.000đ\r\n', '03 THÁNG\r\n', 1, 15, 18),
(188, 'MAIN ASUS H81 M-K\r\n', 'main-asus-h81m-k', '500.000đ\r\n', '500.000đ\r\n', '03 THÁNG\r\n', 1, 15, 18),
(189, 'Mainboard MSI H81M-P33\r\n', 'main-msi-h81m-p33', '450.000đ', '450.000đ', '03 THÁNG\r\n', 1, 16, 18),
(190, 'MAIN GIGABYTE B75M-HD3\r\n', 'main-gigabyte-b75m-hd3', '650.000đ\r\n', '650.000đ\r\n', '03 THÁNG\r\n', 1, 14, 18),
(191, 'MAIN ASUS B75M-A\r\n', 'main-asus-b75m-a', '600.000đ', '600.000đ', '03 THÁNG\r\n', 1, 15, 18),
(192, 'MAIN GIGABYTE H61 DS2, 5.0 CHÍNH HÃNG\r\n', 'main-gigabyte-h61-ds2-5-0-chinh-hang', '500.000đ', '500.000đ', '03 THÁNG\r\n', 1, 14, 18),
(193, 'MAIN GIGABYTE H61 DS2, 3.0 - 4.0\r\n', 'main-gigabyte-h61-ds2-3-0-4-0', '500.000đ\r\n', '500.000đ\r\n', '03 THÁNG\r\n', 1, 14, 18),
(194, 'MAIN GIGABYTE H61 DS2. 2.2\r\n', 'main-gigabyte-h61-ds2-2-2', '450.000đ\r\n', '450.000đ\r\n', '03 THÁNG\r\n', 1, 14, 18),
(195, 'MAIN GIGABYTE H61 S2PV\r\n', 'main-gigabyte-h61-s2pv', '480.000đ', '480.000đ', '03 THÁNG\r\n', 1, 14, 18),
(196, 'MAIN ASUS H61 M-K CHÍNH HÃNG\r\n', 'main-asus-h61-m-k-chinh-hang', '430.000đ\r\n', '430.000đ\r\n', '03 THÁNG\r\n', 1, 15, 18),
(197, 'MAIN ASUS P8H61 - M X\r\n', 'main-asus-p8h61-m-x', '430.000đ\r\n', '430.000đ\r\n', '03 THÁNG\r\n', 1, 15, 18),
(198, 'MAIN INTEL H61 CHÍNH HÃNG\r\n', 'main-intel-h61-chinh-hang', '400.000đ', '400.000đ', '03 THÁNG\r\n', 1, 3, 18),
(199, 'MAIN ASUS P8H61-MLX3R2.O\r\n', 'main-asus-p8h61-mlx3e2-0', '430.000đ\r\n', '430.000đ\r\n', '03 THÁNG\r\n', 1, 15, 18),
(200, 'MAIN FOXCONN H61\r\n', 'main-foxconn-h61', '370.000đ\r\n', '370.000đ\r\n', '03 THÁNG\r\n', 1, 15, 18),
(201, 'MAIN ASROCK H61\r\n', 'main-asrock-h61', '390.000đ', '390.000đ', '03 THÁNG\r\n', 1, 15, 18),
(202, 'MAIN ZOTAC H61\r\n', 'main-zotac-h61', '420.000đ\r\n', '420.000đ\r\n', '03 THÁNG\r\n', 1, 15, 18),
(203, 'MAIN ASROCK H71\r\n', 'main-asrock-h71', '450.000đ', '450.000đ', '03 THÁNG\r\n', 1, 15, 18),
(204, 'GIGABYTE G41 DD3\r\n', 'gigabyte-g1-dd3', '370.000đ\r\n', '370.000đ\r\n', '03 THÁNG\r\n', 1, 15, 18),
(205, 'GIGA BYTE G41 DD2\r\n', 'gigabyte-g41-dd2', '320.000đ\r\n', '320.000đ\r\n', '03 THÁNG\r\n', 1, 14, 18),
(206, 'MAIN GIGABYTE P41 DD3\r\n', 'main-gigabyte-p41-dd3', '270.000đ', '270.000đ', '03 THÁNG\r\n', 1, 15, 18),
(207, 'MAIN ASUS G41 DD3\r\n', 'main-asus-g41-dd3', '320.000đ\r\n', '320.000đ\r\n', '03 THÁNG\r\n', 1, 15, 18),
(208, 'MAIN ASUS G41 DD2\r\n', 'main-asus-g41-dd2', '300.000đ\r\n', '300.000đ\r\n', '03 THÁNG\r\n', 1, 15, 18),
(209, 'MAIN GIGABYTE G31\r\n', 'main-gigabyte-g31', '270.000đ\r\n', '270.000đ\r\n', '03 THÁNG\r\n', 1, 14, 18),
(210, 'MAIN ASUS G31\r\n', 'main-asus-g31', '270.000đ', '270.000đ', '03 THÁNG\r\n', 1, 15, NULL),
(211, 'RAM Laptop DDR4 8GB Bus 2666\r\n', 'ram-laptop-ddr4-8gb-bus-2666', '370.000đ\r\n', '370.000đ\r\n', '03 tháng\r\n', 1, 21, 19),
(212, 'RAM Laptop DDR4 4GB Bus 2666\r\n', 'ram-latop-ddr4-4gb-bus-2666', '250.000đ', '250.000đ', '03 tháng\r\n', 1, 21, 19),
(213, 'RAM Laptop DDR3 8GB Bus 1600\r\n', 'ram-laptop-ddr3-8gb-bus-1600', '360.000đ\r\n', '360.000đ\r\n', '03 tháng\r\n', 1, 21, 19),
(214, 'Ram Laptop DDR3L Hynix 4GB Bus 1600\r\n', 'ram-laptop-ddr3l-hynix-4gb-bus-1600', '220.000đ\r\n', '220.000đ\r\n', '03 THÁNG\r\n', 1, 20, 19),
(215, 'RAM Laptop DDR3 2GB Bus 1333\r\n', 'ram-laptop-ddr3-2gb-bus-1333', '110.000đ', '110.000đ', '03 THÁNG\r\n', 1, 20, 19),
(216, 'HDD 2.5\' 320g laptop\r\n', 'hdd-2-5-320g-laptop', '200.000đ', '200.000đ', '03 tháng\r\n', 1, 9, 19),
(217, 'HDD 2.5\' 500g laptop\r\n', 'hdd-2-5-500g-laptop', '230.000đ', '230.000đ', '03 tháng\r\n', 1, 9, 19),
(218, 'HDD 2.5\' 1T laptop\r\n', 'hdd-2-5-1t-laptop', '500.000đ\r\n', '500.000đ\r\n', '03 tháng\r\n', 1, 9, 19),
(219, 'RAM Team Elite DDR4 8Gb 2666 (Tản nhiệt) CÒN BẢO HÀNH HÃNG\r\n', 'ram-team-elite-dd4r-8gb02666-tan-nhiet-con-bao-hanh-hang', '300.000đ\r\n', '300.000đ\r\n', '03 THÁNG\r\n', 1, 21, 20),
(220, 'RAM DDR4 PC 8G/2400 GSKILL Tản nhiệt\r\n', 'ram-ddr4-pc-8g-2400-gskill-tan-nhiet', '250.000đ\r\n', '250.000đ\r\n', '03 THÁNG\r\n', 1, 21, 20),
(221, 'Ram 8gb/2400 PC Kingmax DDR4\r\n', 'ram-8gb-2400-pc-kingmax-ddr4', '250.000đ', '250.000đ', '03 THÁNG\r\n', 1, 21, 20),
(222, 'RAM Team Elite DDR4 8Gb 2400 (Tản nhiệt)\r\n', 'ram-team-elite-ddr4-8gb-2400', '250.000đ', '250.000đ', '03 THÁNG\r\n', 1, 21, 20),
(223, 'RAM Kingston 8Gb DDR4-2400\r\n', 'ram-kington-8gb-ddr4-2400', '250.000đ\r\n', '250.000đ\r\n', '03 THÁNG\r\n', 1, 21, 20),
(224, 'RAM desktop G.SKILL Aegis F4-2666C19S-8GIS (1x8GB) DDR4 2666MHz\r\n', 'ram-desktop-g-skill-aegis-f4-2666c195-8gis', '250.000đ\r\n', '250.000đ\r\n', '03 THÁNG\r\n', 1, 21, 20),
(225, 'RAM DATO PC D4 8GB PC 2400\r\n', 'ram-dato-pc-d4-8gb-2400', '250.000đ\r\n', '250.000đ\r\n', '3 tháng\r\n', 1, 21, 20),
(226, 'RAM GSkill 4GB DDR4 Bus 2400\r\n', 'ram-gskill-4gb-ddr4-bus-2400', '170.000đ\r\n', '170.000đ', '03 THÁNG\r\n', 1, 21, 20),
(227, 'RAM desktop KINGMAX (1x4GB) DDR4 2400MHz\r\n', 'ram-desktop-kingmax-1x4gb-ddr3-2400mhz', '170.000đ\r\n', '170.000đ\r\n', '03 THÁNG\r\n', 1, 21, 20),
(228, 'RAM DDR4 GEIL 4Gb/2400 tản trắng có LED\r\n', 'ram-ddr3-geil-4gb-2400-tan-trang-co--led', '170.000đ\r\n', '170.000đ\r\n', '03 THÁNG\r\n', 1, 21, 20),
(229, 'Ram Dato DDR4 4GB Bus 2400Mhz TẢN NHIỆT THÉP\r\n', 'ram-dato-ddr4-4gb-bus-2400mhz-tan-nhiet-thep', '170.000đ\r\n', '170.000đ\r\n', '03 THÁNG\r\n', 1, 21, 20),
(230, 'RAM desktop G.SKILL Aegis F3-1600C11S-8GIS (1x8GB) DDR3 1600MHz\r\n', 'ram-desktop--skill-aegis-f3-1600c11s-8gis-1x8gb-ddr3-1600mhz', '170.000đ\r\n', '170.000đ\r\n', '03 THÁNG\r\n', 1, 21, 21),
(231, 'RAM 8GB KINGMAX BUSS 1600MHZ\r\n', 'ram-8gb-kingmax-buss-1600mhz', '180.000đ\r\n', '180.000đ\r\n', '03 THÁNG\r\n', 1, 21, 21),
(232, 'Ram DDR3 8G - Bus 1600 - Hiệu Team Elite Tản Nhiệt Chính Hãng\r\n', 'ram-ddr3-8g-bus01600-hieu-team-elite-tan-nhiet-chinh-hang', '170.000đ\r\n', '170.000đ\r\n', '03 THÁNG\r\n', 1, 20, 21),
(233, 'Ram Kingston 8GB DDR3 Bus 1600Mhz có tản HyperX Fury\r\n', 'ram-kingston-8gb-ddr3-bus-1600mhz-co-tan-nhiet-hyperx-fury', '170.000đ', '170.000đ', '03 THÁNG\r\n', 1, 20, 21),
(234, 'RAM DDR3 G.SKILL 4G-1600 TẢN NHIỆT THÉP\r\n', 'ram-ddr3-g-skill-4g-1600-tan-nhiet-thap', '60.000đ\r\n', '60.000đ\r\n', '03 THÁNG\r\n', 1, 20, 21),
(235, 'RAM KINGMAX DDR3 4GB BUSS 1600\r\n', 'ram-kingmax-ddr3-4gb-buss-1600', '60.000đ\r\n', '60.000đ\r\n', '03 THÁNG\r\n', 1, 20, 21),
(236, 'Ram Kingmax DDR3 4G 1333\r\n', 'ram-kingmax-ddr3-4g-1333', '60.000đ\r\n', '60.000đ\r\n', '03 THÁNG\r\n', 1, 20, 21),
(237, 'RAM Kingston 4Gb DDR3 1600\r\n', 'ram-kingston-4gb-ddr3-1600', '60.000đ', '60.000đ', '03 THÁNG\r\n', 1, 20, 21),
(238, 'RAM DD3 4G 1333 KINGTON\r\n', 'ram-ddr3-4g-1333-kington', '60.000đ\r\n', '60.000đ\r\n', '03 THÁNG\r\n', 1, 20, 21),
(239, 'RAM DD2 2G/ 800 /1066/KINGMAX\r\n', 'ram-dd2-2g-800-1066-kingmax', '130.000đ\r\n', '130.000đ\r\n', '03 THÁNG\r\n', 1, 20, 21),
(240, 'RAM DD2 2G/ 800 KINGTON\r\n', 'ram-dd2-2g-800-kington', '110.000đ\r\n', '110.000đ\r\n', '03 THÁNG\r\n', 1, 20, 21),
(241, 'CPU i3 8100 TẶNG FAN\r\n', 'cpu-i3-8100-tang-fan', '1.200.000đ\r\n', '1.200.000đ\r\n', '12 THÁNG\r\n', 1, 11, 25),
(242, 'CPU I3 9100F TẶNG FAN\r\n', 'cpu-i3-9100f-tang-fan', '1.200.000đ', '1.200.000đ', '12 THÁNG\r\n', 1, 11, 25),
(243, 'CPU G5500 TẶNG FAN\r\n', 'cpu-g5500-tang-fan', '', '', 'Liên Hệ\r\n', 1, 2, 25),
(244, 'CPU G5400 TẶNG FAN\r\n', 'cpu-g5400-tang-fan', '', '', 'Liên Hệ\r\n', 1, 2, 25),
(245, 'CPU I5 3570 TẶNG FAN\r\n', 'cpu-i5-3570-tang-fan', '320.000đ\r\n', '320.000đ\r\n', '12 THÁNG\r\n', 1, 12, 26),
(246, 'CPU I5 3470 TẶNG FAN\r\n', 'cpu-i5-3470-tang-fan', '300.000đ\r\n', '300.000đ\r\n', '12 THÁNG\r\n', 1, 2, 26),
(247, 'CPU I5 2500 TẶNG FAN\r\n', 'cpu-i5-2500-tang-fan', '270.000đ\r\n', '270.000đ\r\n', '12 THÁNG\r\n', 1, 12, 26),
(248, 'CPU I5 2400 TẶNG FAN\r\n', 'cpu-i5-2400-tang-fan', '250.000đ\r\n', '250.000đ\r\n', '12 THÁNG\r\n', 1, 12, 26),
(249, 'CPU I3 3240 TẶNG FAN\r\n', 'cpu-i3-3240-tang-fan', '180.000đ\r\n', '180.000đ\r\n', '12 THÁNG\r\n', 1, 11, 26),
(250, 'CPU I3 3220 TẶNG FAN\r\n', 'cpu-i3-3220-tang-fan', '160.000đ\r\n', '160.000đ\r\n', '12 THÁNG\r\n', 1, 11, 26),
(251, 'CPU I3 3210 TẶNG FAN\r\n', 'cpu-i3-3210-tang-fan', '150.000đ', '150.000đ', '12 THÁNG\r\n', 1, 11, 26),
(252, 'CPU I3 2120 TẶNG FAN\r\n', 'cpu-i3-2120-tang-fan', '140.000đ', '140.000đ', '12 THÁNG\r\n', 1, 11, 26),
(253, 'CPU G 2030 TẶNG FAN\r\n', 'cpu-g-2030-tang-fan', '50.000đ\r\n', '50.000đ\r\n', '12 THÁNG\r\n', 1, 2, 26),
(254, 'CPU G 2130 TẶNG FAN\r\n', 'cpu-g-2130-tang-fan', '50.000đ\r\n', '50.000đ\r\n', '12 THÁNG\r\n', 1, 2, 26),
(255, 'CPU G 2020 TẶNG FAN\r\n', 'cpu-g-2020-tang-fan', '50.000đ', '50.000đ', '12 THÁNG\r\n', 1, 2, 26),
(256, 'CPU G 2010 TẶNG FAN\r\n', 'cpu-g-2010-tang-fan', '50.000đ\r\n', '50.000đ\r\n', '12 THÁNG\r\n', 1, 2, 26),
(257, 'CPU G860 TẶNG FAN\r\n', 'cpu-g860-tang-fan', '50.000đ\r\n', '50.000đ\r\n', '12 THÁNG\r\n', 1, 2, 26),
(258, 'CPU G840 TẶNG FAN\r\n', 'cpu-g840-tang-fan', '50.000đ\r\n', '50.000đ\r\n', '12 THÁNG\r\n', 1, 2, 26),
(259, 'CPU G645 TẶNG FAN\r\n', 'cpu-g645-tang-fan', '40.000đ\r\n', '40.000đ\r\n', '12 THÁNG\r\n', 1, 2, 26),
(260, 'CPU G620 TẶNG FAN\r\n', 'cpu-g620-tang-fan', '40.000đ\r\n', '40.000đ\r\n', '12 THÁNG\r\n', 1, 2, 26),
(261, 'CPU G550 TẶNG FAN\r\n', 'cpu-g550-tang-fan', '40.000đ', '40.000đ', '12 THÁNG\r\n', 1, 2, 26),
(262, 'CPU I5 7500 TẶNG FAN\r\n', 'cpu-i5-7500-tang-fan', '1.200.000đ\r\n', '1.200.000đ\r\n', '12 Tháng', 1, 12, 27),
(263, 'CPU I7 6700 TẶNG FAN RIN\r\n', 'cpu-i7-6700-tang-fan-rin', '1.600.000đ\r\n', '1.600.000đ\r\n', '12 tháng\r\n', 1, 13, 27),
(264, 'CPU I5 6500 TẶNG FAN\r\n', 'cpu-i5-6500-tang-fan', '950.000đ', '950.000đ', '12 THÁNG\r\n', 1, 12, 27),
(265, 'CPU I3 7100 TẶNG FAN\r\n', 'cpu-i3-7100-tang-fan', '590.000đ\r\n', '590.000đ\r\n', '12 THÁNG\r\n', 1, 11, 27),
(266, 'CPU I3 6100 TẶNG FAN\r\n', 'cpu-i3-6100-tang-fan', '490.000đ\r\n', '490.000đ\r\n', '12 THÁNG\r\n', 1, 11, 27),
(267, 'CPU I3 6098P TẠNG FAN\r\n', 'cpu-i3-06098p-tang-fan', '450.000đ', '450.000đ', '12 THÁNG\r\n', 1, 11, 27),
(268, 'CPU G4600 TẶNG FAN\r\n', 'cpu-g4600-tang-fan', '240.000đ\r\n', '240.000đ\r\n', '12 THÁNG\r\n', 1, 11, 27),
(269, 'CPU G4560 TẶNG FAN\r\n', 'cpu-g4560-tang-fan', '220.000đ\r\n', '220.000đ\r\n', '12 THÁNG\r\n', 1, 2, 27),
(270, 'CPU G4400 TẶNG FAN\r\n', 'cpu-g4400-tang-fan', '190.000đ\r\n', '190.000đ\r\n', '12 THÁNG\r\n', 1, 2, 27),
(271, 'CPU I5 4690 TẶNG FAN\r\n', 'cpu-i5-4690-tang-fan', '520.000đ', '520.000đ', '12 THÁNG\r\n', 1, 12, 28),
(272, 'CPU I5 4590 TẶNG FAN\r\n', 'cpu-i5-4590-tang-fan', '490.000đ\r\n', '490.000đ\r\n', '12 THÁNG\r\n', 1, 12, 28),
(273, 'CPU I5 4570 TẶNG FAN\r\n', 'cpu-i5-4570-tang-fan', '480.000đ\r\n', '480.000đ\r\n', '12 THÁNG\r\n', 1, 12, 28),
(274, 'CPU I5 4460 TẶNG FAN\r\n', 'cpu-i5-4460-tang-fan', '480.000đ\r\n', '480.000đ\r\n', '12 THÁNG\r\n', 1, 12, 28),
(275, 'CPU I3 4170 TẶNG FAN\r\n', 'cpu-i3-4170-tang-fan', '220.000đ\r\n', '220.000đ\r\n', '12 THÁNG\r\n', 1, 11, 28),
(276, 'CPU I3 4160 TẶNG FAN\r\n', 'cpu-i3-4160-tang-fan', '200.000đ', '200.000đ', '12 THÁNG\r\n', 1, 11, 28),
(277, 'CPU I3 4150 TẶNG FAN\r\n', 'cpu-i3-4150-tang-fan', '190.000đ', '190.000đ', '12 THÁNG\r\n', 1, 11, 28),
(278, 'CPU I3 4130 TẶNG FAN\r\n', 'cpu-i3-4130-tang-fan', '160.000đ\r\n', '160.000đ\r\n', '12 THÁNG\r\n', 1, 11, 28),
(279, 'CPU G3460 TẶNG FAN\r\n', 'cpu-g3460-tang-fan', '100.000đ', '100.000đ', '12 THÁNG\r\n', 1, 2, 28),
(280, 'CPU G3450 TẶNG FAN\r\n', 'cpu-g3450-tang-fan', '100.000đ\r\n', '100.000đ\r\n', '12 THÁNG\r\n', 1, 2, 28),
(281, 'CPU G3440 TẶNG FAN\r\n', 'cpu-g3440-tang-fan', '100.000đ', '100.000đ', '12 THÁNG\r\n', 1, 2, 28),
(282, 'CPU G3260 TẶNG FAN\r\n', 'cpu-g3260-tang-fan', '100.000đ\r\n', '100.000đ\r\n', '12 THÁNG\r\n', 1, 2, 28),
(283, 'CPU G3258 TẶNG FAN\r\n', 'cpu-g3258-tang-fan', '100.000đ', '100.000đ', '12 THÁNG\r\n', 1, 2, 28),
(284, 'CPU G3250 TẶNG FAN\r\n', 'cpu-g3250-tang-fan', '100.000đ\r\n', '100.000đ\r\n', '12 THÁNG\r\n', 1, 2, 28),
(285, 'CPU G3240 TẶNG FAN\r\n', 'cpu-g3240-tang-fan', '100.000đ', '100.000đ', '12 THÁNG\r\n', 1, 2, 28),
(286, 'CPU G3220 TẶNG FAN\r\n', 'cpu-g3220-tang-fan', '80.000đ\r\n', '80.000đ\r\n', '12 THÁNG\r\n', 1, 2, 28),
(287, 'VGA ZOTAC GAMING GeForce GTX 1650 SUPER Twin Fan 4G GDDR6\r\n', 'vga-zotac-gaming0geforece-gtx-1650-super-twin-fan-4g-gddr6', '2.200.000đ\r\n', '2.200.000đ\r\n', '03 Tháng\r\n', 1, 22, 29),
(288, 'VGA ZOTAC GTX 1650 4GB GDDR5 AMP\r\n', 'vga-zotac-gtx-1650-4gb-gddr5-awp', '2.000.000đ\r\n', '2.000.000đ\r\n', '03 Tháng\r\n', 1, 22, 29),
(289, 'VGA GTX1050 GEFORCE 2G/DD5/128BIT\r\n', 'vga-gtx1050-geforce-2g-dd5-128bit', '1.500.000đ\r\n', '1.500.000đ\r\n', '03 THÁNG\r\n', 1, 22, 29),
(290, 'VGA Palit GTX 1050Ti 4G DUAL (2 fan) (NVIDIA Geforce/ 4Gb/ DDR5/ 128 Bits)\r\n', 'vga-palit-gtx-1050ti-4g-dual-2-fan-nvidia-geforce-4gb-ddr5-128-bits', '1.800.000đ\r\n', '1.800.000đ\r\n', '03 THÁNG\r\n', 1, 22, 29),
(291, 'VGA Asus GTX 1050Ti Strix Gaming 4G 2 Fan\r\n', 'vga-asus-gtx-1050ti-strix-gaming-4g-2-fan', '1.850.000đ\r\n', '1.850.000đ\r\n', '03 THÁNG\r\n', 1, 22, 29),
(292, 'VGA Gigabyte GTX 1050 Ti 4GB 2 Fan\r\n', 'vga-gigabyte-gtx-1050-ti-4gb-2-fan', '1.900.000đ\r\n', '1.900.000đ\r\n', '03 THÁNG\r\n', 1, 22, 29),
(293, 'VGA Galax GTX 1050 OC 2G DDR5 (NVIDIA Geforce/ 2Gb/ DDR5/ 128Bit)\r\n', 'vga-galax-gtx-1050-oc-2g-ddr5-nvidia-geforce02gb-ddr5-128bit', '1.400.000đ', '1.400.000đ\r\n', '03 THÁNG\r\n', 1, 22, 29),
(294, 'VGA ZOTAC GTX 1050 2GB GDDR5 128bit\r\n', 'vga-zotac-gtx-1050-2gb-gddr5-128bit', '1.500.000đ\r\n', '1.500.000đ\r\n', '03 THÁNG\r\n', 1, 22, 29),
(295, 'VGA Gigabyte GTX 750Ti 2G GDDR5\r\n', 'vga-gigabyte-gtx-750ti-2g-gddr5', '1.100.000đ', '1.100.000đ', '03 THÁNG\r\n', 1, 23, 29),
(296, 'VGA ASUS GTX750TI-OC-2GD5 (128 bits )\r\n', 'vga-asus-gtx750ti-oc-2gd5', '1.100.000đ\r\n', '1.100.000đ\r\n', '03 THÁNG\r\n', 1, 22, 29),
(297, 'VGA Colorful GTX750Ti-2GD5\r\n', 'vga-colorful-gtx750ti-2gd5', '1.050.000đ\r\n', '1.050.000đ\r\n', '03 THÁNG\r\n', 1, 22, 29),
(298, 'VGA Giga GT 740 OC BẢN 2GB - 128BIT - DDR5\r\n', 'vga-giga-gt-740-oc-ban-2gb-128-bit-ddr5', '800.000đ\r\n', '800.000đ\r\n', '03 THÁNG\r\n', 1, 22, 29),
(299, 'VGA Zotac GTX 750ti 2gb ddr5\r\n', 'vga-zotac-gtx-750ti-2gb-ddr5', '1.150.000đ\r\n', '1.150.000đ\r\n', '03 THÁNG\r\n', 1, 22, 29),
(300, 'VGA ZOTAC GeForce GT 740 DDR5 1GB 128-bit\r\n', 'vga-zotacc-geforce-gt-740-ddr5-1gb-128-bit', '750.000đ\r\n', '750.000đ\r\n', '03 THÁNG\r\n', 1, 22, 29),
(301, 'VGA Colorful GT 1030 2G D5 Single Fan (GT1030-2G V3-V)\r\n', 'vga-colorful-gt-1030-2g-d5-single-fan-gt-1030-2g-v3-v', '1.250.000đ\r\n', '1.250.000đ\r\n', '03 THÁNG\r\n', 1, 22, 29),
(302, 'VGA Gigabyte GT 730 2G GDDR5\r\n', 'vga-gigabyte-gt-730-2g-gddr5', '700.000đ\r\n', '700.000đ\r\n', '03 THÁNG\r\n', 1, 22, 29),
(303, 'VGA ZOTAC GeForce® GT 730 2GB DDR5\r\n', 'vga-zotac-geforce-gt-730-2gb-ddr5', '600.000đ\r\n', '600.000đ\r\n', '03 THÁNG\r\n', 1, 22, 29),
(304, 'VGA Asus GT 730 2G GDDR5\r\n', 'vga-asus-gt-730-2g-gddr5', '650.000đ\r\n', '650.000đ\r\n', '03 THÁNG\r\n', 1, 22, 29),
(305, 'VGA Gigabyte GT 730 2G DDR3\r\n', 'vga-gigabyte-gt-730-2g-ddr3', '500.000đ\r\n', '500.000đ\r\n', '03 THÁNG\r\n', 1, 22, 29),
(306, 'VGA MSI GT730 ,2G, DD5, 128BIT\r\n', 'vga-msi-gt730-2g-dd5-128bit', '650.000đ', '650.000đ', '03 THÁNG\r\n', 1, 22, 29),
(307, 'VGA GIGABYTE GT640 2G DD3 128BIT\r\n', 'vga-gigabyte-gt640-2g-dd3-128bit', '450.000đ\r\n', '450.000đ\r\n', '03 THÁNG\r\n', 1, 22, 29),
(308, 'VGA ASUS GT 730 2GD3 128BIT\r\n', 'vga-asus-gt-730-2gd3-128bit', '500.000đ', '500.000đ', '03 THÁNG\r\n', 1, 22, 29),
(309, 'VGA HIS GT730 2G DDR3\r\n', 'vga-his-gt-730-2g-ddr3', '450.000đ\r\n', '450.000đ\r\n', '03 THÁNG\r\n', 1, 22, 29),
(310, 'VGA ASUS GT630 2G DD3 128 BIT\r\n', 'vga-asus-gt630-2g-dd3-128-bit', '400.000đ\r\n', '400.000đ\r\n', '03 THÁNG\r\n', 1, 22, NULL),
(311, 'VGA MSI N730 2G DD3 128BIT\r\n', 'vga-msin730-2g-dd3-128bit', '600.000đ\r\n', '600.000đ\r\n', '03 THÁNG\r\n', 1, 22, 29),
(312, 'VGA ECS 630 2G DD3 128 BIT\r\n', 'vga-éc-630-2g-dd3-128-bit', '400.000đ\r\n', '400.000đ\r\n', '03 THÁNG\r\n', 1, 22, 29),
(313, 'VGA 430 GIGA 2G DD3 / 128 BIT\r\n', 'vga-430-giga-2g-dd3-128-bit', '350.000đ', '350.000đ', '03 THÁNG\r\n', 1, 22, 29),
(314, 'VGA GIGABYTE GT420.2G DD3 128BIT\r\n', 'vga-gigabyte-gt420-2g-dd3-128bit', '300.000đ\r\n', '300.000đ\r\n', '03 THÁNG\r\n', 1, 22, 29),
(315, 'LCD LG 20M37 LED\r\n', 'lcd-lg-20m37-led', '750.000đ', '750.000đ\r\n', '03 THÁNG\r\n', 1, 6, 30),
(316, 'LCD 20\" SAMSUNG B2030\r\n', 'lcd-20-samsung-b2030', '750.000đ\r\n', '750.000đ\r\n', '03 THÁNG\r\n', 1, 6, 30),
(317, 'LCD 20\' Samsung S20D300\r\n', 'lcd-20-samsung-s20d300', '750.000đ', '750.000đ', '03 THÁNG\r\n', 1, 6, 30),
(318, 'LCD 20” AOC E2070SWN/74\r\n', 'lcd-20-aoc-e2070swn-74', '700.000đ\r\n', '700.000đ\r\n', '03 THÁNG\r\n', 1, 6, 30),
(319, 'LCD COMPAQ F201 20IN\r\n', 'lcd-compaq-f201-20in', '700.000đ\r\n', '700.000đ\r\n', '03 THÁNG\r\n', 1, 6, 30),
(320, 'LCD HP LV2011, 20\"\r\n', 'lcd-hp-lv2011-20', '700.000đ', '700.000đ', '03 THÁNG\r\n', 1, 6, 30),
(321, 'LCD 20” Philips 203V5LHSB2/74\r\n', 'lcd-20-phillips-203v5;hsb2-74', '700.000đ\r\n', '700.000đ\r\n', '03 THÁNG\r\n', 1, 6, 30),
(322, 'LCD DELL E1914HC\r\n', 'lcd-dell-e1914hc', '650.000đ\r\n', '650.000đ\r\n', '03 THÁNG\r\n', 1, 6, 30),
(323, 'LCD 19 ACER V193HQV\r\n', 'lcd-19-acer-v103hqv', '650.000đ', '650.000đ', '03 THÁNG\r\n', 1, 6, 30),
(324, 'LCD DELL P190SB\r\n', 'lcd-dell-p190sb', '650.000đ\r\n', '650.000đ\r\n', '03 THÁNG\r\n', 1, 6, 30),
(325, 'LCD LG 19EN33S\r\n', 'lcd-lg-19en33s', '650.000đ\r\n', '650.000đ\r\n', '03 THÁNG\r\n', 1, 6, 30),
(326, 'LCD S19C300B\r\n', 'lcd-s19c300b', '650.000đ\r\n', '650.000đ\r\n', '03 THÁNG\r\n', 1, 6, 30),
(327, 'LCD 18.5\" SAMSUNG A100\r\n', 'lcd-185-samsung-a100', '650.000đ', '650.000đ', '03 THÁNG\r\n', 1, 6, 30),
(328, 'LCD samsung E1920\r\n', 'lcd-samsung-e1920', '650.000đ\r\n', '650.000đ\r\n', '03 THÁNG\r\n', 1, 6, 30),
(329, 'LCD HP Compaq R191\r\n', 'lcd-hp-compaq-r191', '650.000đ\r\n', '650.000đ\r\n', '03 THÁNG\r\n', 1, 6, 30),
(330, 'LCD 19 SAM SUNG WIDE A10\r\n', 'lcd-19-samsung-wide-a10', '650.000đ\r\n', '650.000đ\r\n', '03 THÁNG\r\n', 1, 6, 30),
(331, 'LCD 19 WIDE /AOC\r\n', 'lcd-19-wide-aoc', '650.000đ\r\n', '650.000đ\r\n', '03 THÁNG\r\n', 1, 6, 30),
(332, 'LCD BenQ G925HDA\r\n', 'lcd-benq-g9250hda', '650.000đ\r\n', '650.000đ\r\n', '03 THÁNG\r\n', 1, 6, 30),
(333, 'LCD 19 VUONG DELL CHÂN V 198FPB\r\n', 'lcd-19-vuong-dell-chan-v-198fpb', '600.000đ\r\n', '600.000đ\r\n', '03 THÁNG\r\n', 1, 6, 30),
(334, 'LCD Samsung 743NX LED 17 inch\r\n', 'lcd-samsung0743nx-led-17-inch', '400.000đ\r\n', '400.000đ\r\n', '03 THÁNG\r\n', 1, 6, 30),
(335, 'LCD LG L1742S\r\n', 'lcd-lg-l1742s', '400.000đ', '380.000đ', '03 THÁNG\r\n', 1, 6, 30),
(336, 'LCD 27” LG 27EA33VA IPS\r\n', 'lcd-27-lg-27ea33va-ips', '1.600.000đ\r\n', '1.600.000đ\r\n', '03 THÁNG\r\n', 1, 6, 31),
(337, 'LCD Samsung S24B240BL 24inc\r\n', 'lcd-samsung-s24b24-bl-24inc', '1.300.000đ', '1.300.000đ', '03 THÁNG\r\n', 1, 6, NULL),
(338, 'Thiết bị âm Thanh-Loa VI TÍNH 1', 'thiet-bi-am-thanh-loa-vi-tinh', '1.350.000đ', '1.350.000đ', '24 THÁNG', 0, 40, 15),
(341, 'LCD Samsung S24B240BL 24inc', 'lcd-samsung-', '1.300.000đ', '1.300.000đ', '03 THÁNG', 1, 6, 31),
(342, 'LCD Dell Ultrasharp 24\" U2412M (1920x1200/IPS/60Hz/8ms)', 'lcd-dell-ultrasharp-24-u2412m', '3.280.000đ', '3.280.000đ', '03 THÁNG', 1, 6, 31),
(343, 'LCD AOC MONITOR E2475SWD CỦ', 'lcd-aoc-monitor-e2475swd-cu', '1.300.000đ', '1.300.000đ', '03 THÁNG', 1, 6, 31),
(345, 'LCD LED LG 24 inch 24M47VQ-P FULL HDMI VGA', 'lcd-led-lg-24-inch-24m47vq-p-full-hdmi-vga', '1.300.000đ', '1.300.000đ', '03 THÁNG', 1, 6, 31),
(346, 'LCD AOC E2450SWD LED Full HD', 'lcd-aoc-e2450swd-led-full-hd', '1.300.000đ', '1.300.000đ', '03 THÁNG', 1, 6, 31),
(347, 'LCD AOC I2476VW LED  IPS (Trắng)', 'lcd-aoc-i2476vw-led-ips-trang', '1.400.000đ', '1.390.000đ', '03 THÁNG', 1, 6, 31),
(348, 'LCD Acer LED K242HL - 24 inch', 'lcd-acer-led-k242hl-24-inch', '1.300.000đ', '1.300.000đ', '03 THÁNG', 1, 6, 31),
(349, 'LCD 23” AOC E2360S', 'lcd-23-aoc-e2360s', '1.300.000đ', '1.300.000đ', '03 THÁNG', 1, 6, 31),
(350, 'LCD LG 23EA63V full viền', 'lcd-lg-23ea63v-full-vien', '1.400.000đ', '1.400.000đ', '03 THÁNG', 1, 6, 31),
(351, 'LCD 22\" LG W2242PK', 'lcd-22-lg-w2242pk', '900.000đ', '900.000đ', '03 THÁNG', 1, 6, 31),
(352, 'LCD BENQ LED 22 inch GW2255', 'lcd-benq-led-22-inch-gw2255', '900.000đ', '900.000đ', '03 THÁNG', 1, 6, 31),
(353, 'LCD 22AOC 2270SW LED', 'lcd-22aoc-2270sw-led', '900.000đ', '900.000đ', '03 THÁNG', 1, 6, 31),
(354, 'LCD DELL E2214hf 22inch', 'lcd-dell-e2214hf-22-inch', '1000.000đ', '1000.000đ', '03 THÁNG', 1, 6, 31),
(355, 'LCD 22AOC E250SWD', 'lcd-22aoc-e250swd', '900.000đ', '900.000đ', '03 THÁNG', 1, 6, 31),
(356, 'LCD ASUS VS228DR', 'lcd-asus-vs228dr', '900.000đ', '900.000đ', '03 THÁNG', 1, 6, 31),
(357, 'LCD 22\" LG 22M47D', 'lcd-22-lg-22m47d', '950.000đ', '950.000đ', '03 THÁNG', 1, 6, 31),
(358, 'LCD Fujitsu 22inch E22T-7 Led Full HD Hàng Nhập Khẩu Nhật MÀU TRẮNG', 'lcd-fujitsu-22inch-e22t-7-led-full-hd-hang-nhap-khau-nhat-mau-trang', '800.000đ', '800.000đ', '03 THÁNG', 1, 6, 31),
(359, 'LCD Samsung S22B310 chính hãng', 'lcd-samsung-s22b310-chinh-hang', '900.000đ', '900.000đ', '03 THÁNG', 1, 6, 31),
(360, 'LCD LG 22M45D LED Full HD', 'lcd-lg-22m45d-led-full-hd', '900.000đ', '900.000đ', '03 THÁNG', 1, 6, 31),
(361, 'LCD AOC E2261FW LED Full HD', 'lcd-aoc-e2261fw-led-full-hd', '900.000đ', '900.000đ', '03 THÁNG', 1, 6, 31),
(362, 'LCD SAMSUNG S22C550', 'lcd-samsung-s22c550', '900.000đ', '900.000đ', '03 THÁNG', 1, 6, 31),
(363, 'LCD 27 CÁC LOẠI LỖI NHẸ', 'lcd-27-cac-loại-loi-nhe', '', '', 'BAO TEST', 1, 6, 32),
(364, 'LCD 24 CÁC LOẠI LỖI NHẸ', 'lcd-24-cac-loai-loi-nhe', '', '', 'BAO TEST', 1, 6, 32),
(365, 'LCD 23 AOC I2369V FUN VIỀN BỊ MỘT SỌC', 'lcd-23-aoc-i2369v-fun-vien-bị-mot-soc', '', '', 'BAO TEST', 1, 6, 32),
(366, 'LCD 22 CÁC LOẠI LỖI NHẸ LED', 'lcd-22-cac-loai-loi-nhe-led', '', '', 'BAO TEST', 1, 6, 32),
(367, 'LCD 20 CÁC LOẠI LỔI NHẸ LED', 'lcd-20-cac-loai-loi-nhe-led', '', '', 'BAO TEST', 1, 6, 32),
(368, 'LCD 19WDEL CÁC LOẠI LỖI NHẸ', 'lcd-19wdel-cac-loai-loi-nhe', '', '', 'BAO TEST', 1, 6, 32),
(369, 'LCD  17V CÁC LOẠI LỖI NHẸ', 'lcd-17v-cac-loai-loi-nhe', '', '', 'BAO TEST', 1, 6, 32),
(370, 'Nguồn FSP Power Supply HYDRO Series Model HD700 Active PFC (80 Plus Bronze/Màu Đen)', 'nguồn-fps-power-supply-hydro-series-model-hd700-active-pfc-80-plus-bronze-mau-den', '850.000đ', '850.000đ', '03 THÁNG', 1, 1, 33),
(371, 'Nguồn Jetek Q9800-Gaming/Bitcoin (80 Plus Gold)', 'nguon-jetek-q9800-gaming-bitcoin-80-plus-gold', '750.000đ', '750.000đ', '03 THÁNG', 1, 1, 33),
(372, 'Nguồn Cooler Master 500W', 'nguồn-cooler-master-500w', '450.000đ', '440.000đ', '01 THÁNG', 1, 1, 33),
(373, 'NGUỒN Cooler Master 460w', 'nguồn-cooler-master-460w', '400.000đ', '380.000đ', '01 THÁNG', 1, 1, 33),
(374, 'NGUỒN COLERMASTER 400W', 'nguon-colermaster-400w', '320.000đ', '300.000đ', '01 THÁNG', 1, 1, 33),
(375, 'NGUỒN COLERMASTER 350W', 'nguon-colermaster-350w', '180.000đ', '170.000đ', '01 THÁNG', 1, 1, 33),
(376, 'NGUỒN ACBEL 450W CE2 F12', 'nguon-acbel-450w-ce2-f12', '380.000đ', '370.000đ', '01 THÁNG', 1, 1, 33),
(377, 'NGUỒN ACBEL CE2 350W F12', 'nguon-acbel-ce2-350w-f12', '220.000đ', '210.000đ', '01 THÁNG', 1, 1, 33),
(378, 'NGUỒN ACBEL 400W CE2 F12', 'nguon-acbel-400w-ce2-f12', '320.000đ', '310.000', '01 THÁNG', 1, 1, 33),
(379, 'NGUỒN ACBLE 350W F12 HK', 'nguon-acble-350w-f12-', '170.000đ', '160.000đ', '01 THÁNG', 1, 1, 33),
(380, 'NGUỒN ACBEL 450W F12 Hk', 'nguon-acbel-450w-f12-hk', '320.000đ', '310.000đ', '01 THÁNG', 1, 1, 33),
(381, 'NGUỒN ACBEL 350W F8', 'nguon-acbel-350w-f8', '150.000đ', '140.000đ', '01 THÁNG', 1, 1, 33),
(382, 'NGUỒN ACBEL 400W HK CÓ NGUỒN PHỤ VGA<', 'nguon-acbel-400w-hk-co-nguon-phu-vga', '320.000đ', '320.000đ', '01 THÁNG', 1, 1, 33),
(383, 'NGUỒN HUNTKET 400W F12', 'nguon-huntket-400w-f12', '250.000đ', '240.000đ', '01 THÁNG', 1, 1, 33),
(384, 'NGUỒN HUNTKEY 350W F12', 'nguon-huntkey-350w-f12', '200.000đ', '200.000đ', '01 THÁNG', 1, 1, 33),
(385, 'NGUỒN HUNTKEY 350W F8', 'nguon-huntkey-350w-f8', '120.000đ', '110.000đ', '01 THÁNG', 1, 1, 33),
(386, 'Nguồn VSP X-400W VSP Game', 'nguon-vsp-x-400w-vsp-game', '150.000đ', '140.000đ', '01 THÁNG', 1, 1, 33),
(387, 'NGUỒN MÁY BỘ 24PIN. HP', 'nguon-may-bo-24pin-hp', '120.000đ', '110.000đ', '01 THÁNG', 1, 1, 33),
(388, 'NGUỒN 24 PIN PEN12 CÁC LOẠI DƯỚI 100K', 'nguon-24-pin-pen12-cac-loai-duoi-100k', '', '', '01 THÁNG', 1, 1, 33),
(389, 'FEN ZIN socket 115X', 'fen-zin-socket-115x', '40.000đ', '35.000đ', 'BAO TEST', 1, 1, 34),
(390, 'FEN ZIN socket 115X', 'fen-zin-socket-115x', '50.000đ', '45.000đ', 'BAO TEST', 1, 1, 34),
(391, 'FEN ZIN socket 775', 'fen-zin-socket-775', '40.000đ', '35.000đ', 'BAO TEST', 1, 1, 34),
(392, 'Switch TP-Link TL-SG1016D 16 port gigabit', 'switch-tp-link-tl-sg1016d-16-port-gigabit', '500.000đ', '490.000đ', '03 THÁNG', 1, 1, 34),
(393, 'Switch TP-Link TL-SG1016D 16 port gigabit', 'switch-tp-link-tl-sg1016d-16-port-gigabit', '550.000d', '540.000đ', '03 THÁNG', 1, 1, 34),
(394, 'HEADPHONE CÁC LOẠI CHUYÊN GAME TỪ 100K ĐÉN 150K', 'headphone-cac-loai-chuyen-game-tu-100k-den-150k', '150.000đ', '100.000đ', '01 THÁNG', 1, 30, 34),
(395, 'PHÍM CŨ CÁC LOẠI tỪ 50K ĐẾN 250K TÙY LOẠI', 'phim-cu-cac-loai-tu-50k-den-250k-tuy-loai', '', '', '01 THÁNG', 1, 10, 34),
(396, 'CHUỘT CŨ CÁC LOẠI', 'chuot-cu-cac-loai', '50.000đ', '45.000đ', '01 THÁNG', 1, 10, 34),
(397, 'Bộ lưu điện Santak TG 1000 -1000VA Offline', 'bo-luu-dien-santak-tg-1000-1000va-offline', '250.000đ', '250.000đ', '03 THÁNG', 1, 1, 34),
(398, 'ĐẾ LCD ĐA NĂNG-MÀU TRẮNG. ĐEN', 'de-lcd-da-nang-mautrang-den', '190.000đ', '185.000đ', 'BAO TEST', 1, 6, 34);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `favicons`
--

CREATE TABLE `favicons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `favicons`
--

INSERT INTO `favicons` (`id`, `image`, `display`) VALUES
(1, 'images (2).jpeg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `footers`
--

INSERT INTO `footers` (`id`, `tittle`, `content`, `display`) VALUES
(1, 'VI TÍNH PHÁT NĂNG BÌNH DƯƠNG', 'VI TÍNH PHÁT NĂNG BÌNH DƯƠNG 325', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `home_images`
--

CREATE TABLE `home_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `home_images`
--

INSERT INTO `home_images` (`id`, `image`, `display`) VALUES
(1, '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `introduces`
--

CREATE TABLE `introduces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `describe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(4) NOT NULL,
  `seo_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `introduces`
--

INSERT INTO `introduces` (`id`, `tittle`, `describe`, `content`, `image`, `display`, `seo_id`) VALUES
(1, 'Giới thiệu Vi tính Phát Năng 4', 'hay3', 'Vi Tính Phát Năng chuyên cung cấp máy bộ vi tính, pc, laptop, pc gaming, all in one, máy bộ xeon, máy AMD, linh kiện giá sỉ lẻ cực rẻ', 'img_20200617093732.jpg', 1, 19);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `level1_products`
--

CREATE TABLE `level1_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` int(20) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `describe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outstand` tinyint(4) DEFAULT NULL,
  `new` tinyint(4) DEFAULT NULL,
  `display` tinyint(4) DEFAULT NULL,
  `seo_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `level1_products`
--

INSERT INTO `level1_products` (`id`, `number`, `image`, `link`, `tittle`, `describe`, `outstand`, `new`, `display`, `seo_id`) VALUES
(1, 1, 'default_image.jpg', 'link-mau4444', 'LINH KIỆN MỚI', 'fwefw', 1, 1, 1, 1),
(2, 2, 'img_20200617093732.jpg', 'fwefwq', 'LINH KIỆN CŨ', 'werferg', 1, 1, 0, 4),
(3, 3, 'default_image.jpg', '', 'THANH LÝ PHÒNG NET', '', 1, 1, 0, 5),
(4, 4, 'default_image.jpg', '', 'MÀN HÌNH MÁY TÍNH', '', 1, 1, 1, 6),
(5, 5, 'default_image.jpg', '', 'THIẾT BỊ ÂM THANH', '', 1, 1, 1, 7),
(6, 6, 'default_image.jpg', '', 'LAPTOP', '', 1, 1, 1, 8),
(7, 7, 'default_image.jpg', '', 'Ổ CỨNG PC', '', 1, 1, 1, 9),
(8, 4, 'default_image.jpg', 'tỵttjtyj', 'CHUỘT, BÀN PHÍM', 'tỵytuj', 1, 1, 1, 10),
(18, 1, 'img_20200617093732.jpg', 'mmmmmmmmmmmmmm', 'earg', 'ẻagedrg', NULL, NULL, 0, 64);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `level1_quotations`
--

CREATE TABLE `level1_quotations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display` tinyint(4) NOT NULL DEFAULT 1,
  `seo_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `level1_quotations`
--

INSERT INTO `level1_quotations` (`id`, `tittle`, `display`, `seo_id`) VALUES
(3, 'MÀNG HÌNH LCD CHÍNH HÃNG', 0, 18),
(4, 'CÁC LINH KIỆN HÀNG MỚI-SSD\r\n', 1, 20),
(5, 'CÁC LINH KIỆN HÀNG MỚI-RAM PC-RAM LAPTOP\r\n', 1, 3),
(6, 'CÁC LINH KIỆN HÀNG MỚI-Mainboard SK 1150, SK 1151\r\n', 1, 10),
(7, 'CÁC LINH KIỆN HÀNG MỚI-HDD\r\n', 1, 28),
(8, 'CÁC LINH KIỆN HÀNG MỚI-CASE MỚI\r\n', 1, 1),
(9, 'CÁC LINH KIỆN HÀNG MỚI-FAN LED-WEDCAM-NGUỒN\r\n', 1, 8),
(12, 'CÁC LINH KIỆN HÀNG MỚI-KEYBOARD\r\n', 1, 21),
(13, 'CÁC LINH KIỆN HÀNG MỚI-MOUSE\r\n', 1, 21),
(14, 'LAPTOP HP1', 1, 27),
(15, 'CÁC LINH KIỆN HÀNG MỚI-LOA VI TÍNH\r\n', 1, 25),
(16, 'CÁC LINH KIỆN HÀNG MỚI-MẠNG-WIFI\r\n', 1, 1),
(17, 'LINH KIỆN HÀNG CŨ-MÁY SERVER\r\n', 1, 4),
(18, 'LINH KIỆN HÀNG CŨ-MAIN CÁC LOẠI\r\n', 1, 14),
(19, 'LINH KIỆN HÀNG CŨ-RAM-HDD LAPTOP\r\n', 1, 1),
(20, 'LINH KIỆN HÀNG CŨ-RAM DDR4\r\n', 1, 14),
(21, 'LINH KIỆN HÀNG CŨ-RAM DDR3-DDR2\r\n', 1, 14),
(24, 'LINH KIỆN HÀNG CŨ-cpu socket 1200\r\n', 1, 28),
(25, 'LINH KIỆN HÀNG CŨ-cpu socket 1151-V2\r\n', 1, 20),
(26, 'LINH KIỆN HÀNG CŨ-cpu socket 1155\r\n', 1, 26),
(27, 'LINH KIỆN HÀNG CŨ-cpu socket 1151-V1\r\n', 1, 28),
(28, 'LINH KIỆN HÀNG CŨ-cpu socket 115O\r\n', 1, 28),
(29, 'LINH KIỆN HÀNG CŨ-VGA CARD\r\n', 1, 1),
(30, 'LINH KIỆN HÀNG CŨ-LCD DƯỚI 22\"-CÓ SỐ LƯỢNG\r\n', 1, 27),
(31, 'LINH KIỆN HÀNG CŨ-LCD TỪ 22\">27\">32\" CÓ SỐ LƯỢNG\r\n', 1, 27),
(32, 'LINH KIỆN HÀNG CŨ-LCD HÀNG LỖI CÁC LOẠI TỪ 300K->1000K\r\n', 1, 4),
(33, 'LINH KIỆN HÀNG CŨ-NGUỒN CÔNG XUẤT THỰC\r\n', 1, 4),
(34, 'LINH KIỆN LINH TINH\r\n', 1, 17);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `level2_products`
--

CREATE TABLE `level2_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(20) NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `describe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(4) NOT NULL,
  `level1_product_id` bigint(20) UNSIGNED NOT NULL,
  `seo_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `level2_products`
--

INSERT INTO `level2_products` (`id`, `link`, `number`, `tittle`, `describe`, `display`, `level1_product_id`, `seo_id`) VALUES
(29, '', 1, 'CPU-BỘ XỬ LÝ', 'agergaerr', 1, 1, 1),
(30, 'awerg', 3, 'CPU-BỘ XỬ LÝ', 'aewrgaer', 1, 1, 2),
(31, '', 2, 'MAINBOARD-BO MẠCH CHỦ CŨ', '', 1, 2, 2),
(32, '', 1, 'BỘ NHỚ RAM', '', 1, 1, 18),
(33, '', 1, 'VGA-CARD MÀN HÌNH', '', 1, 1, 22),
(34, '', 1, 'MAINBOARD - BO MẠCH CHỦ', '', 1, 1, 14),
(35, '', 1, 'BỘ NHỚ RAM CŨ', '', 1, 2, 18),
(36, '', 1, 'VGA - CARD MÀN HÌNH CŨ', '', 1, 2, 22),
(37, '', 1, 'LAPTOP DELL', '', 1, 6, 25),
(38, '', 1, 'LAPTOP ASUS', '', 1, 6, 26),
(39, '', 1, 'LAPTOP HP', '', 1, 6, 27),
(40, '', 1, 'LINH KIỆN LAPTOP', '', 1, 6, 28),
(41, '', 1, 'Thiết bị âm thanh loa vi tính', '', 1, 5, 29),
(42, '', 1, 'Thiết bị âm thanh loa tai nghe', '', 1, 5, 30),
(55, '', 1, 'Thiết bị âm thanh loa vi tính', '', 1, 5, 29),
(56, '', 1, 'Thiết bị âm thanh loa tai nghe', '', 1, 5, 30),
(59, 'vfaeg', 1, 'gaerg', 'ẻgadfg', 1, 2, 76);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `level3_products`
--

CREATE TABLE `level3_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(4) NOT NULL,
  `level2_product_id` bigint(20) UNSIGNED NOT NULL,
  `level1_product_id` bigint(20) UNSIGNED NOT NULL,
  `seo_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `level3_products`
--

INSERT INTO `level3_products` (`id`, `image`, `tittle`, `display`, `level2_product_id`, `level1_product_id`, `seo_id`) VALUES
(85, '', 'Intel Pentium', 1, 29, 1, 1),
(86, '', 'Intel Core i3', 1, 29, 1, 1),
(87, '', 'Intel Core i5', 1, 29, 1, 1),
(88, '', 'Intel Core i7', 1, 29, 1, 1),
(89, '', 'MAIN - GIGABYTE', 1, 34, 1, 1),
(90, 'img_20200617093732.jpg', 'Linh kiện mới', 1, 29, 1, 1),
(91, '', 'MAIN - MSI', 1, 34, 1, 1),
(92, '', 'MAIN - COLOFULL', 1, 34, 1, 1),
(93, '', 'DDR4 PC', 1, 32, 1, 1),
(95, '', 'DDR3 SERVER', 1, 32, 1, 1),
(96, '', 'MAIN - GIGABYTE', 1, 31, 1, 1),
(97, '', 'MAIN - ASUS', 1, 31, 1, 1),
(98, '', 'MAIN - MSI', 1, 31, 1, 1),
(99, '', 'VGA - GIGABYTE MỚI', 1, 33, 1, 1),
(100, '', 'VGA - ASUS - MỚI', 1, 33, 1, 1),
(101, '', 'CPU - INTEL PENTIUM', 1, 30, 1, 1),
(102, '', 'CPU - INTEL CORE I3', 1, 30, 1, 1),
(103, '', 'CPU - INTEL CORE I5', 1, 30, 1, 1),
(104, '', 'CPU - INTEL CORE I7', 1, 30, 1, 1),
(105, '', 'RAM DDR4 PC', 1, 35, 1, 1),
(106, '', 'RAM DDR3 PC', 1, 35, 1, 1),
(107, '', 'RAM DDR3 SERVER', 1, 35, 1, 1),
(108, '', 'VGA - GIGABITE CŨ', 1, 36, 1, 1),
(109, '', 'VGA - ASUS CŨ', 1, 36, 1, 1),
(110, '', 'VGA - MSI CŨ', 1, 36, 1, 1),
(111, '', 'VGA - COLOFULL CŨ', 1, 36, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `liquidations`
--

CREATE TABLE `liquidations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(4) NOT NULL,
  `seo_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `liquidations`
--

INSERT INTO `liquidations` (`id`, `tittle`, `content`, `image`, `link`, `display`, `seo_id`) VALUES
(1, 'Thanh Lý Phòng Net A-Z Giá Cao', '', 'e1b61f2ef53d3f63662c-3714.jpg', 'thanh-ly-phong-net-a-z-gia-cao', 1, 5),
(3, 'Thanh Lý Phòng Net A- Z Giá Cao\r\n', '', '424be9b53ea6f4f8adb7-7989.jpg', 'thanh-ly-phong-net-a-z-gia-cao-2', 1, 5),
(4, 'Thanh Lý Phòng Net A- Z Giá Cao Bình Dương', '', '16-7627.jpg', 'thanh-ly-phong-net-a-z-binh-duong', 1, 5),
(5, 'Thanh Lý Phòng Net A- Z Giá Cao Khu Vực Miền Nam', '', 'aeed8f8c5c9f96c1cf8e-4736.jpg', 'thanh-ly-phong-net-a-z-gia-cao-khu-vuc-mien-nam', 1, 5),
(6, 'Thanh Lý Phòng Net Giá Cao Khu Vực Miền Nam\r\n', '', 'dd596d7bf565383b6174-2307.jpg', 'thanh-ly-phong-net-gia-cao-khu-vuc-mien-nam', 1, 5),
(7, 'Thanh Lý Phòng Net Giá Cao Khu Vực Miền Nam Tây Nguyên', '', 'a986959f0d81c0df9990-4161.jpg', 'thanh-ly-phong-net-gia-cao-khu-vuc-mien-nam-tay-nguyen', 1, 5),
(8, 'Thanh Lý Phòng Net Giá Cao Khu Vực Miền Trung', '', 'bfccf5906d8ea0d0f99f-1674.jpg', 'thanh-ly-phong-net-gia-cao-khu-vuc-mien-trung', 1, 5),
(9, 'Thanh Lý Phòng Net Công Ty Giá Cao Khu Vực Miền Nam', '', '1ab4f35d6243af1df652-3887.jpg', 'thanh-ly-phong-net-cong-ty-gia-cao-khu-vuc-mien-nam', 1, 5),
(10, 'Thanh Lý Phòng Net A- Z Uy Tín Nhất Bình Dương', '', 'b57615aa83b44eea17a5-5134.jpg', 'thanh-ly-phong-net-a-z-uy-tin-binh-duong', 1, 5),
(11, 'Thanh Lý Phòng Net Trường Học Cơ Sở Công Ty', '', 'dddc91ce03d0ce8e97c1-2222.jpg', 'thanh-ly-phong-net-truong-hoc-co-so-cong-ty', 1, 5),
(12, 'Thanh Lý Phòng Net Cơ Sở Công Ty Trường Học A-Z', '', '310811ee81f04cae15e1-3302.jpg', 'thanh-ly-phong-net-co-so-cong-ty-truong-hoc-a-z', 1, 5),
(13, 'Thanh Lý Phòng Net A- Z Giá Cao Khu Vực Miền Nam Tây Nam Bộ', '', 'cfdbf71c6502a85cf113-4075.jpg', 'thanh-ly-phong-net-a-z-gia-cao-khu-vuc-mien-tay-nam-bo', 1, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `logos`
--

INSERT INTO `logos` (`id`, `image`, `display`) VALUES
(1, 'images (3).jpeg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mails`
--

CREATE TABLE `mails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `topic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mails`
--

INSERT INTO `mails` (`id`, `name`, `phone`, `email`, `topic`, `address`, `status`, `content`, `note`, `number`, `created_at`) VALUES
(1, 'thienbodoi', '0363008204', 'quocthien0404@gmail.com', 'erg', '1', 2, 'eargea', 'aeg', 1, '2024-01-20 01:58:38'),
(3, 'quingu234', '0363008204', 'thienlqps21640@fpt.edu.vn', 'mua nè', 'Thienes Avenue', 0, '..', '...', 2, '2024-01-19 21:13:28');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_06_064304_create_seos_table', 1),
(6, '2023_12_07_023838_create_detail_products_table', 1),
(7, '2023_12_07_023939_create_level3_products_table', 1),
(8, '2023_12_07_023941_create_level2_products_table', 1),
(9, '2023_12_07_023942_create_level1_products_table', 1),
(10, '2023_12_07_024859_create_tag_products_table', 1),
(11, '2023_12_07_025050_create_level1_quotations_table', 1),
(12, '2023_12_07_025110_create_detail_quotations_table', 1),
(13, '2023_12_07_025258_create_customer_supports_table', 1),
(14, '2023_12_07_025351_create_policies_table', 1),
(15, '2023_12_07_025417_create_news_table', 1),
(16, '2023_12_07_025450_create_introduces_table', 1),
(17, '2023_12_07_025614_create_liquidations_table', 1),
(18, '2023_12_07_025707_create_slogans_table', 1),
(19, '2023_12_07_025727_create_contacts_table', 1),
(20, '2023_12_07_025810_create_footers_table', 1),
(21, '2023_12_07_030118_create_home_images_table', 1),
(22, '2023_12_07_030134_create_logos_table', 1),
(23, '2023_12_07_030150_create_favicons_table', 1),
(24, '2023_12_07_030206_create_banners_table', 1),
(25, '2023_12_07_030234_create_slideshows_table', 1),
(26, '2023_12_07_030258_create_criterias_table', 1),
(27, '2023_12_07_030346_create_social_networks_table', 1),
(28, '2023_12_07_030400_create_videos_table', 1),
(29, '2023_12_07_030445_create_seo_products_table', 1),
(30, '2023_12_07_030526_create_seo_quotations_table', 1),
(31, '2023_12_07_030546_create_seo_news_table', 1),
(32, '2023_12_07_030558_create_seo_videos_table', 1),
(33, '2023_12_07_030630_create_settings_table', 1),
(34, '2023_12_11_020247_blogs', 1),
(35, '2023_12_11_024619_create_images_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `describe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outstand` tinyint(4) DEFAULT NULL,
  `display` tinyint(4) NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `image`, `link`, `tittle`, `describe`, `content`, `outstand`, `display`, `number`, `seo_id`) VALUES
(2, 'images (2).jpeg', 'https://youtu.be/PZ', 'eqrgq2', 'yeh2', 'etyj2', NULL, 0, '1', 69);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `policies`
--

CREATE TABLE `policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(4) NOT NULL,
  `seo_id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `policies`
--

INSERT INTO `policies` (`id`, `image`, `tittle`, `display`, `seo_id`, `content`) VALUES
(2, '', 'Chính sách thanh toán', 0, 14, ''),
(3, '', 'Chính sách bảo hành', 1, 31, ''),
(4, '', 'Chính sách người dùng', 1, 31, ''),
(5, '', 'Chính sách mua hàng', 1, 31, ''),
(6, 'images (1).jpeg', 'oo', 0, 14, '.........'),
(7, 'images (4).jpeg', ',,', 0, 45, 'rrrr');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `procedures`
--

CREATE TABLE `procedures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tittle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `describe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display` tinyint(4) NOT NULL,
  `outstand` tinyint(4) DEFAULT NULL,
  `number` int(11) NOT NULL,
  `seo_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `procedures`
--

INSERT INTO `procedures` (`id`, `link`, `tittle`, `describe`, `content`, `image`, `display`, `outstand`, `number`, `seo_id`) VALUES
(1, 'qger', 'gerg', 'ergwe', 'brthgw', 'img_20200617093732.jpg', 1, 1, 3, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `register_advise`
--

CREATE TABLE `register_advise` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `register_advise`
--

INSERT INTO `register_advise` (`id`, `content`, `display`) VALUES
(1, 'wagwfwww243534ẻga', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seo_tittle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `seos`
--

INSERT INTO `seos` (`id`, `seo_tittle`, `seo_keyword`, `seo_description`) VALUES
(1, 'VI TÍNH PHÁT NĂNG | Vi Tính', 'ưefwefwetyj', 'VI TÍNH PHÁT NĂNG | Vi Tính Bình Dương chuyên cung cấp các linh kiện máy tính... khu vực bình dương. Lắp đặt phòng net, thanh lý phòng net khu vực bình dương'),
(2, 'CPU-BỘ XỬ LÝ', 'cpu-bo-xu-ly', 'Danh mục cấp 2 của Linh kiện mới - CPU - Bộ xử lý'),
(3, 'Intel Pentium22', 'intel-pentium', 'intel-pentium'),
(4, 'Linh kiện cũ', 'linh-kien-cu', 'linh-kien-cu'),
(5, 'THANH LÝ PHÒNG NET', 'thanh-ly-phong-net', '.'),
(6, 'MÀN HÌNH MÁY TÍNH', 'man-hinh-may-tinh', '.'),
(7, 'THIẾT BỊ ÂM THANH', 'thiet-bi-am-thanh', '.'),
(8, 'LAPTOP', 'laptop, máy tính xách tay', '.'),
(9, 'Ổ CỨNG PC', 'ổ cứng pc', '.'),
(10, 'CHUỘT, BÀN PHÍM', 'chuột bàn phím', '.'),
(11, 'Intel Core i3', 'intel core i3', ''),
(12, 'Intel Core i5', 'intel', ''),
(13, 'Intel Core i7', 'intel core i7', ''),
(14, 'MAIN-GIGABYTE-CŨ', 'main gigabyte cũ', NULL),
(15, 'MAIN ASUS CŨ', 'main ASUS cũ', ''),
(16, 'MAIN MSI CŨ', 'main msi cũ', ''),
(17, 'MAIN COLOFULL CŨ', 'main colofull cũ', ''),
(18, 'BỘ NHỚ RAM', 'bộ nhớ ram', 'ram'),
(19, 'wfwefwưqef', 'Vi Tính Phát Năng3', 'Vi Tính Phát Năng3'),
(20, 'DDR3 PC', 'ddr3 pc', NULL),
(21, 'DDR4 Serve', 'ddr4 serve', NULL),
(22, 'VGA CARD MÀN HÌNH', 'vga card màn hình', ''),
(23, 'VGA-GIGABYTE NEW', 'vga-gigabyte new', ''),
(24, 'VGA-GIGABYTE OLD', 'vga-gigabyte old', ''),
(25, 'LAPTOP DELL', 'laptop dell', ''),
(26, 'LAPTOP ASUS', 'laptop asus', ''),
(27, 'LAPTOP HP1', 'laptop hp1', '1'),
(28, 'LINH KIỆN LAPTOP', 'linh kiện laptop', ''),
(29, 'Thiết bị âm thanh-loa vi tính', 'thiết bị âm thanh loa vi tính', ''),
(30, 'THIẾT BỊ ÂM THANH-TAI NGHE', 'thiết bị âm thanh tai nghe', NULL),
(31, 'Vi Tính Phát Năng', 'Vi Tính Phát Năng', 'Vi Tính Phát Năng'),
(32, 'VI TÍNH PHÁT NĂNG', 'Lập trình viên PHP', '....'),
(33, 'Khắc phục sự cố mở đươc file word nhưng không chỉnh sửa được', 'VI TÍNH PHÁT NĂNG: CHUYÊN THANH LÝ NÉT, CƠ SỞ TRƯỜNG HỌC CÔNG TY. ĐIỆN THOẠI LIÊN HỆ: 0938 948 862 Mr NHẪN', '......'),
(34, 'mmmm', 'mmm', 'mmmm'),
(35, 'Thiết bị âm Thanh-Loa VI TÍNH', 'nnn', 'nnn'),
(36, '...', '....', '.....'),
(37, 'ừ', 'ừagw', 'gể'),
(38, '....', '...', '....'),
(39, NULL, '...', '....'),
(40, 'Thiết bị âm Thanh-Loa VI TÍNH 1', 'ửetgert 1', 'tttt 1'),
(41, 't', 't', 't'),
(42, 't', 't', 't'),
(43, NULL, NULL, NULL),
(44, NULL, NULL, NULL),
(45, NULL, NULL, NULL),
(46, 'ừ3', 'ừagw3', 'ừagw3'),
(47, '.', '.', '.'),
(48, NULL, NULL, NULL),
(49, NULL, NULL, NULL),
(50, NULL, NULL, NULL),
(51, NULL, NULL, NULL),
(52, NULL, NULL, NULL),
(53, NULL, NULL, NULL),
(54, NULL, NULL, NULL),
(55, NULL, NULL, NULL),
(56, NULL, NULL, NULL),
(57, NULL, NULL, NULL),
(58, NULL, NULL, NULL),
(59, NULL, NULL, NULL),
(60, NULL, NULL, NULL),
(61, 'earwge', 'ẻgag', 'ẻgag'),
(62, NULL, NULL, NULL),
(63, NULL, NULL, NULL),
(64, 'rtyrrty', 'rstyrt', 'rstyt'),
(65, 'NINBI', 'HHBH', 'DUTG'),
(66, 'ẻtgewrtye', 'ẺG', 'HT'),
(67, 'ưef', 'ưef', 'ưefw'),
(68, NULL, NULL, NULL),
(69, 'qưerg2', 'qẻg2', 'geg2'),
(70, 'srhrsth', 'rthfg', 'rthr'),
(71, 'egdf', 'ẻg', NULL),
(72, 'ưthrt', 'reth', NULL),
(73, 'egeg', 'egdg', NULL),
(74, 'ege', 'egad', NULL),
(75, 'aegdf', 'ẻgaegfg', NULL),
(76, 'aegdf', 'ẻgaegfg', NULL),
(77, 'fwf', 'wf', 'wefwr'),
(78, 'fwf', 'wf', 'wefwr'),
(79, 'fwf', 'wf', 'wefwr'),
(80, 'erger', 'erg', 'erge'),
(81, 'erger', 'erg', 'erge'),
(82, 'erger', 'erg', 'erge'),
(83, 'tul', 'utl', 'tuil'),
(84, 'tul', 'utl', 'tuil'),
(85, 'sfg', 'dfgj', 'srt'),
(86, 'sfg', 'dfgj', 'srt'),
(87, 'sfg', 'dfgj', 'srt'),
(88, 'sfg', 'dfgj', 'srt'),
(89, 'iiii', 'iiii', 'iii'),
(90, 'iiii', 'iiii', 'iii'),
(91, 'iiii', 'iiii', 'iii'),
(92, 'mmmm222', 'mm', 'mm'),
(93, 'er', 'ter', 'tert'),
(94, 'er', 'ter', 'tert'),
(95, 'er3', 'ter3', 'tert3'),
(96, 'ge', 'ẻg', 'eg'),
(97, 'ẻg', 'ádg', 'hrth'),
(98, 'ytut7u', 'tyeuty', 'etyjyt'),
(99, 'qryth', 'rthr', 'rth');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seo_advise`
--

CREATE TABLE `seo_advise` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `seo_advise`
--

INSERT INTO `seo_advise` (`id`, `image`, `seo_id`) VALUES
(1, 'images (1).jpeg', 61);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seo_estate`
--

CREATE TABLE `seo_estate` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `seo_estate`
--

INSERT INTO `seo_estate` (`id`, `image`, `seo_id`) VALUES
(1, 'images.jpeg', 46);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seo_news`
--

CREATE TABLE `seo_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `seo_news`
--

INSERT INTO `seo_news` (`id`, `image`, `seo_id`) VALUES
(1, 'images (3).jpeg', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seo_procedure`
--

CREATE TABLE `seo_procedure` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `seo_procedure`
--

INSERT INTO `seo_procedure` (`id`, `image`, `seo_id`) VALUES
(1, 'images (2).jpeg', 46);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seo_products`
--

CREATE TABLE `seo_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `seo_products`
--

INSERT INTO `seo_products` (`id`, `image`, `seo_id`) VALUES
(1, '', 18);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seo_quotations`
--

CREATE TABLE `seo_quotations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `seo_quotations`
--

INSERT INTO `seo_quotations` (`id`, `image`, `seo_id`) VALUES
(1, '', 21);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seo_videos`
--

CREATE TABLE `seo_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `seo_videos`
--

INSERT INTO `seo_videos` (`id`, `image`, `seo_id`) VALUES
(1, '', 21);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zalo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fanpage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `related_product_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posts` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `related_posts` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_iframe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gg_analytic` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gg_webmaster_tool` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_js` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_js` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `tittle`, `address`, `name`, `email`, `hotline`, `zalo`, `phone`, `website`, `fanpage`, `copyright`, `map`, `link`, `time`, `product_number`, `related_product_number`, `posts`, `related_posts`, `map_iframe`, `gg_analytic`, `gg_webmaster_tool`, `head_js`, `body_js`, `seo_id`) VALUES
(1, 'VI TÍNH PHÁT NĂNG', '592 Phú Lợi, P. Phú Hoà, TP. TDM, Bình Dương', 'VI TÍNH PHÁT NĂNG', 'ngodinhnhan82@gmail.com', '00000000000', '0982 223 762464', '0982 223 7626456', 'https://nhadatminhphat.com.vn/', 'rthrt', 'thrth', 'hgsyhgerth', NULL, '10:25', NULL, NULL, NULL, NULL, 'rsth', '<!-- Google tag (gtag.js) -->\r\n<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-4D6T9J3L9J\"></script>\r\n<script>\r\n  window.dataLayer = window.dataLayer || [];\r\n  function gtag(){dataLayer.push(arguments);}\r\n  gtag(\'js\', new Date());\r\n\r\n  gtag(\'config\', \'G-4D6T9J3L9J\');\r\n</script>', 'eht', 'tẹht', 'etyjt', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slideshows`
--

CREATE TABLE `slideshows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slideshows`
--

INSERT INTO `slideshows` (`id`, `number`, `image`, `tittle`, `link`, `display`) VALUES
(1, 1, 'images (2).jpeg', 'rhrth', 'rhtrth', 1),
(2, 1, 'images (4).jpeg', 'wfqgqwer2', 'https://youtu.be/PZpO-ObhAfQ?si=IA', 1),
(4, 1, 'z4917500526845_22953af5ecf68ce2975313c76788c7c5.jpg', 'ưef', 'ưef', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slogans`
--

CREATE TABLE `slogans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slogans`
--

INSERT INTO `slogans` (`id`, `tittle`, `display`) VALUES
(1, 'gẻgf', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `social_networks`
--

CREATE TABLE `social_networks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `social_networks`
--

INSERT INTO `social_networks` (`id`, `number`, `image`, `link`, `display`) VALUES
(2, 1, 'jrtyj', 'rhrst', 0),
(3, 1, 'images (2).jpeg', 'ừ ywf', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tag_products`
--

CREATE TABLE `tag_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outstand` tinyint(4) NOT NULL,
  `display` tinyint(4) NOT NULL,
  `seo_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tag_products`
--

INSERT INTO `tag_products` (`id`, `image`, `tittle`, `outstand`, `display`, `seo_id`) VALUES
(1, 'hgrth', 'Linh kiện mới', 1, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` tinyint(4) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `role`, `address`, `email`, `sex`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `date`) VALUES
(1, 'admin', '0363008204', 'admin', '276/77 thống nhất gò vấp', 'admin@gmail.com', 1, NULL, '$2y$12$Ylt6EgKlbBsG2y4JGGsUiusgvUeWjASfYewQ6p0E3Ll7OQteKRhtm', 'cFnUAbao4rljJStVjK8oUHGRFVEAvTS9kmfHOIJaVG8X88H1oavmo0iAwNlC', '2023-12-11 01:06:48', '2024-01-15 19:00:08', '2024-01-12'),
(2, 'admin', '', '', '', 'tri@gmail.com', 2, NULL, '$2y$12$tGjvKY8VPzWi7t8uNWmsKejDEryaMUTpIhbou0Pml/tslPiXyo4Wq', 'yq7EQvdjBe3fMYm1Yufdos7ArwSoyPu6PypWeLAU2AICWGH09yjxBzGTGb4x', '2023-12-14 21:32:30', '2023-12-14 21:32:30', '0000-00-00'),
(3, 'thienbodoi', NULL, NULL, NULL, 'admin', 1, NULL, '$2y$12$1frGErL6/vG2XkpnBkMNleRupNf7P.0JyTJhwjAZQ0C2P9OepNmia', NULL, '2023-12-26 18:45:21', '2023-12-26 18:45:21', NULL),
(4, 'admin', NULL, NULL, NULL, 'admin@gmail', 2, NULL, '$2y$12$wf1pnl.BR5YbMYhAasLK0eJF79sKp7pYu0MBMHVLujnBV8jfH8AKi', NULL, '2023-12-27 05:34:38', '2023-12-27 05:34:38', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outstand` tinyint(4) NOT NULL,
  `display` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `advises`
--
ALTER TABLE `advises`
  ADD PRIMARY KEY (`id`),
  ADD KEY `advises_id_seo` (`seo_id`);

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_seo_id_foreign` (`seo_id`);

--
-- Chỉ mục cho bảng `contact_letters`
--
ALTER TABLE `contact_letters`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `criterias`
--
ALTER TABLE `criterias`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer_supports`
--
ALTER TABLE `customer_supports`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `detail_products`
--
ALTER TABLE `detail_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_products_level2_product_id_foreign` (`level2_product_id`),
  ADD KEY `detail_products_seo_id_foreign` (`seo_id`),
  ADD KEY `detail_products_level3_products_id_foreign` (`level3_product_id`),
  ADD KEY `detail_products_level1_products_id_foreign` (`level1_product_id`),
  ADD KEY `tag_products_detail_product_foreign` (`tag_product_id`);

--
-- Chỉ mục cho bảng `detail_quotations`
--
ALTER TABLE `detail_quotations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_quotations_seo_id_foreign` (`seo_id`),
  ADD KEY `detail_quotation_level_1` (`level1_quotation_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `favicons`
--
ALTER TABLE `favicons`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `home_images`
--
ALTER TABLE `home_images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `introduces`
--
ALTER TABLE `introduces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `introduces_seo_id_foreign` (`seo_id`);

--
-- Chỉ mục cho bảng `level1_products`
--
ALTER TABLE `level1_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level1_products_seo_id_foreign` (`seo_id`);

--
-- Chỉ mục cho bảng `level1_quotations`
--
ALTER TABLE `level1_quotations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level1_quotations_seo_id_foreign` (`seo_id`);

--
-- Chỉ mục cho bảng `level2_products`
--
ALTER TABLE `level2_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level2_products_level1_product_id_foreign` (`level1_product_id`),
  ADD KEY `level2_products_seo_id_foreign` (`seo_id`);

--
-- Chỉ mục cho bảng `level3_products`
--
ALTER TABLE `level3_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level3_products_level2_product_id_foreign` (`level2_product_id`),
  ADD KEY `level3_products_seo_id_foreign` (`seo_id`),
  ADD KEY `level3_products_level1_product_id_foreign` (`level1_product_id`);

--
-- Chỉ mục cho bảng `liquidations`
--
ALTER TABLE `liquidations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `liquidations_seo_id_foreign` (`seo_id`);

--
-- Chỉ mục cho bảng `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mails`
--
ALTER TABLE `mails`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_seo_id_foreign` (`seo_id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `policies_seo_id_foreign` (`seo_id`);

--
-- Chỉ mục cho bảng `procedures`
--
ALTER TABLE `procedures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `procedure_id_seo` (`seo_id`);

--
-- Chỉ mục cho bảng `register_advise`
--
ALTER TABLE `register_advise`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `seo_advise`
--
ALTER TABLE `seo_advise`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_id_advise` (`seo_id`);

--
-- Chỉ mục cho bảng `seo_estate`
--
ALTER TABLE `seo_estate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_id_estate` (`seo_id`);

--
-- Chỉ mục cho bảng `seo_news`
--
ALTER TABLE `seo_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_news_seo_id_foreign` (`seo_id`);

--
-- Chỉ mục cho bảng `seo_procedure`
--
ALTER TABLE `seo_procedure`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_id_procedure` (`seo_id`);

--
-- Chỉ mục cho bảng `seo_products`
--
ALTER TABLE `seo_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_products_seo_id_foreign` (`seo_id`);

--
-- Chỉ mục cho bảng `seo_quotations`
--
ALTER TABLE `seo_quotations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_quotations_seo_id_foreign` (`seo_id`);

--
-- Chỉ mục cho bảng `seo_videos`
--
ALTER TABLE `seo_videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_videos_seo_id_foreign` (`seo_id`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_id_setting` (`seo_id`);

--
-- Chỉ mục cho bảng `slideshows`
--
ALTER TABLE `slideshows`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slogans`
--
ALTER TABLE `slogans`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `social_networks`
--
ALTER TABLE `social_networks`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tag_products`
--
ALTER TABLE `tag_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_id_tag_product` (`seo_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `advises`
--
ALTER TABLE `advises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `contact_letters`
--
ALTER TABLE `contact_letters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `criterias`
--
ALTER TABLE `criterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `customer_supports`
--
ALTER TABLE `customer_supports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `detail_products`
--
ALTER TABLE `detail_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=587;

--
-- AUTO_INCREMENT cho bảng `detail_quotations`
--
ALTER TABLE `detail_quotations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=401;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `favicons`
--
ALTER TABLE `favicons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `home_images`
--
ALTER TABLE `home_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `introduces`
--
ALTER TABLE `introduces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `level1_products`
--
ALTER TABLE `level1_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `level1_quotations`
--
ALTER TABLE `level1_quotations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `level2_products`
--
ALTER TABLE `level2_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `level3_products`
--
ALTER TABLE `level3_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT cho bảng `liquidations`
--
ALTER TABLE `liquidations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `mails`
--
ALTER TABLE `mails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `policies`
--
ALTER TABLE `policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `procedures`
--
ALTER TABLE `procedures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `register_advise`
--
ALTER TABLE `register_advise`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT cho bảng `seo_advise`
--
ALTER TABLE `seo_advise`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `seo_estate`
--
ALTER TABLE `seo_estate`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `seo_news`
--
ALTER TABLE `seo_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `seo_procedure`
--
ALTER TABLE `seo_procedure`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `seo_products`
--
ALTER TABLE `seo_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `seo_quotations`
--
ALTER TABLE `seo_quotations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `seo_videos`
--
ALTER TABLE `seo_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `slideshows`
--
ALTER TABLE `slideshows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `slogans`
--
ALTER TABLE `slogans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `social_networks`
--
ALTER TABLE `social_networks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tag_products`
--
ALTER TABLE `tag_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `advises`
--
ALTER TABLE `advises`
  ADD CONSTRAINT `advises_id_seo` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`);

--
-- Các ràng buộc cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`);

--
-- Các ràng buộc cho bảng `detail_products`
--
ALTER TABLE `detail_products`
  ADD CONSTRAINT `detail_products_level1_products_id_foreign` FOREIGN KEY (`level1_product_id`) REFERENCES `level1_products` (`id`),
  ADD CONSTRAINT `detail_products_level2_product_id_foreign` FOREIGN KEY (`level2_product_id`) REFERENCES `level2_products` (`id`),
  ADD CONSTRAINT `detail_products_level3_products_id_foreign` FOREIGN KEY (`level3_product_id`) REFERENCES `level3_products` (`id`),
  ADD CONSTRAINT `detail_products_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`),
  ADD CONSTRAINT `tag_products_detail_product_foreign` FOREIGN KEY (`tag_product_id`) REFERENCES `tag_products` (`id`);

--
-- Các ràng buộc cho bảng `detail_quotations`
--
ALTER TABLE `detail_quotations`
  ADD CONSTRAINT `detail_quotation_level_1` FOREIGN KEY (`level1_quotation_id`) REFERENCES `level1_quotations` (`id`),
  ADD CONSTRAINT `detail_quotations_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`);

--
-- Các ràng buộc cho bảng `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `detail_products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `introduces`
--
ALTER TABLE `introduces`
  ADD CONSTRAINT `introduces_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`);

--
-- Các ràng buộc cho bảng `level1_products`
--
ALTER TABLE `level1_products`
  ADD CONSTRAINT `level1_products_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`);

--
-- Các ràng buộc cho bảng `level1_quotations`
--
ALTER TABLE `level1_quotations`
  ADD CONSTRAINT `level1_quotations_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`);

--
-- Các ràng buộc cho bảng `level2_products`
--
ALTER TABLE `level2_products`
  ADD CONSTRAINT `level2_products_level1_product_id_foreign` FOREIGN KEY (`level1_product_id`) REFERENCES `level1_products` (`id`),
  ADD CONSTRAINT `level2_products_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`);

--
-- Các ràng buộc cho bảng `level3_products`
--
ALTER TABLE `level3_products`
  ADD CONSTRAINT `level3_products_level1_product_id_foreign` FOREIGN KEY (`level1_product_id`) REFERENCES `level1_products` (`id`),
  ADD CONSTRAINT `level3_products_level2_product_id_foreign` FOREIGN KEY (`level2_product_id`) REFERENCES `level2_products` (`id`),
  ADD CONSTRAINT `level3_products_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`);

--
-- Các ràng buộc cho bảng `liquidations`
--
ALTER TABLE `liquidations`
  ADD CONSTRAINT `liquidations_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`);

--
-- Các ràng buộc cho bảng `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`);

--
-- Các ràng buộc cho bảng `policies`
--
ALTER TABLE `policies`
  ADD CONSTRAINT `policies_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`);

--
-- Các ràng buộc cho bảng `procedures`
--
ALTER TABLE `procedures`
  ADD CONSTRAINT `procedure_id_seo` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`);

--
-- Các ràng buộc cho bảng `seo_advise`
--
ALTER TABLE `seo_advise`
  ADD CONSTRAINT `seo_id_advise` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`);

--
-- Các ràng buộc cho bảng `seo_estate`
--
ALTER TABLE `seo_estate`
  ADD CONSTRAINT `seo_id_estate` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`);

--
-- Các ràng buộc cho bảng `seo_news`
--
ALTER TABLE `seo_news`
  ADD CONSTRAINT `seo_news_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`);

--
-- Các ràng buộc cho bảng `seo_procedure`
--
ALTER TABLE `seo_procedure`
  ADD CONSTRAINT `seo_id_procedure` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`);

--
-- Các ràng buộc cho bảng `seo_products`
--
ALTER TABLE `seo_products`
  ADD CONSTRAINT `seo_products_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`);

--
-- Các ràng buộc cho bảng `seo_quotations`
--
ALTER TABLE `seo_quotations`
  ADD CONSTRAINT `seo_quotations_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`);

--
-- Các ràng buộc cho bảng `seo_videos`
--
ALTER TABLE `seo_videos`
  ADD CONSTRAINT `seo_videos_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`);

--
-- Các ràng buộc cho bảng `settings`
--
ALTER TABLE `settings`
  ADD CONSTRAINT `seo_id_setting` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`);

--
-- Các ràng buộc cho bảng `tag_products`
--
ALTER TABLE `tag_products`
  ADD CONSTRAINT `seo_id_tag_product` FOREIGN KEY (`seo_id`) REFERENCES `tag_products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
