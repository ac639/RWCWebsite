<?php

	$usrName = $_SESSION['username'];
	$profile = $_POST['profile'];

    $db = mysqli_connect("127.0.0.1", "root", "", "rwc");
        if  (!$db) {
             die("MySQL Connection Failed: " . mysqli_connect_error() );
        } else {
             $searchUser = "SELECT * FROM login WHERE username='$usrName'";
             $checkUserExist = mysqli_query($db, $searchUser);       
	     if (mysqli_num_rows($checkUserExist) >= 1) {
	          echo "\nusername already exists\n";
                  return false;
         } else { 
             mysqli_query($db, "UPDATE profile SET profiledesc='$profile' WHERE username='$usrName'");
		     //$getUserID = mysqli_query($db, "SELECT id FROM login WHERE username='$usrName'");
		     //print_r($getUserID);
		     //$userID = mysqli_fetch_assoc($getUserID);
		     //print_r($userID);
		     //$resultUserID = (int)$userID['id'];
		     //print_r(gettype($resultUserID));
		     //mysqli_query($db, "INSERT INTO wallet(id, balance) VALUES('$resultUserID', 100)");
		     echo "\naccount created\n";
             //return true;
             header("refresh:2; url=signup.php?signup=success");
	         }
       }

exit();

?>