<?php
	$conn = new mysqli("", "", "", "") or die(mysqli_error($mysqli));
	
	if (isset($_POST['submit'])){
	  $sleep = $_POST["sleep"];
      $sleepnotes = $_POST["sleepnotes"];
      $Travel = $_POST["travel"];
      $exerm = $_POST["exerm"];
      $exerh = $_POST["exerh"];
      $exertime = $exerh*60;
      $exertime = $exertime+$exerm;
      $exertype = $_POST["exertype"];
      $foodyn =	$_POST["foodyn"];
      $foodnotes = $_POST["foodnotes"];
      $medyn = $_POST["medyn"];
      $mednotes	= $_POST["mednotes"];
      $day = $_POST["day"];
      $stressyn = $_POST["stressyn"];
      
      $score =0;
      if ($sleep > 6) {
        $score++;
  	  }
      if ($exertime > 29) {
        $score++;
  	  }
      if (strpos($foodyn, "Y") == 0) {
        $score++;
  	  }
      if (strpos($medyn, "Y") == 0) {
        $score++;
  	  }
      if (strpos($stressyn, "N") == 0) {
        $score++;
  	  }
        $sql = "INSERT INTO `chukus_record` (`sleep`, `sleepnotes`, `Travel`, `exermin`, `exernotes`, `diet`, `dietnotes`, `med`, `mednotes`, `dairy`, `stress`, `score`, `date_added`) VALUES 
                ('$sleep', '$sleepnotes', '$Travel', '$exertime', '$exertype', '$foodyn', '$foodnotes', '$medyn', '$mednotes', '$day', '$stressyn', '$score', CURRENT_DATE())";
      	$conn->query($sql) or die($mysqli->error);
  	}
  	$conn->close();
?>
<html>
  <head>
  	<meta charset="UTF-8">
    <meta name="author" content="Hardik Hajela">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      .h2{margin: auto;}
    </style>  
      </head> 
  	<body>
    <h2>Success!</h2>
 	<meta http-equiv="refresh" content="3; URL=index.html" />
  </body>
</html>
    
