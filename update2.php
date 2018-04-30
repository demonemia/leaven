<!doctype html>
<!-- ############
	Beer form 2.0
##############-->
<html lang="en">
	<head>
		<link href="http://www.keyboarddevil.com/leaven/favicon.ico" rel="shortcut icon">
		<title>Update the Beer List</title>
		<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<style>
			.warning {
				font-size: 2em;
				text-align:center;
				margin-top: 10%;
			}
			.beerDescription {
				margin-bottom: 10px;
			}
			h1 {
				margin:12px;
				font-weight:bold;
			}
			h2,h3,h4,h5,p {
				margin:0px;
			}
			p {
				font-size: 1.1em;
			}
			body {
				font-family: "Open Sans", sans-serif;
				font-size: 1.2em;
				background-color: #374049;
				color: #fff;
			}
			input, select, textarea {
				font-size: 1.3em;
				color:#000;
			}
			.important {
				font-weight: bold;
				color: yellow;
			}
			th, td {
				padding: 15px;
				text-align: left;
			}
			th {
				font-size: 1.3em;
			}
			.btn-danger {
				font-size: 1.5em;
				color:#000;
			}
			.btn-addBeer {
				width:150px;
				height: 40px;
			}
			.currentBeerList:hover {
				background-color: #330099;
			}
			.btn-info {
				width:250px;
			}
			.modal-body {
				display: flex;
				justify-content: space-between;
			}
			.modal-body > .add-section {
				margin: 5px;
				font-size: 1.3em;
			}
			.modalH {
				color:#000;
				font-weight:bold;
			}
			.modal-content {
				color:#000;
			}
			.modal-dialog {
				width: 666px;
			}
			.modal-body {
				padding: 0 15px;
			}
			.flex-it {
				display: flex;
				justify-content: center space-around;
			}
			.flex-it img {
				height: 80px;
			}
			.flex-section {
				margin: 10px;
				font-size: 1.5em;
			}
			.add-header {
				font-size: 1.3em;
				font-weight: bold;
			}
		</style>
	</head>
	<body>
		<?php
			$password = null;
			$passValid = false;
			global $passwordCheck;
			require 'pass.php';
			if (isset($_POST["password"])) {
				$password = $_POST["password"];
			}
			if ($password == $passwordCheck) {
				$passValid = true;
			}
			
			if (!$passValid) {
			?>
				<div class="warning">
					<img src="img/instaLogo.gif">
					<h1>Welcome!</h1>
					<p>You must enter the password to continue.</p>
					<form method="post" action="update2.php">
						<input type="text" name="password" size="8"> <input type="submit" name="submit" value="Submit">
					</form>				
				</div>

			<?php
			}

			// Check and process the form
			require 'beersDB.php';
			$image = null;
			$name = null;
			$abv = null;
			$description = null;
			if ($passValid) {
				if (isset($_POST["newBeerImage"]) && isset($_POST["newBeerName"]) && isset($_POST["newBeerAbv"]) && isset($_POST["newBeerDescription"])) {
					$image = htmlentities($_POST["newBeerImage"]);
					$name = htmlentities($_POST["newBeerName"]);
					$abv = htmlentities($_POST["newBeerAbv"]);
					$description = htmlentities($_POST["newBeerDescription"]);
				}
				//##############
				// DELETE a beer
				if (isset($_POST["delete"])) {
					$delete = $_POST["delete"];
					// Get beer ID
					$beerDeleted = explode("-",$delete,2);
					$beerDeleted = $beerDeleted[1];
					//  Delete Beer
					$deleteSql = "DELETE FROM beers WHERE ID=$beerDeleted";
					if ($conn->query($deleteSql) === TRUE) {
						echo "<p>Deleted beer ID: $beerDeleted</p>";
					} else {
						echo "Error: " . $deleteSql . "<br>" . $conn->error;
					}
				}
				//##############
				// ADD a new beer
				if ($image!='' && $name!='' && $abv!='' && $description!='') {
					$stmt = $conn->prepare("INSERT INTO beers (image, name, abv, description) VALUES (?, ?, ?, ?)");
					$stmt->bind_param("ssss", $image, $name, $abv, $description);
					$sql = 'INSERT INTO beers (image,name,abv,description) VALUES ("'.$image.'","'.$name.'","'.$abv.'","'. $description.'")';
					if ($conn->query($sql) === TRUE) {
						echo "New beer created successfully";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}
				}
				// Logic complete, redirect to index
				//echo "<script>window.location.href='index.php'</script>";
		?>
		<h1>Welcome to Beer List 2.0</h1>
		<form method="post" action="update2.php">
			<?php
			echo "<input type=\"hidden\" name=\"password\" value=\"$password\">";
			// Get the current list and render the form
			$sql = 'SELECT ID, image, name, abv, description FROM beers';
			$dbOutput = $conn->query($sql);
			?>
			<table cellpadding="3">
			<tr>
				<td valign="top" width="200"><h3>Current beers on site:</h3></td>
				<td>
					<?php
					if ($dbOutput -> num_rows > 0) {
						while($row = $dbOutput ->fetch_assoc()) {
							$dbID = $row["ID"];
							$dbImage = $row["image"];
							$dbName = $row["name"];
							$dbAbv = $row["abv"];
							$dbDesc = $row["description"];
							echo "<div class=\"row\">";
							echo"<div class=\"col-md-2 beerList\">";
							echo "<img height=\"70\" src=\"img/beers$dbImage.png\" alt=\"glass\"/>";
							echo "<input class=\"btn-danger delete-beer\" type=\"submit\" name=\"delete\" value=\"DELETE beer-$dbID\">";
							echo "</div>";
							echo "<div class=\"col-md-10\">";
							echo "<h3>$dbName</h3>";
							echo "<h4>$dbAbv</h4>";
							echo "<p class=\"beerDescription\">$dbDesc</p>";
							echo "</div>";
							echo "</div>";
							}
						}
						?>
						<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">ADD a new beer</button>
				</td>
				</tr>
				</table>

		<?php
			$conn->close();
		?>

		<!-- add new beer modal -->
		<!-- Modal -->
		<div id="myModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button><h3 class="modalH">Add a NEW beer</h3>
			</div>
			<div class="modal-body">
				<div class="add-section">
					<p class="add-header">Image</p>
					<select name="newBeerImage">
						<option value="">Choose Image</option>
						<option value="Pint">Pint</option>
						<option value="Stange">Stange</option>
						<option value="Goblet">Goblet</option>
						<option value="Snifter">Snifter</option>
						<option value="Weizen">Weizen</option>
						<option value="Mug">Mug</option>
				</select>
				</div>
				<div class="add-section">
					<p class="add-header">Beer Name</p>
					<input type="text" size="16" name="newBeerName">
				</div>
				<div class="add-section">
					<p class="add-header">ABV & Size</p>
					<input type="text" size="16" name="newBeerAbv">
				</div>
			</div>
			<div class="modal-body">
				<div class="add-section">
					<p class="add-header">Description</p>
					<textarea name="newBeerDescription" rows="3" cols="55"></textarea>
				</div>
			</div>
			<div class="flex-it">
				<div class="flex-section">
					<img src="img/beersPint.png"><br/>Pint
				</div>
				<div class="flex-section">
					<img src="img/beersStange.png"><br/>Stange
				</div>
				<div class="flex-section">
					<img src="img/beersGoblet.png"><br/>Goblet
				</div>
				<div class="flex-section">
					<img src="img/beersSnifter.png"><br/>Snifter
				</div>
				<div class="flex-section">
					<img src="img/beersWeizen.png"><br/>Weizen
				</div>
				<div class="flex-section">
					<img src="img/beersMug.png"><br/>Mug
				</div>
			</div>
			<div class="modal-footer">
				<input type="submit" value="ADD this Beer" class="btn btn-info btn-lg" /> 
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			</div>
		</div>
  </div>
</div>
</form>

<?php
	} // close $passValid check
?>
		
		<script src="lib/jquery/jquery.min.js"></script>
		<script src="lib/bootstrap/js/bootstrap.min.js"></script>
		<script src="lib/superfish/hoverIntent.js"></script>
		<script src="lib/superfish/superfish.min.js"></script>
		<script src="lib/morphext/morphext.min.js"></script>
		<script src="lib/wow/wow.min.js"></script>
		<script src="lib/stickyjs/sticky.js"></script>
		<script src="lib/easing/easing.js"></script>
		<script src="js/custom.js"></script>

	</body>
</html>