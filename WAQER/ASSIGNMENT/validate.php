<?php
   session_start();
   
   $setUsername="a";
   $setPassword="a";
   $setRePassword="a";
   $setEmail="a@gmail.com";
   $setPhone="1";
   $setFullname="a";
   
   
   if(isset($_POST['submit']))
	   
   {
	   $uname=$_POST['uname'];
	   $pass=$_POST['pass'];
	   $rpass=$_POST['rpass'];
	   $email=$_POST['email'];
	   $phone=$_POST['phone'];
	   $fname=$_POST['fname'];
	   if($uname==$setUsername && $setPassword==$pass && $setRePassword==$rpass && $setEmail==$email && $setPhone==$phone && $setFullname==$fname )
	   {
		    
		     $_SESSION['uname']=$uname;
			 $_SESSION['pass']=$pass;
			 $_SESSION['rpass']=$rpass;
			 $_SESSION['email']=$email;
			 $_SESSION['phone']=$phone;
			 $_SESSION['fname']=$fname;
			 print_r($_SESSION);
		      header("location:TeacherHome.php");
		   
	   }	  
	   
   } else{
	   echo "fill up first";
		  header("location:Tregister.php");
	  }
?>