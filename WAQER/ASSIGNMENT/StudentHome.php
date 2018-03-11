<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

 <html xmlns="http://www.w3.org/1999/xhtml">
       <head>
	   <title>Student Sign in</title>
	</head>
	<body>
	<h1 align="center">LOG IN</h1>
	<hr/>
	<form method="get" action="Sregister.php">
       <button type="submit">Register</button>
    </form>
	 <form action="Ssignin.php" method="post">
	   <table align="center">
	      <tr>
		      <td>Username:</td>
			  <td><input type="text" name="uname"></td>
		  </tr>
		   <tr>
		      <td>Password:</td>
			  <td><input type="password" name="pass"></td>
		  </tr>
		   <tr>
		      <td></td>
			  <td><input type="submit" name="submit"></td>
		  </tr>	
	   </table>
	 </form>
	
   </body>
   
</html>