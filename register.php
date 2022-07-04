<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Shopping Cart :: Register</title>

    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<form class="form-signin" action="includes/register_inc.php" method="post">

  <h1 class="h3 mb-3 font-weight-normal">Please Register</h1>
  <label for="inputStudNum" class="sr-only">Student number</label>
  <input type="text" id="inputStudNum" name="StudNum" class="form-control mb-2" placeholder="Student number" required autofocus>
  <label for="inputStudName" class="sr-only">Username</label>
  <input type="text" id="inputStudName" name="StudName" class="form-control mb-2" placeholder="Username" required autofocus>
  <label for="inputSPassword" class="sr-only">Password</label>
  <input type="password"  id="inputSPassword" name="SPassword" class="form-control" placeholder="Password" required>
  <label for="inputSConfirmPassword" class="sr-only">Confirm Password</label>
  <input type="password" id="inputSConfirmPassword" name="SConfirmPassword" class="form-control" placeholder=" Confirm Password" >
  <label for="inputSemail" class="sr-only">Student email</label>
  <input type="text" id="inputSemail" name="Semail" class="form-control mb-2" placeholder="Student email" required autofocus>
  
  
  <button class="btn btn-lg btn-success btn-block" name="submit" type="submit">Register</button>
 
      <p class="lead">Already a member <a href="login.php">Login here...</a></p>
     
</form>


    
  </body>
</html>
