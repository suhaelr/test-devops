-- Database: laravel_crud
-- Import via phpMyAdmin atau: mysql -u root < database/laravel_crud.sql

CREATE DATABASE IF NOT EXISTS `laravel_crud` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `laravel_crud`;

-- Tabel users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Tabel products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `price` decimal(12,2) NOT NULL,
  `stock` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data dummy user (password: password)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@example.com', NULL, '$2y$12$NIJB3QPE0Jx/y6r6a5Rdx.wRZrETbvXqdYbkcBeIr16JY6peDCyRy', NULL, NOW(), NOW());

-- Data dummy produk
INSERT INTO `products` (`id`, `name`, `description`, `price`, `stock`, `created_at`, `updated_at`) VALUES
(1, 'Laptop ASUS VivoBook', 'Laptop ringan untuk kerja dan kuliah, Intel Core i5, RAM 8GB, SSD 512GB.', 8500000.00, 15, NOW(), NOW()),
(2, 'Mouse Logitech M331', 'Mouse wireless silent click, ergonomis untuk penggunaan harian.', 185000.00, 50, NOW(), NOW()),
(3, 'Keyboard Mechanical Keychron K2', 'Keyboard mechanical wireless, switch red, layout 75%.', 1200000.00, 20, NOW(), NOW()),
(4, 'Monitor LG 24MP400', 'Monitor 24 inci Full HD IPS, cocok untuk desain dan gaming casual.', 1650000.00, 12, NOW(), NOW()),
(5, 'Headset HyperX Cloud II', 'Headset gaming dengan surround sound 7.1 dan mikrofon noise cancelling.', 950000.00, 25, NOW(), NOW()),
(6, 'Webcam Logitech C920', 'Webcam Full HD 1080p untuk meeting online dan streaming.', 1100000.00, 18, NOW(), NOW()),
(7, 'SSD Samsung 870 EVO 1TB', 'Solid state drive SATA 1TB, upgrade storage laptop dan PC.', 1350000.00, 30, NOW(), NOW()),
(8, 'Router TP-Link Archer C6', 'Router dual band AC1200 untuk rumah dan kantor kecil.', 450000.00, 22, NOW(), NOW());
