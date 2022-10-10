<?php
$con = mysqli_connect("localhost","root","","Labfinal");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	  <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
</head>
<body> 
      

       <table class="table table-bordered">
        <thead>
          <tr>
            <th>Emp ID</th>
            <th>Emp Name</th>
            <th>Name</th>
            <th>Salary</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM info";
          $result_tasks = mysqli_query($con, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['EmployeeID']; ?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Dept']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
</body>
</html>