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
  if (isset($_POST['getpass'])) 
  {
    $username=$_POST['username'];
    $Email_Id=$_POST['email'];
    $sql="select * from login where username='$username' and Email_id='$Email_Id'";
    $query=mysqli_query($conn,$sql);
    if (mysqli_num_rows($query)>0)
    {
      while($row=mysqli_fetch_array($query))
      {
        echo "Here is your password:".$row['Password'];
        break;
        }
    }
    else
    {
      echo"<script>alert('invalid username or Email-Id')</script>";
    }
  }
  mysqli_close($conn);
  ?>
<html>
<head>
<meta charset="utf-8">
<title>forget password</title>
<link rel="stylesheet" type="text/css" href="forgetstyle2.css">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
  
  <section id="content">
    <div class="img"><img src="svg/fp.svg"></div>
    <form method="post">
      <h1>Forget Password ?</h1>
      <div>
        <input type="text" placeholder="Username" required="" id="username" name="username">
      </div>
      <div>
        <input type="text" placeholder="Email-id" required="" id="email" name="email">
      </div>
      <div>
        <input type="submit" value="Get password" name="getpass">
        <a href="login2.php">Go To Login Page </a>
      </div>
    </form>
    
  </section><!-- content -->
</div><!-- container -->
<!-- #46D5B4 -->
</body>
</html>