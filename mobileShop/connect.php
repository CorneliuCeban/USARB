<?php
        $connection = mysqli_connect('localhost', 'root', '', 'CornelShop');
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 

session_start();
//session_destroy();

if ( isset( $_SESSION['user_id'] ) ) {
    // Grab user data from the database using the user_id
    // Let them access the "logged in only" pages
	//echo $_SESSION['user_id'];
} else {
    // Redirect them to the login page
    //header("Location: http://www.yourdomain.com/login.php");
}
?>


<?php
// Always start this first

if ( ! empty( $_POST ) ) {
	if ( isset( $_POST['logout'] )){
		session_destroy();
		unset($_SESSION['user_id']);
		//header("refresh: 3");
	}
    if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
        $connection = new mysqli('localhost', 'root', '', 'cornelshop');
        $log = "SELECT * FROM conturi WHERE loghin = '".$_POST['username']."' AND password = '".$_POST['password']."' ";
		//echo $log;
        if ($result = $connection->query($log)) {
				if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					//echo $row["loghin"];
					//echo $row["password"];
					$_SESSION['user_id']=$row["id"];
					$_SESSION['user_login']=$row["loghin"];
				}
			} else {
				//echo "0 results";
			}	
			$result->close();
		}
		
    	// Verify user password and set $_SESSION
    	//if ( password_verify( $_POST['password'], $user->password ) ) {
        //  $_SESSION['user_id'] = $user->ID;
        
    	//}
    }
}
include 'blocuri/functii.php';
?>