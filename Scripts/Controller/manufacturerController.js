//var app = angular.module("myApp",[]);

app.controller("manufacturerFetchController",function($scope,$http){
	$scope.display_data=function(){      
            $http.get("../ConfigDao/ManufacturerSelectDao.php")
            .success(function(data){
            		$scope.manufacturernames=data;
            });
      }
});

app.controller('manufacturerInsertController',function($scope,$http){  
        $scope.insertData=function(){      
            $http.post("../ConfigDao/ManufacturerDao.php", {manufacturername:$scope.manufacturername})
            .success(function(data){
            		alert(data);
                    $scope.manufacturername = "";
            });
        }
});

