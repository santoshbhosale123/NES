
<div class="myaccountform" ng-controller="Addmyaccountctrl">
<form name="myaccountform" class="form-horizontal form-label-left" nonvalidate>

                      <span class="section">Personal Info</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Username <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" ng-class="{ 'has-error' : myaccountform.username.$invalid && !myaccountform.username.$pristine }" >
                          <input type="text" ng-model="username" id="username" class="form-control" name="username" required/ >
                          
                        </div>
                        
                         <p class="val-style" ng-show="myaccountform.username.$invalid && !myaccountform.username.$pristine" class="help-block"> username is required.</p>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Full Name <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" ng-class="{ 'has-error' : myaccountform.fullname.$invalid && !myaccountform.fullname.$pristine }">
                          <input type="text" ng-model="fullname" id="fullname" class="form-control" name="fullname" required />
                        
                        </div>
                        <p class="val-style" ng-show="myaccountform.fullname.$invalid && !myaccountform.fullname.$pristine" class="help-block"> FullName is required.</p>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Email <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" ng-class="{ 'has-error' : myaccountform.email.$invalid && !myaccountform.email.$pristine }">
                          <input type="email" ng-model="email" id="email" class="form-control" name="email" required />
                         
                        </div>
                        <p class="val-style" ng-show="myaccountform.email.$invalid && !myaccountform.email.$pristine" class="help-block"> email is required with correct format.</p>
                      </div>

                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Phone number <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="phone" id="phone"  ng-pattern="/^[0-9]{1,10}$/" class="form-control" name="phone" required />
                         
                        </div>
                         <p class="val-style" ng-show="myaccountform.phone.$invalid && !myaccountform.phone.$pristine" class="help-block"> 10 digit phone is required.</p>
                      </div>
                        

                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Userrole <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="userrole" id="userrole" class="form-control" name="userrole" readonly required />
                         
                        </div>
                      </div>


                    <!--   <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Password <span class="required">*</span></label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="password" ng-model="password" id="password" class="form-control" name="password" required />
                          
                        </div>
                        </div>
                    
                      <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password <span class="required">*</span></label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="password" ng-model="password2" id="password2" class="form-control" name="password2" required />
                          
                        </div>
                      </div> -->

                      
              
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                         <!--  <button type="submit" class="btn btn-primary">Cancel</button> -->

                          <button ng-click="updateteacher(teacher_id)" ng-disabled="!myaccountform.$valid"  id="send" type="submit" class="btn btn-success">Updateteacher</button>

                        <!--   {{msg}} -->
                        </div>
                      </div>
                    </form>
                     </div>

                    