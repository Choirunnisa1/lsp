<?php
    include "../_config/config.php";
    if (isset($_SESSION['user'])) {
       echo "<script>window.location='".base_url()."';</script>";
    } else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login Page</title>
    <link href="../asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="shortcut icon" href="../asset/image/logo.png">
</head>
<body background="rumah.jpg" ">

    <div id="wrapper">
                  <div align="center" style="margin-top: 100px;">
                <?php
                if (isset($_POST['login'])) {
                    $user = trim(mysqli_real_escape_string($con,$_POST['user']));
                    $pass = sha1(trim(mysqli_real_escape_string($con,$_POST['pass'])));
                    $sql_login = mysqli_query($con, "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass' ") or die (mysqli_error($con));
                    if (mysqli_num_rows($sql_login) > 0){
    
                        $_SESSION['user'] = mysqli_fetch_array($sql_login);
                        echo "<script>window.location='".base_url()."';</script>";
                    }else{ ?>
                        <div class="row">
                            <div class="col-lg-6 col-lg-offset-3">
                                <div class="alert alert-danger alert-dismissable" role="alert">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;<a>
                                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                    <strong>Login gagal</strong> Username/Password Salah
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }

                ?>

                <form action="" method="post" class="navbar-form border border-light" >
                <!-- <div style="margin-right: 400px;margin-left:400px"> -->
                <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default" style="align-content: center" >
                    <div class="panel-heading">
                     <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="input-group" style="margin-top:20px ">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" name="user" class="form-control" placeholder="username" required autofocus>
                    </div>
                    <br>
                    <br>
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" name="pass" class="form-control" placeholder="password" required>
                    </div>
                    <br>
                    <br>
                    <div class="input-group" style="margin-bottom:20px ">
                        <input type="submit" name="login" class="btn btn-primary" value="Login">
                    </div>
                    </div>
                    </div>
                  <!--   </div> -->
                </form>
            
            </div>
        
    </div>
    <script src="../asset/vendor/jquery/jquery.js"></script>
    <script src="../asset/vendor/bootstrap/js/bootstrap.min.js"></script>
    
</body>
</html>
<?php
}
?>
