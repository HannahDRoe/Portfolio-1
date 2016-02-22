
// app for Contact form Validation
var contactApp = angular.module('contactApp', [ngMessages]);

// controller for form

contactApp.controller("formCtrl", function($scope) {

        $scope.formSubmit = function(isValid) {


            if (isValid) {
            	alert("Yay! It's good!");
              

              
            }else{
                
                  alert('Nope not workin');
            }

        }

    });
