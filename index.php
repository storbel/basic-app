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


<div class="card">
	<article class="card-group-item">
		<header class="card-header">
			<h6 class="title">Pod details </h6>
		</header>
		<div class="filter-content">

            <div class="list-group list-group-flush">
			  <p  class="list-group-item">Pod Name : <span class="float-right badge badge-light round"><?php echo $_ENV['HOSTNAME']; ?></span> </p>
              <p  class="list-group-item">PHP Version : <span class="float-right badge badge-light round"><?php echo $_ENV['PHP_VER_SHORT']; ?></span> </p>
              <p  class="list-group-item"> GIT COMMIT :  <span class="float-right badge badge-light round"><?php echo $_ENV['OPENSHIFT_BUILD_COMMIT']; ?> </p>
			</div>  <!-- list-group .// -->



		</div>
	</article> <!-- card-group-item.// -->

</div> <!-- card.// -->




	</aside> <!-- col.// -->
	<aside class="col-sm-4">


<div class="card">
	<article class="card-group-item">
		<header class="card-header"><h6 class="title">Environment variable</h6></header>
		<div class="filter-content">
			<div class="list-group list-group-flush">
            <p  class="list-group-item">Pod Name : <span class="float-right badge badge-light round"><?php echo $_ENV['HOSTNAME']; ?></span> </p>
            <p  class="list-group-item">Pod Name : <span class="float-right badge badge-light round"><?php echo $_ENV['HOSTNAME']; ?></span> </p>
            <p  class="list-group-item">Pod Name : <span class="float-right badge badge-light round"><?php echo $_ENV['HOSTNAME']; ?></span> </p>
            <p  class="list-group-item">Pod Name : <span class="float-right badge badge-light round"><?php echo $_ENV['HOSTNAME']; ?></span> </p>
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

<div class="card">
	<article class="card-group-item">
		<header class="card-header">
			<h6 class="title">NETWORK DETAILS </h6>
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
            <p  class="list-group-item">volume files exist : <span class="float-right badge badge-light round"><?php echo is_dir('/files'); ?></span> </p>
		</div>
	</article> <!-- card-group-item.// -->

</div> <!-- card.// -->

</aside> <!-- col.// -->

</div>
<!--container end.//-->

<br><br>
<article class="bg-secondary mb-3">
<div class="card-body text-center">
    <h4 class="text-white"><br> Basic application for Openshift deployment training purposes </h4>
  <br>

</div>
<br><br>
</article>

</body></html>