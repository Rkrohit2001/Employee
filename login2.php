<?php  
 ?>
<?php  
  $host="localhost";
  $user="root";
  $pass="";
  $db="clgproject";
  $conn=mysqli_connect($host,$user,$pass,$db);
  if (!$conn) 
  {
    die("could not connect".mysqli_error());
  }
  if (isset($_POST['Login'])) 
  {
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $sql="select * from login where Email_Id='$email' and Password='$pass'";
    $query=mysqli_query($conn,$sql);
    if (mysqli_num_rows($query)>0) 
    {
      header("location:home.php");
    }
    else
    {
      echo"<script>alert('invalid email-id or password')</script>";
    }
  }
  mysqli_close($conn);
  ?>
<html>
<head>
<meta charset="utf-8">
<title>Login Form</title>
<link rel="stylesheet" type="text/css" href="loginstyle2.css" />
<link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Fruktur&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>
<body>
  <div class="dd"><p><img src="images/4.svg" height="150px"; width="150px";></p><p style="margin-top: 29px;"><span></span></p><p style="text-decoration: underline;">EMPLOYEE</p> <p style="margin-left: 90px;text-decoration: underline;">MANAGEMENT</p><p style="margin-left: 350px; text-decoration: underline;">SYSTEM</p></div>
<div class="container">
  

  <section id="content">
    <div class="img"><img src="svg/loginanimation.svg"></div>
    <form method="POST" >
      <h1>Admin Login</h1>
      <div>
        <input type="text" placeholder="Email-Id" required="" id="email" name="email">
      </div>
      <div>
        <input type="password" placeholder="Password" required="" id="pass" name="pass">
      </div>
      <div>
        <input type="submit" value="Login" name="Login">
        <a href="forget2.php">Lost Your Password ? </a>
      </div>
    </form>
    
  </section><!-- content -->
</div><!-- container -->
<!-- #46D5B4 -->
</body>
</html>