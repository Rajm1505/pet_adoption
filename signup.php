<?php include '../Pet adoption/partials/_dbconnect.php';?>
<?php
    $showAlert = false;
    $ShowError = false;
    if($_POST)
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['Cpassword'];
        if($password == $cpassword)
        {
            $sql = "INSERT INTO `login`(`id`,`username`, `passwd`) VALUES (NULL,'$username','$password')";
            $result = mysqli_query($conn, $sql);
            if($result)
            {
                $showAlert = true;
                header("location: login.php");
            }
            else
            {
                $ShowError= TRUE;
            }
        }
    }
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
   









    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<a class="navbar-brand" href="index.php">LITTLE PAWSITIVE STEPS!</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
            <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../Pet adoption/login.php">Login</a>
        
        </li>
       
</ul>
      </div>
    </nav>

    <?php 
        if($showAlert)
        {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success</strong> User Created.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>';
        }
        if($ShowError)
        {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Sorry, </strong> You entered the wrong password.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>';
        }
    ?>
    <div class="container my-4 my-4 w-25 p-3">
    <h1 class="text-center">Sign up</h1>
    <form action="../Pet adoption/signup.php" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" class="form-control" id="Password" name="password">
        </div>
        <div class="form-group">
            <label for="CPassword">Confirm Password</label>
            <input type="password" class="form-control" id="CPassword" name="Cpassword">
        </div>
        <button type="submit" class="btn btn-secondary">Sign up</button>
    </form>
    </div>
    
<!-- Footer -->

<?php include "partials/footer.php"; ?>
  
<!-- footer ends  -->


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
</body>
</html>