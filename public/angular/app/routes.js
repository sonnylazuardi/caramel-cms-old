angular.module('CaramelApp.routes', ['ui.router'])

.config(function($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/home');

    $stateProvider
        .state('home', {
            url: '/home',
            templateUrl: 'angular/partials/home.html',
            controller: 'HomeCtrl'
        })
        .state('post', {
            url: '/post/:slug',
            templateUrl: 'angular/partials/post.html',
            controller: 'PostCtrl'
        });
})