--
-- Database: `sri_gayatri_hospitals`
--

-- --------------------------------------------------------

--
-- Table structure for table `case_studies`
--

CREATE TABLE `case_studies` (
  `casestudy_id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional_details` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
);

--
-- Dumping data for table `case_studies`
--

INSERT INTO `case_studies` (`casestudy_id`, `file_name`, `file_path`, `additional_details`, `created_at`, `updated_at`) VALUES
(1, 'v1.mp4', 'images/case_study/', 'Cancer at Rib Cage after wide excision and Mesh Reinforcement', NULL, NULL),
(2, 'v2.mp4', 'images/case_study/', 'A case of cancer ovary after successful surgery demonstration of anatomy after para aortic lymphnode dissection', NULL, NULL),
(3, 'v3.mp4', 'images/case_study/', 'Rare cancer from retro peritoneum mimicking cancer arise from kidney but kidney is free. Removed successfully.', NULL, NULL),
(4, 'v4.mp4', 'images/case_study/', 'Periampullary carcinoma after resection demonstration of portal vein and SMA anatomy', NULL, NULL),
(5, 'v5.mp4', 'images/case_study/', 'Whipples surgery', NULL, NULL),
(6, 'v6.mp4', 'images/case_study/', 'Para aortic lymph node dissection in a case of CA ovary', NULL, NULL),
(7, 'v7.mp4', 'images/case_study/', 'Case of perforated CA sigmoid with local infiltration and conglomerates nodal mass having infiltration to left ureter', NULL, NULL),
(8, 'v8.mp4', 'images/case_study/', 'CA ovary having very big mass of 22kgs weight', NULL, NULL),
(9, 'v9.mp4', 'images/case_study/', 'CA ovary having very big mass of 22kgs weight', NULL, NULL),
(10, 'v10.mp4', 'images/case_study/', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_type` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
);


--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
);

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` bigint(20) UNSIGNED NOT NULL,
  `img_file_name` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_file_name_max` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional_details` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
);

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `img_file_name`, `img_file_name_max`, `file_path`, `additional_details`, `created_at`, `updated_at`) VALUES
(1, 'gallery-s1.jpg', 'gallery-b1.jpg', 'images/gallery/', 'Image 1', NULL, NULL),
(2, 'gallery-s2.jpg', 'gallery-b2.jpg', 'images/gallery/', 'Image 2', NULL, NULL),
(3, 'gallery-s3.jpg', 'gallery-b3.jpg', 'images/gallery/', 'Image 3', NULL, NULL),
(4, 'gallery-s4.jpg', 'gallery-b4.jpg', 'images/gallery/', 'Image 4', NULL, NULL),
(5, 'gallery-s5.jpg', 'gallery-b5.jpg', 'images/gallery/', 'Image 5', NULL, NULL),
(6, 'gallery-s6.jpg', 'gallery-b6.jpg', 'images/gallery/', 'Image 6', NULL, NULL),
(7, 'gallery-s7.jpg', 'gallery-b7.jpg', 'images/gallery/', 'Image 7', NULL, NULL),
(8, 'gallery-s8.jpg', 'gallery-b8.jpg', 'images/gallery/', 'Image 8', NULL, NULL),
(9, 'gallery-s9.jpg', 'gallery-b9.jpg', 'images/gallery/', 'Image 9', NULL, NULL),
(10, 'gallery-s10.jpg', 'gallery-b10.jpg', 'images/gallery/', 'Image 10', NULL, NULL),
(11, 'gallery-s11.jpg', 'gallery-b11.jpg', 'images/gallery/', 'Image 11', NULL, NULL),
(12, 'gallery-s12.jpg', 'gallery-b12.jpg', 'images/gallery/', 'Image 12', NULL, NULL),
(13, 'gallery-s13.jpg', 'gallery-b13.jpg', 'images/gallery/', 'Image 13', NULL, NULL),
(14, 'gallery-s14.jpg', 'gallery-b14.jpg', 'images/gallery/', 'Image 14', NULL, NULL),
(15, 'gallery-s15.jpg', 'gallery-b15.jpg', 'images/gallery/', 'Image 15', NULL, NULL),
(16, 'gallery-s16.jpg', 'gallery-b16.jpg', 'images/gallery/', 'Image 16', NULL, NULL),
(17, 'gallery-s17.jpg', 'gallery-b17.jpg', 'images/gallery/', 'Image 17', NULL, NULL),
(18, 'gallery-s18.jpg', 'gallery-b18.jpg', 'images/gallery/', 'Image 18', NULL, NULL),
(19, 'gallery-s19.jpg', 'gallery-b19.jpg', 'images/gallery/', 'Image 19', NULL, NULL),
(20, 'gallery-s20.jpg', 'gallery-b20.jpg', 'images/gallery/', 'Image 20', NULL, NULL),
(21, 'gallery-s21.jpg', 'gallery-b21.jpg', 'images/gallery/', 'Image 21', NULL, NULL),
(22, 'gallery-s22.jpg', 'gallery-b22.jpg', 'images/gallery/', 'Image 22', NULL, NULL),
(23, 'gallery-s23.jpg', 'gallery-b23.jpg', 'images/gallery/', 'Image 23', NULL, NULL),
(24, 'gallery-s24.jpg', 'gallery-b24.jpg', 'images/gallery/', 'Image 24', NULL, NULL),
(25, 'gallery-s25.jpg', 'gallery-b25.jpg', 'images/gallery/', 'Image 25', NULL, NULL),
(26, 'gallery-s26.jpg', 'gallery-b26.jpg', 'images/gallery/', 'Image 26', NULL, NULL),
(27, 'gallery-s27.jpg', 'gallery-b27.jpg', 'images/gallery/', 'Image 27', NULL, NULL),
(28, 'gallery-s28.jpg', 'gallery-b28.jpg', 'images/gallery/', 'Image 28', NULL, NULL),
(29, 'gallery-s29.jpg', 'gallery-b29.jpg', 'images/gallery/', 'Image 29', NULL, NULL),
(30, 'gallery-s30.jpg', 'gallery-b30.jpg', 'images/gallery/', 'Image 30', NULL, NULL),
(31, 'gallery-s31.jpg', 'gallery-b31.jpg', 'images/gallery/', 'Image 31', NULL, NULL),
(32, 'gallery-s32.jpg', 'gallery-b32.jpg', 'images/gallery/', 'Image 32', NULL, NULL),
(33, 'gallery-s33.jpg', 'gallery-b33.jpg', 'images/gallery/', 'Image 33', NULL, NULL),
(34, 'gallery-s34.jpg', 'gallery-b34.jpg', 'images/gallery/', 'Image 34', NULL, NULL),
(35, 'gallery-s35.jpg', 'gallery-b35.jpg', 'images/gallery/', 'Image 35', NULL, NULL),
(36, 'gallery-s36.jpg', 'gallery-b36.jpg', 'images/gallery/', 'Image 36', NULL, NULL),
(37, 'gallery-s37.jpg', 'gallery-b37.jpg', 'images/gallery/', 'Image 37', NULL, NULL),
(38, 'gallery-s38.jpg', 'gallery-b38.jpg', 'images/gallery/', 'Image 38', NULL, NULL),
(39, 'gallery-s39.jpg', 'gallery-b39.jpg', 'images/gallery/', 'Image 39', NULL, NULL),
(40, 'gallery-s40.jpg', 'gallery-b40.jpg', 'images/gallery/', 'Image 40', NULL, NULL),
(41, 'gallery-s41.jpg', 'gallery-b41.jpg', 'images/gallery/', 'Image 41', NULL, NULL),
(42, 'gallery-s42.jpg', 'gallery-b42.jpg', 'images/gallery/', 'Image 42', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
);

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(23, 'create_failed_jobs_table', 1),
(24, 'create_feedback_table', 1),
(27, 'create_password_resets_table', 1),
(28, 'create_users_table', 1),
(29, 'create_gallery_table', 2),
(30, 'create_news_media_table', 3),
(31, 'create_case_studies_table', 4),
(32, 'create_contact_us_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `news_media`
--

CREATE TABLE `news_media` (
  `newsmedia_id` bigint(20) UNSIGNED NOT NULL,
  `img_file_name` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_file_name_max` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional_details` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
);

--
-- Dumping data for table `news_media`
--

INSERT INTO `news_media` (`newsmedia_id`, `img_file_name`, `img_file_name_max`, `file_path`, `additional_details`, `created_at`, `updated_at`) VALUES
(1, 'news-events-1.jpg', 'news-events-1b.jpg', 'images/news_media/', 'Image 1', NULL, NULL),
(2, 'news-events-2.jpg', 'news-events-2b.jpg', 'images/news_media/', 'Image 2', NULL, NULL),
(3, 'news-events-3.jpg', 'news-events-3b.jpg', 'images/news_media/', 'Image 3', NULL, NULL),
(4, 'news-events-4.jpg', 'news-events-4b.jpg', 'images/news_media/', 'Image 4', NULL, NULL),
(5, 'news-events-5.jpg', 'news-events-5b.jpg', 'images/news_media/', 'Image 5', NULL, NULL),
(6, 'news-events-6.jpg', 'news-events-6b.jpg', 'images/news_media/', 'Image 6', NULL, NULL),
(7, 'news-events-7.jpg', 'news-events-7b.jpg', 'images/news_media/', 'Image 7', NULL, NULL),
(8, 'news-events-8.jpg', 'news-events-8b.jpg', 'images/news_media/', 'Image 8', NULL, NULL),
(9, 'news-events-9.jpg', 'news-events-9b.jpg', 'images/news_media/', 'Image 9', NULL, NULL),
(10, 'news-events-10.jpg', 'news-events-10b.jpg', 'images/news_media/', 'Image 10', NULL, NULL),
(11, 'news-events-11.jpg', 'news-events-11b.jpg', 'images/news_media/', 'Image 11', NULL, NULL),
(12, 'news-events-12.jpg', 'news-events-12b.jpg', 'images/news_media/', 'Image 12', NULL, NULL),
(13, 'news-events-13.jpg', 'news-events-13b.jpg', 'images/news_media/', 'Image 13', NULL, NULL),
(14, 'news-events-14.jpg', 'news-events-14b.jpg', 'images/news_media/', 'Image 14', NULL, NULL),
(15, 'news-events-15.jpg', 'news-events-15b.jpg', 'images/news_media/', 'Image 15', NULL, NULL),
(16, 'news-events-16.jpg', 'news-events-16b.jpg', 'images/news_media/', 'Image 16', NULL, NULL),
(17, 'news-events-17.jpg', 'news-events-17b.jpg', 'images/news_media/', 'Image 17', NULL, NULL),
(18, 'news-events-18.jpg', 'news-events-18b.jpg', 'images/news_media/', 'Image 18', NULL, NULL),
(19, 'news-events-19.jpg', 'news-events-19b.jpg', 'images/news_media/', 'Image 19', NULL, NULL),
(20, 'news-events-20.jpg', 'news-events-20b.jpg', 'images/news_media/', 'Image 20', NULL, NULL),
(21, 'news-events-21.jpg', 'news-events-21b.jpg', 'images/news_media/', 'Image 21', NULL, NULL),
(22, 'news-events-22.jpg', 'news-events-22b.jpg', 'images/news_media/', 'Image 22', NULL, NULL),
(23, 'news-events-23.jpg', 'news-events-23b.jpg', 'images/news_media/', 'Image 23', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `case_studies`
--
ALTER TABLE `case_studies`
  ADD PRIMARY KEY (`casestudy_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_media`
--
ALTER TABLE `news_media`
  ADD PRIMARY KEY (`newsmedia_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `case_studies`
--
ALTER TABLE `case_studies`
  MODIFY `casestudy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `news_media`
--
ALTER TABLE `news_media`
  MODIFY `newsmedia_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;