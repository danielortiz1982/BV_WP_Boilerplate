"use strict";

(function () {
	var app = angular.module("bvBoilerplate", ['ngRoute']);
	var viewPath = "http://localhost:8888/WP_Bolierplate/wp-content/themes/bv_boilerplate/partials/";

	app.controller('sampleCtrl', ['$scope', '$http', function ($scope, $http) {

		$scope.sample = 'Hello Angular!';
		var postEndpoint = 'http://localhost:8888/WP_Bolierplate/wp-post-api/';
		$http.get(postEndpoint).then(function (response) {
			$scope.wpPost = response.data;
		});
	}]);

	//end of controllers
})();