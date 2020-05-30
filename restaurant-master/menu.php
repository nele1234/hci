<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>documnet</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <script>
    function cijena(){

        var izbor = document.getElementById("foodNum").value;
        var kolicina = document.getElementById("foodQuantity").value;
       
        
         if(izbor ==1){
            var cijena = 5 * kolicina;
            document.getElementById("foodPrice").value = cijena;
        } else if(izbor == 2){
            var cijena = 7.5 * kolicina;
            document.getElementById("foodPrice").value = cijena;
        } else if(izbor == 3){
            var cijena = 6 * kolicina;
            document.getElementById("foodPrice").value = cijena;
        } else if(izbor == 4){
            var cijena = 10 * kolicina;
            document.getElementById("foodPrice").value = cijena;
        } else if(izbor ==5){
            var cijena = 7 * kolicina;
            document.getElementById("foodPrice").value = cijena;
        } else if(izbor ==6){
            var cijena = 5 * kolicina;
            document.getElementById("foodPrice").value = cijena;
        } else if(izbor ==7){
            var cijena = 10 * kolicina;
            document.getElementById("foodPrice").value = cijena;
        } else if(izbor ==8){
            var cijena = 25 * kolicina;
            document.getElementById("foodPrice").value = cijena;
        } 
       
                
    }
    
    function cijena2(){

        var izbor = document.getElementById("drinkNum").value;
        var kolicina = document.getElementById("drinkQuantity").value;
       
        
         if(izbor ==1){
            var cijena = 3 * kolicina;
            document.getElementById("drinkPrice").value = cijena;
        } else if(izbor == 2){
            var cijena = 4.5 * kolicina;
            document.getElementById("drinkPrice").value = cijena;
        } else if(izbor == 3){
            var cijena = 2.5 * kolicina;
            document.getElementById("drinkPrice").value = cijena;
        } else if(izbor == 4){
            var cijena = 10 * kolicina;
            document.getElementById("drinkPrice").value = cijena;
        } else if(izbor ==5){
            var cijena = 5 * kolicina;
            document.getElementById("drinkPrice").value = cijena;
        } else if(izbor ==6){
            var cijena = 15 * kolicina;
            document.getElementById("drinkPrice").value = cijena;
        } else if(izbor ==7){
            var cijena = 10 * kolicina;
            document.getElementById("drinkPrice").value = cijena;
        } else if(izbor ==8){
            var cijena = 9.5 * kolicina;
            document.getElementById("drinkPrice").value = cijena;
        } 
       
                
    }
    </script>

     <style>
        .nav-link {
            font-size: x-large;
        }
        
        .navLinks:hover {
            color: rgb(0, 137, 197) !important;
        }
        
        .navLinks {
            color: rgb(150, 231, 255) !important;
        }
        
        .jumbotron {
            background-image: url('images/food.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
        }
        
        #logo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }
        
        #submit:hover {
            background-color: rgb(162, 110, 59) !important;
        }
        
        #submit {
            margin-top: -150px !important;
            width: 300px;
        }
    </style>

        
</head>
<!--
<body style="background-color:rgb(173, 118, 73);">

        <header style="margin-bottom:20px;">
                <img src="images/logo.jpg" alt="logo">
                <a href="index.html"><input type="button" value="Home" class="btn btn-primary" style="margin-top:-180px;"></a>
                <a href="menu.php"><input type="button" value="Menu" class="btn btn-primary" style="margin-top:-180px;"></a>
                <a href="contact.php"><input type="button" value="Contact & Place" class="btn btn-primary" style="margin-top:-180px;"></a>
                <a href="feedback.php"><input type="button" value="Feedback" class="btn btn-primary" style="margin-top:-180px;"></a>
                <a href="signup.php"><input type="button" value="Sign up for free" class="btn btn-primary" style="float:right;margin-right:30px;margin-top:3px;"></a>
        <a href="log.php"><input type="button" value="Login" class="btn btn-primary" style="float:right;margin-right:30px;margin-top:3px;"></a>
            </header>
         
        
    <img src="images/bg.jpg" alt="res" style="width:350px; height:500px;">
            <h1 style="text-align:center; margin-top:-650px;margin-bottom:100px;">MENU & RESERVATIONS</h1>
           <form>
               
            <img src="images/clock.jpg" alt="clock" style="width:200px; height:150px;margin-left:400px;">
            
            <input type="date" name="dateVisit" id="dateVisit">
            
            <input type="time" name="timeVisit" id="timeVisit">
            
            <img src="images/food.jpg" alt="HRANA" style="margin-left:400px; width:200px; height:150px;margin-top:30px;">
    
        
    <select style="position:absolute;margin-top:30px;width:175px;">
        <option></option>
        <option>HRANA 1</option>
        <option>HRANA 2</option>
        <option>HRANA 3</option>
        <option>HRANA 4</option>
        <option>HRANA 5</option>
        <option>HRANA 6</option>
        <option>HRANA 7</option>
        <option>HRANA 8</option>
    </select>
    
        
    <input type="number" placeholder="Odaberi hranu" id="foodNum" name="foodNum">
    <input type="number" placeholder="KOLICINA" id="foodQuantity" onchange="cijena()" name="foodQuantity">
    
    <input type="number" placeholder="CIJENA" readonly min="0" id="foodPrice" name="foodPrice">
    <br><br>
    <img src="images/drinks.jpeg" alt="PICE" style="width:200px; height:150px; margin-left:400px;">
    <select style="position:absolute;width:175px;">
        <option></option>
        <option>PICE 1</option>
        <option>PICE 2</option>
        <option>PICE 3</option>
        <option>PICE 4</option>
        <option>PICE 5</option>
        <option>PICE 6</option>
        <option>PICE 7</option>
        <option>PICE 8</option>
    </select>
    <input type="text" placeholder="Odaberi pice" id="drinkNum" name="drinkNum">
    <input type="number" placeholder="KOLICINA" id="drinkQuantity" onchange="cijena2();" name="drinkQuantity">
    
    <input type="number" placeholder="CIJENA" readonly id="drinkPrice" name="drinkPrice">
    <br><br>
    <img src="images/card.jpg" alt="card" style="width:350px; height:200px;margin-bottom:-220px;">
    <input type="text" placeholder="Enter your name" id="fullName" name="fullName" style="margin-left:510px;width:350px;" class="form-control">
    <input id="unesi" value="SUBMIT" name="unseri" style="margin-left:910px;color:white;border:2px solid white;" class="btn btn-outline-info btn-lg" >
    <div id="poruka" class="alert"> </div>
	<input type="text" placeholder="CARD NUMBER" name="cardNum" id="cardNum" style="margin-left:510px;width:350px;" class="form-control" >
    </form>

	<script>
		$("#poruka").slideUp();
		$("#unesi").click(function(){
			$("#poruka").removeClass('alert-success').removeClass('alert-danger');	
			var dateVisit = $("#dateVisit").val();
			var timeVisit = $("#timeVisit").val();
			var foodNum = $("#foodNum").val();
			var foodQuantity = $("#foodQuantity").val();
			var foodPrice = $("#foodPrice").val();
			var drinkNum = $("#drinkNum").val();
			var drinkQuantity = $("#drinkQuantity").val();
			var drinkPrice = $("#drinkPrice").val();
			var fullName = $("#fullName").val();

			if (dateVisit  == ""){
				$("#poruka").addClass('alert-danger');
				$("#poruka").html('<strong>Error</strong> Please enter date visit.');
				$("#poruka").slideDown(500).delay(1000).slideUp(500);
			}else if(timeVisit == ""){
				$("#poruka").addClass('alert-danger');
				$("#poruka").html('<strong>Error</strong> Please enter time visit.');
				$("#poruka").slideDown(500).delay(1000).slideUp(500);
			}else if(foodNum == ""){
				$("#poruka").addClass('alert-danger');
				$("#poruka").html('<strong>Error</strong> Please choose food.');
				$("#poruka").slideDown(500).delay(1000).slideUp(500);
			}else if(foodQuantity == ""){
				$("#poruka").addClass('alert-danger');
				$("#poruka").html('<strong>Error</strong> Please enter quantity.');
				$("#poruka").slideDown(500).delay(1000).slideUp(500);
			}else if(drinkNum == ""){
				$("#poruka").addClass('alert-danger');
				$("#poruka").html('<strong>Error</strong> Please choose drink.');
				$("#poruka").slideDown(500).delay(1000).slideUp(500);
			}else if(drinkQuantity == ""){
				$("#poruka").addClass('alert-danger');
				$("#poruka").html('<strong>Error</strong> Please enter drink Quantity.');
				$("#poruka").slideDown(500).delay(1000).slideUp(500);
			}else if(fullName == ""){
				$("#poruka").addClass('alert-danger');
				$("#poruka").html('<strong>Error</strong> Please enter your name.');
				$("#poruka").slideDown(500).delay(1000).slideUp(500);
			}else{
				$.ajax({
			
					url: "./dataMenu.php?task=serve&dateVisit="+dateVisit+"&timeVisit="+timeVisit+"&foodNum="+foodNum+"&foodQuantity="+foodQuantity+"&foodPrice="+foodPrice+"&drinkNum="+drinkNum+"&drinkQuantity="+drinkQuantity+"&drinkPrice="+drinkPrice+"&fullName="+fullName,
                    success: function (data) {
						if(data == 'SERVE'){
							$("#poruka").addClass('alert-success');
							$("#poruka").html('<strong>'+data+'</strong> Serve finished.');
							$("#poruka").slideDown(500).delay(1000).slideUp(500);
						}else{
							$("#poruka").addClass('alert-danger');
							$("#poruka").html('<strong>Error</strong>Please try again.');
							$("#poruka").slideDown(500).delay(1000).slideUp(500);
						}
                    },
                    error: function (data, err) {
							$("#poruka").addClass('alert-danger');
							$("#poruka").html('<strong>Problem occured</strong> Please try later.');
							$("#poruka").slideDown(500).delay(1000).slideUp(500);
					}
				});
			}
		});
	</script>



</body> -->
<body style="background-color:rgb(173, 118, 73);">


    <section id="section-top" class="jumbotron jumbotron-fluid text-white d-flex justify-content-center align-items-center">
        <div class="container text-center">

        </div>
    </section>


    <nav class="navbar navbar-dark navbar-expand-lg fixed-top">
        <a href="index.html" class="navbar-brand"><img src="images/logo.jpg" id="logo" alt="logo" class="img-fluid" /></a>
        <button type="button" class="navbar-toggler navbar-toggler-right " data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expended="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" style="margin-top:-100px;">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.html" class="nav-link"><span class="navLinks"><i class="fa fa-home mx-1"></i>Home</span></a>
                </li>
                <li class="nav-item">
                    <a href="menu.php" class="nav-link"><span class="navLinks"><i class="fa fa-glass mx-1"></i>Menu</span></a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link"><span class="navLinks"><i class="fa fa-address-book mx-1"></i>Contact
                            & Place</span></a>
                </li>
                <li class="nav-item">
                    <a href="feedback.php" class="nav-link"><span class="navLinks"><i class="fa fa-comments mx-1"></i>Feedback</span></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" data-toggle="modal" data-target="#modal" class="nav-link"><span class="navLinks"><i
                                class="fa fa-sign-in mx-2"></i>Register</span></a>
                </li>
                <li class="nav-item">
                    <a href="#" data-toggle="modal" data-target="#modalLog" class="nav-link"><span class="navLinks"><i
                                class="fa fa-sign-in mx-2"></i>Login</span></a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle"><img src="images/logo.jpg" width="150" height="150" alt="logo" /><label class="h2 text-primary">Create an account</label></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-xs-12">
                        <input type="text" placeholder="Fist name..." class="form-control" style="max-width:400px;" required /><br />
                    </div>
                    <div class="col-xs-12">
                        <input type="text" placeholder="Last name..." class="form-control" style="max-width:400px;" required /><br />
                    </div>
                    <div class="col-xs-12">
                        <input type="email" placeholder="you@example.com" class="form-control" style="max-width:400px;" required /><br />
                    </div>
                    <div class="col-xs-12">
                        <input type="password" class="form-control" style="max-width:400px;" required placeholder="Enter your password" /><br />
                    </div>
                    <div class="col-xs-12  offset-4">
                        <input type="submit" class="btn btn-success" value="Sign up for free" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalLog" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle"><img src="images/logo.jpg" width="150" height="150" alt="logo" /><label class="h2 text-primary">Login</label></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-xs-12">
                        <input type="email" placeholder="you@example.com" class="form-control" style="max-width:400px;" required /><br />
                    </div>
                    <div class="col-xs-12">
                        <input type="password" class="form-control" style="max-width:400px;" required placeholder="Enter your password" /><br />
                    </div>
                    <div class="col-xs-12  offset-4">
                        <input type="submit" class="btn btn-success" value="Login" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="row no-gutters">
            <div class="col-12">
                <h2 class="display-4 text-center text-primary">MENU & RESERVATION</h2>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2 col-xl-2 offset-xl-2">
                <img class="img-fluid" src="images/clock.jpg" alt="clock" width="200" height="150" style="border-radius:20%;" />
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2 col-xl-4">
                <input type="date" id="dateVisit" name="dateVisit" class="form-control my-5" style=" max-width:300px;" />
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2 col-xl-4">
                <input type="time" id="timeVisit" name="timeVisit" class="form-control  my-5" style="margin-left:-50px;max-width:300px;" />
            </div>
        </div><br />
        <div class="row no-gutters">
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2 col-xl-2 offset-xl-2">
                <img class="img-fluid" src="images/food.jpg" alt="food" width="200" height="150" style="border-radius:20%;" />
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2 col-xl-4">
                <select class="form-control" style="max-width:300px;" id="food">
                    <option>
                        Select food
                    </option>
                    <option>
                        Hamburger
                    </option>
                    <option>
                        Chickenburger
                    </option>
                    <option>
                        Cevapi
                    </option>
                    <option>
                        Pizza
                    </option>
                </select>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2 col-xl-4">
                <input type="number" id="foodQuantity" name="foodQuantity"  placeholder="Kolicina" class="form-control" style="margin-left:-50px;max-width:300px;" />
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2 col-xl-4 offset-xl-6">
                <input type="text" class="form-control" id="foodPrice" name="foodPrice" style="max-width:300px; margin-top:-50px;" readonly placeholder="Price" />
            </div>
        </div><br />
        <div class="row no-gutters">
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2 col-xl-2 offset-xl-2">
                <img class="img-fluid" src="images/drinks.jpeg" alt="food" width="200" height="150" style="border-radius:20%;" />
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2 col-xl-4">
                <select class="form-control" style="max-width:300px;" id="drink">
                    <option>
                        Select drink
                    </option>
                    <option>
                        Coca cola
                    </option>
                    <option>
                        Sprite
                    </option>
                    <option>
                        Pepsi
                    </option>
                    <option>
                        Water
                    </option>
                </select>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2 col-xl-4">
                <input type="number" id="drinkQuantity" name="drinkQuantity" placeholder="Kolicina" class="form-control" style="margin-left:-50px;max-width:300px;" />
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2 col-xl-4 offset-xl-6">
                <input type="text" class="form-control" id="drinkPrice" name="drinkPrice" style="max-width:300px; margin-top:-50px;" readonly placeholder="Price" />
            </div>
        </div><br />
    </section>
	

    <script>
		$("#poruka").slideUp();
		$("#unesi").click(function(){
			$("#poruka").removeClass('alert-success').removeClass('alert-danger');	
			var dateVisit = $("#dateVisit").val();
			var timeVisit = $("#timeVisit").val();
			var foodNum = $("#food").val();
			var foodQuantity = $("#foodQuantity").val();
			var foodPrice = $("#foodPrice").val();
			var drinkNum = $("#drink").val();
			var drinkQuantity = $("#drinkQuantity").val();
			var drinkPrice = $("#drinkPrice").val();
			var fullName = $("#fullName").val();

			if (dateVisit  == ""){
				$("#poruka").addClass('alert-danger');
				$("#poruka").html('<strong>Error</strong> Please enter date visit.');
				$("#poruka").slideDown(500).delay(1000).slideUp(500);
			}else if(timeVisit == ""){
				$("#poruka").addClass('alert-danger');
				$("#poruka").html('<strong>Error</strong> Please enter time visit.');
				$("#poruka").slideDown(500).delay(1000).slideUp(500);
			}else if(foodNum == ""){
				$("#poruka").addClass('alert-danger');
				$("#poruka").html('<strong>Error</strong> Please choose food.');
				$("#poruka").slideDown(500).delay(1000).slideUp(500);
			}else if(foodQuantity == ""){
				$("#poruka").addClass('alert-danger');
				$("#poruka").html('<strong>Error</strong> Please enter quantity.');
				$("#poruka").slideDown(500).delay(1000).slideUp(500);
			}else if(drinkNum == ""){
				$("#poruka").addClass('alert-danger');
				$("#poruka").html('<strong>Error</strong> Please choose drink.');
				$("#poruka").slideDown(500).delay(1000).slideUp(500);
			}else if(drinkQuantity == ""){
				$("#poruka").addClass('alert-danger');
				$("#poruka").html('<strong>Error</strong> Please enter drink Quantity.');
				$("#poruka").slideDown(500).delay(1000).slideUp(500);
			}else if(fullName == ""){
				$("#poruka").addClass('alert-danger');
				$("#poruka").html('<strong>Error</strong> Please enter your name.');
				$("#poruka").slideDown(500).delay(1000).slideUp(500);
			}else{
				$.ajax({
			
					url: "./dataMenu.php?task=serve&dateVisit="+dateVisit+"&timeVisit="+timeVisit+"&foodNum="+foodNum+"&foodQuantity="+foodQuantity+"&foodPrice="+foodPrice+"&drinkNum="+drinkNum+"&drinkQuantity="+drinkQuantity+"&drinkPrice="+drinkPrice+"&fullName="+fullName,
                    success: function (data) {
						if(data == 'SERVE'){
							$("#poruka").addClass('alert-success');
							$("#poruka").html('<strong>'+data+'</strong> Serve finished.');
							$("#poruka").slideDown(500).delay(1000).slideUp(500);
						}else{
							$("#poruka").addClass('alert-danger');
							$("#poruka").html('<strong>Error</strong>Please try again.');
							$("#poruka").slideDown(500).delay(1000).slideUp(500);
						}
                    },
                    error: function (data, err) {
							$("#poruka").addClass('alert-danger');
							$("#poruka").html('<strong>Problem occured</strong> Please try later.');
							$("#poruka").slideDown(500).delay(1000).slideUp(500);
					}
				});
			}
		});
	</script>


    <section id="card">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <img src="images/card.jpg" alt="Credit card" style="border-radius:20%;" width="300" height="300" class="img-fluid" />
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2 col-xl-4 my-5">
                    <input type="text" class="form-control" style="max-width:300px;" placeholder="Enter your name..." />
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2 col-xl-4 offset-xl-6">
                    <input type="button" class="btn btn-outline-info btn-lg" id="submit" style="color:white; border:white solid 1px;" value="Submit" />
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
