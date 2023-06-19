<?php

require ("connect.php");

$query = "SELECT * FROM patient";
$result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en-GB">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="">
  <title>CRUD Operations</title>
    </head>
    <body>
        <div class="container">
        <button class="btn btn-primary my-5"><a href="patient.php" class="text-light">Add patient</a>
        </button>
            <div class="row mt-5">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="display-6 text-center">Patient details</h2>
                        </div>
                        <div class="card-body">
                        <table border="1" cellpadding="5" id="data table">
                                <tr>
                                    <td>id</td>
                                    <td>name</td>
                                    <td>number</td>
                                    <td>address</td>
                                    <td>sickness</td>
                                    <td>doctor_name</td>
                                </tr>
                                <tr>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result))
                                    {
                                    ?>
                                        <td><?php echo $row['id'];?></td>
                                        <td><?php echo $row['name'];?></td>
                                        <td><?php echo $row['number'];?></td>
                                        <td><?php echo $row['address'];?></td>
                                        <td><?php echo $row['sickness'];?></td>
                                        <td><?php echo $row['doctor_name'];?></td>
                                        <td><a href="#" class="btn btn-primary">Update</a></td>
                                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                                    
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>