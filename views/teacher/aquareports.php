
<div  class="aquareportctrl" ng-controller="Aquareportctrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" >
                  <div class="x_title">
                    <h2> Reports</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div  class="item form-group">
                      
                      <h1>generate aquaorder report</h1>

                       <input type="date" ng-model="startdt"name="startdt">
                      
                       <input type="date" ng-change="changedate(startdt,enddt)" ng-model="enddt"name="enddt">

                        <button ng-click="exportData(startdt,enddt)">Export</button> 

                      </div>
                    </div>

                    <div  class="aquareportctrl" ng-controller="Aquareportctrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" >
                  <div class="x_title">
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div  class="item form-group">
                      
                      <h1>generate expenses report</h1>

                       <input type="date" ng-model="startdt"name="startdt">
                      
                       <input type="date" ng-change="changedates(startdt,enddt)" ng-model="enddt"name="enddt">

                        <button ng-click="exportExpenses(startdt,enddt)">Export</button> 

                      </div>
                    </div>