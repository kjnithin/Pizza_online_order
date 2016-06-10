<div class="row">
    <!--Defining Tabs-->
  <div class="col-md-3">
    <ul class="nav nav-pills nav-stacked" role="tablist">
    <li role="presentation" class="active">
      <a href="#order" aria-controls="order" role="tab" data-toggle="tab"><font class='tab-header'><i class='fa fa-cutlery'></i> Orders</font></a>
    </li>
    <li role="presentation">
      <a href="#inventory" aria-controls="personal" role="tab" data-toggle="tab"><font class='tab-header'><i class='fa fa-info'></i> Inventory</font></a>
    </li>
    <li role="presentation">
      <a href="#history" aria-controls="history" role="tab" data-toggle="tab"><font class='tab-header'><i class='fa fa-history'></i> History</font></a>
    </li>
    <li role="presentation">
      <a href="#user" aria-controls="user" role="tab" data-toggle="tab"><font class='tab-header'><i class='fa fa-group'></i> User Data</font></a>
    </li>
    <li role="presentation">
      <a href="#admin" aria-controls="admin" role="tab" data-toggle="tab"><font class='tab-header'><i class='fa fa-user-secret'></i> Admin Data</font></a>
    </li>
    </ul>
  </div>
  <!--end of defining tabs-->
  <div class="col-md-9 well">
    <div class='tab-content'>
      <!--This is the tab for order the pizza-->
        <div role='tabpanel' id='order' class='tab-pane active'>
          hi
        </div>
        <!--end-->
          <div role='tabpanel' id='inventory' class='tab-pane'>
          </div>
          <div role='tabpanel' id='history' class='tab-pane'>
          </div>
          <!-- This is hte tab for user details-->
          <div role='tabpanel' id='user' class='tab-pane'>
            hello
          </div>
          <!--End of user details-->
          <!--This is the tab for admin details-->
          <div role='tabpanel' id='admin' class='tab-pane'>
           <div class="row">
             <div class="col-md-3">
               <div class="list-group" id="adminNameList" data-reload="true">
               </div>
             </div>
             <div class="col-md-7 well form-horizontal">
               <p class="tab-header" >Personal Details</p>

                 <div class="form-group">
                 <label class="col-md-4 labelPersonalDetails ">Name:</label>
                 <div class="col-md-8" class="showPersonalDetails">
                   <font id="adminNameTxt" class="showPersonalDetailsValue"></font>
                 </div>
                 </div>
                 <div class="form-group">
                 <label class="col-md-4 labelPersonalDetails">User Name:</label>
                 <div class="col-md-8" class="showPersonalDetails">
                   <font id="adminUsernameTxt" class="showPersonalDetailsValue"></font>
                 </div>
               </div>
               <div class="form-group">
               <label class="col-md-4 labelPersonalDetails">Email:</label>
               <div class="col-md-8" class="showPersonalDetails">
                 <font id="adminEmailTxt" class="showPersonalDetailsValue"></font>
               </div>
             </div>
             <div class="form-group">
             <label class="col-md-4 labelPersonalDetails">Address:</label>
             <div class="col-md-8" class="showPersonalDetails">
               <font id="adminAptTxt" class="showPersonalDetailsValue"></font> <font id="adminStreetTxt" class="showPersonalDetailsValue"></font><br>
               <font id="adminCityTxt" class="showPersonalDetailsValue"></font>, <font id="adminProvinceTxt" class="showPersonalDetailsValue"></font><br>
               <font id="adminPostalTxt" class="showPersonalDetailsValue"></font>
             </div>
           </div>
           <div class="form-group">
           <label class="col-md-4 labelPersonalDetails">Phone:</label>
           <div class="col-md-8" class="showPersonalDetails">
             <font id="adminPhoneTxt" class="showPersonalDetailsValue"></font>
           </div>
         </div>

             </div>
             <!--End of personal details-->

             <div class="col-md-2">
               <div class="row">
                 <div class="col-md-offset-2">
               <span class="fa-stack fa-3x fa menu-blob">
                 <i class="fa fa-circle fa-stack-2x blue-bb"></i>
                 <i class="fa fa fa-user-plus fa-stack-1x" style='color:white;' id="addAdminIcon"></i>
               </span>
               <div clss="col-md-offset-4">
               <h3 class='text-medium' id="editAdminBtn">Add</h3>
             </div>
             </div>
                 <div class="col-md-offset-2">
               <span class="fa-stack fa-3x fa menu-blob">
                 <i class="fa fa-circle fa-stack-2x blue-bb"></i>
                 <i class="fa fa fa-edit fa-stack-1x" style='color:white;' id="editAdminIcon"></i>
               </span>
               <div clss="col-md-offset-4">
               <h3 class='text-medium' id="editAdminBtn">Edit</h3>
             </div>
             </div>
             <div class="col-md-offset-2">
           <span class="fa-stack fa-3x fa menu-blob">
             <i class="fa fa-circle fa-stack-2x blue-bb"></i>
             <i class="fa fa fa-trash-o fa-stack-1x" style='color:white;' id="trashAdminIcon"></i>
           </span>
           <div clss="col-md-offset-2">
           <h3 class='text-medium' id="deleteAdminsBtn">Delete</h3>
         </div>
         </div>
           </div>
             </div>
             <!--Add admin modal -->
             <div class="modal fade" id="addAdminModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
             <div class="modal-dialog">
               <div class="modal-content">
                 <div class="modal-header row">
                   <div class='col-xs-10 rm-padding'>
                     <h2 class="modal-title" id="myModalLabel">  <i class="fa fa-user fa-fw"></i> Add New Admin</h2>
                   </div>
                   <div class='col-xs-2 rm-padding'>
                     <button type="button" data-dismiss="modal" class="close" aria-label="Close"><i class="fa fa-times fa-fw fa-2x"></i></button>
                   </div>
                 </div>
                 <form  onsubmit="addAdmin();return false;">
                 <div class="modal-body">
                  <div class="form-group">
                    <label for="name" class="required">Name</label>
                    <input type="text"  class="input-lg form-control" id="addName" required>
                  </div>
                  <div class="form-group">
                    <label for="username" class="required">User Name</label>
                    <input type="text"  class="input-lg form-control" id="addUsername" name="username" required>
                  </div>
                  <div class="form-group">
                    <label for="username" class="required">Password</label>
                    <input type="password"  class="input-lg form-control" id="addPassword" name="password" required>
                  </div>
                  <div class="form-group">
                    <label for="email" class="control-label required">Email</label>
                    <input type="email" class="input-lg form-control" id="addEmail" required>
                  </div>
                  <div class="form-group">
                    <div class='form-inline'>
                      <div class="form-group">
                        <div class="col-xs-3">
                          <label for="apt" class="required">Apt.</label>
                          <input class="input-lg form-control" id="addApt" type="text" required>
                        </div>
                        <div class="col-xs-8">
                          <label for="street" class="col-md-offset-5 required">Street</label>
                          <input class="input-lg form-control col-md-offset-5" id="addStreet" type="text" required>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputCity" class="control-label required">City</label>
                    <input type="text" class="input-lg form-control" id="addCity" required>
                  </div>
                  <div class="form-group">
                    <label for="inputProvince" class="control-label required">Province</label>
                    <select class=" input-lg form-control" id="addProvince" required>
                      <option value="">None</option>
                    </select>
                  </div>
                    <div class='form-inline'>
                      <div class="form-group">
                        <div class="col-xs-6" >
                          <label for="postal" class="required">Postal Code</label>
                          <input class="input-lg form-control" id="addPostal" type="text" required>
                        </div>
                        <div class="col-xs-6" >
                          <label for="telephone" class="required">Telephone</label>
                          <input class="input-lg form-control" id="addTel" type="text" required>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-warning pull-left btn-lg" data-dismiss="modal">CANCEL</button>
                  <button type="submit" class="btn btn-success pull-right btn-lg">ADD</button>
                </div>
              </form>
             </div>
            </div>
          </div>
          <!--End of add model-->

          <!-- Delete admin Modal -->
          <div class="modal fade" id="adminDelModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
           <div class="modal-dialog" role="document">
             <div class="modal-content">
               <div class="modal-header row">
                 <div class='col-xs-10 rm-padding'>
                   <h2 class="modal-title" id="myModalLabel">  <i class="fa fa-trash-o fa-fw"></i> Delete</h2>
                 </div>
                 <div class='col-xs-2 rm-padding'>
                   <button type="button" data-dismiss="modal" class="close" aria-label="Close"><i class="fa fa-times fa-fw fa-2x"></i></button>
                 </div>
               </div>
               <div class="modal-body">
                 <div class='col-md-12 text-center'>
                   <p>Do you want to delete the user account for <font class='bolder' id="deleteAdmin"></font>?</p>
                 </div>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-warning btn-lg pull-left" data-dismiss="modal">CANCEL</button>
                 <button type="button" class="btn btn-danger btn-lg pull-right" onclick="deleteAdminModal();">DELETE</button>
               </div>
             </div>
           </div>
         </div>
         <!--End of Modal-->

         <!--Edit admin Modal-->
       <div class="modal fade" id="adminModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
       <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header row">
             <div class='col-xs-10 rm-padding'>
               <h2 class="modal-title" id="myModalLabel">  <i class="fa fa-user fa-fw"></i> Edit Profile</h2>
             </div>
             <div class='col-xs-2 rm-padding'>
               <button type="button" data-dismiss="modal" class="close" aria-label="Close"><i class="fa fa-times fa-fw fa-2x"></i></button>
             </div>
           </div>
           <form  onsubmit="editadmin();return false;">
           <div class="modal-body">
            <div class="form-group">
              <label for="name" class="required">Name</label>
              <input type="text"  class="input-lg form-control" id="editAdminName" required>
            </div>
            <div class="form-group">
              <label for="username">User Name</label>
              <input type="text"  class="input-lg form-control" id="editAdminUsername" name="username" readonly>
            </div>
            <div class="form-group">
              <label for="email" class="control-label required">Email</label>
              <input type="email" class="input-lg form-control" id="editAdminEmail" required>
            </div>
            <div class="form-group">
              <div class='form-inline'>
                <div class="form-group">
                  <div class="col-xs-3">
                    <label for="apt" class="required">Apt.</label>
                    <input class="input-lg form-control" id="editAdminApt" type="text" required>
                  </div>
                  <div class="col-xs-8">
                    <label for="street" class="col-md-offset-5 required">Street</label>
                    <input class="input-lg form-control col-md-offset-5" id="editAdminStreet" type="text" required>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="inputCity" class="control-label required">City</label>
              <input type="text" class="input-lg form-control" id="editAdminCity" required>
            </div>
            <div class="form-group">
              <label for="inputProvince" class="control-label required">Province</label>
              <select class=" input-lg form-control" id="editAdminProvince" required>
                <option value="">None</option>
              </select>
            </div>
              <div class='form-inline'>
                <div class="form-group">
                  <div class="col-xs-6" >
                    <label for="postal" class="required">Postal Code</label>
                    <input class="input-lg form-control" id="editAdminPostal" type="text" required>
                  </div>
                  <div class="col-xs-6" >
                    <label for="telephone" class="required">Telephone</label>
                    <input class="input-lg form-control" id="editAdminTel" type="text" required>
                  </div>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning pull-left btn-lg" data-dismiss="modal">CANCEL</button>
            <button type="submit" class="btn btn-success pull-right btn-lg">EDIT</button>
          </div>
        </form>
       </div>
      </div>
    </div>
    <!--End of edit model-->
           </div>
         </div>
       </div>
  </div>
</div>
