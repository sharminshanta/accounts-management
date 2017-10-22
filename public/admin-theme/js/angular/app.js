var app = angular.module('EventManager', ['ngResource', 'ngFlash', 'toastr'], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('{||');
    $interpolateProvider.endSymbol('||}');
})
    .run(function ($http) {
        $http.defaults.headers.common["X-Requested-With"] = 'XMLHttpRequest';
});


app.controller('MainCtrl', function($scope, $timeout){

});