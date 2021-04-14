SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dominion`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `products` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Multi-grain Gluten Free', 'Cake Flour', 800.00, 'dmnImages/cakeFlour.jpg', '2020-03-28 11:08:57'), -- NOW()
(2, 'Lacta Sure', 'Baking Flour', 450.00, 'dmnImages/lactaFlour.png', '2020-03-28 11:08:57'),
(3, 'Multi-grain Gluten Free', 'Baking Flour', 800.00, 'dmnImages/bakingFlour.jpg', '2020-03-28 11:08:57'),
(4, 'Unga Afya', 'Premium Whole Meal', 600.00, 'dmnImages/ungaAfyaFlour.jpg', '2020-03-28 11:08:57'),
(5, 'Lacta Sure', 'Porridge Flour', 850.00, 'dmnImages/lactaPrdgFlour.jpg', now()),
(6, 'Senior Support', 'Ugali Flour', 1000.00, 'dmnImages/porrigdeFlour.png', '2020-03-28 11:08:57'),
(7, 'Nuts Fruits', 'Nuts', 350.00, 'dmnImages/nutsfruit.jpeg', '2020-03-28 11:08:57'),
(8, 'Infant Care', 'Porridge Flour', 700.00, 'dmnImages/infantFlour.png', now()),
(9, 'Multi-grain Gluten Free', 'Self Raising Flour', 800.00, 'dmnImages/selfraisingFlour.jpg', '2020-03-28 11:08:57'),
(10, 'DiabetiX Care', 'Ugali Flour', 1200.00, 'dmnImages/diabetixFlour.jpg', '2020-03-28 11:08:57'),
(11, 'DiabetiX Care', 'Porridge Flour', 1200.00, 'dmnImages/diabetixFlour.jpg', now()),
(12, 'Unga Afya', 'Premium Mixed Grain', 600.00, 'dmnImages/ungaAfya.jpg', now()),
(13, 'Senior Support', 'Porridge Flour', 1100.00, 'dmnImages/porrigdeFlour.png', now()),
(14, 'Peanut Butter', 'Nuts', 300.00, 'dmnImages/IMG_20201114_121021.jpg', now()),
(15, 'Bread', 'Wheat', 120.00, 'dmnImages/bread.jpg', now()),
(16, 'Cookies', 'Wheat', 200.00, 'dmnImages/cookies.jpgg', now()),
(17, 'Oats', 'Mixed Grain', 400.00, 'dmnImages/oats.jpg', '2020-03-28 11:08:57'),
(18, 'Wheat', 'Wheat', 320.00, 'dmnImages/wheat.jpeg', '2020-08-28 11:08:57'),
(19, 'Peanuts', 'Nuts', 320.00, 'dmnImages/peanuts.jpg', '2020-08-28 11:08:57');







-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Lesley', 'Wanjiku', '2020-03-19 13:07:17'),
(2, 'Jeremy', 'Ndirangu', '2019-04-21 23:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `products`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



-- Table structure for table `productSpecific`
--

CREATE TABLE `latestBlog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(100) NOT NULL,
  `blog_image` varchar(100) NOT NULL,
  `blog_about` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productSpecific`
--

INSERT INTO `latestBlog` (`blog_id`, `blog_title`,`blog_about`, `blog_image`, `register_date`) VALUES
(1, 'Nuts in Fruits', 'The nutrition profile of the nuts makes them ideal to munch as a snack or include in daily food in this case, fruits. They are high in good fats, low in carbs, and are rich in vitamins, anti-oxidants, and important minerals. That being said, nuts are perfect for those who are on a low-carb diet.',  'dmnImages/nutsfruit.jpeg',now()),
(2, 'Nuts alone', ' Nuts are the powerhouses of antioxidants. Anti-oxidants are best at combating oxidative stress in your body. Anti-oxidants neutralize the oxidative radicals responsible for causing cell damage and increasing the risk of several diseases.Although nuts are high in calories, they include good fats that can increase metabolism and help you lose weight.',  'dmnImages/peanuts.jpg',now()),
(3, 'Nuts in Pastry', '  All nuts contain a good amount of fiber. Fiber is effective for lowering cholesterol. It also makes you feel full so that you tend to overeat when you consume nuts daily.Good fats in the nuts help to strengthen the arterial walls in the heart. Vitamin E in nuts prevents the development of plaque in the arteries, thus reducing the risk of stroke and other coronary heart diseases.',  'dmnImages/nutsPastry',now()),

-- Indexes for table `productSpecific`
--
ALTER TABLE `latestBlog`
  ADD PRIMARY KEY (`blog_id`);

--
-- AUTO_INCREMENT for dumped tables

ALTER TABLE `latestBlog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
COMMIT;