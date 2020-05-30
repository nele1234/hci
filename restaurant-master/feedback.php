<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">    
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	

	
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
            background-image: url('images/');
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
        
        #header {
            margin-top: 150px;
            margin-bottom: 50px;
        }
    </style>
</head>
<!--
<body >
        <header>
                <img src="images/logo.jpg" alt="logo">
                <a href="index.html"><input type="button" value="Home" class="btn btn-primary" style="margin-top:-180px;"></a>
                <a href="menu.php"><input type="button" value="Menu" class="btn btn-primary" style="margin-top:-180px;"></a>
                <a href="contact.php"><input type="button" value="Contact & Place" class="btn btn-primary" style="margin-top:-180px;"></a>
                <a href="feedback.php"><input type="button" value="Feedback" class="btn btn-primary" style="margin-top:-180px;"></a>
                <a href="signup.php"><input type="button" value="Sign up for free" class="btn btn-primary" style="float:right;margin-right:30px;margin-top:3px;"></a>
        <a href="log.php"><input type="button" value="Login" class="btn btn-primary" style="float:right;margin-right:30px;margin-top:3px;"></a>
            </header>
    <h1 style="margin-left:550px;margin-top:-150px;margin-bottom:80px;">FEEDBACK</h1>
    <label style="margin-left:550px; margin-bottom:30px;">ENTER YOUR OPINION:</label> <br>
    <form> 
    <textarea cols="65px;" rows="20px;" name="opinion" id="opinion" style="margin-left:400px;background-color:rgb(245, 245, 245);">
    </textarea>
<br>
    <input value="SUBMIT" name="unsei" id="unesi" class="btn btn-outline-dark btn-lg" style="margin-left:460px; width:350px;"> 
	<div id="poruka" class="alert"> </div>
    </form>
	
	<script>
		$("#poruka").slideUp();
		$("#unesi").click(function(){
			$("#poruka").removeClass('alert-success').removeClass('alert-danger');	
			var opinion = $("#opinion").val();

			if (opinion  == ""){
				$("#poruka").addClass('alert-danger');
				$("#poruka").html('<strong>Error</strong> Please enter date visit.');
				$("#poruka").slideDown(500);
			}else{
				$.ajax({
			
					url: "./datafeedback.php?task=feed&opinion="+opinion,
                    success: function (data) {
						if(data.indexOf("feed") !== -1){
							$("#poruka").addClass('alert-success');
							$("#poruka").html('<strong>'+data+'</strong>Thanks.');
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

	
</body>--> 

<body style="background-color:rgb(199, 253, 247);">

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
			<h2 class="display-4 text-center text-primary" id="header">FEEDBACK</h2>
		</div>
		<div class="col-12 text-center">
			<p class="h3 text-info">Enter your opinion:</p>
			<textarea cols="65px;" rows="20px;" name="opinion" id="opinion" style="background-color:rgb(245, 245, 245);"></textarea>
		</div>
		<div class="col-12 text-center">
		<input value="SUBMIT" name="unsei" id="unesi" class="btn btn-outline-dark btn-lg" style="width:350px;">
			<div id="poruka" class="alert"> </div>
		</div>
	</div>
</section>

<script>
		$("#poruka").slideUp();
		$("#unesi").click(function(){
			$("#poruka").removeClass('alert-success').removeClass('alert-danger');	
			var opinion = $("#opinion").val();

			if (opinion  == ""){
				$("#poruka").addClass('alert-danger');
				$("#poruka").html('<strong>Error</strong> Please enter date visit.');
				$("#poruka").slideDown(500);
			}else{
				$.ajax({
			
					url: "./datafeedback.php?task=feed&opinion="+opinion,
                    success: function (data) {
						if(data.indexOf("feed") !== -1){
							$("#poruka").addClass('alert-success');
							$("#poruka").html('<strong>'+data+'</strong>Thanks.');
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

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
