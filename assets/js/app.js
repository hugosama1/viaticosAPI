var llenarFormatosApp= angular.module('llenarFormatosApp', [],function($interpolateProvider){
	 $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

llenarFormatosApp.controller('MainCtrl', ['$scope', function($scope){
	$scope.contAsistentes = 0;
	$scope.Asistentes = [{
		nombre :"",
		puesto:"",
		centro:"",
		funcion:""
	}];
    $scope.addAsistente = function() {
      $scope.contAsistentes++;
      $scope.Asistentes.push({
		nombre :"",
		puesto:"",
		centro:"",
		funcion:""
		});
    };
    $scope.removeAsistente =function() {
    	if($scope.contAsistentes==0) {
    		return;
    	}
    	$scope.contAsistentes--;
    	$scope.Asistentes.pop();
    }
}]);