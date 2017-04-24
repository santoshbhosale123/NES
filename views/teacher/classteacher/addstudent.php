
<div class="adda-cust">
<h1>Add Student details</h1>
<div class="addstudentform" ng-controller="Addstudentctrl">
<form name="addstudentform" class="form-horizontal form-label-left" nonvalidate>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Student Name<span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" placeholder="Student Name" class="form-control" ng-model="students. stud_name" id="stud_name" class="form-control" name="stud_name" required />
                           </div>
       <p class="val-style" ng-show="addstudentform.stud_name.$invalid && !addstudentform.stud_name.$pristine" class="help-block"> required.</p>     
                        </div>
                      </div>
                      

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Student Roll No<span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" placeholder="Student Roll No" class="form-control" ng-model="students.stud_rollno" id=" stud_rollno" ng-pattern="/^[0-9]*$/"  class="form-control" name="  stud_rollno" required />
                           </div>
       <p class="val-style" ng-show="addstudentform.stud_rollno.$invalid && !addstudentform.  stud_rollno.$pristine" class="help-block">Required ROll no should be in digit </p>     
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Student Standart<span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" placeholder="Student standard" class="form-control" ng-model="students.  stud_standard" id="stud_standard" class="form-control" name="stud_standard" required />
                           </div>
       <p class="val-style" ng-show="addstudentform.stud_standard.$invalid && !addstudentform.stud_standard.$pristine" class="help-block"> required.</p>     
                        </div>
                      </div>

                      <!--  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Student Email <span class="required">*</span>
                        </label>
                         <div class="form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                          <input type="email" placeholder="Email Id" ng-model="students.student_email" id="student_email" class="form-control" name="student_email" >
                        </div>

                          <p class="val-style" ng-show="addstudentform.student_email.$invalid &&!addstudentform.student_email.$pristine" class="help-block"> email is required with correct format.</p>
                        </div>
                      </div> -->


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Students parent Number <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12 ">
                          <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                          <input type="text" placeholder="Students parent Mobile Number" ng-model="students.stud_parent_No"  ng-pattern="/^[0-9]{10}$/"  id="stud_parent_No" class="form-control" name="stud_parent_No" >
                        </div>
                          <p class="val-style" ng-show="addstudentform.stud_parent_No.$invalid && !addstudentform.stud_parent_No.$pristine" class="help-block"> 10 digit phone is required.</p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Student Address<span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-home"></i></span>
                          <input type="text" placeholder="studentsAddress" class="form-control" ng-model="students.stud_address" id="stud_address" class="form-control" name="stud_address" required />
                           </div>
                          <p class="val-style" ng-show="addstudentform.stud_address.$invalid && !addstudentform.stud_address.$pristine" class="help-block"> required.</p>     
                        </div>
                      </div>
                      

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Student DOB<span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-home"></i></span>
                          <input type="date" placeholder="studentsDOB" class="form-control" ng-model="students.stud_dob" id="stud_dob" class="form-control" name="stud_dob" required />
                           </div>
                          <p class="val-style" ng-show="addstudentform.stud_dob.$invalid && !addstudentform.stud_dob.$pristine" class="help-block"> required.</p>     
                        </div>
                      </div>
                      <!-- <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-list-ul"></i></span>
                          <select class="form-control" ng-model="students
.acustomer_type" name="acustomer_type" ng-class="{'has-errors' : addstudentform.acustomer_type.$invalid, 'no-errors' : addstudentform.acustomer_type.$valid}" ng-required="true">
                            <option value="" selected>Customer Type</option>
                            <option value="temporary">temporary</option>
                            <option value="Regular">Regular</option>
                          </select>
                        </div>
                          <div class="error-container" ng-show="addstudentform.acustomer_type.$dirty && addstudentform.acustomer_type.$invalid" ng-messages="addstudentform.acustomer_type.$error">
                         <div class="val-style" class="error" ng-message="required">select customer type </div>
                          </div>
                        </div>
                      </div>
 -->

                          <!-- <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" ng-model="students

.customer_role" name="customer_role" ng-class="{'has-errors' : addstudentform
.customer_role.$invalid, 'no-errors' : addstudentform
.customer_role.$valid}" ng-required="true">
                            <option value="" selected>Customer Role</option>
                            <option value="Aqua">Aqua</option>
                          
                          </select>
                          <div class="error-container" ng-show="addstudentform
.customer_type.$dirty && addstudentform
.customer_type.$invalid" ng-messages="addstudentform
.customer_type.$error">
                         <div style="color:red;" class="error" ng-message="required">select customer Role </div>
                          </div>
                        </div>
                      </div>
 -->
                       

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-4">
                          <button type="submit" ng-disabled="!addstudentform.$valid" ng-click="reset()" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(students)" ng-disabled="!addstudentform.$valid" id="send" type="submit" class="btn btn-success">Submit</button>

                          {{msg}}
                        </div>
                      </div>
                    </form>
                     </div>
                   </div>
