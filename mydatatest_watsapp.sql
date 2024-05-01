-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2024 at 10:36 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatatest_watsapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `id` bigint(20) NOT NULL,
  `text` longtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Biletara.com müşteri hizmetlerine hoşgeldiniz. Tüm soru, görüş ve önerileriniz için bu mesajı cevaplayabilirsiniz. Biletara.com iyi yolculuklar diler.', '2024-04-26 01:27:37', '2024-04-29 16:46:59');

-- --------------------------------------------------------

--
-- Table structure for table `verimor`
--

CREATE TABLE `verimor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` longtext CHARACTER SET utf8mb4 DEFAULT NULL COMMENT 'response from verimor ap',
  `cdr` longtext CHARACTER SET utf8mb4 DEFAULT NULL,
  `phone` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `verimor`
--

INSERT INTO `verimor` (`id`, `value`, `cdr`, `phone`, `created_at`, `updated_at`) VALUES
(1, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"a2edf019-c0da-49df-8a2f-ec0efe2a3cae\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5418869037', '2024-04-25 01:26:37', '2024-04-25 01:26:37'),
(2, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"a2edf019-c0da-49df-8a2f-ec0efe2a3cae\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5418869037', '2024-04-25 01:27:07', '2024-04-25 01:27:07'),
(3, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"a2edf019-c0da-49df-8a2f-ec0efe2a3cae\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5418869037', '2024-04-25 01:27:08', '2024-04-25 01:27:08'),
(4, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"d2e0d7ef-4d4f-48d8-807f-12c4760e49d2\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5418869037', '2024-04-25 08:54:09', '2024-04-25 08:54:09'),
(5, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"ba2fc319-43ba-48b2-a09c-0c4a4817f1e9\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5418869037', '2024-04-25 09:08:09', '2024-04-25 09:08:09'),
(6, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"ef2b4b52-2609-44d7-a98b-353bcdab3136\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5418869037', '2024-04-25 09:10:00', '2024-04-25 09:10:00'),
(7, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"ee1d2b1e-9841-4948-bfe4-4895dde409a6\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5418869037', '2024-04-25 09:12:33', '2024-04-25 09:12:33'),
(8, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"e71409b2-efe9-45ec-b90b-7f674b909d44\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5418869037', '2024-04-25 09:15:46', '2024-04-25 09:15:46'),
(9, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"0018607994903\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"47742f06-63cc-4e1a-baa6-13188e17a460\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '18607994903', '2024-04-25 09:41:24', '2024-04-25 09:41:24'),
(10, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05061152535\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"a7778c02-6abc-41f8-aef5-0c1aad99ab1e\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5061152535', '2024-04-25 10:24:20', '2024-04-25 10:24:20'),
(11, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"9f05b9e3-ee8b-4521-8f47-6fbbe806b010\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5418869037', '2024-04-25 12:49:53', '2024-04-25 12:49:53'),
(12, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05051300871\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"cf38dad1-0211-4490-83eb-97acfc127188\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5051300871', '2024-04-25 18:02:31', '2024-04-25 18:02:31'),
(13, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05051300871\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"a847563c-6b77-42bf-8e98-2c6c516fbac7\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5051300871', '2024-04-25 18:03:26', '2024-04-25 18:03:26'),
(14, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05377630201\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"2155d631-266c-40f9-90aa-ca84297e59af\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5377630201', '2024-04-25 18:05:23', '2024-04-25 18:05:23'),
(15, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05377630201\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"e57c628a-6e16-4b0c-98ad-9c084be47840\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5377630201', '2024-04-25 18:06:01', '2024-04-25 18:06:01'),
(16, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05377630201\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"8de0fc03-13b6-45ab-b2db-9a2d33a0fd2e\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5377630201', '2024-04-25 18:06:33', '2024-04-25 18:06:33'),
(17, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05377630201\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"9b3d5734-cb12-4bb1-941d-57815a772e05\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5377630201', '2024-04-25 18:07:55', '2024-04-25 18:07:55'),
(18, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05051300871\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"584e6fdc-d855-4a34-a869-4fc0a2e5dd65\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5051300871', '2024-04-25 18:12:36', '2024-04-25 18:12:36'),
(19, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"f89d1246-eef2-4921-aca0-070684547b3d\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5418869037', '2024-04-25 23:26:09', '2024-04-25 23:26:09'),
(20, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"8410ffab-33d6-438f-bad9-a0a267c7ffc9\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5418869037', '2024-04-25 23:28:39', '2024-04-25 23:28:39'),
(21, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"9c976600-bb0d-4f54-a14a-b20fef3643b9\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5418869037', '2024-04-25 23:34:11', '2024-04-25 23:34:11'),
(22, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"17f28202-c904-4c10-9c88-5c38a26a61dc\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5418869037', '2024-04-25 23:39:30', '2024-04-25 23:39:30'),
(23, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"b08b6fbb-4aa1-4953-ab7e-5ccf31302388\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5418869037', '2024-04-25 23:57:06', '2024-04-25 23:57:06'),
(24, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05377630201\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"b184cc98-2c80-4e47-b84a-5b96a0fa8450\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5377630201', '2024-04-26 06:39:13', '2024-04-26 06:39:13'),
(25, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05377630201\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"b3d46a8a-0e10-42b9-935f-19bfafca42d7\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5377630201', '2024-04-26 06:39:51', '2024-04-26 06:39:51'),
(26, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05377630201\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"42a22d31-d9b4-42a7-ab77-4c1c7966aca7\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5377630201', '2024-04-26 06:40:30', '2024-04-26 06:40:30'),
(27, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05377630201\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"3a682939-67df-4a8b-8b02-9b01ea3cffd1\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5377630201', '2024-04-26 06:43:49', '2024-04-26 06:43:49'),
(28, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05523922304\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"6ace5918-49d8-4975-819c-60e4d1fdfe7d\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5523922304', '2024-04-26 06:51:21', '2024-04-26 06:51:21'),
(29, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"00261322819594\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"1ae70b8d-bf86-4ee0-9203-4e4d601f38a1\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '261322819594', '2024-04-26 06:52:23', '2024-04-26 06:52:23'),
(30, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05377630201\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"6328d736-6eb0-43c8-930a-6403505f6a4b\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5377630201', '2024-04-26 06:57:30', '2024-04-26 06:57:30'),
(31, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05377630201\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"68154c22-131f-4ce0-a65a-dd053d1796c2\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5377630201', '2024-04-26 07:10:55', '2024-04-26 07:10:55'),
(32, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05377630201\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"72581fc3-88bb-4888-b4b3-cb3f236eeca8\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5377630201', '2024-04-26 07:11:33', '2024-04-26 07:11:33'),
(33, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05377630201\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"b7a3ac26-6394-494d-8934-0958cc2a9164\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5377630201', '2024-04-26 07:12:12', '2024-04-26 07:12:12'),
(34, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05377630201\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"a3a77602-c661-44bd-b849-86c1fdb0e135\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5377630201', '2024-04-26 07:12:51', '2024-04-26 07:12:51'),
(35, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05366089279\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"f4da96fd-dd8b-4d0f-b241-2fafe3084e76\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5366089279', '2024-04-26 07:39:27', '2024-04-26 07:39:27'),
(36, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05366089279\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"f98d629e-1693-4b5d-ba03-7b682312212b\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5366089279', '2024-04-26 07:40:06', '2024-04-26 07:40:06'),
(37, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05366089279\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"b64037dd-d04d-4314-8192-edecea26dc3f\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5366089279', '2024-04-26 07:41:04', '2024-04-26 07:41:04'),
(38, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05366089279\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"fc40eb9f-5446-4d5b-80d0-9972276504cf\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5366089279', '2024-04-26 07:42:40', '2024-04-26 07:42:40'),
(39, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05300313903\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"dd84df08-0589-4899-9e5b-e1ccee60a1be\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5300313903', '2024-04-26 09:12:31', '2024-04-26 09:12:31'),
(40, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"be1d3004-0100-4584-b116-7450f1b02a71\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5418869037', '2024-04-26 09:22:50', '2024-04-26 09:22:50'),
(41, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"c760ac24-cb42-42b5-b282-670aaeec27cf\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5418869037', '2024-04-26 10:07:11', '2024-04-26 10:07:11'),
(42, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"f1816e58-44fc-4e35-82f7-157a9ad37fe1\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5418869037', '2024-04-26 10:28:47', '2024-04-26 10:28:47'),
(43, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"45245fe4-0d01-4be0-8fff-93273c21b5db\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5418869037', '2024-04-26 10:29:32', '2024-04-26 10:29:32'),
(44, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"outbound_caller_id_number\":\"\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"2eb6548d-ddfc-4ae8-87af-ac2d6477c725\",\"start_stamp\":\"\",\"queue\":\"\"}', NULL, '5418869037', '2024-04-26 11:01:04', '2024-04-26 11:01:04'),
(45, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"09deb3bc-6562-4108-905f-7291fc801356\"}', NULL, '5418869037', '2024-04-26 11:13:21', '2024-04-26 11:13:21'),
(46, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"d11ef669-f858-4bfb-a4a9-123e9cc0c9b0\"}', NULL, '5418869037', '2024-04-26 11:58:21', '2024-04-26 11:58:21'),
(47, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"6f61e65b-a58a-4c9a-a212-7d5b81640025\"}', NULL, '5418869037', '2024-04-26 11:59:16', '2024-04-26 11:59:16'),
(48, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"ad7718e0-769d-4cf2-8766-fcc8623b2345\"}', NULL, '5418869037', '2024-04-26 12:00:07', '2024-04-26 12:00:07'),
(49, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"f0043a3c-fe48-45ea-9bbd-f70938c84ff6\"}', NULL, '5418869037', '2024-04-26 12:53:13', '2024-04-26 12:53:13'),
(50, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05306648298\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"20f0a149-1538-4bcb-af9c-e6018de82bfa\"}', NULL, '5306648298', '2024-04-26 12:58:16', '2024-04-26 12:58:16'),
(51, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"4ec03c48-55d8-4342-ac94-8352968d971c\"}', NULL, '5418869037', '2024-04-26 13:21:12', '2024-04-26 13:21:12'),
(52, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"a63884ed-9a8a-4ab0-93cb-a1facc12efad\"}', NULL, '5418869037', '2024-04-26 13:23:05', '2024-04-26 13:23:05'),
(53, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"55303209-0564-46a4-9ee5-1a3874318efc\"}', NULL, '5418869037', '2024-04-26 13:25:23', '2024-04-26 13:25:23'),
(54, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"9e5defe6-0557-4c73-b513-44600c038dee\"}', NULL, '5418869037', '2024-04-26 13:26:35', '2024-04-26 13:26:35'),
(55, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"c5890e01-ea17-4ff8-9dc1-378daf49827b\"}', NULL, '5418869037', '2024-04-26 13:27:18', '2024-04-26 13:27:18'),
(56, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"f726b676-944f-4307-a6fb-b831a144bcb7\"}', NULL, '5418869037', '2024-04-26 13:29:15', '2024-04-26 13:29:15'),
(57, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"f8db488d-7e7e-4677-8d94-3eb03a0e21b8\"}', NULL, '05418869037', '2024-04-26 13:48:09', '2024-04-26 13:48:09'),
(58, '{\"dialed_user\":\"05418869037\",\"caller_id_number\":\"05377903030\"}', NULL, '05377903030', '2024-04-26 13:50:32', '2024-04-26 13:50:32'),
(59, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"793f0e24-07b9-4d6d-a4fe-4186246cc153\"}', NULL, '05418869037', '2024-04-26 13:52:19', '2024-04-26 13:52:19'),
(60, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05010935454\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"39e53770-8f94-45fa-8dbb-cee6b7f35835\"}', NULL, '05010935454', '2024-04-26 13:52:23', '2024-04-26 13:52:23'),
(61, '{\"dialed_user\":\"05418869037\",\"caller_id_number\":\"5418869037\"}', NULL, '5418869037', '2024-04-26 14:06:19', '2024-04-26 14:06:19'),
(62, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"f75b066e-9bc2-4d8b-b735-486b93258356\"}', NULL, '05418869037', '2024-04-26 14:09:37', '2024-04-26 14:09:37'),
(63, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05010935454\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"65126b76-0e4b-4fa0-95a2-a54115fb5b24\"}', NULL, '05010935454', '2024-04-26 14:13:06', '2024-04-26 14:13:06'),
(64, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05079480674\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"aa6bda1a-9d91-4d53-bc16-23b652e5c1af\"}', NULL, '05079480674', '2024-04-26 14:20:56', '2024-04-26 14:20:56'),
(65, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"00261322819594\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"6557079f-a619-4fbd-b496-d7a10d077cfb\"}', NULL, '00261322819594', '2024-04-26 15:18:27', '2024-04-26 15:18:27'),
(66, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05372272645\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"4cb5f369-282d-4c9e-b4ca-f21bad3b53d9\"}', NULL, '05372272645', '2024-04-26 23:42:12', '2024-04-26 23:42:12'),
(67, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05393906689\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"0253d2ee-3bfd-4354-9843-59df95558840\"}', NULL, '05393906689', '2024-04-27 09:50:47', '2024-04-27 09:50:47'),
(68, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05393906689\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"b6bcc1de-06c6-400e-9e1d-d3f5925a386b\"}', NULL, '05393906689', '2024-04-27 09:51:26', '2024-04-27 09:51:26'),
(69, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05364910224\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"0343716c-0429-4029-ba39-a25f5953ef8a\"}', NULL, '05364910224', '2024-04-27 19:57:52', '2024-04-27 19:57:52'),
(70, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"0018607994903\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"118c1813-dd6f-42de-aebb-631e14a01f62\"}', NULL, '0018607994903', '2024-04-29 08:14:40', '2024-04-29 08:14:40'),
(71, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"0018607994903\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"49f83a1c-2df5-4dbf-b165-9efdf7a4d068\"}', NULL, '0018607994903', '2024-04-29 08:48:14', '2024-04-29 08:48:14'),
(72, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05304419286\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"3872837c-21e3-4708-8d91-677df66f2bea\"}', NULL, '05304419286', '2024-04-29 08:58:45', '2024-04-29 08:58:45'),
(73, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05318888877\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"dac4909f-8060-4661-9808-cb10959a4b63\"}', NULL, '05318888877', '2024-04-29 09:19:20', '2024-04-29 09:19:20'),
(74, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05061152535\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"367ce144-7116-4665-9ac2-6141c01bca8b\"}', NULL, '05061152535', '2024-04-29 09:20:09', '2024-04-29 09:20:09'),
(75, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05398114147\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"cef0641d-6053-45fd-b4ca-b1bbc683058b\"}', NULL, '05398114147', '2024-04-29 09:25:56', '2024-04-29 09:25:56'),
(76, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05398114147\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"1045dbce-77cf-48ce-a1cc-7773e16a70b7\"}', NULL, '05398114147', '2024-04-29 09:27:15', '2024-04-29 09:27:15'),
(77, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05010935454\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"4cdc6f92-ec50-45d2-8940-57ee883c3e8d\"}', NULL, '05010935454', '2024-04-29 09:34:11', '2024-04-29 09:34:11'),
(78, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05010935454\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"e223d9f1-2397-420b-b1a5-4eb7802b783d\"}', NULL, '05010935454', '2024-04-29 09:35:40', '2024-04-29 09:35:40'),
(79, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05010935454\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"058575a0-ee16-40c4-936c-40ed70904c2a\"}', NULL, '05010935454', '2024-04-29 09:39:24', '2024-04-29 09:39:24'),
(80, '{\"dialed_user\":\"05418869037\",\"caller_id_number\":\"5418869037\"}', NULL, '5418869037', '2024-04-29 11:52:00', '2024-04-29 11:52:00'),
(81, '{\"dialed_user\":\"05418869037\",\"caller_id_number\":\"5418869037\"}', NULL, '5418869037', '2024-04-29 11:53:03', '2024-04-29 11:53:03'),
(82, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"30853664-8942-487c-8692-948e7447ee62\"}', NULL, '05418869037', '2024-04-29 12:09:35', '2024-04-29 12:09:35'),
(83, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"f0761e2d-9a1a-4836-b83d-d393970a6293\"}', NULL, '05418869037', '2024-04-29 12:10:46', '2024-04-29 12:10:46'),
(84, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"d8f40d5a-2ab3-4e14-ab03-fabdcc53295d\"}', NULL, '05418869037', '2024-04-29 13:18:58', '2024-04-29 13:18:58'),
(85, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05392457161\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"65fa3c3f-41b6-49f1-9e42-9456c03353a6\"}', NULL, '05392457161', '2024-04-29 13:30:10', '2024-04-29 13:30:10'),
(86, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05418869037\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"83f062a9-0946-4ace-b4f0-031cc7925b2c\"}', NULL, '05418869037', '2024-04-29 13:31:22', '2024-04-29 13:31:22'),
(87, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05392457161\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"0e043ea5-2b42-40ee-be18-c1bd553ae9e3\"}', NULL, '05392457161', '2024-04-29 13:32:23', '2024-04-29 13:32:23'),
(88, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05392457161\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"233b4a39-766f-4940-bb7a-8e240625919f\"}', NULL, '05392457161', '2024-04-29 13:35:20', '2024-04-29 13:35:20'),
(89, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05061152535\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"ce47ef4c-ed26-43b9-be96-dabbceed50c2\"}', NULL, '05061152535', '2024-04-29 13:38:56', '2024-04-29 13:38:56'),
(90, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05061152535\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"a3626301-13d4-450d-a4cd-2f156ee91c82\"}', NULL, '05061152535', '2024-04-29 13:41:46', '2024-04-29 13:41:46'),
(91, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05061152535\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"a27e4044-1186-4747-bf0e-d7a7c3e26fef\"}', NULL, '05061152535', '2024-04-29 13:46:25', '2024-04-29 13:46:25'),
(92, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05304419286\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"703c1516-7363-412e-add7-5ee5d160671a\"}', NULL, '05304419286', '2024-04-29 13:52:58', '2024-04-29 13:52:58'),
(93, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05304419286\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"a4ccf7e9-5cbb-4dfb-8d2d-22c0371ea0b7\"}', NULL, '05304419286', '2024-04-29 14:02:13', '2024-04-29 14:02:13'),
(94, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05061152535\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"44f89f12-c141-49b9-815d-67bbbc9b8890\"}', NULL, '05061152535', '2024-04-29 14:13:46', '2024-04-29 14:13:46'),
(95, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05061152535\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"7010a0cc-76f7-4e2f-b036-4eaab5ea97f0\"}', NULL, '05061152535', '2024-04-29 14:14:07', '2024-04-29 14:14:07'),
(96, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05309530694\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"96b74791-12ec-4bbd-9dce-d035715c13ce\"}', NULL, '05309530694', '2024-04-29 16:08:40', '2024-04-29 16:08:40'),
(97, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05309530694\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"eab4fee4-392f-412f-8b8e-5eacc04676a6\"}', NULL, '05309530694', '2024-04-29 16:09:26', '2024-04-29 16:09:26'),
(98, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05393765502\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"d4639b8d-1e14-4041-9324-c7b65fc5fc6d\"}', NULL, '05393765502', '2024-04-29 17:18:07', '2024-04-29 17:18:07'),
(99, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05303475562\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"dbcde7d8-8068-4926-ae2d-10ce5431c1ae\"}', NULL, '05303475562', '2024-04-29 19:54:21', '2024-04-29 19:54:21'),
(100, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05303475562\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"52055a60-f837-419a-947b-0edd0ec5a956\"}', NULL, '05303475562', '2024-04-29 19:54:38', '2024-04-29 19:54:38'),
(101, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05303475562\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"bb9e692c-0baf-4e6a-a00c-a2a91200d7ef\"}', NULL, '05303475562', '2024-04-29 19:54:54', '2024-04-29 19:54:54'),
(102, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05303475562\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"5b9af90a-d27b-4cf5-b479-7b2745a48c2d\"}', NULL, '05303475562', '2024-04-29 19:56:35', '2024-04-29 19:56:35'),
(103, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05303475562\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"b0c1569d-011a-41df-be7c-a5180c00d06e\"}', NULL, '05303475562', '2024-04-29 19:57:20', '2024-04-29 19:57:20'),
(104, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05303475562\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"60f9c5ea-3007-423b-b583-87502189975a\"}', NULL, '05303475562', '2024-04-29 20:00:18', '2024-04-29 20:00:18'),
(105, '{\"event_type\":\"ringing\",\"domain_id\":\"6793\",\"direction\":\"inbound\",\"caller_id_number\":\"05304419286\",\"destination_number\":\"908505320060\",\"dialed_user\":\"05377903030\",\"call_uuid\":\"761b8f4b-f4a4-471d-8c3f-26355e7e8776\"}', NULL, '05304419286', '2024-04-29 20:05:23', '2024-04-29 20:05:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verimor`
--
ALTER TABLE `verimor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `verimor`
--
ALTER TABLE `verimor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
