-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 07:49 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kibblerz`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `detailid` int(11) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `food_brand` varchar(255) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `animal` varchar(255) NOT NULL,
  `min_age` varchar(255) NOT NULL,
  `max_age` varchar(255) NOT NULL,
  `min_weight` varchar(255) NOT NULL,
  `max_weight` varchar(255) NOT NULL,
  `allergies` varchar(255) NOT NULL,
  `health_issues` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price_range` varchar(255) NOT NULL,
  `purchase_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`detailid`, `sku`, `food_brand`, `food_name`, `image_url`, `animal`, `min_age`, `max_age`, `min_weight`, `max_weight`, `allergies`, `health_issues`, `description`, `price_range`, `purchase_link`) VALUES
(3, 'B01FW4MNYE', 'monge', 'Monge Adult Medium 12 kg', 'https://images-na.ssl-images-amazon.com/images/I/81YGHoyxQCL._AC_SL1500_.jpg', 'dog', '3', '7', '10', '32', 'no', 'no', 'Contain brain that strengthens the circulatory system and ensures an optimum weight and are rich in Omega 3/6 for the health of the skin and hair.', '$$', 'https://www.amazon.co.uk/Monge-01537130-Adult-Medium-12-kg/dp/B01FW4MNYE'),
(4, 'B01EOFRVWQ', 'monge', 'Monge Dog Puppy and Junior Maxi 12 kg', 'https://images-na.ssl-images-amazon.com/images/I/61QWnHpju0L._AC_SL1000_.jpg', 'dog', '0.2', '3', '32', '80', 'no', 'no', 'Ensure the welfare of the dog thanks to the presence of nutrients of the highest quality, the result of research made in Italy.', '$$$', 'https://www.amazon.co.uk/Monge-Dog-Puppy-Junior-Maxi/dp/B01EOFRVWQ'),
(5, 'B008MKI7KU', 'Purina ONE', 'Purina ONE SmartBlend Natural Adult Dry Dog Food', 'https://images-na.ssl-images-amazon.com/images/I/81Nmw2PDN9L._AC_SL1500_.jpg', 'dog', '1', '20', '1.3', '45', 'chicken', 'no', 'Real Chicken Is The #1 Ingredient. Calorie Content (fed): 3993 kcal/kg, 383 kcal/cup. Dual Defense Antioxidant Blend To Help Support A Strong Immune System. Natural Sources Of Glucosamine Help To Support Healthy Joints\nProtein Rich, Tender, Meaty Morsels ', '$$', 'https://amzn.to/3ekh9jU'),
(6, 'B01EY9KPZM', 'Purina Pro', 'Purina Pro Plan Sensitive Skin & Stomach, High Protein Adult Dry Dog Food & Wet Dog Food', 'https://images-na.ssl-images-amazon.com/images/I/81WdVCywd-L._AC_SL1500_.jpg', 'dog', '1', '20', '1', '100', 'Salmon', 'Sensitive Skin & Stomach', 'FOCUS Sensitive Skin & Stomach Salmon & Rice Formula has a new look and product name coming soon. May receive either bag during the transition\nNo corn, wheat or soy. No artificial colors or flavors. No poultry by-product meal', '$$$', 'https://amzn.to/3kRwmvg'),
(13, 'sku', 'food_brand', 'food_name', 'image_url', 'animal', 'min_age', 'max_age', 'min_weight', 'max_weight', 'allergies', 'health_issues', 'description', 'price_range', 'purchase_link'),
(14, 'B01MDQ7349', 'monge', 'Monge Adult Maxi Dog 12 kg', 'https://images-na.ssl-images-amazon.com/images/I/61cAztOGvmL._AC_SL1000_.jpg', 'dog', '3', '7', '32', '80', 'no', 'no', 'condroitina, Glucosamine, Calcium and Phosphorus help the proper development of the bones and joints, brain strengthens the circulatory system and ensures an optimum weight.', '$', 'https://www.amazon.it/Monge-Cane-Adult-Maxi-12/dp/B01MDQ7349'),
(15, 'B01FW4MNYE', 'monge', 'Monge Adult Medium 12 kg', 'https://images-na.ssl-images-amazon.com/images/I/81YGHoyxQCL._AC_SL1500_.jpg', 'dog', '3', '7', '10', '32', 'no', 'no', 'Contain brain that strengthens the circulatory system and ensures an optimum weight and are rich in Omega 3/6 for the health of the skin and hair.', '$$', 'https://www.amazon.co.uk/Monge-01537130-Adult-Medium-12-kg/dp/B01FW4MNYE'),
(16, 'B01EOFRVWQ', 'monge', 'Monge Dog Puppy and Junior Maxi 12 kg', 'https://images-na.ssl-images-amazon.com/images/I/61QWnHpju0L._AC_SL1000_.jpg', 'dog', '0.2', '3', '32', '80', 'no', 'no', 'Ensure the welfare of the dog thanks to the presence of nutrients of the highest quality, the result of research made in Italy.', '$$$', 'https://www.amazon.co.uk/Monge-Dog-Puppy-Junior-Maxi/dp/B01EOFRVWQ'),
(17, 'B008MKI7KU', 'Purina ONE', 'Purina ONE SmartBlend Natural Adult Dry Dog Food', 'https://images-na.ssl-images-amazon.com/images/I/81Nmw2PDN9L._AC_SL1500_.jpg', 'dog', '1', '20', '1.3', '45', 'chicken', 'no', 'Real Chicken Is The #1 Ingredient. Calorie Content (fed): 3993 kcal/kg, 383 kcal/cup. Dual Defense Antioxidant Blend To Help Support A Strong Immune System. Natural Sources Of Glucosamine Help To Support Healthy Joints\nProtein Rich, Tender, Meaty Morsels ', '$$', 'https://amzn.to/3ekh9jU'),
(18, 'B01EY9KPZM', 'Purina Pro', 'Purina Pro Plan Sensitive Skin & Stomach, High Protein Adult Dry Dog Food & Wet Dog Food', 'https://images-na.ssl-images-amazon.com/images/I/81WdVCywd-L._AC_SL1500_.jpg', 'dog', '1', '20', '1', '100', 'Salmon', 'Sensitive Skin & Stomach', 'FOCUS Sensitive Skin & Stomach Salmon & Rice Formula has a new look and product name coming soon. May receive either bag during the transition\nNo corn, wheat or soy. No artificial colors or flavors. No poultry by-product meal', '$$$', 'https://amzn.to/3kRwmvg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`detailid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `detailid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
