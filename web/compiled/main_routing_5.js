/**
 * Created by touremamadou on 14/08/2015.
 */

app.config(function($routeProvider) {
   $routeProvider
       .when('/',{
           templateUrl:'client/app/views/main.html'
       })
       .when('/restaurant',{
           templateUrl: 'restaurant.html',
           controller: 'RestaurantController'
       })
});