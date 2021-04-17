
<?php

	//include('login.php');
	session_start();
?>

	
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Water Management system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="./Assets/style.css">
</head>

<body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">


			<?php
	
				if($_SESSION['loggedin']){
					
						echo '<ul class="navbar-nav me-auto mb-2 mb-lg-0">';

							echo '<li class="nav-item">';

							echo '<a class="nav-link active" aria-current="page" href="products.html">Products</a>';

							echo '</li>';

							echo '<li class="nav-item">';

							echo '<a class="nav-link active" href="contacts.html">Contacts</a>';

							echo '</li>';

							echo '<li class="nav-item">';

							echo '<a class=" nav-link active">'. "Hello". ' </a>';
						
							echo '</li>';

							echo '<li class="nav-item">';
					
							echo '<a class="nav-link active" href="logout.php">logout?</a>';
						
							echo '</li>';

						echo '</ul>';
				} 

				?>

            </div>
        </div>
    </nav>

    <!-- Carousel Items/ Animated down of navbar -->

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" id="myCarousel">
            <div class="carousel-item active">
                <img src="./media/image1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./media/image2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./media/image3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>

</html>