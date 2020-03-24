<?php
    session_start();
    include("config.php");
   
    if($_SERVER["REQUEST_METHOD"] == "POST") {

		$myusername = mysqli_real_escape_string($db,$_POST['username']);
		$mypassword = mysqli_real_escape_string($db,$_POST['password']); 

		$sql = "SELECT id FROM login WHERE username = '$myusername' and password = '$mypassword'";
		$result = mysqli_query($db,$sql) or die (mysqli_error());
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		$count = mysqli_num_rows($result);
		$msg = "";
		// If result matched $myusername and $mypassword, table row must be 1 row
		$false = 0;
		if($count == 1) {
			$post_username = $_POST['username'];
			$_SESSION['timeout2'] = time();
			$_SESSION['username'] = $post_username;
			echo $post_username;
		}
   }
?>