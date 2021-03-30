<?php
	session_start();
	$connect = new mysqli("localhost","root","","dukcapil");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="images/andaliman logo.png">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form role="form" method="post">
                <div>
                    <img src="images/andaliman logo.png" width="120px">
                </div>
                <br><br>
              	<div>
                	<input type="text" class="form-control" placeholder="Username"  name="username" required="" />
              	</div>
              	<div>
                	<input type="password" class="form-control" placeholder="Password" name="password" required="" />
              	</div>
              	<div>
                	<button class="btn btn-default submit" name="login">Log in</a>
            	</div>

              <div class="clearfix"></div>
            </form>
            <?php
                if(isset($_POST['login']))
                {
                   $username = $_POST['username'];
                   $password = ($_POST['password']);
                   $p = md5($password);
                   $get =  $connect->query("SELECT * FROM operator WHERE username='$username' AND password='$p'");
                   $yangcocok = $get->num_rows;
                   if($yangcocok == 1)
                               {
                                    $_SESSION['operator']=$get->fetch_assoc();
                                    echo "<div class='alert alert-info'>Login Berhasil</div>";
                                    echo "<meta http-equiv='refresh' content='1;url=index.php'>";
                               }
                               else
                               {
                                    echo "<div class='alert alert-danger'>Login Gagal</div>";
                                    echo "<meta http-equiv='refresh' content='1;url=login.php'>";

                               }
                }
    		?>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
