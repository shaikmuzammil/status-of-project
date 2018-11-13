<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'statusofproject');
	
	if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
	}
	else{
		echo 'connected';
	}

if (isset($_POST['regd_usr'])) {
	$guidename=$_POST['guidename'];
	$department=$_POST['department'];
	if($guidename!=''){
		$query= "INSERT INTO guidetable(guidename,department) VALUES('$guidename','$department')";
		$result=mysqli_query($db,$query);
		if($result){
		echo 'succesful';
		header("Location: index.html");
		}
		else{
			echo "fail" .mysqli_error($db);
		}
	}
	else{
		echo 'That username already exist ';
	}

}
else{
	die("failed: " . mysqli_connect_error());
}
mysqli_close($db);


?>