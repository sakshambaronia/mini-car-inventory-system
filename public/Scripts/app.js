var app = angular.module("myApp",[]);

app.controller('modelInsertController', function($scope) {

  // function to submit the form after all validation has occurred            
  $scope.submitForm = function(isValid) {

    // check to make sure the form is completely valid
    if (isValid) {
      alert('Form is valld');
    }

  };

});

app.controller('manufacturerInsertController', function($scope) {

  // function to submit the form after all validation has occurred            
  $scope.submitForm = function(isValid) {

    // check to make sure the form is completely valid
    if (isValid) {
      alert('Form is valld');
    }

  };

});