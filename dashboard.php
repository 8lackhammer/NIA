<!DOCTYPE HTML>
<html>
    <head>
       
		<title>Assignment 1</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="css/main.css"/>
		<link rel="stylesheet" href="css/bgimg.css"/>
		<link rel="stylesheet" href="css/font.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css"/>    
 
        
        <style>
        
        body {
	background-color: rgb(220,220,220);
	padding: 0;
	margin: 0;
	font-size: 16px;
	font-family: sans-serif;
}
            
.clearfix:after {
	content: "";
	display: block;
	height: 0;
	width: 0;
	clear: both;
}
.admin-panel {
	width: 990px;
	margin: 50px auto;
}
/*slidebar侧边栏*/
.slidebar {
	width: 20%;
	min-height: 690px;
	float: left;
	border-right: 1px solid rgb(235,235,235);
	background-color: rgb(247,247,247);
}
.slidebar .logo {
	height: 145px;
	border-bottom: 1px solid rgb(235,235,235);
}
.slidebar ul {
	padding: 0;
	margin:0;
}
.slidebar li {
	list-style-type: none;
	margin: 0;
	position: relative;
}
.slidebar li:before {
	content: "";
	font-family: 'Monospace';
	speak: none;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	position: absolute;
	display: block;
	line-height: 40px;
	color: rgb(102,102,102);
	right: 20px;
	-webkit-font-smoothing: antialiased;
}

.slidebar ul a {
	color: rgb(140,140,140);
	text-decoration: none;
	font:16px/40px helvetica,verdana,sans-serif;
	box-sizing:border-box;
	border-bottom: 1px solid rgb(235,235,235);
	display: block;
	box-shadow:inset 0 1px 0 rgb(255,255,255);
	text-indent: 20px;
	text-transform: capitalize;
}
.slidebar li:hover a {
	background-color: rgb(255,255,255);
	box-shadow: 1px 0 0 rgb(255,255,255),inset 5px 0 0 -1px rgb(234,83,63);
}
/*main*/
.main {
	float: left;
	width: 79%;
	height: 690px;
	background-color: rgb(255,255,255);
	position: relative;
	font-family: helvetica,verdana,sans-serif;
}
.main .topbar {
	border-bottom: 1px solid rgb(235,235,235);
	margin: 0;
	padding: 0;
}
/*topbar顶部按钮栏*/
.topbar li {
	float: right;
	list-style: none;
}
.topbar li:first-child {float: left;}
.topbar a {
	font-family: 'icomoon';
	display: block;
	line-height: 50px;
	width: 50px;
	text-align: center;
	text-decoration: none;
	color: rgb(102,102,102);
	border-left: 1px solid rgb(235,235,235);
}
.topbar a:hover {
	background-color: rgb(247,247,247);
}
.topbar li:first-child a {
	border: none;
	border-right: 1px solid rgb(235,235,235);
}
/*mainContent*/
.mainContent h4 {
	line-height: 1;
	font-size: 18px;
	margin: 1.3em 0 1em;
	margin-left: 17px;
}
 
.mainContent>div {
	position: absolute;
	opacity: 0;
	-webkit-transition:opacity 200ms linear;
	-moz-transition:opacity 200ms linear;
	-ms-transition:opacity 200ms linear;
	transition:opacity 200ms linear;
}
/*通过opacity来切换不同的选项卡*/
.mainContent>div:target {
	opacity: 1;
}
.mainContent h2 {
	margin:1em 30px;
	color: rgb(234,83,63);
	font-size: 20px;
}
.mainContent h2:before {
	font-family: 'icomoon';
	content: attr(data-icon);
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 1;
	margin-right: 10px;
	-webkit-font-smoothing: antialiased;
}
 
#dashboard>div {
	border: 1px solid rgb(235,235,235);
	margin-left: 30px;
	float: left;
	border-radius: 5px;
	min-width: 345px;
	height: 262px;
	display: inline-block;
}

/*logo*/
.logo a {
	width: 88px;
	height: 88px;
	display: inline-block;
	position: relative;
	left: 50%;
	top: 50%;
	margin: -45px 0 0 -45px;
	border: 1px solid rgb(200,200,200);
	border-radius: 50%;
	background-color: rgb(214,214,214);
}
.logo a:before {
	content: "NIA";
	width: 70px;
	height: 70px;
	font: 35px/70px helvetica,verdana,sans-serif;
	text-align: center;
	position: absolute;
	top: 8px;
	left: 8px;
	border-radius: 35px;
	border: 1px solid rgb(230,230,230);
	display: inline-block;
	background: -webkit-linear-gradient(top,rgb(255,255,255),rgb(245,245,245));
	background: -moz-linear-gradient(top,rgb(255,255,255),rgb(245,245,245));
	background: -ms-linear-gradient(top,rgb(255,255,255),rgb(245,245,245));
	background: linear-gradient(top,rgb(255,255,255),rgb(245,245,245));
}



table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}


		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		} 
 </style>
    
    
    </head>

    <body>
  <div class="admin-panel clearfix">
  <div class="slidebar">
    <div class="logo">
      <a href=""></a>
    </div>
    <ul>
     
	<li><a href="#ec">Electoral Commission </a></li>
	  <li><a href="#gis" id="targeted">Ghana Immigration</a></li>
      <li><a href="#nhis">NHIS</a></li>
      <li><a href="#dvla">DVLA</a></li>
	  <!-- <li><a href="#registry">Births & Deaths Registry</a></li>
      <li><a href="#passport">Passport Office</a></li> -->

    </ul>
      
      
				
  </div>
  <!-- <div class="main">
    <div class="mainContent clearfix">
      <div id="dvla">
       <h2 class="header"> SQLite Database Connection </h2>
       // <?php
        //    class MyDB extends SQLite3 {
        //       function __construct() {
        //          $this->open('dvla.db');
        //       }
        //    }

        //    $db = new MyDB();
        //    if(!$db) {
        //       echo $db->lastErrorMsg();
        //       echo "<script type='text/javascript'>
        //             alert('Ooops! An error occured.');
        //             </script>";
        //    }

        //    $sql = "SELECT * from drivers";

        //    $ret = $db->query($sql);

        //     echo "<table id='table' class='data-table'>\n<tr  COLSPAN=2 BGCOLOR='#6D8FFF'>";
            
        //     print "<th>". 'First Name'."</th>";
        //     print "<th>". 'Last Name'."</th>"; 
        //     print "<th>". 'Licence Number'."</th>"; 
        //     echo "</tr>\n";
           
        //    while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
        //       echo "<tr>";
        //       echo "<td>". $row['first_name'] ."</td>";
        //       echo "<td>". $row['last_name'] ."</td>";
        //       echo "<td>". $row['license_number'] ."</td>";
        //       echo "</tr>";
        
        //    }
        //     echo "</table><p>";

        //    $db->close();
        //?>
      // </div> -->


       <div id="ec">
         <h2 class="header"> MariaDB Connection  </h2>
         <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
		 $dbpass = '3699';
		 $dbsch = 'ecdb';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbsch);
      
         if(!$conn ) {
            echo "<script type='text/javascript'>
                    alert('Ooops! An error occured.');
                    </script>";
            die('Could not connect: ' . mysql_error());
         }

        //mysqli_select_db("ecdb");
		$query="SELECT * FROM citizen"; 
		$result=mysqli_query($conn,$query) or die("Query ($query) sucks!");
		$fields=mysqli_num_fields($result);

                
		echo "<table id='table' class='data-table'>\n<tr  COLSPAN=2 BGCOLOR='#6D8FFF'>";
		for ($i=0; $i < $fields; $i++) 
		{ 
		    print "<th>".mysqli_fetch_field_direct($result, $i)->name."</th>"; 
		}
		    echo "</tr>\n";
		while ($row = mysqli_fetch_row($result)) {
		    echo "<tr>";
		    for ($f=0; $f < $fields; $f++) {
		    echo "<td>".$row[$f]."</td>"; }
		    echo "</tr>\n";
		}
		echo "</table><p>";

         mysqli_close($conn);
      ?>
    </div>





       <div id="gis">
        <h2 class="header"> PostGreSQL DB Connection </h2>
		<?php
		   $db = pg_connect( "host=127.0.0.1 port=5432 dbname=postgres user=postgres password=3699" );
		   if(!$db) {
		     echo "<script type='text/javascript'>
                    alert('Ooops! An error occured.');
                    </script>";
           }

		$query="SELECT * FROM users"; 
		$result=pg_query($db,$query) or die("Query ($query) sucks!");
		$fields=pg_num_fields($result);


		echo "<table id='table' class='data-table'>\n<tr  COLSPAN=2 BGCOLOR='#6D8FFF'>";
		for ($i=0; $i < pg_num_fields($result); $i++) 
		{ 
		    print "<th>".pg_field_name($result, $i)."</th>"; 
		}
        echo "</tr>\n";
		while ($row = pg_fetch_row($result)) {
		    echo "<tr>";
		    for ($f=0; $f < $fields; $f++) {
		    echo "<td>".$row[$f]."</td>"; }
		    echo "</tr>\n";
		}
		echo "</table><p>";
      

         pg_close($db);
		?>
     </div>



       <!-- <div id="passport">
        <h2 class="header">MongoDB Connection  </h2>
        //<?php
        //    // connect to mongodb
        //    $m = new MongoClient();
        //    // select a database
        //    $db = $m->passportdb;

        //    if(!$db){
        //         echo "<script type='text/javascript'>
        //             alert('Ooops! An error occured.');
        //             </script>";
        //    }
           
        //    $collection = $db->user;

        //    $cursor = $collection->find();
        //    // iterate cursor to display title of documents

        //    echo "<table id='table' class='data-table'>\n<tr  COLSPAN=2 BGCOLOR='#6D8FFF'>"; 
        //     print "<th>". 'First Name'."</th>";
        //     print "<th>". 'Last Name'."</th>"; 
        //     print "<th>". 'Passport Number'."</th>"; 
        //     echo "</tr>\n";
           
           
        //    foreach ($cursor as $document) { 
        //       echo "<tr>";
		//       echo "<td>".$document["firstname"]."</td>";
        //       echo "<td>".$document["lastname"]."</td>";
        //       echo "<td>".$document["passportNumber"]."</td>";
		//       echo "</tr>\n";
        //    }
           //echo "</table><p>";

            
        //?> -->
           
           

           
       <!-- </div>
       <div id="nhis">
         <h2 class="header"> Firebase Datebase Connection </h2>
           
                   
        // <?php
        //     $FIREBASE = "https://ug-bot.firebaseio.com/.json";   

        //     $ch = curl_init();
        //     // Disable SSL verification
        //     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        //     // Will return the response, if false it print the response
        //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //     // Set the url
        //     curl_setopt($ch, CURLOPT_URL,$FIREBASE);
        //     // Execute
        //     $result=curl_exec($ch);
        //     #print($result);
        //     $json_decoded = json_decode($result,true);
            



        //     // Closing
        //     curl_close($ch);
            
           
           
        //     echo "<table id='table' class='data-table'>\n<tr  COLSPAN=2 BGCOLOR='#6D8FFF'>"; 
        //     print "<th>". 'First Name'."</th>";
        //     print "<th>". 'Last Name'."</th>"; 
        //     print "<th>". 'NHIS Status'."</th>"; 
        //     echo "</tr>\n";
           
          
        //     $data= array($json_decoded);
        //     #print($data);
        //     print"\n\n\n";
        // for($count=1;$count<=count($row,COUNT_RECURSIVE);$count++){
        //    foreach ( $data as $document) { 
        //     print "<tr>";
        //     foreach($document as $key){
        //       foreach($key as $row){
        //       print "<td>".$row["one".$count]."</td>";
              
        //       }
        //         print "</tr>\n";
            //}
           //}
            
           //}
        
          // echo "</table><p>";
         
           // ?>
        -->
           
       </div>

 <div class="main">
    <div class="mainContent clearfix">
      <div id="nhis">
       <h2 class="header"> SQLite Database Connection </h2>
         <?php
           class MyDB extends SQLite3 {
              function __construct() {
                 $this->open('citizen.db');
              }
           }

           $db = new MyDB();
           if(!$db) {
              echo $db->lastErrorMsg();
              echo "<script type='text/javascript'>
                    alert('Ooops! An error occured.');
                    </script>";
           }

           $sql = "SELECT * from citizen";

           $ret = $db->query($sql);

            echo "<table id='table' class='data-table'>\n<tr  COLSPAN=2 BGCOLOR='#6D8FFF'>";
            
            print "<th>". 'First Name'."</th>";
            print "<th>". 'Last Name'."</th>"; 
			print "<th>". 'Status'."</th>"; 
			print "<th>". 'Phone Number'."</th>"; 
            echo "</tr>\n";
           
           while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
              echo "<tr>";
              echo "<td>". $row[' First_Name'] ."</td>";
              echo "<td>". $row['Last_Name'] ."</td>";
			  echo "<td>". $row['nhis_status'] ."</td>";
			  echo "<td>". $row['Phone_number'] ."</td>";
              echo "</tr>";
        
           }
            echo "</table><p>";

          $db->close();
        ?> 
   </div> 


 
        <div id="dvla">
         <h2 class="header"> MYSQL Database Connection </h2>

	     <?php

		 $dbhost = 'localhost';
         $dbuser = 'root';
		 $dbpass = '3699';
		 $dbsch = 'dvla';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbsch);
      
         if(!$conn ) {
            echo "<script type='text/javascript'>
                    alert('Ooops! An error occured.');
                    </script>";
            die('Could not connect: ' . mysql_error());
         }

        //mysqli_select_db("ecdb");
		$query="SELECT * FROM drivers"; 
		$result=mysqli_query($conn,$query) or die("Query ($query) sucks!");
		$fields=mysqli_num_fields($result);

                
		echo "<table id='table' class='data-table'>\n<tr  COLSPAN=2 BGCOLOR='#6D8FFF'>";
		for ($i=0; $i < $fields; $i++) 
		{ 
		    print "<th>".mysqli_fetch_field_direct($result, $i)->name."</th>"; 
		}
		    echo "</tr>\n";
		while ($row = mysqli_fetch_row($result)) {
		    echo "<tr>";
		    for ($f=0; $f < $fields; $f++) {
		    echo "<td>".$row[$f]."</td>"; }
		    echo "</tr>\n";
		}
		echo "</table><p>";

		 mysqli_close($conn);
	    ?>
	 </div>

        <?php
                // $myHost = "localhost";
                // $myServer = "DESKTOP-SCH9H69";
                // $myUser = "";
                // $myPass = "";
                // $myDB = "NHIS"; 

                // //connection to the database
                // $dbhandle = mssql_connect($myHost, $myUser,$myPass)
                //   or die("Couldn't connect to SQL Server on $myServer"); 

                // //select a database to work with
                // $selected = mssql_select_db($myDB, $dbhandle)
                //   or die("Couldn't open database $myDB"); 

                // //declare the SQL statement that will query the database
                // $query = "SELECT * FROM CITIZEN ";
                

                // //execute the SQL query and return records
                // $result = mssql_query($query);

                // $numRows = mssql_num_rows($result); 
                // echo "<h1>" . $numRows . " Row" . ($numRows == 1 ? "" : "s") . " Returned </h1>"; 

                // //display the results 
                // while($row = mssql_fetch_array($result))
                // {
                //   echo "<li>" . $row["firstName"] . $row["lastName"] . $row["nhisStatus"] . "</li>";
                // }
                // //close the connection
                // mssql_close($dbhandle);

        ?>
           
           
    </div>
       
       
    </div>
</div>
</body>

</html>

