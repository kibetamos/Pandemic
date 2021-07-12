<html>
<head>
<style>
         .button-container-div {
			width: 130px;
            height: 50px;

            display: flex;
            justify-content: center;
            align-items: center;
        }
</style>
	<title>Add pandemic</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
 <div class="button-container-div">
      <a class="btn btn-primary" href="index.php" role="button">Go home </a>
    </div>

	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="85%" border="0">
			<tr>
				<td>Date</td>
				<td><input type="date" name="date"></td>
			</tr>
			<tr>
				<td>County</td>
				<td>
  <select id="county" name="county">
    <option value="Agder">Agder</option>
    <option value="Innlandet">Innlandet</option>
    <option value="More og Romsdal">More og Romsdal</option>
    <option value="Oslo">Oslo</option>
     <option value="Rogaland">Rogaland</option>
      <option value="Troms og Finnmark">Troms og Finnmark</option>
       <option value="Trondelag">Trondelag</option>
        <option value="Vestfold og Telemark">Vestfold og Telemark</option>
         <option value="Vestland">Vestland</option>
          <option value="Viken">Viken</option>
  </select></td>
			</tr>
			<tr>
				<td>Disease</td>
				<td>
                  <select id="sickness" name="sickness">
                    <option value="Chinese Corona">Chinese Corona</option>
                    <option value="British Corona">British Corona</option>
                    <option value="South-African corona">South-African corona</option>
                    <option value="Indian Corona">Indian Corona</option>
                  </select></td>
			</tr>
			</tr>
			<tr>
				<td>Number</td>
				<td><input type="text" name="number" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$date = $_POST['date'];
		$county = $_POST['county'];
		$sickness = $_POST['sickness'];
		$number = $_POST['number'];

		// include database connection file
		include_once("config.php");

		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO crud(date,county,sickness,number) VALUES('$date','$county','$sickness','$number')");

		// Show message when user added
		echo "Pandemic added successfully. <a href='index.php'>View data</a>";
	}
	?>
</body>
</html>