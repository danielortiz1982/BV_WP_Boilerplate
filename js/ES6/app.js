(()=>{
	const 		app = angular.module("bvBoilerplate", ['ngRoute']);
	const  viewPath = "http://localhost:8888/WP_Bolierplate/wp-content/themes/bv_boilerplate/partials/";

	app.controller('sampleCtrl', ['$scope', '$http', ($scope, $http)=>{
		
		$scope.sample = 'Hello Angular!';
		let postEndpoint = 'http://localhost:8888/WP_Bolierplate/wp-post-api/';
		$http.get(postEndpoint)
			.then((response)=>{
				$scope.wpPost = response.data;
			});
	}]);

	//end of controllers

})();