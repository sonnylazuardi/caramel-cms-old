angular.module('CaramelApp.services', [])

.factory('Post', function($http) {
    var self = this;
    
    self.all = function() {
        return $http.get('api/posts');
    }


    self.get = function(slug) {
        return $http.get('api/posts/slug/'+slug);
    }
    return self;
});