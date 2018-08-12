<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mini Car Inventory</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
	<script src="../Scripts/app.js"></script>
	<script src="../Scripts/Controller/manufacturerController.js"></script>
</head>
<body ng-app="myApp">
	<div class="container">
  		<h1 style="text-align: center;">Mini Car Inventory system</h1>
		<div class="content" ng-controller="manufacturerInsertController" >
		<form name="userForm" ng-submit="submitForm(userForm.$valid)" novalidate>
			<h2>Add new Manufacturer</h2>
				 <div class="form-group">
    				<label for="manufacturername">Manufacturer:</label>
    				<input type="text" name="manufacturername" ng-model="manufacturername" required/>
    				<button type="submit" class="btn btn-primary btn-md" ng-disabled="userForm.$invalid"  ng-click="insertData()">Submit</button>
    				<a href="../Main/inventoryIndex.php" class="btn btn-primary btn-md">Go Back to Home Page</a>
  				</div>
  		</form>  				
		</div>
	</div>
</body>
</html>