//Controler for Left Sliding Nav

var app = angular.module("NavApp", []);

app.controller("navCtrl", function($scope, $rootScope) {

    $scope.leftVisible = false;
    
   

    $scope.showLeft = function(e) {
        $scope.leftVisible = true;
        e.stopPropagation();
    };

    

    function _close() {
        $scope.$apply(function() {
            $scope.leftVisible = false; 
        });
    }

    $rootScope.$on("documentClicked", _close);
    $rootScope.$on("escapePressed", _close);
});

app.directive("nav", function() {
    return {
        restrict: "E",
        template: "<div class=\"leftPushNav\" ng-class='{ show: visible, left: alignment === \"left\" }' ng-transclude></div>",
        transclude: true,
        scope: {
            visible: "=",
            alignment: "@"
        }
    };
});

app.run(function($rootScope) {
    document.addEventListener("keyup", function(e) {
        if (e.keyCode === 27)
            $rootScope.$broadcast("escapePressed", e.target);
    });

    document.addEventListener("click", function(e) {
        $rootScope.$broadcast("documentClicked", e.target);
    });
});