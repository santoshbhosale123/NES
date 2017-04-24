<div class="adda-order">
<h1>Add  classteacher Details</h1>
<div class="addorder_delivery_dateform" ng-controller="Addclassteacherctrl">
<form name="addteacherform" class="form-horizontal form-label-left" nonvalidate>

                    <!--   <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                      </p>
                      <span class="section">Personal Info</span> -->

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Username <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" ng-class="{ 'has-error' : addteacherform.username.$invalid && !addteacherform.username.$pristine }" >
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" placeholder="Username" ng-model="teacher.username" id="username" class="form-control" name="username" required />
                        </div>
                          <p class="val-style" ng-show="addteacherform.username.$invalid && !addteacherform.username.$pristine" class="help-block"> username is required.</p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Full Name <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" placeholder="Full Name" ng-model="teacher.fullname" id="fullname" class="form-control" name="fullname" required />
                        </div>
                          <p class="val-style" ng-show="addteacherform.fullname.$invalid && !addteacherform.fullname.$pristine" class="help-block"> fullname is required.</p>
                        </div>
                      </div>
                        
                         <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Standart and Division <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" placeholder="Standart and division" ng-model="teacher.teacher_standard" id="teacher_standard" class="form-control" name="teacher_standard" required />
                        </div>
                          <p class="val-style" ng-show="addteacherform.teacher_standard.$invalid && !addteacherform.teacher_standard.$pristine" class="help-block"> Standard and division is required.</p>
                        </div>
                      </div>




                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Email <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                          <input type="email" placeholder="Email Id" ng-model="teacher.email" id="email" class="form-control" name="email" required />
                        </div>
                          <p class="val-style" ng-show="addteacherform.email.$invalid && !addteacherform.email.$pristine" class="help-block"> email is required with correct format.</p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Number <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                          <input type="text" placeholder="Mobile Number" ng-model="teacher.phone" id="phone" class="form-control" name="phone" ng-pattern="/^[0-9]{1,10}$/"
       required/>
                      </div>
                          <p class="val-style" ng-show="addteacherform.phone.$invalid && !addteacherform.phone.$pristine" class="help-block"> 10 digit phone is required.</p>
                        </div>
                      </div>


                      <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Password <span class="required">*</span></label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                          <input type="password" placeholder="Password" ng-model="teacher.password" id="password" class="form-control" name="password" required />
                        </div>
                          <p class="val-style" ng-show="addteacherform.password.$invalid && !addteacherform.password.$pristine" class="help-block"> password is required.</p>
                        </div>
                        </div>
                    
                      <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password <span class="required">*</span></label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                          <input type="password" placeholder="Confirm Password" ng-model="teacher.password2" id="password2" class="form-control" name="password2" match="teacher.password" required />
                        </div>
                          <p style="color:red;" ng-show="addteacherform.password2.$error.required && !addteacherform.password2.$pristine" class="help-block"> confirm password is required.</p>
                         <p style="color:red;" ng-show="addteacherform.password2.$error.match && !addteacherform.password2.$pristine" class="help-block"> confirm password is not mached.</p> 
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-list-ul "></i></span>
                          <select class="form-control" ng-model="teacher.userrole" name="userrole" ng-class="{'has-errors' : addteacherform.userrole.$invalid, 'no-errors' : addteacherform.userrole.$valid}" ng-required="true">
                            <option value="" selected>Choose option</option>
                            <option value="classteacher">classteacher</option>
                           
                          </select>
                        </div>
                          <div class="error-container" ng-show="addteacherform.userrole.$dirty && addteacherform.userrole.$invalid" ng-messages="addteacherform.userrole.$error">
                         <div class="val-style" class="error" ng-message="required">select Userrole </div>
                          </div>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-4">
                          <button type="submit" ng-click="reset()" ng-disabled="!addteacherform.$valid" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(teacher)" ng-disabled="!addteacherform.$valid" id="send" type="submit" class="btn btn-success">Submit</button>

                          {{msg}}
                        </div>
                      </div>
                    </form>
                     </div>

                    