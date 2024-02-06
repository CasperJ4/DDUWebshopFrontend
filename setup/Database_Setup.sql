-- Create the wdproducts table
CREATE TABLE `wsproducts` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `product_description` text COLLATE utf8_general_ci,
  `product_stock` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `product_image_url` varchar(2083) COLLATE utf8_general_ci,
  `product_price` int(11),
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


-- Create the wsusers table
CREATE TABLE `wsusers` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Data for the wsusers table
INSERT INTO `wsusers` (`user_id`, `username`, `password`, `is_admin`) VALUES
(1, 'admin', '$2y$10$3z3z3z3z3z3z3z3z3z3z)', 1),
(2, 'user', '$2y$10$3z3z3z3z3z3z3z3z3z3z)', 0);

-- Data for the wsproducts table
INSERT INTO `wsproducts` (`product_name`, `product_description`, `product_stock`, `product_image_url`, `product_price`) VALUES
('Elegant Timepiece', 'A classic wristwatch with leather strap and minimalist design. Perfect for all occasions.', 15, 'https://via.placeholder.com/400', 75),
('Wireless Headphones', 'Comfortable over-ear headphones with noise cancellation and high-fidelity sound.', 30, 'https://via.placeholder.com/300', 150),
('Espresso Machine', 'Compact espresso machine for your morning coffee rituals. Features a steam wand for frothing milk.', 5, 'https://via.placeholder.com/150', 299),
('Yoga Mat', 'Eco-friendly, non-slip yoga mat with excellent cushioning and durability for all types of yoga.', 50, 'https://via.placeholder.com/250', 45),
('Running Shoes', 'Lightweight and breathable running shoes with adaptive cushioning for long-distance comfort.', 25, 'https://via.placeholder.com/150', 120);

-- Create the wscategory table 
CREATE TABLE `wscategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `description` text COLLATE utf8_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
-- Data for the wscategory table
INSERT INTO wscategory (name, description) VALUES
('Asia', 'BLABLABLA.'),
('Middle East', 'BLABLABLA.'),
('Africa', 'BLABLABLA.'),
('South America', 'BLABLABLA.'),
('North America', 'BLABLABLA.'),
('Eastern Europe', 'BLABLABLA.'),
('Western Europe', 'BLABLABLA.'),
('Oceania', 'BLABLABLA.'),
('Antarctica', 'BLABLABLA.');
-- Add a foreign key to the wsproducts table
ALTER TABLE wsproducts
ADD COLUMN category_id INT,
ADD CONSTRAINT fk_category
FOREIGN KEY (category_id)
REFERENCES wscategory(id);




