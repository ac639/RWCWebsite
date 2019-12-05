<?php
	session_start();

	$usrName = $_POST['usrName'];
	$usrPassword = $_POST['usrPassword'];

	$db = mysqli_connect("127.0.0.1", "root", "", "rwc");
	if  (!$db) {
	     die("MySQL Connection Failed: " . mysqli_connect_error() );
	} else {
        $authUser = "SELECT * FROM login WHERE username='$usrName' AND password='$usrPassword'";
        $confirmAuth = mysqli_query($db, $authUser);
        if (mysqli_num_rows($confirmAuth) >= 1) {
            echo "\nusername and password found in table\n";
            //return true;
            $_SESSION['username'] = $usrName;
            header("location: myprofile.php?login=success");
                 
        } else {
            //echo "\nusername and password NOT found in table\n";
            //return false;
            header("refresh:2; url=login.php?login=error");
        }
	}

exit();

?>
