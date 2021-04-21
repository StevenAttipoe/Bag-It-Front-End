<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<title>Order Tracking Module</title>
		<link rel="stylesheet" href="gallery.css">
		
	</head>
	
	<body>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="home.php">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="Order Tracking.php">Order Tracking<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Deliveries.php"> Deliveries</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Inventory Management.php">Inventory Management</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Supplier Tracking.php">Supplier Tracking</a>
                  <!-- class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Log In-->
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="Product Categorization.php">Product Categorization</a>
                </li>
              </ul>
            </div>
          </nav>
		<div class="container">
	<!--Connect to database -->
	<?php
require_once ("connection.php");
?>

<h3 text-center class="py-3 text-center">Order Tracking</h1>
   <table class="table">
     <thead>
            <th>Warehouse Id</th>
            <th>Date</th>
            <th>Time</th>
            <th>Quantity</th>
            <th> Total Price</th>
            <th> Delivery Id</th>
     </thead>
     <tbody>

        <?php   
       $sql = "SELECT orders.warehouse_id, orders.date, orders.time,details.quantity, details.total_price, details.delivery_id
       FROM   details,orders
       WHERE  orders.date IN
          (SELECT orders.date
          FROM orders
          WHERE date like '%2021%');";
       $result = mysqli_query($conn, $sql);
        ?>
        <?php
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            ?>
            <tr>
            <td data-label="Warehouse Id"><?php echo $row['warehouse_id']?></td>
            <td data-label="Date"><?php echo $row['date'] ?></td>
            <td data-label="TIme"> <?php echo $row['time']?> </td> 
            <td data-label="Quantity"><?php echo $row['quantity']?></td>
            <td data-label=" Total Price"><?php echo $row['total_price']?></td>
            <td data-label="Delivery Id"><?php echo $row['delivery_id']?></td>
     	  </tr>
         <?php
          }
        } else {
          echo "0 results";
        }
        $conn->close();
        ?>
	<!-- fetch an display result-->
	    </div>
          
	
</body>
</html>
