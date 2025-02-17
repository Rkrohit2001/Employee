<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Employee</title>
	<link rel="stylesheet" type="text/css" href="addemp.css">
	<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>
<body>
	<div class="svgheader"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#c1deba" fill-opacity="1" d="M0,256L80,234.7C160,213,320,171,480,160C640,149,800,171,960,170.7C1120,171,1280,149,1360,138.7L1440,128L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"><div class="logo" style="width: 70%;"><p><img src="nnn/empa.png" height="170px" width="200px" style="display: flex; margin-top: -315px; margin-left: 20px;position: absolute;"></p><br><p><h1 style="margin-top: -315px; position: relative;margin-left: 250px; background: transparent; color: purple; font-size: 4em; font-weight: bolder;font-family: 'Cinzel Decorative', cursive;text-shadow: 9px 7px 7px black;">ADD EMPLOYEES</h1></p>	</div><div class="back" style="display: flex;float: right;"><a href="empview.php"><img src="nnn/backa.png" height="120px" width="120px" style="display: flex; float: right; margin-top: -330px; position: relative; margin-right: 20px;" ></a></div></path></svg></div>
<div class="container">
	<div class="content">
	<form method="post" class="form">
		<p><input type="text" placeholder="Employee-Id" name=""><input type="email" placeholder="Email-Id" name=""></p><br>
		<p><input type="text" placeholder="Department" name=""><input type="text" placeholder="Salary" name=""></p><br>
		<p><input type="text" placeholder="Name" name=""><input type="text" placeholder="Role" name=""></p><br>
		<p style=" font-family: 'Cinzel Decorative', cursive;
	letter-spacing: 10px;
	font-size: 1.5em; color: purple; font-weight: bolder; ">Gender</p><p class="pw">Male<input type="radio" name="select"> Female<input type="radio" name="select">Other<input type="radio" name="select"></p><br>
		<p><p style="/*font-family: cursive;*/
	letter-spacing: 10px;
	font-size: 1.3em;color: purple;
	font-weight: bolder; font-weight: bolder;  font-family: 'Cinzel Decorative', cursive;">Date Of Birth</p><input type="date" placeholder="Date Of Birth" name=""></p><br>
		<p><input type="text" placeholder="Mobile No."  name=""><input type="text" placeholder="Alternale mob no." name=""></p><br>
		<p><input type="submit" name="" value="ADD" class="btn"></p><br>

	</form>
	</div>
	
</div>
</body>
</html>