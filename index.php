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
</head>
<body>
    
    <div class="container">
        <div class="row">
		
		<div class="modal-body">					
            <div class="col-md-12 mt-4">

                <div class="card">
                    <div class="card-header">                     
						<a class="navbar-brand" href="index.php"><img src="epf_profile.jpg" width="100" height="100"></a>
						<h5>A customer's financial income and expenses </h5>
                    </div>
                    <div class="card-body">

                        <form action="code.php" method="POST" enctype="multipart/form-data">
						
							<label class="form-control-label"> First Name </label>
							<input type="text" name="firstname" placeholder="First Name" class="form-control" />
							
							<label class="form-control-label"> Last Name </label>
							<input type="text" name="lastname" placeholder="Last Name" class="form-control" />

				
							<label class="form-control-label"> Date of Birth </label>
							<input type="date" name="date" placeholder="Date of Birth" class="form-control"  />			        
							
							<?php
                                if(isset($_SESSION['message']))
                                {
                                    echo "<h6>".$_SESSION['message']."</h6>";
                                    unset($_SESSION['message']);
                                }
                            ?>

                            <input type="file" name="import_file" class="form-control" />					
                            <button type="submit" name="save_excel_data" class="btn btn-primary mt-3">Upload</button>
							
							<div class="modal-footer">
						        <input type="hidden" name="status" value="0">
								<button type="submit" name="customer" class="btn btn-success" style="border-radius:0%;">Add Customer</button>
					        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php 
	if (isset($_POST['customer'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$dateofbirth = $_POST['dateofbirth'];

		$sql = "INSERT INTO customer(firstname,lastname,dateofbirth) VALUES ('$firstname','$lastname','$dateofbirth')";

		$run = mysqli_query($conn,$sql);

		if($run == true){
			
			echo "<script> 
					alert('Customer Inserted Successfully Requested');
					window.open('index.php','_self');
				  </script>";
		}else{
			echo "<script> 
			alert('Failed To Add Customer');
			</script>";
		}
	}
?>