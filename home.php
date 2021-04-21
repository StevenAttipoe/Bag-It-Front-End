<!DOCTYPE html>
<html lang="en">
<html>
<head>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Home</title>
	<link rel="stylesheet" href="gallery.css">
	<style>
		h1{
			text-align: center;
		}
		p{
			text-align: center;
		}
		footer {
		  text-align: center;
		  padding: 3px;
		  background-color: lightgrey;
		  color: white;
}
</style>
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
                  <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> Grocery</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Order Now</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Help</a>
                  <!-- class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Log In-->
                </li>
              </ul>
            </div>
          </nav>
          <div class="container">
                <div class ="jumbotron">
                        <h1> Bag It Grocery Store</h1>  
                        <p>
                        Where Ghana shops !
                          </p>
                      </div>
                      <div class="row">
                          <!-- For back end we would just copy this once and add a for loop which would be link to a database and 
                        other back end things -->
                          <div class="col-lg-4 col-md-6 col-sm-12"><img src="https://images.unsplash.com/photo-1595079836278-25b7ad6d5ddb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" alt="..." class="img-thumbnail">
						  <a href="Product Barcode.php">Product Barcode</a> </div>
                          <div class="col-lg-4 col-md-6 col-sm-12"><img src="https://images.unsplash.com/photo-1509315703195-529879416a7d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" alt="..." class="img-thumbnail">
						  <a href="Order Tracking.php">Order Tracking</a> <br> </div>
                          <div class="col-lg-4 col-md-6 col-sm-12"><img src="https://images.unsplash.com/photo-1526367790999-0150786686a2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=751&q=80" alt="..." class="img-thumbnail">
						  <a href="Deliveries.php">Deliveries</a> <br> </div>
                          <div class="col-lg-4 col-md-6 col-sm-12"><img src="https://images.unsplash.com/photo-1616401784845-180882ba9ba8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="..." class="img-thumbnail">
						  <a href="Inventory Management.php">Inventory Management</a> <br> </div>
                          <div class="col-lg-4 col-md-6 col-sm-12"><img src="https://images.unsplash.com/photo-1593113598332-cd288d649433?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="..." class="img-thumbnail">
						  <a href="Supplier Tracking.php">Supplier Tracking</a> <br> </div>
                          <div class="col-lg-4 col-md-6 col-sm-12"><img src="https://images.unsplash.com/photo-1484480974693-6ca0a78fb36b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=752&q=80" alt="..." class="img-thumbnail">
						  <a href="Product Categorization.php">Product Categorization</a> <br> </div>
                      </div>

          </div>
          
	
</body>

<footer>
  <p>Copyright BagIt 2021</p>
  <p><a href="mailto:inqueries@bagit.com">inqueries@bagit.com</a></p>
</footer>
</html>
