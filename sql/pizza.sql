/*
    The SQL code creates a table named 'pizza_orders' with columns for storing pizza order details.
*/

CREATE TABLE pizza_orders (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  pizza_size VARCHAR(10) NOT NULL,
  toppings VARCHAR(255) NOT NULL,
  delivery_address TEXT NOT NULL
);
/*It then inserts sample data into the table.*/
INSERT INTO pizza_orders (name, phone, pizza_size, toppings, delivery_address)
VALUES
  ('Kunj', '435-345-7865', 'medium', 'bacon,picle', '56 wertg drive'),
  ('Yash', '708-607-6879', 'large', 'tomato,onions', '74 toronto st'),
  ('Nilay', '456-789-4567', 'small', 'pickle,peppers', '146 pring ave.');
