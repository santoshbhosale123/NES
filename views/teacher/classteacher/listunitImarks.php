<div class="userlist" ng-controller="Listunitmarksctrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of Unit Test I marks</h2>
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
                          <th>Name</th>
                          <th>RollNo</th>
                          <th>mar</th>
                          <th>Hin</th>
                          <th>Eng</th>
                          <th>Maths</th>
                          <th>GSci</th>
                          <th>So.Sci</th>
                          <th>M.A.T</th>
                          <th>Comp</th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        
                        <tr ng-repeat="marks in data | filter:clisearch" ng-form="subForm">
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
                              <a  data-toggle="tooltip" title="Delete"><button class="btn btn-danger" ng-click="deleteunitI(marks.marks_id,$index);"><i class="fa fa-trash"></i></button></a>
              <a  data-toggle="tooltip" title="Edit"><button class="btn btn-warning" value="{{btnName}}" ng-click="setedit(marks.marks_id,marks);"><i class="fa fa-edit"></i></button></a>
                          </td>

                          
                          <ng-form name="marksform">
                          <td ng-if="isedit(marks.marks_id)">{{marks.stud_name}}</td>

                          
                          <!-- <td ng-if="isedit(marks.marks_id)">
                          <input type="text" ng-value="marks.stud_name" ng-model="marks.stud_name" name="stud_name" style="width:auto;" required>
                          <p style="color:red;" ng-show="marksform.stud_name.$invalid && !marksform.stud_name.$pristine" class="help-block"> fullname is required.</p>
                          </td> -->
                          
                        <!--   <td ng-if="isedit(marks.marks_id)">
                          <input type="text" ng-value="marks.stud_rollno" ng-model="marks.stud_rollno" name="stud_rollno" ng-pattern="/^[0-9]*$/" style="width:auto;" required>
                          <p style="color:red;"  ng-show="marksform.stud_rollno.$invalid && !marksform.stud_rollno.$pristine" class="help-block"> Roll No is required.</p>
                          </td>
 -->
               <td ng-if="isedit(marks.marks_id)">{{marks.stud_rollno}}</td>

                          <td ng-if="isedit(marks.marks_id)">
                          <input type="text" style="width:50px;" ng-value="marks.Marathi" ng-pattern="/^([0-1]?[0-9]|20)$/" ng-model="marks.Marathi" name="Marathi" style="width: auto;" required>
                           
                           <p style="color:red;" ng-show="!subForm.Marathi.$error.required && subForm.Marathi.$invalid"> marks can be upto 20 and digits only.</p>
                          <p style="color:red;" ng-show="subForm.Marathi.$error.required"> required field.</p>
                        </td> 


                           <td ng-if="isedit(marks.marks_id)">
                          <input type="text" style="width:50px;" ng-value="marks.Hindi" ng-pattern="/^([0-1]?[0-9]|20)$/" ng-model="marks.Hindi" name="Hindi"  required>
                          <p style="color:red;" ng-show="!subForm.Hindi.$error.required && subForm.Hindi.$invalid"> marks can be upto 20 and digits only.</p>
                          <p style="color:red;" ng-show="subForm.Hindi.$error.required"> required field.</p>
                        </td> 

                           <td ng-if="isedit(marks.marks_id)">
                          <input type="text" style="width:50px;" ng-value="marks.English" ng-pattern="/^([0-1]?[0-9]|20)$/" ng-model="marks.English" name="English" style="width: auto;" required>
                           <p style="color:red;" ng-show="!subForm.English.$error.required && subForm.English.$invalid"> marks can be upto 20 and digits only.</p>
                          <p style="color:red;" ng-show="subForm.English.$error.required"> required field.</p>
                        </td>

                            <td ng-if="isedit(marks.marks_id)">
                          <input type="text" style="width:50px;" ng-value="marks.Maths" ng-pattern="/^([0-1]?[0-9]|20)$/" ng-model="marks.Maths" name="Maths" style="width: auto;" required>
                           <p style="color:red;" ng-show="!subForm.Maths.$error.required && subForm.Maths.$invalid"> marks can be upto 20 and digits only.</p>
                          <p style="color:red;" ng-show="subForm.Maths.$error.required"> required field.</p>
                        </td> 

                <td ng-if="isedit(marks.marks_id)">
                          <input type="text" style="width:50px;" ng-value="marks.GSci" ng-pattern="/^([0-1]?[0-9]|20)$/" ng-model="marks.GSci" name="GSci" style="width: auto;" required>
                           <p style="color:red;" ng-show="!subForm.GSci.$error.required && subForm.GSci.$invalid"> marks can be upto 20 and digits only.</p>
                          <p style="color:red;" ng-show="subForm.GSci.$error.required"> required field.</p>
                        </td> 
                         <td ng-if="isedit(marks.marks_id)">
                          <input type="text" style="width:50px;" ng-value="marks.SoSci" ng-pattern="/^([0-1]?[0-9]|20)$/" ng-model="marks.SoSci" name="SoSci" style="width: auto;" required>
                           <p style="color:red;" ng-show="!subForm.SoSci.$error.required && subForm.SoSci.$invalid"> marks can be upto 20 and digits only.</p>
                          <p style="color:red;" ng-show="subForm.SoSci.$error.required"> required field.</p>
                        </td> 
                         <td ng-if="isedit(marks.marks_id)">
                          <input type="text" style="width:50px;" ng-value="marks.MAT" ng-pattern="/^([0-1]?[0-9]|20)$/" ng-model="marks.MAT" name="MAT" style="width: auto;" required>
                           <p style="color:red;" ng-show="!subForm.MAT.$error.required && subForm.MAT.$invalid"> marks can be upto 20 and digits only.</p>
                          <p style="color:red;" ng-show="subForm.MAT.$error.required"> required field.</p>
                        </td> 

                        <td ng-if="isedit(marks.marks_id)">
                          <input type="text" style="width:50px;" ng-value="marks.Computer"  ng-pattern="/^([0-1]?[0-9]|20)$/" ng-model="marks.Computer" name="Computer" style="width: auto;" required>
                          <p style="color:red;" ng-show="!subForm.Computer.$error.required && subForm.Computer.$invalid"> marks can be upto 20 and digits only.</p>
                          <p style="color:red;" ng-show="subForm.Computer.$error.required"> required field.</p>
                        </td> 

                           
                          

                          <td ng-if="isedit(marks.marks_id)"> 
                            <a  data-toggle="tooltip" title="Update"><button class="btn btn-success" ng-click="updateunitI(marks);"><i class="fa fa-check"></i></button></a>

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

      