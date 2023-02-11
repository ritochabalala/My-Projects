<?php
session_start();
include('config.php');

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if(isset($_POST['submit']))
{
	// Check if the form has been submitted
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $date_of_birth = $_POST['date_of_birth'];
	
    // Validate the form data
    $error_message = "";
    if (empty($first_name)) {
      $error_message .= "First name is required.\n";
    }
    if (empty($last_name)) {
      $error_message .= "Last name is required.\n";
    }
    if (empty($date_of_birth)) {
      $error_message .= "Date of birth is required.\n";
    }

    // If there are no errors, insert the data into the database
    if (empty($error_message)) {
      $sql = "INSERT INTO customers (first_name, last_name, date_of_birth) VALUES ('$first_name', '$last_name', '$date_of_birth')";
      if (mysqli_query($conn, $sql)) {
        echo "Record added successfully.";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    } else {
      // Display the error message
      echo $error_message;
    }
  
  
    $fileName = $_FILES['import_file']['name'];
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);

    $allowed_ext = ['xls','csv','xlsx'];

    if(in_array($file_ext, $allowed_ext))
    {
        $inputFileNamePath = $_FILES['import_file']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data = $spreadsheet->getActiveSheet()->toArray();

        $count = "0";
        foreach($data as $row)
        {
            if($count > 0)
            {
                $month = $row['0'];
                $income = $row['1'];
                $expenses = $row['2'];

                $studentQuery = "INSERT INTO financial_income_and_expenses (month,income,expenses) VALUES ('$month','$income','$expenses')";
                $result = mysqli_query($conn, $studentQuery);
                $msg = true;
            }
            else
            {
                $count = "1";
            }
        }

        if(isset($msg))
        {
            $_SESSION['message'] = "Successfully Uploaded";
            header('Location: index.php');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Not Uploaded";
            header('Location: index.php');
            exit(0);
        }
    }
    else
    {
        $_SESSION['message'] = "No file selected: Only xls/csv/xlsx files";
        header('Location: index.php');
        exit(0);
    }
}
?>

