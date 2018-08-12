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
	<script src="../Scripts/Controller/modelController.js"></script>
</head>
<body ng-app="myApp">
	<div class="container">
  		<h1 style="text-align: center;">Mini Car Inventory system</h1>
		<div class="content" ng-controller="modelFetchController" ng-init="display_model_data()">
			<h2>Sell/Display car models</h2>
			<a href="../Main/inventoryIndex.php" class="btn btn-primary btn-md">Go back to Homepage</a>
			<div><br><br></div>
			<table class="table table-striped">
				<tr>
					<th>ID</th>
					<th>Manufacturer</th>
					<th>Model</th>
					<th>Count</th>
					<th>Link</th>
				</tr>
				<tr ng-repeat="model in models">
					<td>{{$index + 1 | number}}</td>
					<td>{{model.manufacturer}}</td>
					<td>{{model.model}}</td>
					<th>{{model.count}}</th>
					<td><input type="button" class="btn btn-primary btn-sm" value="Show Details" ng-click="OpenPopupWindow($index)"/></td>
				</tr>
			</table>	 				
		</div>
	</div>
</body>
</html> 