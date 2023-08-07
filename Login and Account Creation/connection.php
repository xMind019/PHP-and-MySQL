<?php
    $link=mysqli_connect("localhost", "root", "thesis123", "Account");
    if($link === false){
        die("Error: Could not connect.". mysqli_connect_error());
    }
    $first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
    $last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
    $username = mysqli_real_escape_string($link, $_REQUEST['username']);
    $password = mysqli_real_escape_string($link, $_REQUEST['pass']);
    $type = mysqli_real_escape_string($link, $_REQUEST['type']);
    $sql="INSERT INTO user(first_name, last_name, userame, pass, type)
    VALUES('$first_name', '$last_name', '$username', '$password', '$type')";
    if(mysqli_query($link, $sql)){
        echo "Succefully Saved!";
    }else{
        echo "Error: Could not connect!";
    }
    mysqli_close($link);
?>    
<br><br>
<a href="index.php">Home</a>