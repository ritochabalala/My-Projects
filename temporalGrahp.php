<!DOCTYPE html>
<html>
  <head>
    <title>Financial Income and Expenses Visualisation</title>
  </head>
  <body>
    <h1>Financial Income and Expenses Visualisation</h1>

    <?php
      // Connect to the database
      $conn = mysqli_connect(...);

      // Retrieve the visualisation data from the database
      $result = mysqli_query($conn, 'SELECT visualisation_data FROM customers WHERE ...');
      $row = mysqli_fetch_assoc($result);
      $visualisation_data = $row['visualisation_data'];

      // Embed the visualisation in the HTML page
      echo $visualisation_data;
    ?>
  </body>
</html>