<?php
	
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panogu</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>-->

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.css" rel="stylesheet">

</head>

    <body id="page-top">

        <!-- Navigation -->
        <nav style="font-weight: 700; text-transform: uppercase; color: #048AE6; font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;" class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php">Panogu</a>
            </div>
        </nav>

<header class="masthead text-center text-white d-flex">
    <!--<div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">-->
    <div class="container" align="center">
        <div class="container, justify" style="margin-top: 30px;">
            <div class="box col-md-6 col-sm-offset-3">
                <div class="panel panel-default">

                <form method="post" action="process/login/loginProcess.php">
                    <hr>
                    <legend style="text-transform: uppercase; color: #212529"><b>Login</b></legend>
                    <br>

					<input type="text" name="username" placeholder="Username" required="true" class="form-control">

					<br><br>

					<input type="password" name="password" placeholder="Password" required="true" class="form-control">

					<br><br>
					
					<!--<input type="submit" name="login" value="Login" class="form-control">-->
                    <input type="submit" name="login" value="Login" class="btn btn-primary btn-block" />
                    <br>
                    <a style="color: white;" href="register.php">Register</a>
				</form>

                </div>
            </div>
        </div>
    </div>

            <!--</div>
        </div>
    </div>-->
</header>