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
		<div class="content" ng-controller="modelBindController" ng-init="fetchAllModels()">
		<h2>Sell/Display car models</h2>
		<div>
			<table class="table table-striped">
				<tr>
					<th>ID</th>
					<th>Manufacturer</th>
					<th>Model</th>
					<th>Color</th>
					<th>Registration Number</th>
					<th>Manufacturing Year</th>
					<th>Link</th>
				</tr>
				<tr ng-repeat="modelinfo in modelsinfo">
					<?php 
						$id="{{modelinfo.id}}";
					?>
					<th>{{modelinfo.id}}</th>
					<th>{{modelinfo.manufacturer}}</th>
					<th>{{modelinfo.model}}</th>
					<th>{{modelinfo.color}}</th>
					<th>{{modelinfo.registration_number}}</th>
					<th>{{modelinfo.manufacturing_year}}</th>
					<td><input type="button" class="btn btn-primary btn-sm"  value="Sold" ng-click="deleteOnSold(modelinfo.id)"/></td>
				</tr>
			</table>	 	
			
		</div>
				 				
		</div>
	</div>
</body>
</html>