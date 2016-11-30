<!DOCTYPE html>
<html>
	<head>
		<title>Dota 2 </title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="custom.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <script src="getMatch.js"></script>

		
  
	</head>
	<body>
		<nav class="navbar navbar-dark bg-inverse">
			<a class="navbar-brand" href="#">DOTA 2 </a>
			<ul class="nav navbar-nav">
				<li class="nav-item active"><a class="nav-link" href="http://localhost/Doto2ez/frontPage.php"> Home <span class="sr-only">(current)</span></a></li>
				<li class ="nav-item"><a class ="nav-link" href="http://localhost/Doto2ez/About.php">About</a></li>
				<li class ="nav-item"><a class ="nav-link" href="http://localhost/Doto2ez/PatchNotes.php">Patch Notes</a></li>
			</ul>
		</nav>

		<div class="container" id="search" style="width: 40%; margin-top: 5%">
    					<form id="myForm">
	    						<div class="input-group">
	    							<input id="search-bar" type="search" class="form-control" placeholder="Enter 9-digit SteamID">
	    							
	    						</div>
    					</form>
    		<div class="playerProfile">
			
			</div>
		</div>

		<!--Div to be appended by getMatch.js -->
			
		<div class="container" id="result" style="width: 40%"">
		</div>
		
	</body>
</html>