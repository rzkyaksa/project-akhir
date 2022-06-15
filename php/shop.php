<?php
include("config.php");
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1332359d5c.js" crossorigin="anonymous"></script>
    <link href="style1.css" rel="stylesheet">


    <title>dibuangsayang!</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">
      dibuangsayang
      <img src="logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">  
    </a>

    <div class ="container">  
	  

	    <form class="form-inline ml-3 mr-20">
	      <div class="search-box">
        <input type="text" placeholder="search">
        <a class="nav-btn-container" href="#">
					<img class="Search-btn" src="Search.svg" alt="logo" />
                        </a>
    		</div>
	    </form>

	    <div class="icon mt-2">
	    	<h5>
	    	<i class="fa-solid fa-bag-shopping ml-3 mr-3" data-toggle="tooltip" title="Keranjang Belanja"></i>
	    	<i class="fa-solid fa-user mr-3" data-toggle="tooltip" title="Profile"></i>
	    	<i class="fa-solid fa-circle-chevron-up mr-3"></i>	
	    	</h5>
	    </div>

	  </div>
	 </div>
	</nav>

	<div class="row mt-5 no-gutters">
		<div class="col-md-2 bg-light">
			<ul class="list-group list-group-flush p-2 pt-4">
			  <li class="list-group-item">
				<a href="#" class="btn-light" >Accessories</a>
			  </li>
			  <li class="list-group-item">
			  <a href="#" class="btn-light" >Baby clothes</a>
				</li>
			  <li class="list-group-item">
				<a href="#" class="btn-light" >Clothes</a>
				</li>
			  <li class="list-group-item">
				<a href="#" class="btn-light" >Furniture</a>
			  </li>
			  <li class="list-group-item">
				<a href="#" class="btn-light">Shoe</a>
			  </li>
			</ul>
		</div>
		<div class="col-md-10">
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="slide1.jpg" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="slide2.jpg" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="slide3.jpg" class="d-block w-100" alt="...">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>

				<h4 class="text-center m-4">PRODUK TERATAS</h4>

				<div class="row mx-auto">
					<div class="card mr-2 ml-2" style="width: 17rem;">
					  <img src="jacket.jpg" class="card-img-top" alt="...">
					  <div class="card-body bg-light">
					    <h5 class="card-title">Jacket Jelek</h5>
					    <p class="card-text">Rp.12.000,00</p>
					    <a href="#" class="btn btn-success mx-auto" data-target="#produk1" data-toggle="modal">Make an Offer!</a>
					    <a href="#" class="btn btn-primary">Buy</a>
					  </div>
					</div>

					<div class="card mr-2 ml-2" style="width: 17rem;">
					  <img src="kamera.jpg" class="card-img-top" alt="...">
					  <div class="card-body bg-light">
					    <h5 class="card-title">Kamera Jelek</h5>
					    <p class="card-text">Rp.1.000,00</p>
					    <a href="#" class="btn btn-success mx-auto" data-target="#produk1" data-toggle="modal">Make an Offer!</a>
					    <a href="#" class="btn btn-primary">Buy</a>
					  </div>
					</div>

					<div class="card mr-2 ml-2" style="width: 17rem;">
					  <img src="laptop.jpg" class="card-img-top" alt="...">
					  <div class="card-body bg-light">
					    <h5 class="card-title">Laptop Rusak</h5>
					    <p class="card-text">Rp.3.000,00</p>
					    <a href="#" class="btn btn-success mx-auto" data-target="#produk1" data-toggle="modal">Make an Offer!</a>
					    <a href="#" class="btn btn-primary">Buy</a>
					  </div>
					</div>

					<div class="card mr-2 ml-2" style="width: 17rem;">
					  <img src="speaker.jpg" class="card-img-top" alt="...">
					  <div class="card-body bg-light">
					    <h5 class="card-title">Speaker Jelek</h5>
					    <p class="card-text">Rp.14.000,00</p>
					    <a href="#" class="btn btn-success mx-auto" data-target="#produk1" data-toggle="modal">Make an Offer!</a>
					    <a href="#" class="btn btn-primary">Buy</a>
					  </div>
					</div>
				</div>

				<div class="row mx-auto mt-5">
					<div class="card mr-2 ml-2" style="width: 17rem;">
					  <img src="jacket.jpg" class="card-img-top" alt="...">
					  <div class="card-body bg-light">
					    <h5 class="card-title">Jacket Jelek</h5>
					    <p class="card-text">Rp.12.000,00</p>
					    <a href="#" class="btn btn-success mx-auto" data-target="#produk1" data-toggle="modal">Make an Offer!</a>
					    <a href="#" class="btn btn-primary">Buy</a>
					  </div>
					</div>

					<div class="card mr-2 ml-2" style="width: 17rem;">
					  <img src="kamera.jpg" class="card-img-top" alt="...">
					  <div class="card-body bg-light">
					    <h5 class="card-title">Kamera Jelek</h5>
					    <p class="card-text">Rp.1.000,00</p>
					    <a href="#" class="btn btn-success mx-auto" data-target="#produk1" data-toggle="modal">Make an Offer!</a>
					    <a href="#" class="btn btn-primary">Buy</a>
					  </div>
					</div>

					<div class="card mr-2 ml-2" style="width: 17rem;">
					  <img src="laptop.jpg" class="card-img-top" alt="...">
					  <div class="card-body bg-light">
					    <h5 class="card-title">Laptop Rusak</h5>
					    <p class="card-text">Rp.3.000,00</p>
					    <a href="#" class="btn btn-success mx-auto" data-target="#produk1" data-toggle="modal">Make an Offer!</a>
					    <a href="#" class="btn btn-primary">Buy</a>
					  </div>
					</div>

					<div class="card mr-2 ml-2" style="width: 17rem;">
					  <img src="speaker.jpg" class="card-img-top" alt="...">
					  <div class="card-body bg-light">
					    <h5 class="card-title">Speaker Jelek</h5>
					    <p class="card-text">Rp.14.000,00</p>
					    <a href="#" class="btn btn-success mx-auto" data-target="#produk1" data-toggle="modal">Make an Offer!</a>
					    <a href="#" class="btn btn-primary">Buy</a>
					  </div>
					</div>
				</div>

				<div class="modal fade" id="produk1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Make an Offer!</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form>
								  <div class="row">
								    <div class="col">
								      <input type="text" class="form-controll" placeholder="Make an Offer!">
								    </div>
								  </div>
								</form>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Save changes</button>
				      </div>
				    </div>
				  </div>
				</div>


		</div>
	</div>

	<div class="copyright text-center text-white font-weight-bold bg-dark p-2 mt-3">
		<p>Developed by dibuangsayang Copyright <i class="far fa-copyright"></i>
			2022	
		</p>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
