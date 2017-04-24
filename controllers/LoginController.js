var loginapp = angular.module('nesLogin', ['ngRoute','ngStorage']);

loginapp.controller('loginCtrl',['$scope', '$http', '$window', '$localStorage', function($scope, $http, $window, $localStorage, $location) {
// $scope.data = {};
    $scope.login=function(loginteacher){
        $scope.data = angular.copy(loginteacher);
        //console.log($scope.data);
     $http({
          method  : 'POST',
          url     : 'LoginAction.php',
          data    : $scope.data, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     
     .success(function(data) {

              console.log(data);
              tid = data[0].teacher_id;
              tname = data[0].teacher_username;
             
              trole = data[0].teacher_role;

              $scope.$storage = $localStorage;
                if(!tid == ''){
                $window.localStorage.setItem('tid',tid);
                $window.localStorage.setItem('tname',tname);
              
                $window.localStorage.setItem('trole',trole);
                $window.localStorage.setItem('islogin','true');
                //$scope.data2 = $window.localStorage.getItem('tid');
                //alert($scope.data2);
                window.location.replace("views/teacher/dashboardarea.php");
              }else{
                         /*  swal({
                title: "something went Wrong!",
                text: "Wrong username or password!",
                type: "success",
                confirmButtonText: "Ok"
              });*/
                window.location.replace("http://localhost/nes/login.php");

              }
              //$window.location.href="views/teacher/teacher.php";
              
            

          });

}

}]);


app.controller('teacherbarctrl',['$scope', '$http', '$window', '$localStorage', function($scope, $http, $window, $localStorage, $location) {
                 
                  $scope.tid = $window.localStorage.getItem('tid');
                  $scope.tname = $window.localStorage.getItem('tname');
                  $scope.trole = $window.localStorage.getItem('trole');
                  $scope.islogin = $window.localStorage.getItem('islogin');

    $scope.logout=function(){

                 $window.localStorage.setItem('tid','');
                 $window.localStorage.setItem('tname','');
                 $window.localStorage.setItem('trole','');
                 $window.localStorage.setItem('islogin','false');
                 if($window.localStorage.getItem('tid') == ''){
                  window.location.replace("http://localhost/nes/login.php");
                 }
            }

}]);