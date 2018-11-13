 <html>
		<head>
	<title>teacher page</title>

	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="major.css">
  <style type="text/css">
	.lab{
		font-size: 24px;
	}
	echo{
		margin-left: 24px;
	}
	</style>
</head>

    <body>
	<nav>
		<a class="ma" href="logout.php">Logout</a>
	<a class="ba" href="teacherpage.php">Back</a>
	</nav>

<h2> welcome to status of project</h2>


<?php
	session_start();
	 $rv1a=$rv1b=$rv1c=$rv2a=$rv2b=$rv2c=$rv3a=$rv3b=$rv3c=$rv4a=$rv4b=$rv4c=$teamid=$projectguide="";
	 $v1a=$v1b=$v1c=$v2a=$v2b=$v2c=$v3a=$v3b=$v3c=$v4a=$v4b=$v4c="";
	 $count;
	$db = mysqli_connect('localhost', 'root', '', 'statusofproject');
    
            if (!$db) {
            die("Connection failed: " . mysqli_connect_error());
            }
            else{
                //echo 'connected';
            }

	if (isset($_POST['searchbtn']))
	 {
		$projectguide=$_POST['projectguide'];

		if($projectguide!='')
		{

			$query="SELECT * FROM majorproject WHERE projectguide='".$projectguide."' ";  
	        $result=mysqli_query($db,$query) or die(mysqli_error());
	        $numrows=mysqli_num_rows($result);  
        if($numrows)  
        {  
        
        	while($row=mysqli_fetch_array($result))
        	{
	        	$teamid=$row['teamid'];
	        	$rv1a=$row['rv1a'];
	        	$rv1b=$row['rv1b'];
	        	$rv1c=$row['rv1c'];
	        	$rv2a=$row['rv2a'];
	        	$rv2b=$row['rv2b'];
	        	$rv2c=$row['rv2c'];
	        	$rv3a=$row['rv3a'];
	        	$rv3b=$row['rv3b'];
	        	$rv3c=$row['rv3c'];
	        	$rv4a=$row['rv4a'];
	        	$rv4b=$row['rv4b'];
	        	$rv4c=$row['rv4c'];
	        	$count=$row['count'];
        	if($rv1a){
                    $v1a="Abstract submission finished";
                }
                if($rv1b){
                   $v1b="It is a Existing model";
                }
                if($rv1c){
                    $v1c="It is a New Model";
                }
                if($rv2a){
                    $v2a=" functional  requirements gathered";
                }
                if($rv2b){
                    $v2b="captured the non-functional requirements";
                }
                if($rv2c){
                	$v2c="H/w & S/w requirements gathered";
                   }
                if($rv3a){
                    $v3a="UML diagrams are finished";
                }
                if($rv3b){
                    $v3b="Coding strategies are found";
                }
                if($rv3c){
                    $v3c=" Implementation had finished";
                }
                if($rv4a){
                    $v4a="Execution";
                }
                if($rv4b){
                    $v4b="TestCases";
                }
                if($rv4c){
                    $v4c="Conclusion";
                }?>

                <label class="lab" style="font-size: 24px; margin-left: 40px;">TeamID:</label>
             <?php 
			echo $teamid;
        	echo "<br>";?>
        <label class="lab" style="font-size: 24px;  margin-left: 40px;">Project Status:</label> <?php
        	echo $count; ?>%<?php
        	echo "<br>";?>

       <label class="lab" style="font-size: 24px;  margin-left: 40px;"> Review 1</label>
        <br><?php
        	echo "\t";
        	echo  $v1a ;
        	echo "<br>";
        	echo $v1b;
        	echo "<br>";
        	echo $v1c;
        	echo "<br>";?>
        	<label class="lab" style="font-size: 24px;  margin-left: 40px;">Review 2 </label><br><?php
        	echo $v2a;
        	echo "<br>";
        	echo $v2b;
        	echo "<br>";
        	echo $v2c;
        	echo "<br>";?>
        	<label class="lab" style="font-size: 24px;  margin-left: 40px;">Review 3</label><br><?php
        	echo $v3a;
        	echo "<br>";
        	echo $v3b;
        	echo "<br>";
        	echo $v3c;
        	echo "<br>";?>
        	<label class="lab" style="font-size: 24px;  margin-left: 40px;">Review 4</label><br><?php
        	echo $v4a;
        	echo "<br>";
        	echo $v4b;
        	echo "<br>";
        	echo $v4c;	

		?>
		<?php
        	}

		}
		else{
			header("Location:  teacherpage.php");
			die("failed1: " . mysqli_connect_error());
		}
	}
	else{
		die("failed2: " . mysqli_connect_error());
	}
}
else{
	
	die("failed3: " . mysqli_connect_error());

}
 mysqli_close($db);

?>

<!--

<!DOCTYPE html>
<html>
<head>
	<title>teacher page</title>

	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="major.css">
  <style type="text/css">
	.lab{
		font-size: 24px;
	}
	</style>
</head>
<body>
	<nav>
		<a class="ma" href="logout.php">Logout</a>
	<a class="ba" href="index.html">Back</a>
	</nav>

<h2> welcome to status of project</h2>
<br>

<h2 style="margin-left: 10px;">Please Select Guide Name</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style="margin-left: 40px;">
	<SELECT class="input_group" name="projectguide">
		<option>Select</option>
					<option>R. Eswaraiah</option>
					Dr. P. <option>P.Sudhakar</option>
					Dr. <option>T. Sudhir</option>
					Dr.<option>G. Sanjay Gandhi</option>
					<option> T. Kameswara Rao</option>
					Dr.<option> N. Lakshmi Prasanna</option>
					Sri.<option> K. Suresh Babu</option>
					Sri. <option>M. Sree Krishna</option>
					Sri.<option> P. R. Krishna Prasad</option>
					Mrs. <option>B. Sai Jyothi</option>
					Smt.<option> Jeevana Jyothi Pujari</option>
					Mr. <option>Sk. Khaja Mohiddin</option>
					Sri.<option> K. Mohan Krishna</option>
					Sri. <option>P. Pothu Raju</option>
					Sri.<option> M. D. Shakeel Ahmed</option>
					Sri. <option>Ch. Hari Prasad</option>
					Mr. <option>J. Madhu Babu</option>
					Mr. <opiton>P. Siva Prasad</opiton>
					Sri.<option> A. Vishnu Vardhan</option>
					Sri. <option>M. N. Sri Harsha</option>
					Sri.<option> P. Sudheer Kumar</option>
					Sri. <option>T. Seshu Chakravarthy</option>
					Sri.<option> A. Prashant</option>
					Sri.<option> Ch. Gopi Raju</option>
					Sri.<option> R. Ashok</option>
					Sri.<option> Sk. Wasim Akram</option>
					Sri. <option>K. G. Raghavendra Narayan</option>
					Sri.<option> K. Sudheer Kumar</option>
					Sri. <option>K. Naga Gopi</option>
					Ms.<option> P. Pavani</option>
					Sri.<opiton> V. Koteswara Rao</opiton>
					Mr.<option> M. Jeevan Babu</option>
					Mr.<option> K. Vikas</option>
					Sri.<option> Ch. Vijayananda Ratnam</option>
					Mrs.<option> M. Varalakshmi</option>
	</SELECT>

	<br>
	<button name="searchbtn" class="form-but">Search</button>
</form>

<section style="margin-left: 45px;">
	<br>
		<br>
		<label class="lab">TeamID:</label>
	-->
	<!--	<?php 
			echo $teamid;
        	echo "<br>";?>
        <label class="lab">Project Status:</label> <?php
        	echo $count; ?>%<?php
        	echo "<br>";?>

       <label class="lab"> Review 1</label>
        <br><?php
        	echo $v1a;
        	echo "<br>";
        	echo $v1b;
        	echo "<br>";
        	echo $v1c;
        	echo "<br>";?>
        	<label class="lab">Review 2 </label><br><?php
        	echo $v2a;
        	echo "<br>";
        	echo $v2b;
        	echo "<br>";
        	echo $v2c;
        	echo "<br>";?>
        	<label class="lab">Review 3</label><br><?php
        	echo $v3a;
        	echo "<br>";
        	echo $v3b;
        	echo "<br>";
        	echo $v3c;
        	echo "<br>";?>
        	<label class="lab">Review 4</label><br><?php
        	echo $v4a;
        	echo "<br>";
        	echo $v4b;
        	echo "<br>";
        	echo $v4c;	

		?>-->

<!--
</section>

-->
<footer id="footer_text">
		Status &copy; of Project
	</footer>
</body>
</html>














