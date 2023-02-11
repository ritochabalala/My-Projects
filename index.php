<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A customer's financial income and expenses using PHP and MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="icon" type="image/jpg" href="epf_profile.jpg"/>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- main content section -->
    <main>
        <h2>Welcome to EPF Tech Hub</h2>
        <p>A customer's financial income and expenses.</p>
    </main>
    <!-- end of main content section -->


	<form action="process-form.php" method="post" enctype="multipart/form-data">
        <div>
            <a class="navbar-brand" href="index.php"><img src="epf_profile.jpg" width="100" height="100"></a>
        
		    <label for="first_name">First Name:</label>
            <input type="text" id="first_name" placeholder="First Name" name="first_name">
        </div>
        <div>
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" placeholder="Last Name" name="last_name">
        </div>
    
	    <div>
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" id="date_of_birth" name="date_of_birth">
        </div>
        <?php
            if(isset($_SESSION['message']))
            {
                echo "<h6>".$_SESSION['message']."</h6>";
                unset($_SESSION['message']);
            }
        ?>
		<div>
            <label for="file">Financial Data (Excel file):</label>
            <input type="file" id="file" name="file">
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
</body>


    <!-- footer section -->
    <footer> 
	    <p>Copyright © 2023 EPF Website. Design by Rito Chabalala</p> 
	</footer>
    <!-- end of footer section -->
</html>






