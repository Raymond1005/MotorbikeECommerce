<?php 
    $conn = new mysqli("localhost", "root", "", "webbanxemay");
	mysqli_set_charset($conn, "UTF8");
	
    if($conn === false){
        die("ERROR: Không thể kết nối. " . $mysqli->connect_error);
    }
?>
