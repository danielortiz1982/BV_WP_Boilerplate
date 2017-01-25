(function(){
	var app = angular.module("bvBoilerplate", ['ngRoute']);
	var viewPath = "http://localhost:8888/WP_Bolierplate/wp-content/themes/bv_boilerplate/partials/";
	app.config(function($routeProvider, $locationProvider){
		$routeProvider
			.when('/', {
				templateUrl: viewPath + 'main.html',
        		controller: 'wpCtrl'
			})
			.otherwise('/');
	});
	app.controller('wpCtrl', ['$scope', '$http', '$routeParams', function($scope, $http, $routeParams){
		$http.get("WP_Bolierplate/wp-post-api/")
			.then(function(response){
				$scope.bvPosts = response.data;
			});
	}]);
})();