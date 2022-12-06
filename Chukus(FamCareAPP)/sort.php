<!DOCTYPE html>

<html lang="en">
  <head>
  
	<!--title-->
    <title>For Mumma-Papa</title>
	<!--meta tags-->
    <meta charset="UTF-8">
    <meta name="author" content="Hardik Hajela">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!--Favicons-->
	<link href="assets/favicons/rp.png" rel="icon">
	<link href="assets/favicons/apple.jpg" rel="apple-touch-icon">
	
	<!--BootStrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	
	<!--Bootstrap Icons-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	
	<!--CSS-->
	<link rel="stylesheet" href="assets/css/style.css">

	<!--Google Fonts-->
	<link href='https://fonts.googleapis.com/css?family=EB Garamond|Trirong' rel='stylesheet'>
    
    <style>
		table, th, td {
          //border: 1px solid;
          font-size: 32px;
      	}	
      	#backb {
  			background-color: #212529;
  			color: #0d6efd;
          	padding: 8px 18px;
  			text-align: center;
          	border-radius: 8px;
		}
      	#tablediv{
          margin: auto;
		  padding: 10px;
      	}
	</style>
	
  </head>
  <body>
    <div class="container">
      	<br>
        <a href="index.html"><button href="index.html" id="backb">&laquo; Home</button></a>
      	<br><br>
        <div class="col-md-4">
           <div class="dropdown">
  			<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    			Sort by
  			</button>
  			<ul class="dropdown-menu">
    			<li><a class="dropdown-item" href="#">Sleep</a></li>
    			<li><a class="dropdown-item" href="#">Travel</a></li>
    			<li><a class="dropdown-item" href="#">Exercise</a></li>
    			<li><a class="dropdown-item" href="#">Diet</a></li>
    			<li><a class="dropdown-item" href="#">Medication</a></li>
    			<li><a class="dropdown-item" href="#">Stressful day</a></li>
  			</ul>
		  </div>
        </div>
        <br>
      	<p>
          Better
          <span style="color: #023020;">&#9632;</span>
          <span style="color: #0a5d00;">&#9632;</span>
          <span style="color: #089000;">&#9632;</span>
          <span style="color: #1fc600;">&#9632;</span>
          <span style="color: #0eff00;">&#9632;</span>
          Could've been better
        </p>
      	<br>
      	<div id="tablediv">
    		<table id="grid">
          		<?php
 				$conn = new mysqli("localhost", "hajela_chukus", "chukusroot", "hajela_chukus") or die(mysqli_error($mysqli));
  				$sql = "select score from chukus_record;";
  				$result = $conn->query($sql);
                $arr=[];
                $c=1;
  				while($row = $result->fetch_assoc()) {
    				$arr[$c++]=$row["score"];
  				}
  				$conn->close();
                  $idtemp=1;
              		for ($row01; $row < 52; $row++) { 
						echo "<tr> \n";
					for ($col=1; $col <= 7; $col++) { 
                      	$color="lightgray";
                    if($arr[$idtemp]==5){
                          $color="#d0efff";
                    }
                    if($arr[$idtemp]==4){
                          $color="#289df4";
                    }
                    if($arr[$idtemp]==3){
                          $color="#187bcd";
                    }
                    if($arr[$idtemp]==2){
                          $color="#1167b1";
                    }
                    if($arr[$idtemp]==1){
                          $color="#03254c";
                    }
                    $style='style="color:'.$color.';"';
		   			echo "<td id='".$idtemp."_' ".$style.">&#9632; &nbsp;</td> \n";
                    $idtemp++;
		   			}
	  	    		echo "</tr>";
                }
              ?>
              
        	</table>
      	</div>
    </div>
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="assets/js/ash.js"></script>
    <script src="assets/js/index.js"></script>
  </body>
</html>