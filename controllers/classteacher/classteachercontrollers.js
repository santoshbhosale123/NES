                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      /**
 * Created by User on 10/19/14.
 */

app.controller('Aquadashboardctrl', ['$scope','$http', function($scope, $http) {

 $http.get("../../models/getorderreport.php")
    .success(function(data){
        $scope.reminderdata=data
        console.log($scope.reminderdata);
        //console.log($scope.reminderdata[0].order_total);

        var chartData=[];
        for(var i=0, l=$scope.reminderdata.length; i<l; i++ ){

          chartData.push({c: [{v: $scope.reminderdata[i].order_month }, {v: $scope.reminderdata[i].order_total}, {v: "orange"}]});
          
        }


$scope.chartObject = {
type: 'ColumnChart',
data: {
"cols": [
{label: "frameworks", type: "string"},
{label: "Orders", type: "number"},
{role: "style", type: "string"}
],
"rows":  chartData
}

};

$scope.chartObject.options = {
        'title': 'Annadmurti Aqua Monthly Orders',
        'color': 'orange'
        

    };
    });

 $http.get("../../models/expensereport.php")
    .success(function(data){
      console.log(data);
        $scope.ereminderdata=data
        console.log($scope.ereminderdata);
        //console.log($scope.reminderdata[0].order_total);

        var chartData1=[];
        for(var i=0, l=$scope.ereminderdata.length; i<l; i++ ){

          chartData1.push({c: [{v: $scope.ereminderdata[i].expense_month }, {v: $scope.ereminderdata[i].exp_total}, {v: "red"}]});
          
        }


$scope.chartObject1 = {
type: 'ColumnChart',
data: {
"cols": [
{label: "frameworks", type: "string"},
{label: "expense", type: "number"},
{role: "style", type: "string"}
],
"rows":  chartData1
}

};

$scope.chartObject1.options = {
        'title': 'Annadmurti Aqua Monthly Expense',
        'color': 'red'
        

    };
    });



 

}]);


app.controller('Addstudentctrl', ['$scope','$http','$window', function($scope,$http,$window) {


  $scope.reset = function() {
  delete $scope.students;
  $scope.addstudentform.$setPristine();
}


$scope.insertdata=function(students){
var tid = $window.localStorage.getItem('tid');
 // $scope.students = {};
 var stud_name = students.stud_name;
 
  var stud_rollno = students.stud_rollno;
  var stud_standard = students.stud_standard;
  var stud_parent_No = students.stud_parent_No;
  var stud_address = students.stud_address;
  var stud_dob = students.stud_dob;
  

  

console.log($scope.students);
   $http({
          method  : 'POST',
          url     : '../../models/insertclassstudents.php',
          data    : {'stud_name':stud_name,'stud_rollno':stud_rollno,'stud_standard':stud_standard,'stud_parent_No':stud_parent_No,'stud_address':stud_address,'stud_dob':stud_dob,'tid':tid} 
         })

     .success(function(data) {
            console.log(data);
              //$scope.msg = "data inserted successfully "
                        delete $scope.students;
                       /* swal({
  title: "Successfully!",
  text: "data inserted successfully!",
  type: "success",
  confirmButtonText: "Ok"
});*/
                      $scope.addstudentform.$setPristine();
            

          });

}
}]);


app.controller('Liststudentctrl', ['$scope','$http','$window','$localStorage', function($scope,$http,$window,$localStorage) {

  var tid = $window.localStorage.getItem('tid');
  //alert(tid);

  $scope.iseditid='';
    $scope.oldstudent='';
    
 /*   $http.get("../../models/getstudents.php")
    .success(function(data){

        $scope.data=data
        //console.log($scope.data);
    });  */

                 $http({
                     method  : 'POST',
                     url     : '../../models/getstudents.php',
                     data    : {'teacher_id': tid}, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                      console.log(data);
                       $scope.data=data

                     });





  $scope.deletestudents=function(stud_id,index){
    delete $scope.unsetedit();

    //alert('in delete function');


    /*swal({
      title: "Are you sure?",
      text: "Your will not be able to recover this imaginary file!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, delete it!",
      closeOnConfirm: true
    },*/
   /* function(){*/

console.log(stud_id);
     $http({
          method  : 'POST',
          url     : '../../models/deletestudent.php',
          data    : {'stud_id': stud_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
               
                        console.log(data);
                        $scope.data.splice(index, 1);
                        $scope.$watch();

                      });
          
              }

             $scope.isedit=function(id){
              return id==$scope.iseditid;
            }
            $scope.setedit=function(id,oldstudent){
              if($scope.oldstudent){
                var index1 = getIndexOf($scope.data, $scope.iseditid, "stud_id");
                $scope.data[index1]=angular.copy($scope.oldstudent);
                delete $scope.oldstudent;
              }
              $scope.iseditid=id;
              $scope.oldstudent=angular.copy(oldstudent);
              $scope.$watch();
            }
            $scope.unsetedit=function(id){
              $scope.iseditid='';
              $scope.data[id]=angular.copy($scope.oldstudent);
              $scope.$watch();

            }
            $scope.initval = function (students) {
                settings = window[settings];
                console.log(settings.awesome); //1
            };
            $scope.updatestudent=function(students,index){

              console.log(students);
              $http({
                     method  : 'POST',
                     url     : '../../models/updateliststudent.php',
                     data    : students, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                       console.log(data);
                        $scope.msg = "data inserted successfully ";
                        $scope.studentform.$setPristine();
                        delete $scope.oldstudent;
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

app.controller('Addmarksctrl', ['$scope','$http','$window', function($scope,$http,$window) {
  var tid = $window.localStorage.getItem('tid');

 $http({
                     method  : 'POST',
                     url     : '../../models/getstudents.php',
                     data    : {'teacher_id': tid}, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                      console.log(data);
                       $scope.data=data

                     });
   $scope.changedname=function(stud_name){
    alert(stud_name);

$http({
                     method  : 'POST',
                     url     : '../../models/getrollno.php',
                     data    : {'stud_name': stud_name}, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                      console.log(data);
                       $scope.data=data;
              $scope.rollno=data[0].stud_rollno;


                     });
   }

$scope.insertdata=function(){


  $scope.stud_name = angular.copy($scope.stud_name);

  console.log($scope.stud_name);
  //alert($scope.customer);
  $scope.test_type = angular.copy($scope.test_type);
  $scope.Marathi = angular.copy($scope.Marathi);
  $scope.Hindi = angular.copy($scope.Hindi);
  $scope.English = angular.copy($scope.English);
  $scope.Maths = angular.copy($scope.Maths);
  $scope.GSci = angular.copy($scope.GSci);
  $scope.SoSci = angular.copy($scope.SoSci);
  $scope.MAT = angular.copy($scope.MAT);
  $scope.Computer = angular.copy($scope.Computer);
  

   $http({
          method  : 'POST',
          url     : '../../models/insertmarks.php',
          data    : {'stud_name':$scope.stud_name,'test_type':$scope.test_type,'Marathi':$scope.Marathi,'Hindi':$scope.Hindi,'English':$scope.English,'Maths':$scope.Maths,'GSci':$scope.GSci,'SoSci':$scope.SoSci,'MAT':$scope.MAT,'Computer':$scope.Computer}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
            console.log(data);
              $scope.msg = "data inserted successfully "
                $scope.stud_name="";
                 $scope.test_type="";
                   $scope.Marathi="";
                    $scope.Hindi="";
                    $scope.English="";
                    $scope.Maths="";
                    $scope.GSci="";
                    $scope.SoSci="";
                   $scope.MAT="";
                    $scope.Computer="";
                  
               /*swal({
  title: "Successfully!",
  text: "data inserted successfully!",
  type: "success",
  confirmButtonText: "Ok"
});*/

                $scope.marksform.$setPristine();
            

          });

}






}]);
/*app.controller('Listunit1marksctrl', ['$scope','$http', function($scope,$http) {
  


    
}]);*/

