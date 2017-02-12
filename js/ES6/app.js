(()=>{
	const 		app = angular.module("bvBoilerplate", ['ngRoute']);
	const  viewPath = "http://localhost:8888/WP_Bolierplate/wp-content/themes/bv_boilerplate/partials/";

	app.controller('sampleCtrl', ['$scope', '$http', ($scope, $http)=>{

		$scope.sample = 'Hello Angular!';

		$http.get('http://localhost:8888/WP_Bolierplate/wp-post-api/')
			.then((response)=>{
				$scope.wpPost = response.data;
			});

	}]);

	//end of controllers

})();