
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>View page</title>
</head>
<body>
<nav>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="view.php">View</a></li>
  </ul>
</nav>
<div class="row">
        <table class="table">
            <tr>
                <th>Ord No.</th>
                <th>Full Name</th>
                <th>Phone Number</th>
                <th>Pizza Size</th>
                <th>Toppings</th>
                <th>Delivery Address</th>
            </tr>
            <?php
            require_once("database.php");
            //reads the data from database
            $res = $database->read();
            while ($r = mysqli_fetch_assoc($res)) {
                ?>
                <tr>
                    <td><?php echo $r['id']; ?></td>
                    <td><?php echo $r['name']; ?></td>
                    <td><?php echo $r['phone']; ?></td>
                    <td><?php echo $r['pizza_size']; ?></td>
                    <td><?php echo $r['toppings']; ?></td>
                    <td><?php echo $r['delivery_address']; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>