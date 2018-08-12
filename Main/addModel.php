<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Model</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="../Scripts/inventory.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
  <script src="../Scripts/app.js"></script>
  <script src="../Scripts/Controller/manufacturerController.js"></script>
  <script src="../Scripts/Controller/modelController.js"></script>
</head>
<body ng-app="myApp">
	<div class="container">
  	<h1 style="text-align: center;">Mini Car Inventory system</h1>
	
	<div class="content">
		<h2>Add model details</h2>
		<div id="addModel" style="width:100%;">
      <div id="addModelDetails" ng-controller="modelInsertController">

      <form name="userForm" ng-submit="submitForm(userForm.$valid)" novalidate>
        
        <div class="form-group">
            <label for="modelname">Model:</label>
            <input type="text" id="modelname" ng-model="modelname" required>
          </div>
				
        <div class="form-group"  ng-init="display_data()">
    				<div class="dropdown">
    				<label for="manufacturer">Manufacturer:</label>
    				<select ng-model="manufacturer_info" ng-options="manufacturername.manufacturer for manufacturername in manufacturernames" required>
            </select>
            </div>
        </div>	  
        
        <div class="form-group">
    			<label for="color">Color:</label>
    			<input type="text" class="form-control" id="color" ng-model="color" required>
  			</div>
  			
        <div class="form-group">
    			<label for="year">Manufacturing Year:</label>
    			<input type="text" class="form-control" id="year" ng-model="year" required>
  			</div>
  			
        <div class="form-group">
    			<label for="registration">Registration Number:</label>
    			<input type="text" class="form-control" id="registration" ng-model="registration" required>
  			</div>
  			
        <div class="form-group">
    			<label for="note">Note:</label>
    			<input type="text" class="form-control" id="note" ng-model="note" required>
  			</div>
  			
        <button type="submit" class="btn btn-primary btn-md" ng-disabled="userForm.$invalid" ng-click="insert_model_Data()" >Submit</button>
        
        <a href="../Main/inventoryIndex.php" class="btn btn-primary btn-md">Go back to Homepage</a>
      </form>
		</div>
	</div>
 </div>
</body>
</html>