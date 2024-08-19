-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 09, 2024 at 05:24 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electronic`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `price` decimal(10,2) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `stars` int NOT NULL DEFAULT '5',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image_url`, `stars`) VALUES
(1, 'LG 10KG Heat Pump Tumble Dryer', 'High efficiency and low energy consumption', 599.99, 'https://hnsgsfp.imgix.net/9/images/detailed/87/lg-dryer-rh-10vhp2b-10kg_1.jpg?fit=fill&bg=0FFF&w=785&h=460&auto=format,compress', 5),
(2, 'Xiaomi W10 Ultra Wet Dry Vacuum White', 'Innovative 75℃ high-temperature cleaning. Up to 35 mins of use on a single charge. Self-cleaning water circuit.', 1999.00, 'https://magento.senq.com.my/media/catalog/product/x/i/xiaomi_w10_ultra_1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 4),
(3, 'iPhone 15 Pro Max', 'iPhone 15 Pro Max. Forged in titanium and featuring the groundbreaking A17 Pro chip, a customisable Action button and the most powerful iPhone camera system ever. Key feature bullets include FORGED IN TITANIUM — iPhone 15 Pro Max has a strong and light aerospace-grade titanium design with a textured matt glass back. It also features a Ceramic Shield front that’s tougher than any smartphone glass. And it’s splash, water and dust resistant. ADVANCED DISPLAY — The 6.7″ Super Retina XDR display with ProMotion ramps up refresh rates to 120Hz. GAME-CHANGING A17 PRO CHIP — A Pro-class GPU. POWERFUL PRO CAMERA SYSTEM — Get incredible framing flexibility with seven pro lenses. CUSTOMISABLE ACTION BUTTON — A fast track to your favourite feature. PRO CONNECTIVITY — The new USB-C connector and more. VITAL SAFETY FEATURES — With Crash Detection. DESIGNED TO MAKE A DIFFERENCE — Comes with privacy protections and made from recycled materials. COMES WITH APPLECARE WARRANTY.', 7999.00, 'https://magento.senheng.com.my/media/catalog/product/s/g/sgmy_iphone_15_pro_max_natural_titanium_pdp_image_position-1a_natural_titanium_colour.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 5),
(4, 'iPhone 15', 'iPhone 15 brings you Dynamic Island, a 48MP Main camera and USB-C — all in a durable colour-infused glass and aluminium design. Key feature bullets include DYNAMIC ISLAND COMES TO IPHONE 15 — Dynamic Island bubbles up alerts and Live Activities. INNOVATIVE DESIGN — iPhone 15 features a durable colour-infused glass and aluminium design. 48MP MAIN CAMERA WITH 2X TELEPHOTO — The 48MP Main camera shoots in super-high resolution. NEXT-GENERATION PORTRAITS — Capture portraits with dramatically more detail and colour. POWERHOUSE A16 BIONIC CHIP — The super-fast chip powers advanced features. USB-C CONNECTIVITY — The USB‑C connector for charging. VITAL SAFETY FEATURES — With Crash Detection. DESIGNED TO MAKE A DIFFERENCE — iPhone comes with privacy protections and is made from more recycled materials.', 5199.00, 'https://magento.senheng.com.my/media/catalog/product/s/g/sgmy_iphone_15_pink_pdp_image_position-1a_pink_colour_3.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 5),
(5, 'Samsung Galaxy S24+ 5G', 'Galaxy S24 | S24+. Embrace every curve with their unified design and satin finish, Galaxy S24 and S24+ feel as smooth as they look. Features include: QHD+ highest screen resolution on a Galaxy device, 50MP camera, ProVisual engine, AI ISP for clear night shots, AI Zoom, Super HDR previews, AI-powered photo editing, Circle to Search, Live Translate, Chat Assist, and an over 1.5x bigger Vapor Chamber for optimal performance. Secured by Samsung Knox for unparalleled mobile protection. We are committed to a sustainable future, making small changes for a big difference.', 5399.00, 'https://magento.senheng.com.my/media/catalog/product/s/2/s24_plus_cobalt_violet_1.png?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 5),
(6, 'Apple Magic Keyboard Folio for iPad (10th generation)', 'Magic Keyboard Folio. An amazing typing experience with a versatile two-piece design. Type comfortably and work on a large trackpad with Magic Keyboard Folio. Quickly adjust the volume or search for a file using the function key row. The versatile two-piece design has a detachable keyboard and a protective back panel with an adjustable stand for flexible viewing.', 1249.00, 'https://magento.senq.com.my/media/catalog/product/s/e/sea_magic_keyboard_folio_pdp_image_position-1a.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 4),
(7, 'Belkin Ultra HD High Speed HDMI® Cable', 'ULTRA HDMI CERTIFIED CABLE. 48Gbps HIGH SPEED CABLE FOR 4K AND 8K TV. 2 METER CABLE.', 179.00, 'https://magento.senq.com.my/media/catalog/product/b/k/bkn-av10175bt2m-blk-1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 5),
(8, 'Apple Pencil (1st generation)', 'Apple Pencil lets you easily take notes, mark up, and draw on iPad with pixelperfect precision—as naturally as you do on paper', 479.00, 'https://magento.senq.com.my/media/catalog/product/1/_/1_43_2.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 3),
(9, 'HUAWEI Matepad Pro Keyboard - Grey', 'Slim and portable design with accurate cutouts for keys, ports, and rear camera. Design For Huawei (DFH) keyboard case with a PU leather finish for a soft hand feel. Features quick magnetic matching for easy connection, convenient stand function, and is made of high-quality Polyurethane.', 499.00, 'https://magento.senq.com.my/media/catalog/product/h/u/huawei_matepad_pro_keyboard_-_grey-01.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 5),
(10, 'Apple 20W USB-C Power Adapter', '20W USB-C Power Adapter. A fast-charging, efficient power adapter compatible with any USB-C enabled device. Provides optimal charging performance paired with Apple devices, but can be used with a wide range of USB-C compatible hardware.', 85.00, 'https://magento.senq.com.my/media/catalog/product/a/p/app-mhjf3mya-01.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 5),
(11, 'Rapoo Optical Mouse N1020 (Black)', 'Easy installation, 1000 DPI tracking engine, Anti-slip scroll wheel, Full-size, ambidextrous design. The Rapoo Optical Mouse N1020 is designed for both left and right-handed users, offering comfortable use and efficient tracking for everyday computing tasks.', 19.00, 'https://magento.senq.com.my/media/catalog/product/r/a/rap-1020n_f5.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 3),
(12, 'Microsoft Surface Arc Mouse', 'Compatible with Microsoft Windows 10/8.1. Requires Bluetooth 4.0 or higher. Operates within a 2.4 GHz frequency range. The Surface Arc Mouse is designed for easy portability and ergonomic use.', 309.00, 'https://magento.senq.com.my/media/catalog/product/s/u/surface_arc_mouse-platinum_3_1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 4),
(13, 'Microsoft Surface Mobile Mouse', 'Compatibility with Windows 8.1 & Windows 10. Operates on a 2.4GHz frequency range. Weight of 78g including 2 AAA alkaline batteries. Comes with a 1 year limited hardware warranty.', 169.00, 'https://magento.senq.com.my/media/catalog/product/m/i/microsoft_surface_mobile_mouse-min.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 3),
(14, 'MSI Clutch GM60 RGB Gaming Optical Mouse', 'Fully Customizable Look & Feel. Experience incredible accuracy with the Avago PMW3330 optical gaming sensor. Choose from millions of colors with RGB Mystic Light. Fine-tune detailed settings with Gaming Center. Features special OMRON switches rated for over 50 million clicks.', 434.00, 'https://magento.senq.com.my/media/catalog/product/m/s/msi-gm60_1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 5),
(15, 'Microsoft Modern Mobile Mouse Bluetooth', 'Modern design with Bluetooth smart technology and BlueTrack Technology®. Offers seamless integration with your Bluetooth-equipped PC without the need for wires or a dongle. Its sleek design and premium finish provide a comfortable, stylish user experience.', 199.00, 'https://magento.senq.com.my/media/catalog/product/f/e/feature-1_1200_2.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 4),
(16, 'Samsung 85 inch Crystal UHD 4K TV CU8000', 'Features the Crystal Processor 4K for powerful picture quality transformation and an AirSlim design for a sleek, minimalistic look. This TV brings a whole new level of immersive viewing experience with its crystal-clear UHD resolution.', 9599.00, 'https://magento.senq.com.my/media/catalog/product/s/a/samcu8000-1-min_1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 5),
(17, 'LG 65 inch 4K Smart QNED TV (2023)', 'Powered by the α7 AI Processor 4K Gen6 with Dynamic Tone Mapping, HDR10 / HLG, and Local Dimming, this TV offers superior picture quality and smart capabilities. Experience enhanced contrast, clarity, and color accuracy on a large, immersive 65-inch display.', 4699.00, 'https://magento.senq.com.my/media/catalog/product/q/n/qned81-01_2.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 4),
(18, 'LG 65 inch OLED evo C3 4K Smart TV (2023)', 'Featuring the α9 AI Processor 4K Gen6 and OLED Dynamic Tone Mapping Pro for outstanding picture quality. Supports Dolby Vision, HDR10, and HLG, offering unparalleled depth and detail in imagery. Experience the pinnacle of 4K resolution on a cutting-edge OLED display.', 10199.00, 'https://magento.senq.com.my/media/catalog/product/o/l/oled_evo-01_2.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 5),
(19, 'Cento 25\'-43\' Full Motion Mount CT-LCDM2543', 'Fits most 25\"-43\" TVs and supports up to 88 lbs (40 kg). Mounting profile 80mm-510mm with Fixed/Tilt -20º/pans capabilities. VESA compliant: 100x100, 100x200, 200x200, 400x400. Product Dimension: 465mm(h) x430mm(w).', 193.00, 'https://magento.senq.com.my/media/catalog/product/5/2/5268_2.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 3),
(20, '100 Value MASTERLINK Screen Cleaning Kit MSL-4131ATB', 'Powerful Cleaning Solution with an Advance Formula. Includes a High-tech Reusable Micro-Fiber Cloth and Cleaning Brush. Designed to deliver clear, vibrant picture with ultra-sharp definition. Suitable for cleaning all types of flat panel displays.', 99.00, 'https://magento.senq.com.my/media/catalog/product/m/s/msl-4131atb-01-min.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 5),
(21, 'Xiaomi W10 Ultra Wet Dry Vacuum White', 'Innovative 75°C high-temperature cleaning. Offers up to 35 mins of use on a single charge. Features a self-cleaning water circuit for maintenance ease.', 1999.00, 'https://magento.senq.com.my/media/catalog/product/x/i/xiaomi_w10_ultra_1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 4),
(22, 'Xiaomi Robot Vacuum E10 EU', 'Smart Path Planning with 3 Levels Water Adjustment. Features a 15mm climbing rate for overcoming obstacles. Designed for efficient cleaning with customizable water output for different floor types.', 599.00, 'https://magento.senq.com.my/media/catalog/product/x/i/xiaomi_e10_1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 5),
(23, 'DEKA 60\' Ceiling Fan (Black) DR9', 'Colours: Black. Measurement: 60” Diameter. Features 5 speeds and includes 3 blades. Comes with an Electronic Wall Regulator. Equipped with an AC Motor.', 139.00, 'https://magento.senq.com.my/media/catalog/product/p/r/product_image_template_1_80__1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 3),
(24, 'Haier 2 DOOR FRIDGE INVERTER', '4 STAR Energy Class rating for efficient energy use. Features a Chiller Box for better preservation, and a Deodorizer Nano Fresh Ag+ to keep food fresh and odor-free.', 1399.00, 'https://magento.senq.com.my/media/catalog/product/h/a/haier_1_1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 4),
(25, 'Panasonic Water Purifier Cartridge for TKAS40 PSN-TK7505C1ZEX', 'Compatible with TKAS40. Water Purification Capacity: 12,000 litres. Filter material: Non-woven fabric, Granular activated carbon, Ceramic, Powdered activated carbon, Hollow fibre membrane.', 393.00, 'https://magento.senq.com.my/media/catalog/product/p/s/psn-tk7505c1zex.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 4),
(26, 'Samsung 1.0HP Windfree Premium Air Cond with Inverter (2022) AR10BYEA', 'Features WindFree™ Cooling technology for optimal temperature control without the discomfort of direct cold air. Includes Freeze Wash for easy maintenance and enhanced air quality.', 1949.00, 'https://magento.senq.com.my/media/catalog/product/s/a/sam-ar10byea_01_1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 4),
(27, 'ROBAM 40L Built-in Steam Oven S106', '3D Steaming Technology. Quick Steaming. Intellectual Pop-up Water Filling Hole. Capacity: 40L.', 2999.00, 'https://magento.senq.com.my/media/catalog/product/r/o/rob-s106.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 5),
(28, 'Nescafe Dolce Gusto Genio S Touch Capsule Machine', 'Thermobloc technology. Touch-screen interface. Temperature selection (Warm to Hot).', 649.00, 'https://magento.senq.com.my/media/catalog/product/2/0/20210422153422_GenioSTouch_Krups_Silver_FrontView3D.png?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 5),
(29, 'Panasonic Alkaline Water Ionizer TK-AS45', 'Generates 5 Kinds of water. Improve Gastrointestinal System. Continuation Mode (Manual). Electrolysis Indicator. Removeable, Washable Spout.', 1999.00, 'https://magento.senq.com.my/media/catalog/product/p/s/psn-tkas45.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 5),
(30, 'Khind Multi Blender Chopper BLC129', 'Interchangeable Accessories. Powerful Motor. Pulse Switch. Rust Free. Stainless Steel Double Blade. Safety Switch.', 190.00, 'https://magento.senq.com.my/media/catalog/product/k/h/khind_multi_blender_chopper_blc129_-_04.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 4),
(31, 'Sharp Polycarbonate Frame Spec Face Shield FGF10M', 'Low Reflection. Anti Fog. Highly Transparent. Highly Durable. Anti-Scratch. Lightweight.', 199.00, 'https://magento.senq.com.my/media/catalog/product/s/h/shp-fgf10m.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 5),
(32, 'OGAWA Master Drive Plus 5 Elements', '5 Elements Comfort Programs. Japanese Technology: M.5 Gent Microprocessor. Gen 5 4d Thermo Rollers. Integration Of 8 Sets Of Sensors. Automatic Acupoint Detection Technology.', 15699.00, 'https://magento.senq.com.my/media/catalog/product/2/_/2_34_2.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 4),
(33, 'Laifen Wave Electric Toothbrush', 'Making Waves in Oral Care. Vibration Strength (Max) 66,000 Vibrations/minute. Rotation Range (Max) 60° (3x wider than other brands). Low Noise Level 55dB. Ultra-Soft Dupont Bristles 0.02mm. 2 Modes/ 3 Settings (Vibration & Rotation Range & Rotation Speed) / 10 Levels customize Smart Phone apps. Fast Charging in 2.5 hrs. IPX7 Waterproof. One ABS White Electric Toothbrush, 3 brush heads (GUM CARE*1, SUPER CLEAN*1, ULTRA-WHITENING*1, magnetic cable*1).', 329.00, 'https://magento.senq.com.my/media/catalog/product/l/a/laifen_1_.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 5),
(34, 'Panasonic Dual-Voltage Nanoe™ Hair Straightener', 'Nanoe™ Hair Straightener with Photo Ceramic Plate. Features 5 Temperature Settings, Universal Voltage, and Advance Stable Heater.', 506.00, 'https://magento.senq.com.my/media/catalog/product/p/s/psn-ehhs99.001.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 5),
(35, 'Panasonic 1800W nanoe™ & Double Mineral Hair Dryer Rouge Pink EH-NA98RP655', 'This hair dryer features nanoe™ & Double Mineral technology for healthy and beautiful hair. It offers various modes for hair, scalp, and skin, ensuring gentle and quick drying.', 895.00, 'https://magento.senq.com.my/media/catalog/product/p/a/panasonic-hair-dryer-600x600-3.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 4),
(36, 'Aqara Smart Door Lock A100 AQR-ZNMS02ES', 'The Aqara Smart Door Lock A100 features Zigbee 3.0 & Bluetooth support, providing versatile connectivity options. It offers 9 unlock methods and boasts an impressive 18-month battery life.', 1399.00, 'https://magento.senq.com.my/media/catalog/product/2/0/20220318160523_a100_a.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 5),
(37, 'Xiaomi Air Purifier 4 Pro', 'The Xiaomi Air Purifier 4 Pro is designed to provide clean air in spaces ranging from 35 to 60 square meters. With a noise level of ≤65dB(A) and a Particle Clean Air Delivery Rate (CADR) of 500m³/h, it efficiently purifies the air.', 899.00, 'https://magento.senq.com.my/media/catalog/product/2/0/20220331114859_3_1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 5),
(38, 'Aqara Temperature and Humidity Sensor', 'The Aqara Temperature and Humidity Sensor monitors temperature, humidity, and atmospheric pressure in real time. It requires no wiring and offers temperature and humidity notifications. With a battery life of 2 years, it provides long-lasting performance.', 79.00, 'https://magento.senq.com.my/media/catalog/product/2/0/20211008162022_temperature_humidity_presure_sensor.jpeg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 3),
(39, 'Aqara Water Leak Sensor', 'The Aqara Water Leak Sensor detects floods and protects your property by triggering the Aqara Hub Alarm and sending push notifications. It comes with an IP67 dustproof and waterproof rating for durability and reliability.', 89.00, 'https://magento.senq.com.my/media/catalog/product/a/q/aqr-sjcgq11lm-1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 4),
(40, 'Aqara Motion Sensor', 'The Aqara Motion Sensor features 170⁰ degree motion detection and can be easily installed with its peel-and-stick design. It sends remote notifications and can automatically turn lights on or off based on detected motion. The sensor has a battery life of up to 2 years.', 99.00, 'https://magento.senq.com.my/media/catalog/product/a/q/aqr-rtcgq11lm-1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 4),
(41, 'Riversong Vision 20 Pro Powerbank (20000mAh)', 'The Riversong Vision 20 Pro Powerbank features a 22.5W quick charge capability, dual USB outputs, and both Type-C input and output ports. With a capacity of 20000mAh, it offers reliable power on the go.', 199.00, 'https://magento.senq.com.my/media/catalog/product/1/_/1_42_1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 5),
(42, 'Samsung Galaxy Z Flip5 Flipsuit Case - Transparent', 'The Samsung Galaxy Z Flip5 Flipsuit Case features a swappable and customizable design, allowing users to change its appearance easily. It offers an automatic makeover with dynamic content, enhancing the look of your Galaxy Z Flip5 while providing protection.', 50.00, 'https://magento.senq.com.my/media/catalog/product/s/a/samsung_galaxy_z_flip5_flipsuit_case_1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 5),
(43, 'Samsung Galaxy Z Flip5 Flipsuit Case - Transparent', 'The Samsung Galaxy Z Flip5 Flipsuit Case features a swappable and customizable design, allowing users to change its appearance easily. It offers an automatic makeover with dynamic content, enhancing the look of your Galaxy Z Flip5 while providing protection.', 50.00, 'https://magento.senq.com.my/media/catalog/product/s/a/samsung_galaxy_z_flip5_flipsuit_case_1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 5),
(44, 'UNIQ HYBRID Galaxy ZFlip5 Lifepro Xtreme - Clear Case', 'The UNIQ HYBRID Galaxy ZFlip5 Lifepro Xtreme - Clear Case is a slim hybrid clear case designed for the Galaxy ZFlip5. It features a rigid protective back and reinforced corners for enhanced durability. The hybrid structure combines an all-round TPU bumper with a tough PC back for maximum clarity and scratch resistance. The case also offers 3H scratch resistance for the clear hard back, Airmax Edge protection, and has been 2M drop tested with a 4-point shock absorbent bumper.', 69.00, 'https://magento.senq.com.my/media/catalog/product/u/n/uniq_hybrid_galaxy_zflip5_lifepro_xtreme_-_clear_case.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 5),
(45, 'UNIQ HYBRID Galaxy ZFold5 Lifepro Xtreme - Clear Case', 'The UNIQ HYBRID Galaxy ZFold5 Lifepro Xtreme - Clear Case is a slim hybrid clear case designed for the Galaxy ZFold5. It features a rigid protective back and reinforced corners for enhanced durability. The hybrid structure combines an all-round TPU bumper with a tough PC back for maximum clarity and scratch resistance. The case also offers 3H scratch resistance for the clear hard back, Airmax Edge protection, and has been 2M drop tested.', 69.00, 'https://magento.senq.com.my/media/catalog/product/u/n/uniq_hybrid_galaxy_zfold5_lifepro_xtreme_-_clear_case.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 5),
(46, 'Microsoft Surface Pro 9', 'Laptop power, tablet flexibility. Surface Pro 9 gives you the tablet flexibility you want and the laptop performance and battery life¹ you need to move through your day — all in one ultra-portable device. [1] Battery life varies significantly based on usage, network and feature configuration, signal strength, settings and other factors.', 4999.00, 'https://magento.senq.com.my/media/catalog/product/s/u/surface-b-sapphire-infographic-01_1.png?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 5),
(47, 'Faber BBQ Party Grill FBR-FBQ899', 'The Faber BBQ Party Grill FBR-FBQ899 features a large 10\" sauce pot with a glass lid, 2-in-1 BBQ/grill and steamboat functionality, detachable temperature control, easy-to-clean and dismantle design, and operates on 220V - 240V power supply.', 309.00, 'https://magento.senq.com.my/media/catalog/product/f/b/fbr-fbq899.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 5),
(48, 'Panasonic Vacuum Cleaner PSN-MCCL305', 'The Panasonic Vacuum Cleaner PSN-MCCL305 features an input power of 1400 W, suction power of 350 W, dust capacity of 0.6L, eco power and compact design, variable power control, air dust catcher, and blower function.', 299.00, 'https://magento.senq.com.my/media/catalog/product/p/r/product_image_template_15__3_2.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 4),
(49, 'KDK Fan KDK-KB404', 'This KDK fan features a 3-speed on/off push-button switch, full automatic oscillation with clutch control, efficient cooling, and quiet operation thanks to its condenser motor.', 170.00, 'https://magento.senq.com.my/media/catalog/product/k/d/kdk-kb404.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 3),
(50, 'Panasonic Exhaust Fan PSN-FV20AUM', 'The Panasonic Exhaust Fan PSN-FV20AUM features unique Q-blades for low noise, an energy-saving high-performance motor, automatic shutters, a built-in oil receptor, and simple and easy installation.', 114.00, 'https://magento.senq.com.my/media/catalog/product/9/6/963_3.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=&width=', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userName` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(191) NOT NULL,
  `Email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tel_no` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`Email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userName`, `password`, `Email`, `tel_no`) VALUES
(1, 'fooweichang', '$2y$10$0vZcqrVAZnVAbZTJQQXmp.QBYldX8UIQqrWzz7G3HiMdzaLNI32Y2', 'fooweichang2003@1utar.my', '014-316-5688');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
