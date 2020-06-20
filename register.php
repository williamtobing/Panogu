<?php ?>

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
        <div class="container" align="center">
            <div class="container, justify" style="margin-top: 30px;">
                <div class="box col-md-6 col-sm-offset-3">
                    <div class="panel panel-default">
                        <form id="login-form" method="post" action="process/login/registerProcess.php">

                            <hr>

                            <legend style="text-transform: uppercase; color: #212529"><b>Registration</b></legend>
                            <br>
                            <div class="input-group">
                                <input type="text" name="fullname" placeholder="Full Name" required class="form-control" />
                            </div>
                            <br>
                            <div class="input-group">
                                <input type="text" name="username" placeholder="Username" required class="form-control" />
                            </div>
                            <br>
                            <div style="padding-bottom : 15px;" class="input-group">
                                <input type="text" name="email" placeholder="Email" required class="form-control" />
                            </div>
                            <div class="input-group">
                                <!--<label>
                                    <select name="role" required class="form-control center">
                                        <option value="#">--</option>
                                        <option value="2">Guest</option>
                                        <option value="4">Student</option>
                                    </select>
                                </label>-->
                                &nbsp;<p>Register as </p>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;<p><input type="radio" name="role" value=2 required>&nbsp;Guest</p>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;<p><input type="radio" name="role" value=4 required>&nbsp;Student</p>
                                <!--<input type="number" name="role" placeholder="Role" required class="form-control" />-->
                            </div>
                            <div class="input-group">
                                <input type="password" name="password" placeholder="Password" required class="form-control" />
                            </div>
                            <br>
                            <div class="input-group">
                                <input type="password" name="confirm_password" placeholder="Confirm Password" required class="form-control" />
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="submit" name="registerButton" value="Register" class="btn btn-primary btn-block" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>