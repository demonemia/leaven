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
				font-size: 1.1em;
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
			.currentBeerList:hover {
				background-color: #330099;
			}
			.btn-info {
				width:250px;
			}
			.modalH {
				color:#000;
				font-weight:bold;
			}
			.modal-dialog {
				width: 70%;
			}
			.modal-content {
				color:#000;
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
			// DB connection
			require 'beersDB.php';
			$image = null;
			$name = null;
			$abv = null;
			$description = null;
			if ($passValid) {
				if (isset($_POST["newBeerImage"]) && isset($_POST["newBeerName"]) && isset($_POST["newBeerAbv"]) && isset($_POST["newBeerDescription"])) {
					$image = $_POST["newBeerImage"];
					$name = $_POST["newBeerName"];
					$abv = $_POST["newBeerAbv"];
					$description = $_POST["newBeerDescription"];
				}
				//##############
				// DELETE a beer
				if (isset($_POST["delete"])) {
					$delete = $_POST["delete"];
					// Get beer ID
					$beerDeleted = explode("-",$delete,2);
					$beerDeleted = $beerDeleted[1];
					echo $beerDeleted;
					//  Delete Beer
					$sql->prepare("DELETE FROM beers WHERE ID=\"$beerDeleted\"");
					echo "<h1>$beerDeleted Beer DELETED</h1>";
					if ($conn->query($sql) === TRUE) {
						echo "Deleted beer $beerDeleted";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
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
							echo "<br/><input class=\"btn-danger\" type=\"submit\" name=\"delete\" value=\"DELETE beer ID-$dbID\">";
							echo "</div>";
							echo "<div class=\"col-md-10\">";
							echo "<h3>$dbName</h3>";
							echo "<h4>$dbAbv</h4>";
							echo "<p class=\"beerDescription\">$dbDesc</p>";
							echo "</div>";
							echo "</div>";
							
							####### Form fields
							/*$beerTypesArr = array("Stout","Lager","Red","Blonde","IPA","Kolsch");
							echo "<select name=\"image\">";
							foreach ($beerTypesArr as $beerType) {
								$selected = "";
								if ($beerType == $dbImage) {
									$selected = " selected";
								}
								echo "<option value=\"$beerType\"$selected>$beerType</option>";
							}
							echo '</select></td>';
							echo "<td valign=\"top\"><input type=\"text\" name=\"name\" value=\"$dbName\"></td>";
							echo "<td valign=\"top\"><input type=\"text\" name=\"abv\" value=\"$dbAbv\"></td>";
							echo "<td><textarea name=\"description\" rows=\"3\" cols=\"50\">$dbDesc</textarea></td>"; */
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
				<table cellspacing="2">
					<tr>
						<th>Image</th>
						<th>Name</th>
						<th>ABV</th>
						<th>Description</th>
					</tr>
				<tr>
					<td valign="top"><select name="newBeerImage">
						<option value="">Choose Image</option>
						<option value="Pint">Pint</option>
						<option value="Stange">Stange</option>
						<option value="Goblet">Goblet</option>
						<option value="Snifter">Snifter</option>
						<option value="Weizen">Weizen</option>
						<option value="Mug">Mug</option>
						</select>
					</td>
					<td valign="top"><input type="text" name="newBeerName"></td>
					<td valign="top"><input type="text" name="newBeerAbv"></td>
					<td valign="top"><textarea name="newBeerDescription" rows="4" cols="30"></textarea></td>
				</tr>
				</table>
			</div>
			<div class="modal-footer">
				<input type="submit" value="Add Beer" class="btn-danger" /> 
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