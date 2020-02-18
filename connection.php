<?php
    //Create connection
    $conn = mysqli_connect('localhost','root','3699','nia');

    //Try to connect to server
    if(mysqli_connect_errno()){
        echo "Couldn't connect to server ".mysqli_connect_errno();
    }
