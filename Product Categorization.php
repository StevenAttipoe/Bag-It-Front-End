<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<title>Product Categorization Module</title>
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

<h3 text-center class="py-3 text-center">Product Categorization</h1>
   <table class="table">
     <thead>
            
            <th>Product Name</th>
            <th>Category Name</th>
            <th>Category Id</th>
     </thead>
     <tbody>

        <?php   
        $sql = "SELECT Products.product_name,Category.category_name, Category.category_id
        FROM Products
        INNER JOIN Category ON Products.product_id = Category.product_id
        GROUP BY product_name;";
       $result = $conn->query($sql);
        ?>
        <?php
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            ?>
            <tr>
            <td data-label="Product Name"><?php echo $row['product_name'] ?></td>
            <td data-label="Category Name"><?php echo $row['category_name'] ?></td>
            <td data-label="Category Id"> <?php echo $row['category_id']?> </td> 
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


