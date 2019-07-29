-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 29, 2019 lúc 10:47 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `yii2demo1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `document`
--

CREATE TABLE `document` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `document` text COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `document`
--

INSERT INTO `document` (`id`, `user_id`, `document`, `description`, `created_at`, `updated_at`) VALUES
(5, 1, 'NHẬT KÝ THỰC TẬP TẠI DOANH NGHIỆP.docx', 'sa', 1564383777, 1564383777),
(6, 1, 'Bài thực hành PHP.docx', 'aĐA', 1564383922, 1564383922),
(9, 1, 'anh_logo.jpg', 'sd', 1564388752, 1564388752);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `started_date` date NOT NULL,
  `finished_date` date NOT NULL,
  `company` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `experiences`
--

INSERT INTO `experiences` (`id`, `user_id`, `started_date`, `finished_date`, `company`, `description`, `created_at`, `updated_at`) VALUES
(1, 5, '2000-02-02', '0000-00-00', 'werwe', 'werwrwerwer', 2147483647, 2147483647),
(2, 1, '2000-02-02', '0000-00-00', 'werwe', 'werwrwerwer', 2147483647, 2147483647),
(3, 1, '2019-07-09', '2019-07-24', 'Linxhq', 'ko co', 1564058112, 1564058112),
(4, 5, '2019-07-08', '2019-07-18', 'hdfhd', 'dhdfh', 1564111078, 1564111078),
(5, 5, '2019-07-01', '2019-07-25', 'ewfwe', 'ưefwe', 1564111244, 1564111244);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1563958484),
('m130524_201442_init', 1563958487),
('m190124_110200_add_verification_token_column_to_user_table', 1563958488),
('m190725_034953_experiences', 1564027054),
('m190725_133915_document', 1564062175);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(10) NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `first_name`, `last_name`, `phone`, `avatar`, `birthday`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'admin', 'wOwjST9leJ93dmIxKcpRiH1pD5wGH5VX', '$2y$13$rLME8Jal2bCJCP1phkzoVu0nhQJDA7D0xrh4NEU9J5cnf/pnxSOLi', NULL, 'admin@gmail.com', 'doana', 'thanha', 1135535, '15-11tai-hinh-nen-may-tinh-full-hd-dep-nhat2.jpg', '1900-11-08', 9, 1563958616, 1564057470, 'zPslhLpvbd5uQzeCgxw74ybw_k5yBhZd_1563958616'),
(2, 'thanh', 'dOOtoAFURjwdzzRG2il6_XXtLOJbI1jJ', '$2y$13$3t6Oln/AX5d3PGqS.hMTM.8CxaiCoY9at4tnvI3T5eSggvysfsRsK', NULL, 'thanh2k@gmail.com', 'abc', 'bfff', 3453453, 'dfgdf', '1900-11-07', 9, 1563959800, 1563959800, 'nRQGxZej8KvXzKq-9zdYSS1S_1IpVYb7_1563959800'),
(5, 'lan', 'PPFnCZ7FLD-rxeeUKy06Nki-cSpKdpG0', '$2y$13$CuXTXCkSNpggHGZYv7w/ceyE1zG8HeQogEad3iFnEVnUY9Zq2Ij6K', NULL, 'a@gmail.com', 'lan', 'anh', 546456, 'luu_infor_forever_localStorage.png', '1900-11-15', 9, 1564018113, 1564105861, '3S_fVtE8Tn12cX0_1g6zgMhiLAnUJAIM_1564018113'),
(6, 'doanvanthanh2k', '5Teg2K7cfgscBldVVVkvxTc-G3CJM60a', '$2y$13$qVAV011f2L2j.WPDL5ad0unbwOiXINIsb/qEE8Gmk5U.eYcQXQtKu', NULL, 'doanvanthanh2k@gmail.com', '', '', 0, '', '0000-00-00', 9, 1564365894, 1564365894, 'cE_FzJCWCwnwWtMfr22pzwDZCWJUdmaN_1564365894');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-document-user_id` (`user_id`);

--
-- Chỉ mục cho bảng `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-experiences-user_id` (`user_id`);

--
-- Chỉ mục cho bảng `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `fk-document-user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `fk-experiences-user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
