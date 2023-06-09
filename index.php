<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Pizza Form</title>
</head>
<body >
<nav>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="view.php">View</a></li>
  </ul>
</nav>
<h1>  ORDER FORM </h1><h3>("Enter all the details properly for better taste")</h3>

    <form action="" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" required><br><br>

    <label for="pizza_size">Pizza Size:</label>
    <select id="pizza_size" name="pizza_size" required>
      <option value="small">Small</option>
      <option value="medium">Medium</option>
      <option value="large">Large</option>
    </select>
    <br>
    <br>

    <label for="toppings" required>Toppings</label><br>
    <input type="checkbox" id="Bacon" name="toppings[]" value="bacon">
    <label for="pepperoni">Bacon</label><br>
    <input type="checkbox" id="Pickle" name="toppings[]" value="pickle">
    <label for="mushrooms">Pickle</label><br>
    <input type="checkbox" id="Onions" name="toppings[]" value="onions">
    <label for="mushrooms">Onions</label><br>
    <input type="checkbox" id="Tomato" name="toppings[]" value="tomato">
    <label for="pepperoni">Tomato</label><br>
    <input type="checkbox" id="Jalapenos" name="toppings[]" value="jalapenos">
    <label for="mushrooms">Jalapenos</label><br>
    <input type="checkbox" id="Peppers" name="toppings[]" value="peppers">
    <label for="onions">Peppers</label><br>
    <br>
    <br>
    
    <h3>All pizza cames with creamy garlic base and with cheese.<h3>
    <label for="delivery_address">Delivery Address:</label><br>
    <textarea id="delivery_address" name="delivery_address" required></textarea><br><br>

    <input type="submit" value="Place Order">
  </form>

  <?php
  require_once("database.php");
  // Process the form submission
  if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['pizza_size']) && isset($_POST['toppings']) && isset($_POST['delivery_address'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $pizza_size = $_POST['pizza_size'];
    $toppings = $_POST['toppings'];
    $delivery_address = $_POST['delivery_address'];

    $database = new Database();

    // Create a new pizza order
    if($database->create($name, $phone, $pizza_size, $toppings, $delivery_address)){
        echo "Order placed successfully!";
    } else {
        echo "Failed to place the order.";
    }
    }
  ?>
</body>
</html>
