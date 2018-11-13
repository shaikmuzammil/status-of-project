<?php
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'statusofproject');
	
	if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
	}
	else{
	}
	

	$query= "SELECT guidename FROM guidetable";
	$result=mysqli_query($db,$query);

?>


<!DOCTYPE html>
<html>
<head>
	<title>RegistrationPage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<nav>
		<img src="logo.png" id="logo" alt="logo">
		<a class="ba" href="index.html">Back</a>
	</nav>
	<div class="header">
		<h2>Team Leader Registration</h2>
	</div>
	<form action="store.php" method="POST" class="sam">
		Team Leader Name:<input type="text" name="TeamId" required maxlength="25" class="input_group"><br>
		Password:<input type="Password" name="password" maxlength="10" class="input_group"><br>
		Member 1:<br>
		Name:<input type="text" name="member1" required maxlength="25"class="input_group"><br>
		Regd No:<input type="text" name="regdno1"  required maxlength="10" class="input_group"><br>
		Member 2:<br>
		Name:<input type="text" name="member2" id="member_2" required maxlength="15" class="input_group"><br>
		Regd No:<input type="text" name="regdno2" id="regdno_2" required maxlength="10" class="input_group"><br>
		Member 3:<br>
		Name:<input type="text" name="member3" id="member_3"  maxlength="15" class="input_group"><br>
		Regd No:<input type="text" name="regdno3" id="regdno_3"  maxlength="10" class="input_group"><br>
		Member 4:<br>
		Name:<input type="text" name="member4" id="member_4"  maxlength="15" class="input_group"> <br>
		Regd No:<input type="text" name="regdno4" id="regdno_4"  maxlength="10" class="input_group"><br>
		Department:
		<select class="input_group" name="department">
			<option>SELECT</option>
			<option>CSE</option>
			<option>IT</option>
			<option>MCA</option>
		</select>
		<br>

		Project Title:<input type="text" name="projecttitle" id="project_title" required class="input_group"><br>
		Project Guide:
		<select class="input_group" name="guide">

     	<?php while($row=mysqli_fetch_array($result))
          echo "<option value='" . $row['guidename'] . "'>" .$row['guidename'].  "</option>";
          $_SESSION['guide']=$row['guidename'];
          mysqli_close($db);
   ?>
</select>

		




		<!--Project Guide: <SELECT  name="projectguide" class="input_group">
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
					Mrs.<option> M. Varalakshmi
								</option>
		</SELECT>-->
		<br>
		Project Type:&nbsp;&nbsp;
		<input type="radio" name="projecttype" value="major" class="ra">Major<br>
		<br>
		<input type="submit" value="submit"  name="regd_usr" class="form-but">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" value="cancel" name="reset" class="form-but">
		<br>
		<br>
		<p><a href="index.html" class="sim">Already registered ?click here</a></p>

	</form>

	<footer id="footer_text">
		Status &copy; of Project
	</footer>


</body>
</html>