<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        .tengah {
            padding: 210px;
            margin: auto;
            align-content: center;
            text-align: center;
            width: 50%;
            height: 50%;
        }
    </style>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <div class='tengah'>
   <div class="wrap-form-contact"> 
    <div class="container">
        <div class="row">
            <div class="col-span-4">
                <div class="form-contact">
                    <h3>Public_OR </h3>
                     
                    <form method="post" action='cek_login.php'>
                        <div class="form-group">
                            <input type="text" class="form-control" name='username' placeholder="Username" required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name='password' placeholder="Password" required="required">
                            <span class='glyphicon glyphicon-eye-open'></span>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox"> Remember me</label>
                            <a href="#">Forgot Password?</a>
                        </div>
                        <input type='submit' class='btn btn-primary' name='submit' value='Login'>
                        <a href="Register.php"><input type='button' class='btn btn-success' name='register' value='Register'></a>
                    </form>
                     
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src='JavaScript.js'></script>
    <script src='JavaScriptcript.js'></script>
</body>
</html>