<div class="addnew-conn">

<h1>Add Testwise Marks</h1>
<div class="marksform" ng-controller="Addmarksctrl">
<form name="marksform" class="form-horizontal form-label-left" nonvalidate>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select Students <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-list-ul "></i></span>
                          <select class="form-control" ng-change="changedname(stud_name)" value="1"  ng-model="stud_name" name="stud_name"  ng-required="true">
                            <option ng-repeat="studdata in data" value="{{studdata.stud_id}}">{{studdata.stud_name}}</option>
                          </select>
                        </div>
                        </div>
                      </div>

                       <div ng-if="stud_name==1" class="item form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="marathi">Roll no<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" value="{{rollno}}" class="form-control" readonly/ >
                        </div>
                          <p class="val-style" ng-show="marksform.Marathi.$invalid && !marksform.Marathi.$pristine" class="help-block">Accept digits only</p>
                        </div>
                      </div>
                       

                      
    

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select Test<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-list-ul "></i></span>
                          <select class="form-control" ng-model="test_type" name="test_type" class="{'has-errors' : marksform.test_type.$invalid, 'no-errors' : marksform.test_type.$valid}" ng-required="true">
                            <option value="UnitI" selected>UnitI</option>
                            <option value="UnitII">UnitII </option>
                            <option value="SemisterI">SemisterI</option>
                            <option value="UnitIII">UnitIII</option>
                            <option value="SemisterII">SemisterII</option>
                          </select>
                        </div>
                        </div>
                      </div>
                     <div class="item form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="marathi">Marathi<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" placeholder="Add marathi marks"ng-pattern="/^[0-9]*$/" ng-model="Marathi" id="Marathi" class="form-control" name="Marathi" >
                        </div>
                          <p class="val-style" ng-show="marksform.Marathi.$invalid && !marksform.Marathi.$pristine" class="help-block">Accept digits only</p>
                        </div>
                      </div>

                  <div class="item form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="marathi">Hindi<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" placeholder="Add hindi marks"ng-pattern="/^[0-9]*$/" ng-model="Hindi" id="Hindi" class="form-control" name="Hindi" >
                        </div>
                          <p class="val-style" ng-show="marksform.Hindi.$invalid && !marksform.Hindi.$pristine" class="help-block">Accept digits only</p>
                        </div>
                      </div>






                        <div class="item form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="marathi">English<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" placeholder="Add english marks"ng-pattern="/^[0-9]*$/" ng-model="English" id="English" class="form-control" name="English" >
                        </div>
                          <p class="val-style" ng-show="marksform.English.$invalid && !marksform.English.$pristine" class="help-block">Accept digits only</p>
                        </div>
                      </div>

                           
                           <div class="item form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="marathi">Maths<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" placeholder="Add Maths marks"ng-pattern="/^[0-9]*$/" ng-model="Maths" id="Maths" class="form-control" name="Maths" >
                        </div>
                          <p class="val-style" ng-show="marksform.Maths.$invalid && !marksform.Maths.$pristine" class="help-block">Accept digits only</p>
                        </div>
                      </div>
                           

                           <div class="item form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="marathi">GSci<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" placeholder="Add GSci marks"ng-pattern="/^[0-9]*$/" ng-model="GSci" id="GSci" class="form-control" name="GSci" >
                        </div>
                          <p class="val-style" ng-show="marksform.GSci.$invalid && !marksform.GSci.$pristine" class="help-block">Accept digits only</p>
                        </div>
                      </div>

                       <div class="item form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="marathi">Social Science<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" placeholder="Add SoSci marks"ng-pattern="/^[0-9]*$/" ng-model="SoSci" id="SoSci" class="form-control" name="SoSci" >
                        </div>
                          <p class="val-style" ng-show="marksform.SoSci.$invalid && !marksform.SoSci.$pristine" class="help-block">Accept digits only</p>
                        </div>
                      </div>
                         

                          <div class="item form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="marathi">M.A.T<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" placeholder="Add MAT marks"ng-pattern="/^[0-9]*$/" ng-model="MAT" id="MAT" class="form-control" name="MAT" >
                        </div>
                          <p class="val-style" ng-show="marksform.MAT.$invalid && !marksform.MAT.$pristine" class="help-block">Accept digits only</p>
                        </div>
                      </div>
                          


                          <div class="item form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="marathi">Computer<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" placeholder="Add Computer marks"ng-pattern="/^[0-9]*$/" ng-model="Computer" id="Computer" class="form-control" name="Computer" >
                        </div>
                          <p class="val-style" ng-show="marksform.Computer.$invalid && !marksform.Computer.$pristine" class="help-block">Accept digits only</p>
                        </div>
                      </div>






                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-4">
                          <button type="reset" ng-click="reset()" ng-disabled="!marksform.$valid"  class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata()" id="send" type="submit" ng-disabled="!marksform.$valid" class="btn btn-success">Submit</button>
                          {{msg}}
                        </div>
                      </div>
                    </form>
                     </div>
</div>
