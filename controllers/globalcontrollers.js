/**
 * Created by User on 10/19/14.
 */
 app.controller('Dashboard', ['$scope', '$http', '$window', '$localStorage', function($scope, $http, $window, $localStorage) {
    if($window.localStorage.getItem('tid') == ''){
    window.location.replace("http://localhost/nes/");
  }


  $scope.isclassteacher = function(){
$scope.trole = $window.localStorage.getItem('trole');

    if ($scope.trole == "classteacher") {
 return true;
  };
   if ($scope.trole == "Principal") {
return false;
   };
 
  }
  

 
  $scope.isteacher = function(){
$scope.trole = $window.localStorage.getItem('trole');

     if ($scope.trole == "Principal") {
return true;
  };
   if ($scope.trole == "classteacher") {
return false;
   };

  }

}]);

app.controller('Aqua', ['$scope', '$http', '$window', '$localStorage', function($scope, $http, $window, $localStorage) {
    if($window.localStorage.getItem('tid') == ''){
    window.location.replace("http://localhost/nes/");
  }
}]);


app.controller('Addclassteacherctrl', ['$scope', '$http', '$window', '$localStorage', function($scope, $http, $window, $localStorage) {
  //$scope.obj={'idisable':false};
          if($window.localStorage.getItem('tid') == ''){
              window.location.replace("http://localhost/nes/");
            }
             $scope.reset = function() {
  delete $scope.teacher;
  $scope.addteacherform.$setPristine();

}

           $scope.insertdata=function(teacher){
            alert('ss');
              $scope.teacher = {};
           $scope.teacher = angular.copy(teacher);
           console.log($scope.teacher);
              $http({
                     method  : 'POST',
                     url     : '../../models/insertteacher.php',
                     data    : $scope.teacher, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                      /* console.log(data);*/
                         $scope.msg = "data inserted successfully ";

                        delete $scope.teacher;
                       /*  swal({
  title: "Successfully!",
  text: "teacher added successfully!",
  type: "success",
  confirmButtonText: "Ok"
});*/
                        $scope.addteacherform.$setPristine();
           
                     });
           
           }
 }]);


app.controller('Classsteacherlistctrl', ['$scope','$http', '$window', '$localStorage', '$filter', function($scope, $http, $window, $localStorage, $filter) {

    $scope.iseditid='';
    $scope.oldteacher='';

              if($window.localStorage.getItem('tid') == ''){
                window.location.replace("http://localhost/nes/");
              }
                $http.get("../../models/getteacher.php")
                .success(function(data){
                    $scope.data=data
                    //console.log($scope.data);
                });


              $scope.deleteuser=function(teacher_id,index){
                //alert('in delete function');
               /* swal({
      title: "Are you sure?",
      text: "Your will not be able to recover this imaginary file!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, delete it!",
      closeOnConfirm: true
    },*/
/*    function(){*/

            console.log(teacher_id);
                 $http({
                      method  : 'POST',
                      url     : '../../models/deleteteacher.php',
                      data    : {'teacher_id':teacher_id}, //forms user object
                      headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                     })
                 .success(function(data) {
                        
                        console.log(data);
                        $scope.data.splice(index, 1);
                        $scope.$watch();

                      });
          
              }
               
            /*
            */
              $scope.logout=function(){

                 $window.localStorage.setItem('tid','');
                 $window.localStorage.setItem('tname','');
                 $window.localStorage.setItem('trole','');
                 $window.localStorage.setItem('islogin','false');
            }
           //button work functions and update operation
            $scope.isedit=function(id){
              return id==$scope.iseditid;
            }
            $scope.setedit=function(id,oldteacher){
              if($scope.oldteacher){
                var index1 = getIndexOf($scope.data, $scope.iseditid, "teacher_id");
                $scope.data[index1]=angular.copy($scope.oldteacher);
                delete $scope.oldteacher;
              }
              $scope.iseditid=id;
              $scope.oldteacher=angular.copy(oldteacher);
              $scope.$watch();
            }
            $scope.unsetedit=function(id){
              $scope.iseditid='';
              console.log($scope.oldteacher);
              $scope.data[id]=angular.copy($scope.oldteacher);
              delete $scope.oldteacher;
              $scope.$watch();
            }
            $scope.initval = function (teacher) {
                settings = window[settings];
                console.log(settings.awesome); //1
            };
            $scope.updateuser=function(teacher,index){
              $http({
                     method  : 'POST',
                     url     : '../../models/updateteacher.php',
                     data    : teacher, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                      /* console.log(data);*/
                        $scope.msg = "data inserted successfully ";
                        $scope.addteacherform.$setPristine();
                        delete $scope.oldteacher;
                        $scope.iseditid='';
                        $scope.$watch();
                     });
           
           }


           function getIndexOf(arr, val, prop) {
              var l = arr.length,
                k = 0;
              for (k = 0; k < l; k = k + 1) {
                if (arr[k][prop] === val) {
                  return k;
                }
              }
              return false;
            }

}]);

app.controller('Addmyaccountctrl', ['$scope', '$http', '$window', '$localStorage', function($scope, $http, $window, $localStorage) {
   if($window.localStorage.getItem('tid') == ''){

                window.location.replace("http://localhost/nes/");
              }
              var csid = $window.localStorage.getItem('tid');
              //alert(csid);
                 $http({
                      method  : 'POST',
                      url     : '../../models/teacherdetails.php',
                      data    : {'teacher_id':csid}, //forms user object
                      headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                     })
                 .success(function(data) {
                        
                        console.log(data);
                      $scope.teacherdetails = data;

                        //console.log(data[0].teacher_username);
                        $scope.teacher_id = data[0].teacher_id;
                        $scope.username = data[0].teacher_username;
                        $scope.fullname = data[0].teacher_name;
                        $scope.email=data[0].teacher_email;
                        $scope.phone=data[0].teacher_number;
                        $scope.userrole=data[0].teacher_role;
                        //$scope.data.splice(index, 1);
                        //$scope.$watch();

                      });

                       $scope.updateteacher=function(teacher_id){
                        $scope.teacher_id=angular.copy($scope.teacher_id);
                        console.log($scope.teacher_id);
                        $scope.username=angular.copy($scope.username);
                        console.log($scope.username);
                        $scope.fullname=angular.copy($scope.fullname);
                        console.log($scope.fullname);
                        $scope.email=angular.copy($scope.email);
                        console.log($scope.email);
                        $scope.phone=angular.copy($scope.phone);
                        console.log($scope.phone);
                        $scope.userrole = angular.copy($scope.userrole);
                        console.log($scope.userrole);
              $http({
                     method  : 'POST',
                     url     : '../../models/updatemyaccount.php',
                     data    : {'teacher_id':$scope.teacher_id,'username':$scope.username,'fullname':$scope.fullname,'email':$scope.email,'phone':$scope.phone}, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                       console.log(data);

               swal({
  title: "Successfully!",
  text: "teacher updated successfully!",
  type: "success",
  confirmButtonText: "Ok"
});
                        //$scope.msg = "data inserted successfully ";
                        //$scope.addteacherform.$setPristine();
                        //delete $scope.oldteacher;
                        //$scope.iseditid='';
                        //$scope.$watch();
                     });
           
           }





 
 }]);

/*app.controller('Addexpensive' , ['$scope','$http', function($scope,$http) {

  $scope.reset = function() {
  delete $scope.expensive;
  $scope.addexpensiveform.$setPristine();

}

           $scope.insertdata=function(expensive){
             //console.log(expensive);
              $scope.expensive = {};
           $scope.expensive = angular.copy(expensive);
           console.log($scope.expensive);
              $http({
                     method  : 'POST',
                     url     : '../../models/insertexpensive.php',
                     data    : $scope.expensive, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                      console.log(data);
                         $scope.msg = "data inserted successfully ";

                        delete $scope.expensive;
                        $scope.addexpensiveform.$setPristine();
           
                     });
           
           }
 }]);

app.controller('Listexpensive', ['$scope','$http', function($scope,$http) {
 $scope.iseditid='';
    $scope.oldexpensive='';

  $http.get("../../models/getexpensivedetails.php")
    .success(function(data){
        $scope.data=data
        //console.log($scope.data);
    });



  $scope.deleteexpensive=function(expensive_id,index){
   // alert(vehicle_id);
    swal({
      title: "Are you sure?",
      text: "Your will not be able to recover this imaginary file!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, delete it!",
      closeOnConfirm: true
    },
    function(){

console.log(expensive_id);
     $http({
          method  : 'POST',
          url     : '../../models/deleteexpensive.php',
          data    : {'expensive_id':expensive_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                        $scope.data.splice(index, 1);
                        $scope.$watch();

                      });
            });
  }




             $scope.isedit=function(id){
              return id==$scope.iseditid;
            }
            $scope.setedit=function(id,oldexpensive){
              if($scope.oldexpensive){
                var index1=getIndexOf($scope.data,$scope.iseditid,"expensive_id");
                $scope.data[index1]=angular.copy($scope.oldexpensive);
                delete $scope.oldexpensive;
              }
              $scope.iseditid=id;
              $scope.oldexpensive=angular.copy(oldexpensive);
              $scope.$watch();
            }
            $scope.unsetedit=function(id){
              $scope.iseditid='';
              $scope.data[id]=angular.copy($scope.oldexpensive);
              $scope.$watch();
            }
            $scope.initval = function (expensive) {
                settings = window[settings];
                console.log(settings.awesome); //1
            };
            $scope.updateexpensive=function(expensive,index){
              console.log(expensive);
              $http({
                     method  : 'POST',
                     url     : '../../models/updateexpensivedetails.php',
                     data    : expensive, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                       console.log(data);
                        $scope.msg = "data inserted successfully ";
                        $scope.listexpensiveform.$setPristine();
                        delete $scope.oldexpensive;
                        $scope.iseditid='';
                        $scope.$watch();
                     });
           
           }
             function getIndexOf(arr, val, prop) {
              var l = arr.length,
                k = 0;
              for (k = 0; k < l; k = k + 1) {
                if (arr[k][prop] === val) {
                  return k;
                }
              }
              return false;
            }
          

}]);*/

app.controller('Aquareportctrl' , ['$scope','$http', function($scope,$http) {

$scope.changedate=function(startdt,enddt){
             
             var d = startdt;
              
              var sdate = d.getFullYear() + '-' + ('0' + (d.getMonth()+1)).slice(-2) + '-' + ('0' + d.getDate()).slice(-2);
              

            var e = enddt;
             var edate = e.getFullYear() + '-' + ('0' + (e.getMonth()+1)).slice(-2) + '-' + ('0' + e.getDate()).slice(-2);
              //alert(edate);

               /* $http({
                    method  : 'POST',
                    url     : '../../models/exportexcel.php',
                    data    : {'startdt':sdate,'enddt':edate}, //forms user object
                    headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                   })
                  .success(function(data) {
                      console.log(data);

                      $scope.data=data
                        //alasql('SELECT * INTO XLSX("aquaorders.xlsx",{headers:true}) FROM ?',[data]);

                  });*/

                    
  }
$scope.exportData = function (startdt,enddt) {
            
                    
                     var d = startdt;
                      var sdate = d.getFullYear() + '-' + ('0' + (d.getMonth()+1)).slice(-2) + '-' + ('0' + d.getDate()).slice(-2);
                        alert(sdate);
                 var e = enddt;
                 var edate = e.getFullYear() + '-' + ('0' + (e.getMonth()+1)).slice(-2) + '-' + ('0' + e.getDate()).slice(-2);
              alert(edate);
                                      


                  $http({
                    method  : 'POST',
                    url     : '../../models/exportexcel.php',
                    data    : {'startdt':sdate,'enddt':edate}, //forms user object
                    headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                   })
                  .success(function(data) {
                      console.log(data);
                        alasql('SELECT * INTO XLSX("aquaorders.xlsx",{headers:true}) FROM ?',[data]);

                  });
              $scope.startdt="";
              $scope.enddt="";

                
            }


}]);

app.controller('Gasreportctrl' , ['$scope','$http', function($scope,$http) {





}]);