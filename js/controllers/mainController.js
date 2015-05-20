app.controller('mainController', function($scope, sharedScope, $http) {
    $scope.shared = sharedScope.shared;

    function loadDatabase() {
        $http.get("php/read.php").success(function(data) {
            $scope.shared.lessen = data.lessen;
        });
    }

    loadDatabase();

    $scope.getNumber = function(num) {
        return new Array(parseInt(num));
    };
    
    $scope.groepen = ["Alle groepen", 1,2,3,4,5,6,7,8];
    
    $scope.filter = {
        groep : $scope.groepen[0]
    };
    
    
    
    
});

