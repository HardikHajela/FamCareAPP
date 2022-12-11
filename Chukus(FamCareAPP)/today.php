<!DOCTYPE html>

<html lang="en">
  <head>
	<!--title-->
    	<title>Today</title>
	  
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
  </head>
  
<body>
  <div class="container-fluid overflow-hidden">
    <div class="row vh-100 overflow-auto">
        <div class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0 bg-dark d-flex sticky-top">
            <div class="d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-white">
               <!--<a href="index.html" class="d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5">&#8962;<span class="d-none d-sm-inline" id="bighome"> Home</span></span>
                </a>-->
                <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link px-sm-0 px-4">
                            <i class="fs-1 bi-house"></i><span class="ms-1 d-none d-sm-inline" id="textsizenav"> Home</span>
                        </a>
                    </li>
                    <!--<li>
                        <a href="#" data-bs-toggle="collapse" class="nav-link px-sm-0 px-2">
                            <i class="fs-5 bi-speedometer2"></i><span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                    </li>-->
                    
					<li>
                        <a href="today.php" class="nav-link px-sm-0 px-4">
                            <i class="fs-1 bi-calendar2-plus"></i><span class="ms-1 d-none d-sm-inline" id="textsizenav"> Today</span> </a>
                    </li>
                    <!--<li class="dropdown">
					<a href="#" class="nav-link dropdown-toggle px-sm-0 px-2" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fs-5 bi-bootstrap"></i><span class="ms-1 d-none d-sm-inline">Bootstrap</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdown">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </li>-->
                    <li>
                        <a href="ach.php" class="nav-link px-sm-0 px-4">
                            <i class="fs-1 bi-grid"></i><span class="ms-1 d-none d-sm-inline" id="textsizenav">Achievements</span></a>
                    </li>
					<li>
                        <a href="sort.php" class="nav-link px-sm-0 px-4">
                            <i class="fs-1 bi-binoculars-fill"></i><span class="ms-1 d-none d-sm-inline" id="textsizenav"> Sort</span></a>
                    </li>
                </ul>
                <!--<div class="dropdown py-sm-4 mt-sm-auto ms-auto ms-sm-0 flex-shrink-1">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="28" height="28" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">Joe</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>-->
            </div>
        </div>
        <div class="col d-flex flex-column h-100">
            <main class="row">
                <div class="container overflow-hidden">
		<br>
		<p id="caretext">RS Papa, Hope you had a great day! Let's ask you some Questions!</p><br>
		
		<form action="PROCESS.php" method=POST oninput='pwd.setCustomValidity(pwd.value !=  ? "Please enter the password again." : "")'>
			<p id="ptoday">Routine:</p>
			<div class="col-md-4">
				<label for="sleep" class="form-label">So Papa, how many hours of sleep did you have last night?</label>
				<input type="number" class="form-control" id="sleep" name="sleep" placeholder="8"  min="0" max="24" required>
			</div>
			<br>
			<div class="col-md-4">
				<label for="sleepnotes" class="form-label">Any Notes on that?</label>
				<input type="text" class="form-control" id="sleepnotes" name="sleepnotes" placeholder="Had a good night sleep, Better than yesterday" required>
			</div>
			<br>
          	<div class="col-md-4">
				<label for="travel" class="form-label">Papa, were you traveling today?</label><br>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="travel" id="travely" value="Y">
					<label class="form-check-label" for="travely">Yes</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="travel" id="traveln" value="N" checked>
					<label class="form-check-label" for="traveln">No</label>
				</div>
          	</div>
			<hr>
			
			<p id="ptoday">Exercise:</p>
			<div class="col-md-4">	
				<label class="form-label">How many hours/minutes of exercise did we accomplish today?
					<div class="row">
						<div class="col">
							<input type="number" class="form-control" id="exerh" name="exerh" placeholder="3" min="0" max="15" required>
							<div id="exerhhelp" class="form-text">&ensp;Hours</div>
						</div>
						<div class="col">
							<input type="number" class="form-control" id="exerm" name="exerm" placeholder="30" min="0" max="59"required>
							<div id="exermhelp" class="form-text">&ensp;Minutes</div>
						</div>
					</div>
				</label>
			</div>
			<div class="col-md-4">	
				<label for="exertype" class="form-label">What types of Exercises did you do today?</label>
				<input type="text" class="form-control" id="exertype" name="exertype" placeholder="Treadmill, Kapal Bharti" required>
			</div>
			<br>
			<hr>
			
			<p id="ptoday">Balanced Diet:</p>
			<div class="col-md-4">
				<label for="food" class="form-label">Papa, was the Khana you ate today, nutritious?</label><br>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="foodyn" id="foodyes" value="Y" checked>
					<label class="form-check-label" for="foodyes">Yes</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="foodyn" id="foodno" value="N">
					<label class="form-check-label" for="foodno">No</label>
				</div>
				<div id="foodhelp" class="form-text">Nutritious diet can mean High Protien, low fats, salts and Sugar diets with minimal Ghee consumption instead of Oil. Also, dinner before 8!</div>
			</div>
			<br>
			<div class="col-md-4">
				<label for="foodnotes" class="form-label">How about the highlights of what you had today?</label>
				<input type="text" class="form-control" id="foodnotes" name="foodnotes" placeholder="Arhar Dal, Gobhi Aloo, McDonalds Burgur" required>
			</div>
			<br>
			<hr>
			
			<p id="ptoday">Medications:</p>
			<div class="col-md-4">
				<label for="food" class="form-label">Papa, did you take all the necessary/priscribed medcications for today?</label><br>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="medyn" id="medyes" value="Y" checked>
					<label class="form-check-label" for="medyes">Yes</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="medyn" id="medno" value="N">
					<label class="form-check-label" for="medno">No</label>
				</div>
				<div id="foodhelp" class="form-text">Really looking forward to the day where you don't need Medications to live a Healthy life Papa!</div>
			</div>
			<br>
			<div class="col-md-4">
				<label for="mednotes" class="form-label">So, breifely, what Medications did you take today?</label>
				<input type="text" class="form-control" id="mednotes" name="mednotes" placeholder="Paracetamol" required>
			</div>
			<br>
			<hr>
			
			<p id="ptoday">Epilogue:</p>
			<div class="col-md-4">
				<label for="day" class="form-label">Lastly, How was your day?</label>
				<textarea type="text" class="form-control" id="day" name="day" placeholder="Spent time with Family, Worked All day, Won an Award, Good, Broke my Treadmill record today"></textarea>
				<div id="dayhelp" class="form-text">Treat this as your personel dairy, vent it all out Papa, and Smile :D</div>
			</div>
			<br>
			<div class="col-md-4">
				<label for="stress" class="form-label">Would you consider today to be a stressful day for you?</label><br>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="stressyn" id="stressyes" value="Y">
					<label class="form-check-label" for="stressyn">Yes</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="stressyn" id="stressno" value="N" checked>
					<label class="form-check-label" for="stressno">No</label>
				</div>
				<div id="foodhelp" class="form-text">Papa, I've heard honesty is the best Policy. :)</div>
			</div>
			<br>
			
			<div class="col-md-4">
			<input type="password" class="form-control" id="pwd" name="pwd" required>
			<div id="tomorrow" class="form-text">Hope you have an even Better day Tomorrow, RS!</div>
			</div>
			<br>
			
			<button class="custom-btn btn-3" type="submit" name="submit" id="submit"><span>Submit</span></button>
		</form>
		<br>
	</div>
	<br>
    <br>
    <br>
    <hr>
              
            </main>
            <!--<footer class="row bg-light py-4 mt-auto">
                <div class="col"> Bottom footer content here... </div>
            </footer>-->
        </div>
    </div>
	</div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
