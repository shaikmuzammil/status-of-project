<?php
session_start();
$TeamId=$password=$member1=$regdno1=$member2=$regdno2=$member3=$regdno3=$member4=$regdno4=$dept=$projecttitle=$guide=$projecttype="";
$db = mysqli_connect('localhost', 'root', '', 'statusofproject');
	
	if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
	}
	else{
		echo 'connected';
	}

	

if (isset($_POST['regd_usr'])) {
	$TeamId=$_POST['TeamId'];
	$password=$_POST['password'];
	$member1=$_POST['member1'];
	$regdno1=$_POST['regdno1'];
	$member2=$_POST['member2'];
	$regdno2=$_POST['regdno2'];
	$member3=$_POST['member3'];
	$regdno3=$_POST['regdno3'];
	$member4=$_POST['member4'];
	$dept=$_POST['department'];
	$projecttitle=$_POST['projecttitle'];
	$guide=$_POST['guide'];
	$projecttype=$_POST['projecttype'];
	echo $TeamId;
	$_SESSION['teamid']=$TeamId;
	$_SESSION['projectguide']=$guide;
	if($TeamId!=''  || $password!=''){
		$query= "INSERT INTO registerpages(teamid,password,mem1,regdno1,mem2,regdno2,mem3,regdno3,mem4,regdno4,dept,projecttitle,projectguide,projecttype) VALUES('$TeamId','$password','$member1','$regdno1','$member2','$regdno2','$member3','$regdno3','$member4','$regdno4','$dept','$projecttitle','$guide','$projecttype')";
		$result=mysqli_query($db,$query);
		if($result){
		echo 'succesful';
		$_SESSION['sucess']="done";
		header("Location: backtologin.php");
		}
		else{
			echo "fail" .mysqli_error($db);
			//array_push($errors, "Wrong username/password combination");

		}
	}
	else{
		//array_push($errors, "Wrong username/password combination");
		echo 'That username already exist ';
	}

}
else{
	die("failed: " . mysqli_connect_error());
}
mysqli_close($db);


?>