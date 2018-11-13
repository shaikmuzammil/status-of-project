<?php
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'statusofproject');
	
	if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
	}
	else{
	}
	

	$query= "SELECT projectguide FROM registerpages";
	$result=mysqli_query($db,$query);

?>


<!DOCTYPE html>
<html>
<head>
	<title>teacher page</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="major.css">
	</script>
</head>
<body>
	<nav>
		<a class="ma" href="logout.php">Logout</a>
	<a class="ba" href="index.html">Back</a>
	</nav>

<h2> welcome to status of project</h2>
<br>

<h2>Please Select Guide Name</h2>

<form method="post" action="teacher.php">
	<SELECT class="input_group" name="projectguide">
		<?php while($row=mysqli_fetch_array($result))
          echo "<option value='" . $row['projectguide'] . "'>" .$row['projectguide'].  "</option>";
          $_SESSION['guide']=$row['projectguide'];
          mysqli_close($db);
   ?>
	</SELECT>

	<br>
	<button name="searchbtn" class="form-but">Search</button>
</form>

<section>
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

</section>


<footer id="footer_text">
		Status &copy; of Project
	</footer>
</body>
</html>