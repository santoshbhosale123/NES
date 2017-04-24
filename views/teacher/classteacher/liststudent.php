<div class="userlist" ng-controller="Liststudentctrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of Class Students</h2>
                   <!--  <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul> -->
                    <div class="clearfix"></div>
                  </div>


                      <div class="item form-group">
                       <!--  <label class="control-label col-md-3 col-sm-3 col-xs-12">Search for <span class="required">*</span>
                        </label> -->
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12 col-md-offset-6" >
                          <input type="text" ng-model="clisearch" id="clisearch" placeholder="&#xF002; Search for ..." name="clisearch" >
                          
                        </div>
                      </div>



                  <div class="x_content">
                    <!-- <p class="text-muted font-13 m-b-30">
                      The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p> -->
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Student Name</th>
                          <th>Student RollNo</th>
                          <th>Students parent Number</th>
                          <th>Student Address</th>
                          <th>Student DOB</th>
                         
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        
                        <tr ng-repeat="students in data | filter:clisearch">
                          <td ng-if="!isedit(students.stud_id)">{{students.stud_name}}</td>
                          <td ng-if="!isedit(students.stud_id)">{{students.stud_rollno}}</td>
                           <td ng-if="!isedit(students.stud_id)">{{students.stud_parent_No}}</td>
                          <td ng-if="!isedit(students.stud_id)">{{students.stud_address}}</td>
                          <td ng-if="!isedit(students.stud_id)">{{students.stud_dob}}</td>
                          
                          
                          <td ng-if="!isedit(students.stud_id)">
                              <a  data-toggle="tooltip" title="Delete"><button class="btn btn-danger" ng-click="deletestudents(students.stud_id,$index);"><i class="fa fa-trash"></i></button></a>
                               <a  data-toggle="tooltip" title="Edit"><button class="btn btn-warning" value="{{btnName}}" ng-click="setedit(students.stud_id,students);"><i class="fa fa-edit"></i></button></a>

                            <!--   <button class="btn btn-danger" ng-click="deleteuser(students
.stud_id
,$index);">Delete</button> 
                              <button class="btn btn-warning" value="{{btnName}}" ng-click="setedit(students
.stud_id
, students
);">Edit</button> -->

                             <!--  <button class="btn btn-warning" ng-click="logout();">Logout</button> -->
                          </td>

                          
                          <ng-form name="studentform">
                          
                          <td ng-if="isedit(students.stud_id)">
                          <input type="text" ng-value="students.stud_name" ng-model="students.stud_name" name="stud_name" style="width:auto;" required>
                          <p style="color:red;" ng-show="studentform.stud_name.$invalid && !studentform.stud_name.$pristine" class="help-block"> fullname is required.</p>
                          </td>
                          
                          <td ng-if="isedit(students.stud_id)">
                          <input type="text" ng-value="students.stud_rollno" ng-model="students.stud_rollno" name="stud_rollno" ng-pattern="/^[0-9]*$/" style="width:auto;" required>
                          <p style="color:red;"  ng-show="studentform.stud_rollno.$invalid && !studentform.stud_rollno.$pristine" class="help-block"> Roll No is required.</p>
                          </td>



                        <!--   <td ng-if="isedit(students.stud_id)">{{students.teacher_email}}</td> -->


                          <td ng-if="isedit(students.stud_id)">
                          <input type="text" ng-value="students.stud_parent_No" ng-model="students.stud_parent_No" name="stud_parent_No" style="width: auto;" required>
                          <p style="color:red;" ng-show="studentform.stud_parent_No.$invalid && !studentform.stud_parent_No.$pristine" class="help-block">Student's parent phone number is required.</p>
                          </td>

                          
                           <td ng-if="isedit(students.stud_id)">
                          <input type="text" ng-value="students.stud_address" ng-model="students.stud_address" name="stud_address" style="width:auto;" required>
                          <p style="color:red;" ng-show="studentform.stud_address.$invalid && !studentform.stud_address.$pristine" class="help-block"> Address is required.</p>
                          </td>


                          <td ng-if="isedit(students.stud_id)">{{students.stud_dob}}</td>
                          

                          <td ng-if="isedit(students.stud_id)"> <a  data-toggle="tooltip" title="Update"><button class="btn btn-success" ng-click="updatestudent(students);"><i class="fa fa-check"></i></button></a>

                             <a  data-toggle="tooltip" title="Cancle"> <button class="btn btn-danger" value="{{btnName}}" ng-click="unsetedit($index);"><i class="fa fa-close"></i></button></a>

                         <!--  <td ng-if="isedit(students
.stud_id
)"> -->

                             <!--  <button class="btn btn-danger" ng-click="updateuser(students
,$index);">Update</button> 

                              <button class="btn btn-warning" value="{{btnName}}" ng-click="unsetedit($index);">Cancel</button> -->



                             <!--  <button class="btn btn-warning" ng-click="logout();">Logout</button> -->
                          </td>
                          <ng-form>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>

      