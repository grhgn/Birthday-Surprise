<?php
	$inactive = 1800;
	$inactive2 = 10800; 
    $session_life = time() - $_SESSION['timeout'];
    $session_life2 = time() - $_SESSION['timeout2'];
    

    if($session_life2 > $inactive2){
        session_destroy();
    }

    $_SESSION['timeout'] = time();
	
	if (!isset($_SESSION['username'])) {
		header("Location: index.php");
	}
?>