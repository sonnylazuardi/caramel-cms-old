angular.module('CaramelApp.controllers', [])

.controller('HomeCtrl', function($scope, Post) {
    $scope.posts = [];
    Post.all().success(function(data) {
        $scope.posts = data;
    });
})

.controller('PostCtrl', function($scope, $stateParams, Post){
    $scope.post = {};
    Post.get($stateParams.slug).success(function(data) {
        $scope.post = data;
    });
});