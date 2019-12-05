<?php

	$usrName = $_POST['usrName'];
	$usrPassword = $_POST['usrPassword'];

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
             mysqli_query($db, "INSERT INTO login(username, password) VALUES('$usrName', '$usrPassword')");
		     //$getUserID = mysqli_query($db, "SELECT id FROM login WHERE username='$usrName'");
		     //print_r($getUserID);
		     //$userID = mysqli_fetch_assoc($getUserID);
		     //print_r($userID);
		     //$resultUserID = (int)$userID['id'];
		     //print_r(gettype($resultUserID));
		     //mysqli_query($db, "INSERT INTO wallet(id, balance) VALUES('$resultUserID', 100)");
		     echo "\nAccount Created\n";
             //return true;
             header("refresh:2; url=index.html");
	         }
       }

exit();

?>