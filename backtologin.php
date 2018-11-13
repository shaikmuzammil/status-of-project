<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>

    <!-- logged in user information -->
    <?php if (isset($_SESSION['sucess'])) : ?>
    	<p><strong>U Registered sucessful </strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
		
</body>
</html>