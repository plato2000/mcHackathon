<!DOCTYPE html>
<!-- saved from url=(0043)http://getbootstrap.com/examples/dashboard/ -->
<html lang="en">

<head>
  <meta content="IE=11.0000" http-equiv="X-UA-Compatible">
	<script src="js/jquery-2.1.0.js"></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../../assets/ico/favicon.ico" rel="shortcut icon">
  <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map-canvas { height: 660px; width: 100%;}
	  $('.dropdown-toggle').dropdown()
    </style>
  <title>Dashboard Template for Bootstrap</title>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/dashboard.css" rel="stylesheet">
  <!-- Just for debugging purposes. Don't actually copy this line! -->
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJC6lElxXIUzG55JY73IskWiFzRdRf9LI&sensor=true"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			console.log("Reached ready");
			var map;
			function initialize() {
			  var mapOptions = {
				zoom: 7,
				center: new google.maps.LatLng(39, -76.7),
				<!--Later make the coordinates depend on where the user is-->
				mapTypeId: google.maps.MapTypeId.ROADMAP
			  };
			  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		});

	</script>
	<script src="js/script.js" type="text-javascript"></script>
  <meta name="GENERATOR" content="MShtml 11.00.9600.16476">
</head>

<body>
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Demographics</a>
	<!--<p>Made by [Group Name Here]</p>-->
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right"> <!--If user is not signed in, show the various way to sign in in a drop-down menu-->
          <li><a href="#">Dashboard</a>
          </li>
          <li><a href="#">Profile</a>
          </li>
          <li><a href="#">Help</a>
          </li>
		  <li><a href="#"><img src="#" /></a> <!--The link for this a href will be the same for the profile-->
		  </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 sidebar">
	  <!--<form class="navbar-form navbar-right">-->
		<div style="width: 400px;">
          <input class="form-control" type="text" placeholder="Search..." value="">
		  <br />
		</div>
        <!--</form>-->
        <div style = "width: 100%;">
		<div class="col-md-9" role="main">
		<div class="btn-group">
		<button type="button" class= "btn btn-default dropdown-toggle" data-toggle="dropdown">Gender <span class="caret"></span></button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><a tabindex="-1" role="menuitem" id="male"><!-- href="http://twitter.com/fat"-->Male</a></li>
				<!--<li class="divider" role="presentation"></li>-->
                <li role="presentation"><a tabindex="-1" role="menuitem" id="female"><!-- href="http://twitter.com/fat"-->Female</a></li>
                <!--<li role="presentation"><a tabindex="-1" role="menuitem"<!-- href="http://twitter.com/fat">Business</a></li>-->
              </ul>
		</div>
		</div>	 
		</div>
      </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div id="map-canvas"/>
          </div>
        </div>
        <H2 class="sub-header">Section title</H2>
        <div class="table-responsive">
          
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript
		================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->

  <script src="js/bootstrap.min.js"></script>

  <!--<script src="js/docs.min.js"></script>-->
</body>

</html>
