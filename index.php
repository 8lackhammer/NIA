<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
-->

<?php
// session_start();
// function redirect_to($link)
// {
//     ob_start();
//     header('Location:'.$link);
//     ob_end_flush();
//     die();
// }


//    if(isset($_POST['submit'])){
//         $db = mysqli_connect("localhost:3306","root","3699","homepagedb");
//         if(!$db){
//             die("Database connection failed miserably: ".mysql_error());
//         }
       
        
//         $db_select = mysql_select_db("homepagedb",$db);
//         if(!$db_select){
//             die("Database selection failed miserably: ".mysql_error());
//         }
    
//             else
//             {
//                 $password=$_POST['inputPassword'];
//                 $user_Email=$_POST['inputEmail'];
                
//                 $sql="SELECT * FROM users WHERE userEmail='$user_Email' AND userPassword='$password' ";
                
//                 $sql_result= mysql_query($sql,$db);
            
//                 if(mysql_num_rows($sql_result)==0)
//                 {                 
//                     echo "<script type='text/javascript'>
//                     alert('Password Incorrect!');
//                     </script>";
//                 }
//                 else
//                 {
//                     $link = "../Database connection/dashbooard.php";
//                     redirect_to($link);
//                     echo "<script type='text/javascript'>
//                     alert('YA');
//                     </script>";
//                 }
                
//                  mysql_close($db); 
//             }
//         }

include'connection.php';
//Declare variable
$alert = '';
$vUname = '';

//What should happen when submit button is clicked
if(isset($_POST['submit'])){
    
    //Declaring variables. It could have also been declared above
    $uemail = mysqli_real_escape_string($conn,$_POST["uemail"]);
    $pswd = mysqli_real_escape_string($conn,$_POST["pswd"]);

    //Assign queries to be used to variables
    $query = "SELECT * FROM members WHERE uemail='$uemail' AND pswd='$pswd';";

    //Run the query
    $rQuery = mysqli_query($conn,$query);

    //Count how many rows are there
    $rows = mysqli_num_rows($rQuery);

    if($rows >= 1){
        session_start();
        $_SESSION['uemail'] = $uemail;
        header('Location: dashboard.php');
    }
    else{
        $alert = "Please check useremail or password";
        $vUname = $_POST['uemail'];
    }
}   
    
?>


<!DOCTYPE HTML>
<html>
    <head>
		<title>Assignment 1</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="css/main.css"/>
		<link rel="stylesheet" href="css/bgimg.css"/>
		<link rel="stylesheet" href="css/font.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css"/>    
    </head>
    
    <body>
        
  <!--  <div class="background"></div>-->
	<div class="backdrop"></div>
	<div class="login-form-container" id="login-form">
		<div class="login-form-content">
			<div class="login-form-header">
				<div class="logo">
					<img src="img/logo.png"/>
				</div>
				<h3>Login to Your Account</h3>
			</div>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"  class="login-form">
				<div class="input-container">
					<i class="fa fa-envelope"></i>
					<input type="email" class="input" name="uemail" placeholder="Email"/>
				</div>
				<div class="input-container">
					<i class="fa fa-lock"></i>
					<input type="password"  id="login-password" class="input" name="pswd" placeholder="Password"/>
				</div>
				
				<input type="submit" name="submit" value="Login" class="button"/>
				<a href="signUp.php" class="register">Register</a>
			</form>
		</div>
	</div>
        
        
</body>
    
    

    
</html>