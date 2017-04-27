
var app = angular.module('app',['ngRoute','ngStorage','validation.match','autocomplete','datePicker','googlechart','datatables','datatables.buttons']);

app.config(function($routeProvider) {
    $routeProvider
    .when('/', {
            templateUrl : 'dashboard.php',
            controller  : 'Dashboard'
        })

        .when('/myaccount', {
            templateUrl : 'myaccount.php',
            controller  : 'Addmyaccountctrl'
        })


     .when('/aquadashboard', {
            templateUrl : 'aqua/aquadashboard.php',
            controller  : 'Aquadashboardctrl'
        })
     .when('/addstudent', {
            templateUrl : 'classteacher/addstudent.php',
            controller  : 'Addstudentctrl'
        })
     .when('/liststudent', {
            templateUrl : 'classteacher/liststudent.php',
            controller  : 'Liststudentctrl'
        })

      .when('/addmarks', {
            templateUrl : 'classteacher/addmarks.php',
            controller  : 'Addmarksctrl'
        })
      .when('/listunitImarks', {
            templateUrl : 'classteacher/listunitImarks.php',
            controller  : 'ListunitImarksctrl'
        })


       .when('/listunitIImarks', {
            templateUrl : 'classteacher/listunitIImarks.php',
            controller  : 'ListunitIImarksctrl'
        })

         .when('/firstsemesterresult', {
            templateUrl : 'classteacher/firstsemesterresult.php',
            controller  : 'Firstsemesterresultctrl'
        })

      /*.when('/listunit1marks', {
            templateUrl : 'classteacher/listunit1marks.php',
            controller  : 'Listunit1marksctrl'
        })*/
    



     .when('/classteacherlist', {
            templateUrl : 'classteacherlist.php',
            controller  : 'Classsteacherlistctrl'
        })
      .when('/addclassteacher', {
            templateUrl : 'addclassteacher.php',
            controller  : 'Addclassteacherctrl'
        })

      
     
        



      /*.when('/addexpensive', {
            templateUrl : 'addexpensive.php',
            controller  : 'Addexpensive'
        })
      .when('/listexpensive', {
            templateUrl : 'listexpensive.php',
            controller  : 'Listexpensive'
        })*/

});
