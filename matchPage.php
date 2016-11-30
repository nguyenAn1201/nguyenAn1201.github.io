<!DOCTYPE html>
<html>
	<head>
		<title>Stat</title>
		<script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script><!-- Tether for Bootstrap --> 

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="matchStat.js"></script>
		<script>
			var dismatchId = '<?php echo $_GET["matchId"]?>';
		</script>
	</head>
	<body style="background-color: #141414">
	
	<div class="container" style="width: 80%; margin-top: 50px;">
		<div class="row">
			<div class="col-md-6">
				<h2 id="matchId" style="color: #EBEBEB">Match </h2><br/>
				<h4 style="margin-top: -25px; color: #EBEBEB"><i>Overview</i></h4>
			</div>
			<div class="col-md-6">
				<table class="table table-inverse small">
					<thead>
						<th class="text-xs-center">Mode</th><th class="text-xs-center">Duration</th><th class="text-xs-center">Skill</th></tr>
					</thead>
					<tbody>
						<tr><td class="text-xs-center">All Pick</td><td class="text-xs-center" id="duration"></td><td class="text-xs-center" id="skill"></td></tr>
					</tbody>
				</table>
			</div>	
		</div>
		<div class="victory">
		</div>
		<!-- Team tables -->
		<div class="team-container" style="margin-top: 50px">
			<div class="Radiant" >
				<h3 style="color: #00FF00"><small> Team Radiant </small></h3>
				
			</div>

			<div class="Dire" >
				<h3 style="color: #EE4000"><small> Team Dire </small></h3>
				
			</div>
		</div>

		<!-- Chart -->
		<!--
		<table class="columns">
      	
        	<td><div id="columnchart_div"></div></td>
        	<td><div id="columnchart_div2"></div></td>

    	</table>
    	-->		
    	<table class="columns">
      		<tr>
        		<td><div id="columnchart_div" style="border: 1px solid #ccc"></div></td>
        	</tr>
        	<tr>
        		<td><div id="columnchart_div2" style="border: 1px solid #ccc"></div></td>
      		</tr>
      	</table>
      	<table>
      		<tr>
        		<td><div id="piechart1" style="border: 1px solid #ccc"></div></td>
        		<td><div id="piechart2" style="border: 1px solid #ccc"></div></td>
        		
      		</tr>
      	</table>
      	<table>
      		<tr>
      			<td>
      				<div id="piechart3" style="border: 1px solid #ccc"></div>
      			</td>
      		</tr>
    	</table>
	</div> <!--container-->

		

	</body>
</html>