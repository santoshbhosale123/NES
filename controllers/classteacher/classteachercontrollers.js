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

app.controller('Addaquaproductctrl', ['$scope','$http', function($scope,$http) {
   $scope.reset = function() {
  delete $scope.addaquaproduct;
  $scope.addaquaproductform.$setPristine();
}

$scope.insertdata=function(addaquaproduct){
  $scope.addaquaproduct = {};
$scope.addaquaproduct = angular.copy(addaquaproduct);
console.log($scope.addaquaproduct);
   $http({
          method  : 'POST',
          url     : '../../models/insertaquaproduct.php',
          data    : $scope.addaquaproduct, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
            console.log(data);
              //$scope.msg = "data inserted successfully "
               delete $scope.addaquaproduct;
               swal({
  title: "Successfully!",
  text: "data inserted successfully!",
  type: "success",
  confirmButtonText: "Ok"
});
       $scope.addaquaproductform.$setPristine();
            

          });

}
}]);
app.controller('Listaquaproductctrl', ['$scope','$http', function($scope,$http) {
    
    $http.get("../../models/getaquaproduct.php")
    .success(function(data){
        $scope.data=data
        //console.log($scope.data);
    });


  $scope.deleteuser=function(product_id,index){
    //alert('in delete function');
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

console.log(product_id);
     $http({
          method  : 'POST',
          url     : '../../models/deleteaquaproduct.php',
          data    : {'product_id':product_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                        $scope.data.splice(index, 1);
                        $scope.$watch();

                      });
            });

}


}]);

app.controller('Addaquaorderctrl', ['$scope','$http', function($scope,$http) {


//$scope.datePicker.date = {startDate: null, endDate: null};



  
   $scope.reset = function() {
  delete $scope.addaquaorder;
  $scope.addaquorderform.$setPristine();
}
  $http.get("../../models/getaquacustomer.php")
    .success(function(data){
        $scope.customerdata=data
        //console.log($scope.customerdata);
    });

     $http.get("../../models/getvehicledetails.php")
    .success(function(data){
        $scope.vehicledata=data
        //console.log($scope.customerdata);
    });

     $http.get("../../models/getjardetails.php")
    .success(function(data){
        $scope.jardata=data
        //console.log($scope.customerdata);
    });


$scope.changedjar=function(jar_id){
$scope.jar_id = {};
$scope.jar_id = angular.copy(jar_id);
console.log($scope.jar_id);
$http({
          method  : 'POST',
          url     : '../../models/getjardetailsbyid.php',
          data    : {'jar_id':jar_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
      console.log(data);
           // $scope.productprice=data;
           $scope.addaquaorder.order_quantity = 1;
           //console.log(data[0].jar_price);
            var jprice = data[0].jar_price;
            $scope.addaquaorder.order_price = jprice;
            //console.log(order_price);
           // var fpquantity = $scope.pquantity;
           // var totalprice = fprice*fpquantity;
           // $scope.tprice = totalprice;
          });


}

$scope.changedjarqt=function(order_quantity,jar_id){
  //alert('test');
$scope.order_quantity = {};
$scope.jar_id = {};
$scope.order_quantity = angular.copy(order_quantity);
$scope.jar_id = angular.copy(jar_id);
console.log($scope.order_quantity);
console.log($scope.jar_id);
$http({
          method  : 'POST',
          url     : '../../models/getjardetailsbyid.php',
          data    : {'jar_id':jar_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
            $scope.productprice=data;
            console.log(data[0].jar_price);
            var fprice = data[0].jar_price;
            var fpquantity = $scope.order_quantity;
            var totalprice = fprice*fpquantity;
            $scope.addaquaorder.order_price = totalprice;
          });


}




  $scope.insertdata=function(addaquaorder){
   
  $scope.addaquaorder = {};
$scope.addaquaorder = angular.copy(addaquaorder);
console.log($scope.addaquaorder);
   $http({
          method  : 'POST',
          url     : '../../models/insertaquaorder.php',
          data    : $scope.addaquaorder, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
            console.log(data);
              //$scope.msg = "data inserted successfully "
               delete $scope.addaquaorder;
               swal({
  title: "Successfully!",
  text: "data inserted successfully!",
  type: "success",
  confirmButtonText: "Ok"
});
                      $scope.addaquorderform.$setPristine();
            

          });

}

  }]);


app.controller('Listaquaorder', ['$scope','$http','DTOptionsBuilder', function($scope,$http,DTOptionsBuilder) {




  $scope.dtOptions = DTOptionsBuilder.newOptions()
        .withDOM('frtip')
        .withPaginationType('full_numbers')

        // Active Buttons extension
        .withButtons([
          'colvis',
            'pdf',
           'excel',
           
            
        ]);
    $('#dtOptions').dataTable( {
  "srollY": "200px"
} );
 
// Some time later, recreate with just filtering (no scrolling)
$('#dtOptions').dataTable( {
  "filter": false,
  "destroy": true
} )
    /*table = $('#dtOptions').DataTable( {
    paging: false
} );
 
table.destroy();
 
table = $('#dtOptions').DataTable( {
    searching: false
} );*/
         /*var table = $('#dtOptions').DataTable();
 
$('#refresh').on( 'click', function () {
    $.getJSON( 'newTable', null, function ( json ) {
        table.destroy();
        $('#dtOptions').empty(); // empty in case the columns change
 
        table = $('#dtOptions').DataTable( {
            columns: json.columns,
            data:    json.rows
        } );
    } );
}                */                                                                                                                                                                                                                                                                                                                                                                                                                                                       /* var table = $('#dtOptions').DataTable();
 
$('#tableDestroy').on( 'click', function () {
    table.destroy();
} );                                                                                                     
*/


  $scope.iseditid='';
    $scope.oldorder='';

  $http.get("../../models/getorderdetails.php")
    .success(function(data){
        $scope.data=data
        //console.log($scope.data);
    });



  $scope.deleteorder=function(order_id,index){
    //alert('in delete function');
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

console.log(order_id);
     $http({
          method  : 'POST',
          url     : '../../models/deleteorder.php',
          data    : {'order_id':order_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                        $scope.data.splice(index, 1);
                        $scope.$watch();

                      });
            });
  }

            $scope.setreminder=function(order_id,index){
               
console.log(order_id);
//$scope.setrem = angular.copy(order_id);
//console.log($scope.setrem);
     $http({
          method  : 'POST',
          url     : '../../models/setreminder.php',
          data    : {'order_id':order_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
              swal({
  title: "Successfully!",
  text: "reminder set successfully!",
  type: "success",
  confirmButtonText: "Ok"
});
              console.log(data);
                       $scope.data[index].order_reminder=1;
                       $scope.$watch();

                      });
            }


            $scope.unsetreminder=function(order_id,index){
             
//console.log(data);
//$scope.setrem = angular.copy(order_id);
//console.log($scope.setrem);
     $http({
          method  : 'POST',
          url     : '../../models/unsetreminder.php',
          data    : {'order_id':order_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
               swal({
  title: "Successfully!",
  text: "reminder Unset successfully!",
  type: "success",
  confirmButtonText: "Ok"
});
              console.log(data);
                      $scope.data[index].order_reminder=0;
                       $scope.$watch();

                      });
            }

            $scope.changedate=function(startdt,enddt){
             
             var d = startdt;
              
              var sdate = d.getFullYear() + '-' + ('0' + (d.getMonth()+1)).slice(-2) + '-' + ('0' + d.getDate()).slice(-2);
              

            var e = enddt;
             var edate = e.getFullYear() + '-' + ('0' + (e.getMonth()+1)).slice(-2) + '-' + ('0' + e.getDate()).slice(-2);
              //alert(edate);

                $http({
                    method  : 'POST',
                    url     : '../../models/exportexcel.php',
                    data    : {'startdt':sdate,'enddt':edate}, //forms user object
                    headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                   })
                  .success(function(data) {
                      console.log(data);

                      $scope.data=data
                        //alasql('SELECT * INTO XLSX("aquaorders.xlsx",{headers:true}) FROM ?',[data]);

                  });

                    
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
             

            $scope.setstatus=function(order_id,index){
               swal({
  title: "Successfully!",
  text: "status set successfully!",
  type: "success",      
  confirmButtonText: "Ok"
});
//console.log(data);
//$scope.setstatus = angular.copy(order_id);
//console.log($scope.setrem);
     $http({
          method  : 'POST',
          url     : '../../models/setstatus.php',
          data    : {'order_id':order_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                     //   $scope.data.splice(index, 1);
                      //  $scope.$watch();

                      });
            }

            $scope.unsetstatus=function(order_id,index){
               swal({
  title: "Successfully!",
  text: "reminder set successfully!",
  type: "success",
  confirmButtonText: "Ok"
});
//console.log(data);
//$scope.setstatus = angular.copy(data);
//console.log($scope.setrem);
     $http({
          method  : 'POST',
          url     : '../../models/unsetstatus.php',
          data    : {'order_id':order_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                       // $scope.data.splice(index, 1);
                       // $scope.$watch();

                      });
            }


      $scope.saveinvoice=function(customer_id,order_id,ptax,ftotal){

                $scope.customer_id = {};
                $scope.customer_id = angular.copy(customer_id);
                //console.log($scope.acustomer_id);
                $scope.order_id = {};
                $scope.order_id = angular.copy(order_id);
                //console.log($scope.order_id);
                $scope.ptax = {};
                $scope.ptax = angular.copy(ptax);
               // console.log($scope.ptax);
                $scope.ftotal = {};
                $scope.ftotal = angular.copy(ftotal);
                //console.log($scope.ftotal);

                $http({
          method  : 'POST',
          url     : '../../models/insertaquainvoice.php',
          data    : {'acustomer_id':$scope.customer_id,'order_id':$scope.order_id,'invoice_tax':$scope.ptax,'invoice_amount':$scope.ftotal}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
                  swal({
  title: "Successfully!",
  text: "data inserted successfully!",
  type: "success",
  confirmButtonText: "Ok"
});
              $('#printSection').modal('toggle');

                      });


             }

      $scope.geninvoice=function(order_id,index){


        $http({
          method  : 'POST',
          url     : '../../models/getaquasingleinv.php',
          data    : {'order_id':order_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
             // console.log(data);
              $scope.singlecinv=data;
              $scope.invoice_tax = data[0].invoice_tax;
              $scope.invoice_id = data[0].invoice_id;
              $scope.invoice_amount = data[0].invoice_amount;
              $scope.invoice_date = data[0].invoice_date;
                  //console.log($scope.rinvoice_tax);
                      });


          $http.get("../../models/getlastinoiceid.php")
          .success(function(data){
           // console.log(data);
            var nextinvoiceid=data;
            //console.log(nextinvoiceid);
            $scope.invoice_id = data[0].invoice_id;
            //console.log($scope.invoice_id);
            var lastinvoiceid = $scope.invoice_id;
            var addone = 1;
            var currentinoiveid = +lastinvoiceid + +addone;
            $scope.cinvoiceid = currentinoiveid;
            //console.log(currentinoiveid);
    });


                

                 $http({
          method  : 'POST',
          url     : '../../models/getorderinvoice.php',
          data    : {'order_id':order_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
              //console.log(data);
              //$scope.orderinvoicedata = data;
              $scope.orderinvoicedata=data;
              $scope.customer_id = data[0].acustomer_id;
              var qt = data[0].order_quantity;
              console.log(data[0].order_quantity);
              var pr = data[0].order_price;
              console.log(data[0].order_price);
              var csubotal = qt*pr;
              $scope.subotal = csubotal;
              $scope.cdate = new Date();
               $scope.duedate = new Date();
               $scope.ptax = 10;
               var ptax = 10;
               var cftotal = csubotal+$scope.ptax;
               $scope.ftotal = cftotal;
                       // $scope.data.splice(index, 1);
                       // $scope.$watch();

                      });


       $http({
          method  : 'POST',
          url     : '../../models/checkorderinv.php',
          data    : {'order_id':order_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
              //console.log(data);
             $scope.checkorderinv=data;
             //console.log($scope.checkorderinv);
                       // $scope.data.splice(index, 1);
                       // $scope.$watch();

                      });

                $('#printSection').modal('toggle');
                //$('#invoicemodal').modal('show');
               // $('#invoicemodal').modal('hide');
            }


             $scope.changedtax=function(ptax,order_id){

                $scope.ptax = {};
                $scope.ptax = angular.copy(ptax);
                //console.log($scope.ptax);
                $scope.order_id = {};
                $scope.order_id = angular.copy(order_id);
                //console.log($scope.order_id);

              $http({
          method  : 'POST',
          url     : '../../models/getorderinvoice.php',
          data    : {'order_id':order_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              //console.log(data);
              var qt = data[0].order_quantity;
              //console.log(data[0].order_quantity);
              var pr = data[0].order_price;
              //console.log(data[0].order_price);
              var csubotal = qt*pr;
              var ntax= $scope.ptax;
              var cftotal = +csubotal + +ntax;
               $scope.ftotal = cftotal;

                      });


             }

 $scope.fprint=function(printSection){

        printElement(document.getElementById("printSection"));
        window.print();

function printElement(elem, append, delimiter) {
    var domClone = elem.cloneNode(true);

    var $printSection = document.getElementById("printSection");

    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }

    if (append !== true) {
        $printSection.innerHTML = "";
    }

    else if (append === true) {
        if (typeof(delimiter) === "string") {
            $printSection.innerHTML += delimiter;
        }
        else if (typeof(delimiter) === "object") {
            $printSection.appendChlid(delimiter);
        }
    }

    $printSection.appendChild(domClone);
}

}

             $scope.isedit=function(id){
              return id==$scope.iseditid;
            }
            $scope.setedit=function(id,oldorder){

              if($scope.oldorder){
                var index1 = getIndexOf($scope.data, $scope.iseditid, "order_id");
                $scope.data[index1]=angular.copy($scope.oldorder);
                delete $scope.oldorder;
              }
              $scope.iseditid=id;
              $scope.oldorder=angular.copy(oldorder);
              $scope.$watch();
            }
            $scope.unsetedit=function(id){
              $scope.iseditid='';
              $scope.data[id]=angular.copy($scope.oldorder);
              $scope.$watch();
            }
            $scope.initval = function (aquaorder) {
                settings = window[settings];
                console.log(settings.awesome); //1
            };
            $scope.updateaquaorder=function(aquaorder,index){
              console.log(aquaorder);
              $http({
                     method  : 'POST',
                     url     : '../../models/updateaquaorders.php',
                     data    : aquaorder, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                       console.log(data);
                      $scope.msg = "data inserted successfully ";
                        $scope.listordertailsform.$setPristine();
                        delete $scope.oldorder;
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


app.controller('Aquaorderinvoice', ['$scope','$http', function($scope,$http){

$http.get("../../models/getaquaorderinvoice.php")
.success(function(data){
        $scope.aquainvoicedata=data;
        console.log($scope.aquainvoicedata);
    });

 $scope.deleteinvoice=function(invoice_id,index){
    //alert('in delete function');
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

console.log(invoice_id);
     $http({
          method  : 'POST',
          url     : '../../models/deleteaquainvoice.php',
          data    : {'invoice_id':invoice_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            

              console.log(data);
                        $scope.aquainvoicedata.splice(index, 1);

                        console.log(data);
                        $scope.data.splice(index, 1);

                        $scope.$watch();

                      });
            });

}



$scope.setistatus=function(invoice_id,index){
  //alert(invoice_id);
//console.log(data);
//$scope.setstatus = angular.copy(order_id);
//console.log($scope.setrem);
     $http({
          method  : 'POST',
          url     : '../../models/setaquainvoicestatus.php',
          data    : {'invoice_id':invoice_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                     //   $scope.data.splice(index, 1);
                      //  $scope.$watch();

                      });
            }

            $scope.unsetistatus=function(invoice_id,index){
//console.log(data);
//$scope.setstatus = angular.copy(data);
//console.log($scope.setrem);
     $http({
          method  : 'POST',
          url     : '../../models/unsetaquainvoicestatus.php',
          data    : {'invoice_id':invoice_id}, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
     .success(function(data) {
            
              console.log(data);
                       // $scope.data.splice(index, 1);
                       // $scope.$watch();

                      });
            }



}]);






app.controller('Addjardetailsctrl', ['$scope','$http', function($scope,$http){
 $scope.reset = function() {
  delete $scope.addjardetails;
  $scope.addjardetailsform.$setPristine();
}

$scope.insertdata=function(addjardetails){

  $scope.addjardetails = {};
$scope.addjardetails = angular.copy(addjardetails);
console.log($scope.addjardetails);
   $http({
          method  : 'POST',
          url     : '../../models/insertjardetails.php',
          data    : $scope.addjardetails, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
     
            console.log(data);
    //$scope.msg = "data inserted successfully "
               //delete $scope.addjardetails;
                delete $scope.addjardetails;
                        swal({
  title: "Successfully!",
  text: "data inserted successfully!",
  type: "success",
  confirmButtonText: "Ok"
});

     $scope.addjardetailsform.$setPristine();
            

          });

}

  }]);

app.controller('Listjardetailsctrl', ['$scope','$http', function($scope,$http) {
  



  $scope.iseditid='';
    $scope.oldjar='';

  $http.get("../../models/getjardetails.php")
    .success(function(data){
        $scope.data=data
        //console.log($scope.data);
    });    

  $scope.deletejar=function(jar_id,index){

    //alert('in delete function');
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
 // swal("Deleted!", "Your imaginary file has been deleted.", "success");
      console.log(jar_id);
     $http({
          method  : 'POST',
          url     : '../../models/deletejardetails.php',
          data    : {'jar_id':jar_id}, //forms user object
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
            $scope.setedit=function(id,oldjar){
              if($scope.oldjar){
                var index1= getIndexOf($scope.data,$scope.iseditid,"jar_id");
                $scope.data[index1]=angular.copy($scope.oldjar);
                delete $scope.oldjar;
              }
              $scope.iseditid=id;
              $scope.oldjar=angular.copy(oldjar);
              $scope.$watch();
            }
            $scope.unsetedit=function(id){
              $scope.iseditid='';
              $scope.data[id]=angular.copy($scope.oldjar);
              $scope.$watch();
            }
            $scope.initval = function (listjar) {
                settings = window[settings];
                console.log(settings.awesome); //1
            };
            $scope.updatejardetails=function(listjar,index){
              console.log(listjar);
              $http({
                     method  : 'POST',
                     url     : '../../models/updatejardetails.php',
                     data    : listjar, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                       console.log(data);
                      $scope.msg = "data inserted successfully ";
                        $scope.listjardetailsform.$setPristine();
                        delete $scope.oldjar;
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

app.controller('Addvehiclectrl', ['$scope','$http', function($scope,$http){
  $scope.reset = function() {
  delete $scope.vdetails;
  $scope.addvehicleform.$setPristine();
}


$scope.insertdata=function(vdetails){
  $scope.vdetails = {};
$scope.vdetails = angular.copy(vdetails);
console.log($scope.vdetails);
   $http({
          method  : 'POST',
          url     : '../../models/insertvehicledetails.php',
          data    : $scope.vdetails, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })

     .success(function(data) {
            console.log(data);
              //$scope.msg = "data inserted successfully "
               delete $scope.vdetails;
                swal({
  title: "Successfully!",
  text: "data inserted successfully!",
  type: "success",
  confirmButtonText: "Ok"
});
                    $scope.addvehicleform.$setPristine();
            

          });

}

  }]);

app.controller('Listvehiclectrl', ['$scope','$http', function($scope,$http) {
  $scope.iseditid='';
    $scope.oldvehicle='';

  $http.get("../../models/getvehicledetails.php")
    .success(function(data){
        $scope.data=data
        //console.log($scope.data);
    });



  $scope.deletevehicle=function(vehicle_id,index){
    delete $scope.unsetedit();
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

console.log(vehicle_id);
     $http({
          method  : 'POST',
          url     : '../../models/deletevehicle.php',
          data    : {'vehicle_id':vehicle_id}, //forms user object
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
            $scope.setedit=function(id,oldvehicle){
              if($scope.oldvehicle){
                var index1=getIndexOf($scope.data,$scope.iseditid,"vehicle_id");
                $scope.data[index1]=angular.copy($scope.oldvehicle);
                delete $scope.oldvehicle;
              }
              $scope.iseditid=id;
              $scope.oldvehicle=angular.copy(oldvehicle);
              $scope.$watch();
            }
            $scope.unsetedit=function(id){
              $scope.iseditid='';
              $scope.data[id]=angular.copy($scope.oldvehicle);
              $scope.$watch();
            }
            $scope.initval = function (listvehicle) {
                settings = window[settings];
                console.log(settings.awesome); //1
            };
            $scope.updatevehicle=function(listvehicle,index){
              console.log(listvehicle);
              $http({
                     method  : 'POST',
                     url     : '../../models/updatevehicledetails.php',
                     data    : listvehicle, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                       console.log(data);
                        $scope.msg = "data inserted successfully ";
                        $scope.listvehicleform.$setPristine();
                        delete $scope.oldvehicle;
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





app.controller('Addaquaexpensive', ['$scope','$http', function($scope,$http){


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
                     url     : '../../models/insertaquaexpensive.php',
                     data    : $scope.expensive, //forms user object
                     headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    })
           
                .success(function(data) {
                      console.log(data);
                        // $scope.msg = "data inserted successfully ";

                        delete $scope.expensive;
                         swal({
  title: "Successfully!",
  text: "expensive added successfully!",
  type: "success",
  confirmButtonText: "Ok"
});
                        $scope.addexpensiveform.$setPristine();
           
                     });
           
           }
 }]);


app.controller('Listaquaexpensive', ['$scope','$http', function($scope,$http){

 $scope.iseditid='';
    $scope.oldexpensive='';

  $http.get("../../models/getaquaexpensivedetails.php")
    .success(function(data){
        $scope.data=data
        //console.log($scope.data);
    });



  $scope.deleteexpensive=function(aquaexpensive_id,index){
delete $scope.unsetedit();
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

console.log(aquaexpensive_id);
     $http({
          method  : 'POST',
          url     : '../../models/deleteaquaexpensive.php',
          data    : {'aquaexpensive_id':aquaexpensive_id}, //forms user object
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
                var index1=getIndexOf($scope.data,$scope.iseditid,"aquaexpensive_id");
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
                     url     : '../../models/updateaquaexpensivedetails.php',
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
          

}]);
