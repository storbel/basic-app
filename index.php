<?php
// Load Config
$config = parse_ini_file('config.ini');

// Declare Variables
$dbSuccess = false;
$dbVersion = false;

// Connect to SQL Server
$conn = @new mysqli($config['hostname'], $config['username'], $config['password'], $config['dbname']);

if ($conn->connect_errno) {
}
else {
    $dbSuccess = true;
}
$sql = "SELECT version FROM dbversion ORDER BY id DESC LIMIT 1;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $dbVersion = $row['version'];
    }
}


// Close Connection
$conn->close();


function ping($host,$port=3306,$timeout=10)
{
        $fsock = fsockopen($host, $port, $errno, $errstr, $timeout);
        if ( ! $fsock )
        {
                return FALSE;
        }
        else
        {
                return TRUE;
        }
}

$database_up = ping($config['hostname']);


$background_colors = array('#e6ffe6', '#b3ccff', '#ffccff', '#fff5cc', '#ffe6e6');

$rand_background = $background_colors[array_rand($background_colors)];
?>

<html><head>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head><body>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<div class="container">
<br>  <p class="text-center" >Basic App being more complex </p>
<hr>
<div class="row" ><h1><?php echo $_ENV['HOSTNAME']; ?></h1></div>
<div class="row">
	<aside class="col-sm-4">


<div class="card">
	<article class="card-group-item">
		<header class="card-header">
			<h6 class="title">Pod detailsx </h6>
		</header>
		<div class="filter-content">

            <div class="list-group list-group-flush">
			  <p  class="list-group-item">Pod Name : <span class="float-right label label-primary"><?php echo $_ENV['HOSTNAME']; ?></span> </p>
              <p  class="list-group-item">PHP Version : <span class="float-right label label-primary"><?php echo $_ENV['PHP_VER_SHORT']; ?></span> </p>
              <p  class="list-group-item"> GIT COMMIT :  <span class="float-right label label-primary"><?php echo $_ENV['OPENSHIFT_BUILD_COMMIT']; ?> </p>
              <p  class="list-group-item"> HTTPD DATA_PATH :  <span class="float-right label label-primary"><?php echo $_ENV['HTTPD_DATA_PATH']; ?> </p>





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
            <p  class="list-group-item">Color : <span class="float-right badge badge-info round"><?php echo $_ENV['color']; ?></span> </p>
            <p  class="list-group-item">Fruit : <span class="float-right badge badge-info round"><?php echo $_ENV['fruit']; ?></span> </p>
            <p  class="list-group-item">Car : <span class="float-right badge badge-info round"><?php echo $_ENV['car']; ?></span> </p>
			</div>  <!-- list-group .// -->
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
            <p  class="list-group-item">ADVANCED_APP_SERVICE_HOST : <span class="float-right badge badge-light round"><?php echo $_ENV['ADVANCED_APP_SERVICE_HOST']; ?></span> </p>
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



            <p  class="list-group-item">Database reacheable :
            <?php
                if ($database_up) {echo '<span class="float-right label label-success">Success';}
                        else {echo '<span class="float-right label label-danger">Failure -> '.$config['hostname'];}
                 ?>
                </span> </p>


                <p  class="list-group-item">Connected to database :
                <?php
                if ($dbSuccess) {echo '<span class="float-right label label-success ">Success';}
                        else {echo '<span class="float-right label label-danger ">Failure';}
                 ?>

                </span> </p>

                <p  class="list-group-item">Database Scripts Version:
                <?php
                        if ($dbVersion) {echo '<span class=" float-right label label-info ">'. $dbVersion;}
                        else {echo '<span class=" float-right label label-danger ">Failed to load version data';}
                        ?>

                </span> </p>
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
            <p  class="list-group-item">volume files exist : <?php
                        if (is_dir('/var/www/data')) {echo '<span class=" float-right label label-success round"> volume mounted';}
                        else {echo '<span class=" float-right label label-danger round">No volume mounted';}
                        ?></span> </p>
            </div>
	</article> <!-- card-group-item.// -->

    <article class="card-group-item">
		<header class="card-header">
			<h6 class="title">File listing : </h6>
		</header>
		<div class="filter-content">
            <p class="list-group-item">
            <?php
                            $dir = "/var/www/data";


                            // Sort in descending order
                            $folder= scandir($dir,1);
                            echo '
                            <div class="alert alert-info" role="alert">
                              File listing of /var/www/data
                            </div>';
                                       echo '<table class="table">
                                                <thead class="thead-light">
                                                     <tr><th>File name</th></tr>
                                                 </thead>';
                                            foreach ($folder as &$file) {
                                                echo "<tr><td>".$file."</td></tr>";
                                            }
                                            echo "</table>";
                ?>
            </p>
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
