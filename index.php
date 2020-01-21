<html><head>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head><body>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<div class="container">
<br>  <p class="text-center">Basic App being more complex </p>
<hr>

<div class="row">
	<aside class="col-sm-4">
<p>POD DETAILS</p>


<div class="card">
	<article class="card-group-item">
		<header class="card-header">
			<h6 class="title">Pod details </h6>
		</header>
		<div class="filter-content">

        <div class="list-group list-group-flush">
			  <p  class="list-group-item">Pod Name : <span class="float-right badge badge-light round"><?php echo $_ENV['HOSTNAME']; ?></span> </p>
			  <a href="#" class="list-group-item">Dapibus ac facilisis  <span class="float-right badge badge-light round">3</span>  </a>
			  <a href="#" class="list-group-item">Morbi leo risus <span class="float-right badge badge-light round">32</span>  </a>
			  <a href="#" class="list-group-item">Another item <span class="float-right badge badge-light round">12</span>  </a>
			</div>  <!-- list-group .// -->


			<div class="card-body">
			<form>
				<label class="form-check">
				  <input class="form-check-input" type="checkbox" value="">
				  <span class="form-check-label">

				  </span>
				</label> <!-- form-check.// -->
				<label class="form-check">
				  <input class="form-check-input" type="checkbox" value="">
				  <span class="form-check-label">
				    PHP Version : <?php echo $_ENV['PHP_VER_SHORT']; ?>
				  </span>
				</label>  <!-- form-check.// -->
				<label class="form-check">
				  <input class="form-check-input" type="checkbox" value="">
				  <span class="form-check-label">
				    GIT COMMIT : <?php echo $_ENV['OPENSHIFT_BUILD_COMMIT']; ?>
				  </span>
				</label>  <!-- form-check.// -->
			</form>

			</div> <!-- card-body.// -->
		</div>
	</article> <!-- card-group-item.// -->

	<article class="card-group-item">
		<header class="card-header">
			<h6 class="title">Choose type </h6>
		</header>
		<div class="filter-content">
			<div class="card-body">
			<label class="form-check">
			  <input class="form-check-input" type="radio" name="exampleRadio" value="">
			  <span class="form-check-label">
			    First hand items
			  </span>
			</label>
			<label class="form-check">
			  <input class="form-check-input" type="radio" name="exampleRadio" value="">
			  <span class="form-check-label">
			    Brand new items
			  </span>
			</label>
			<label class="form-check">
			  <input class="form-check-input" type="radio" name="exampleRadio" value="">
			  <span class="form-check-label">
			    Some other option
			  </span>
			</label>
			</div> <!-- card-body.// -->
		</div>
	</article> <!-- card-group-item.// -->
</div> <!-- card.// -->




	</aside> <!-- col.// -->
	<aside class="col-sm-4">
<p>Filter 2</p>


<div class="card">
	<article class="card-group-item">
		<header class="card-header"><h6 class="title">Similar category </h6></header>
		<div class="filter-content">
			<div class="list-group list-group-flush">
			  <a href="#" class="list-group-item">Cras justo odio <span class="float-right badge badge-light round">142</span> </a>
			  <a href="#" class="list-group-item">Dapibus ac facilisis  <span class="float-right badge badge-light round">3</span>  </a>
			  <a href="#" class="list-group-item">Morbi leo risus <span class="float-right badge badge-light round">32</span>  </a>
			  <a href="#" class="list-group-item">Another item <span class="float-right badge badge-light round">12</span>  </a>
			</div>  <!-- list-group .// -->
		</div>
	</article> <!-- card-group-item.// -->
	<article class="card-group-item">
		<header class="card-header"><h6 class="title">Color check</h6></header>
		<div class="filter-content">
			<div class="card-body">
				<label class="btn btn-danger">
				  <input class="" type="checkbox" name="myradio" value="">
				  <span class="form-check-label">Red</span>
				</label>
				<label class="btn btn-success">
				  <input class="" type="checkbox" name="myradio" value="">
				  <span class="form-check-label">Green</span>
				</label>
				<label class="btn btn-primary">
				  <input class="" type="checkbox" name="myradio" value="">
				  <span class="form-check-label">Blue</span>
				</label>
			</div> <!-- card-body.// -->
		</div>
	</article> <!-- card-group-item.// -->
</div> <!-- card.// -->



	</aside> <!-- col.// -->
<aside class="col-sm-4">
<p>NETWORK DETAILS</p>



<div class="card">
	<article class="card-group-item">
		<header class="card-header">
			<h6 class="title">Range input </h6>
		</header>
		<div class="filter-content">
            <p  class="list-group-item">BASIC_APP_SERVICE_HOST : <span class="float-right badge badge-light round"><?php echo $_ENV['BASIC_APP_SERVICE_HOST']; ?></span> </p>
		</div>
	</article> <!-- card-group-item.// -->

</div> <!-- card.// -->

</aside> <!-- col.// -->
</div> <!-- row.// -->




<div class="row">

<aside class="col-sm-6">
<p>Database connectivity</p>



<div class="card">
	<article class="card-group-item">
		<header class="card-header">
			<h6 class="title">Database connectivity</h6>
		</header>
		<div class="filter-content">
            <p  class="list-group-item">BASIC_APP_SERVICE_HOST : <span class="float-right badge badge-light round"><?php echo $_ENV['BASIC_APP_SERVICE_HOST']; ?></span> </p>
		</div>
	</article> <!-- card-group-item.// -->

</div> <!-- card.// -->

</aside> <!-- col.// -->


<aside class="col-sm-6">
<p></p>


<div class="card">
	<article class="card-group-item">
		<header class="card-header">
			<h6 class="title">Persistent volume</h6>
		</header>
		<div class="filter-content">
            <p  class="list-group-item">BASIC_APP_SERVICE_HOST : <span class="float-right badge badge-light round"><?php echo $_ENV['BASIC_APP_SERVICE_HOST']; ?></span> </p>
		</div>
	</article> <!-- card-group-item.// -->

</div> <!-- card.// -->

</aside> <!-- col.// -->







</div>
<!--container end.//-->

<br><br>
<article class="bg-secondary mb-3">
<div class="card-body text-center">
    <h4 class="text-white">HTML UI KIT <br> Ready to use Bootstrap 4 components and templates </h4>
<p class="h5 text-white"> for Ecommerce, marketplace, booking websites
and product landing pages</p>   <br>
<p><a class="btn btn-warning" target="_blank" href="http://bootstrap-ecommerce.com/"> Bootstrap-ecommerce.com
 <i class="fa fa-window-restore "></i></a></p>
</div>
<br><br>
</article>

</body></html>