//var app = angular.module("myApp");

app.controller('modelInsertController', ['$scope', '$http', '$timeout', function($scope, $http, $timeout){ 
    $scope.display_data=function(){      
            $http.get("../ConfigDao/ManufacturerSelectDao.php")
            .success(function(data){
                    $scope.manufacturernames=data;
            });
      };
    $scope.insert_model_Data = function (manufacturer,modelname,color, year,registration,note,picture){
        var data = {
            manufacturer:$scope.manufacturer_info.manufacturer,
            modelname:$scope.modelname,
            color: $scope.color,
            year: $scope.year,
            registration:$scope.registration,
            note:$scope.note,
            picture:$scope.picture
        }
        
        $http.post('../ConfigDao/ModelDao.php', JSON.stringify(data))
        .success(function(data){
            alert(data);
            location.reload();
            //location.href = '../Main/sellDisplayModel.php;
            $scope.msg = true;
            $timeout(function(){$scope.msg = false;}, 1000);
        });
    }
    
}]);


app.controller("modelFetchController",function($scope,$http,$window){
    $scope.display_model_data=function(){      
            $http.get("../ConfigDao/ModelSelectDisplayDao.php")
            .success(function(data){
                    $scope.models=data;
            });
    };
    $scope.OpenPopupWindow = function (index) {
            var $popup = $window.open("../Main/sellDisplayPopup.php", "popup", "width=900,height=500,left=10,top=150");
            $popup.model = $scope.models[index];
    }; 
});

app.controller("modelBindController",function($scope,$http,$window){
        $scope.model = $window.model;
        $scope.modelsinfo = [];

        var mydata = {
            manufacturer:$scope.model.manufacturer,
            model:$scope.model.model
        }

        $scope.fetchAllModels=function(){
            $http.get("../ConfigDao/ModelFetchAllDao.php", {
                params:mydata
            })
            .success(function(data){
                    $scope.modelsinfo=data;
            });
        };
        $scope.deleteOnSold=function(id){    
            $http.post("../ConfigDao/ModelDeleteDao.php", {
                data:id
            })
            .success(function(data){
                    alert(data);
                    $window.close();
            });
        };
});

