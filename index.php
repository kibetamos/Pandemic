<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM crud ORDER BY id DESC");
?>

<html>
<head>
<style>
         .button-container-div {
            width: 180px;
            height: 50px;

            display: flex;
            justify-content: center;
            align-items: center;
        }
        table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
    <title>Pandemic</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
 <div class="button-container-div">
      <a class="btn btn-primary" href="add.php" role="button">Add New Infections </a>
    </div>


    <table style="width:40%" align="center">

    <tr>
        <th>DATE</th>
        <th>COUNTY</th>
        <th>DISEASE  </th>
         <th>INFECTED</th>
    </tr>
    <?php
    while($crud_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$crud_data['date']."</td>";
        echo "<td>".$crud_data['county']."</td>";
        echo "<td>".$crud_data['sickness']."</td>";
         echo "<td>".$crud_data['number']."</td>";
        
    }
    ?>
    </table>
</body>
</html>