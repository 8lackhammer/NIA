  <?php
//     session_start();
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
//                 $first_Name=$_POST['inputFirstName'];
//                 $last_Name=$_POST['inputLastName'];    
//                 $user_Email=$_POST['inputEmail'];
//                 $password=$_POST['inputPassword']; 
    
//     $sql="INSERT into users
//     (firstName,lastName,userEmail,userPassword) VALUES('$first_Name','$last_Name','$user_Email','$password')";
  
    
//                 $sql_result= mysql_query($sql,$db);
    
//                 if($sql_result)
//                 {     
//                     $link = "../Database connection/index.php";
//                     redirect_to($link);
//                     echo "<script type='text/javascript'>
//                     alert('Successfully Registered!');
//                     </script>";
//                 }
//                 else
//                 {
//                     echo "<script type='text/javascript'>
//                     alert('Ooops! Something Went Wrong');
//                     </script>";
//                 }
//             }
//             mysql_close($db); 
//         }


include'connection.php';
//Declare variable
$alert = '';
$fval = '';
$lval = '';
$uval = '';
$phval = '';

//What should happen when submit button is clicked
if(isset($_POST['submit'])){
    
    //Declaring variables. It could have also been declared above
    $fname = mysqli_real_escape_string($conn,$_POST["fname"]);
    $lname = mysqli_real_escape_string($conn,$_POST["lname"]);
    $uemail = mysqli_real_escape_string($conn,$_POST["uemail"]);
    $phone = mysqli_real_escape_string($conn,$_POST["phone"]);
    $pswd = mysqli_real_escape_string($conn,$_POST["pswd"]);
    $cpswd = mysqli_real_escape_string($conn,$_POST["cpswd"]);

    //Assign queries
    $query = "INSERT INTO members(FNAME,LNAME,UEMAIL,PHONE,PSWD)
            VALUES('$fname','$lname','$uemail','$phone','$pswd');";
    $dUname = "SELECT * FROM members WHERE uname='$uemail';";
    $dPhone = "SELECT * FROM members WHERE phone='$phone'";
    
    
    //Check if Passwords Match      
    if($pswd == $cpswd){
        //If no required field is empty, run query.
        if(mysqli_query($conn,$query)){
            //If we are able to insert details into the table, go to index.php
            header('Location: index.php');
              

        }
      else{
            $dUquery = mysqli_query($conn,$dUname);
            $dPquery = mysqli_query($conn,$dPhone);

            $dUrows = mysqli_num_rows($dUquery);
            $dProws = mysqli_num_rows($dPquery);			
            if($dUrows >= 1){
                //Check if there is a username like that in the table
                $alert = ucwords('useremail has already been taken');
                $fval = $fname;
                $lval = $lname;
                $uval = $uemail;
                $phval = $phone;
            }
            elseif($dProws >=1){
                //Check if someone has registered with that phone number
                $alert = ucwords('this phone number has already been used');
                $fval = $fname;
                $lval = $lname;
                $uval = $uemail;
                $phval = $phone;
            }
            else{
                $alert = "something went wrong!";
                $fval = $fname;
                $lval = $lname;
                $uval = $uemail;
                $phval = $phone;
            }
        }

    }
    else{
        $alert = ucwords("Passwords Do not Match");
        $fval = $fname;
        $lval = $lname;
        $uval = $uemail;
        $phval = $phone;
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
     
        
   <!-- <div class="background"></div>-->
	<div class="backdrop"></div>
	<div class="login-form-container" id="login-form">
		<div class="login-form-content">
			<div class="login-form-header">
				<div class="logo">
					<img src="img/logo.png"/>
				</div>
				<h3>Create An Account</h3>
			</div>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="login-form">
                <div class="input-container">
					<i class="fa fa-user"></i>
					<input type="text" class="input" name="fname" placeholder="First Name"/>
				</div>
                
                <div class="input-container">
					<i class="fa fa-user"></i>
					<input type="text" class="input" name="lname" placeholder="Last Name"/>
				</div>
                
				<div class="input-container">
					<i class="fa fa-envelope"></i>
					<input type="email" class="input" name="uemail" placeholder="Email"/>
				</div>

                <div class="input-container">
					<i class="fa fa-envelope"></i>
					<input type="text" class="input" name="phone" placeholder="Phone number"/>
				</div>

				<div class="input-container">
					<i class="fa fa-lock"></i>
					<input type="password"  id="login-password" class="input" name="pswd" placeholder="Password"/>
				</div>

                <div class="input-container">
					<i class="fa fa-lock"></i>
					<input type="password"  id="login-password" class="input" name="cpswd" placeholder="Confirm Password"/>
				</div>
				
				<input type="submit" name="submit" value="Register" class="button"/>
			</form>
		</div>
	</div>
        
    </body>

  
    
</html>