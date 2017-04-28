<div class="userlist" ng-controller="Firstsemesterresultctrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>First Semester marks</h2>
                
                    <div class="clearfix"></div>
                  </div>


                      <div class="item form-group">
                     
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12 col-md-offset-6" >
                          <input type="text" ng-model="clisearch" id="clisearch" placeholder="&#xF002; Search for ..." name="clisearch" >
                          
                        </div>
                      </div>



                  <div class="x_content">
                  
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>RollNo</th>
                          <th>marathi</th>
                          <th>Hindi</th>
                          <th>English</th>
                          <th>Maths</th>
                          <th>GSci</th>
                          <th>So.Sci</th>
                          <th>M.A.T</th>
                          <th>Comp</th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        
                        <tr ng-repeat="marks in data | filter:clisearch">
                          <td ng-if="!isedit(marks.marks_id)">{{marks.stud_name}}</td>
                          <td ng-if="!isedit(marks.marks_id)">{{marks.stud_rollno}}</td>
                           <td ng-if="!isedit(marks.marks_id)">{{marks.Marathi}}</td>
                          <td ng-if="!isedit(marks.marks_id)">{{marks.Hindi}}</td>
                           <td ng-if="!isedit(marks.marks_id)">{{marks.English}}</td>
                          <td ng-if="!isedit(marks.marks_id)">{{marks.Maths}}</td>
                          <td ng-if="!isedit(marks.marks_id)">{{marks.GSci}}</td>
                          <td ng-if="!isedit(marks.marks_id)">{{marks.SoSci}}</td>
                          <td ng-if="!isedit(marks.marks_id)">{{marks.MAT}}</td>
                          <td ng-if="!isedit(marks.marks_id)">{{marks.Computer}}</td>
                         
                          
                          
                          <td ng-if="!isedit(marks.marks_id)">
                              <a  data-toggle="tooltip" title="Delete"><button class="btn btn-danger" ng-click="deletsemI(marks.marks_id,$index);"><i class="fa fa-trash"></i></button></a>
              <a  data-toggle="tooltip" title="Edit"><button class="btn btn-warning" value="{{btnName}}" ng-click="setedit(marks.marks_id,marks);"><i class="fa fa-edit"></i></button></a>
                          </td>

                          
                          <ng-form name="marksform">
                        <!--   
                          <td ng-if="isedit(marks.marks_id)">
                          <input type="text" ng-value="marks.stud_name" ng-model="marks.stud_name" name="stud_name" style="width:auto;" required>
                          <p style="color:red;" ng-show="marksform.stud_name.$invalid && !marksform.stud_name.$pristine" class="help-block"> fullname is required.</p>
                          </td> -->


                           <td ng-if="isedit(marks.marks_id)">{{marks.stud_name}}</td>
                          
                            <td ng-if="isedit(marks.marks_id)">{{marks.stud_rollno}}</td>
                         <!--  <td ng-if="isedit(marks.marks_id)">
                          <input type="text" ng-value="marks.stud_rollno" ng-model="marks.stud_rollno" name="stud_rollno" ng-pattern="/^[0-9]*$/" style="width:auto;" required>
                          <p style="color:red;"  ng-show="marksform.stud_rollno.$invalid && !marksform.stud_rollno.$pristine" class="help-block"> Roll No is required.</p>
                          </td>
 -->

                          <td ng-if="isedit(marks.marks_id)">
                          <input type="text" ng-value="marks.Marathi" ng-model="marks.Marathi" style="width:50px;" name="Marathi" required>
                          <p style="color:red;" ng-show="marksform.Marathi.$invalid && !marksform.Marathi.$pristine" class="help-block">required.</p>
                          </td>

                           <td ng-if="isedit(marks.marks_id)">
                          <input type="text" ng-value="marks.Hindi" ng-model="marks.Hindi"  style="width:50px;" name="Hindi"  required>
                          <p style="color:red;" ng-show="marksform.Hindi.$invalid && !marksform.Hindi.$pristine" class="help-block">required.</p>
                          </td>

                           <td ng-if="isedit(marks.marks_id)">
                          <input type="text" ng-value="marks.English" ng-model="marks.English" style="width:50px;" name="English"  required>
                          <p style="color:red;" ng-show="marksform.English.$invalid && !marksform.English.$pristine" class="help-block">required.</p>
                          </td>

                            <td ng-if="isedit(marks.marks_id)">
                          <input type="text" ng-value="marks.Maths" ng-model="marks.Maths" style="width:50px;" name="Maths"   required>
                          <p style="color:red;" ng-show="marksform.Maths.$invalid && !marksform.Maths.$pristine" class="help-block">required.</p>
                          </td>

                <td ng-if="isedit(marks.marks_id)">
                          <input type="text" ng-value="marks.GSci" ng-model="marks.GSci" style="width:50px;" name="GSci" required>
                          <p style="color:red;" ng-show="marksform.GSci.$invalid && !marksform.GSci.$pristine" class="help-block">required.</p>
                          </td>

                         <td ng-if="isedit(marks.marks_id)">
                          <input type="text" ng-value="marks.SoSci" ng-model="marks.SoSci" style="width:50px;" name="SoSci"  required>
                          <p style="color:red;" ng-show="marksform.SoSci.$invalid && !marksform.SoSci.$pristine" class="help-block">required.</p>
                          </td>

                         <td ng-if="isedit(marks.marks_id)">
                          <input type="text" ng-value="marks.MAT" ng-model="marks.MAT" name="MAT" style="width:50px;"  required>
                          <p style="color:red;" ng-show="marksform.MAT.$invalid && !marksform.MAT.$pristine" class="help-block">required.</p>
                          </td>

                        <td ng-if="isedit(marks.marks_id)">
                          <input type="text" ng-value="marks.Computer" ng-model="marks.Computer" name="Computer" style="width:50px;" required>
                          <p style="color:red;" ng-show="marksform.Computer.$invalid && !marksform.Computer.$pristine" class="help-block">required.</p>
                          </td>

                           
                          

                          <td ng-if="isedit(marks.marks_id)"> 
                            <a  data-toggle="tooltip" title="Update"><button class="btn btn-success" ng-click="updatesemI(marks);"><i class="fa fa-check"></i></button></a>

                             <a  data-toggle="tooltip" title="Cancle"> <button class="btn btn-danger" value="{{btnName}}" ng-click="unsetedit($index);"><i class="fa fa-close"></i></button></a>

                          </td>
                          <ng-form>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>

      