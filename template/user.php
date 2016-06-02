<div class="row">
  <div class="col-md-3">
<!--Defining Tabs-->
<ul class="nav nav-pills nav-stacked" role="tablist">
<li role="presentation" class="active">
  <a href="#order" aria-controls="order" role="tab" data-toggle="tab"><font class='tab-header'><i class='fa fa-cutlery'></i> Order Pizza</font></a>
</li>
<li role="presentation">
     <a href="#personal" aria-controls="personal" role="tab" data-toggle="tab"><font class='tab-header'><i class='fa fa-info'></i> Personal Data</font></a>
</li>
<li role="presentation">
<a href="#history" aria-controls="history" role="tab" data-toggle="tab"><font class='tab-header'><i class='fa fa-history'></i> History</font></a>
</li>
</ul>
</div>
<!--End of tabs-->
<div class="col-md-9 well">
<div class='tab-content'>
  <!--This is the tab for order the pizza-->
    <div role='tabpanel' id='order' class='tab-pane active'>
      hi
    </div>
    <!--end-->
    <!--This is the tab for personal details of user-->
    <div role='tabpanel' id='personal' class='tab-pane'>
      <div class="row">
        <!--Personal Details-->

        <div class="col-md-8 well form-horizontal">
          <p class="tab-header" >Personal Details</p>

            <div class="form-group">
            <label class="col-md-4  control-label">Name:</label>
            <div class="col-md-8">
              <font id="usrNameTxt"></font>
              <!-- <input type="text"  class="input-lg form-control" id="usrNameTxt" required> -->
            </div>
            </div>
            <div class="form-group">
            <label class="col-md-4  control-label">User Name:</label>
            <div class="col-md-9">
              <font id="usernameTxt"></font>
            </div>
          </div>
          <div class="form-group">
          <label class="col-md-4  control-label">Email:</label>
          <div class="col-md-9">
            <font id="emailTxt"></font>
          </div>
        </div>
        <div class="form-group">
        <label class="col-md-4  control-label">Address:</label>
        <div class="col-md-9">
          <font id="usrNameTxt"></font>
        </div>
      </div>
      <div class="form-group">
      <label class="col-md-4  control-label">Phone:</label>
      <div class="col-md-9">
        <font id="phoneTxt"></font>
      </div>
    </div>

        </div>
        <!--End of personal details-->
        <!--This is adding for edit and delete buttons-->
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-offset-2">
          <span class="fa-stack fa-5x fa menu-blob">
            <i class="fa fa-circle fa-stack-2x blue-bb"></i>
            <i class="fa fa fa-edit fa-stack-1x" style='color:white;' id="editIcon"></i>
          </span>
          <div clss="col-md-offset-1">
          <h3 class='text-medium' id="editUserBtn">Edit</h3>
        </div>
        </div>
        <div class="col-md-offset-2">
      <span class="fa-stack fa-5x fa menu-blob">
        <i class="fa fa-circle fa-stack-2x blue-bb"></i>
        <i class="fa fa fa-trash-o fa-stack-1x" style='color:white;' id="trashIcon"></i>
      </span>
      <div clss="col-md-offset-1">
      <h3 class='text-medium' id="deleteUserBtn">Delete</h3>
    </div>
    </div>
      </div>
        </div>
        <!--End of edit and delete buttons-->
      </div>

      <!--Edit user Modal-->
    <div class="modal fade" id="myModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header row">
          <div class='col-xs-10 rm-padding'>
            <h2 class="modal-title" id="myModalLabel">  <i class="fa fa-user fa-fw"></i> Edit PROFILE</h2>
          </div>
          <div class='col-xs-2 rm-padding'>
            <button type="button" data-dismiss="modal" class="close" aria-label="Close"><i class="fa fa-times fa-fw fa-2x"></i></button>
          </div>
        </div>
        <form  onsubmit="edituser();return false;">
        <div class="modal-body">
         <div class="form-group">
           <label for="name" class="required">Name</label>
           <input type="text"  class="input-lg form-control" id="editName" required>
         </div>
         <div class="form-group">
           <label for="username">User Name</label>
           <input type="text"  class="input-lg form-control" id="editUsername" name="username" readonly>
         </div>
         <div class="form-group">
           <label for="email" class="control-label required">Email</label>
           <input type="email" class="input-lg form-control" id="editEmail" required>
         </div>
         <div class="form-group">
           <div class='form-inline'>
             <div class="form-group">
               <div class="col-xs-3">
                 <label for="apt" class="required">Apt.</label>
                 <input class="input-lg form-control" id="editApt" type="text" required>
               </div>
               <div class="col-xs-8">
                 <label for="street" class="col-md-offset-5 required">Street</label>
                 <input class="input-lg form-control col-md-offset-5" id="editStreet" type="text" required>
               </div>
             </div>
           </div>
         </div>
         <div class="form-group">
           <label for="inputCity" class="control-label required">City</label>
           <input type="text" class="input-lg form-control" id="editCity" required>
         </div>
         <div class="form-group">
           <label for="inputProvince" class="control-label required">Province</label>
           <select class=" input-lg form-control" id="editProvince" required>
             <option value="">None</option>
           </select>
         </div>
           <div class='form-inline'>
             <div class="form-group">
               <div class="col-xs-6" >
                 <label for="postal" class="required">Postal Code</label>
                 <input class="input-lg form-control" id="editPostal" type="text" required>
               </div>
               <div class="col-xs-6" >
                 <label for="telephone" class="required">Telephone</label>
                 <input class="input-lg form-control" id="editTel" type="text" required>
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

 <!-- Delete Modal -->
 <div class="modal fade" id="myModalDel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header row">
        <div class='col-xs-10 rm-padding'>
          <h2 class="modal-title" id="myModalLabel">  <i class="fa fa-trash-o fa-fw"></i> DELETE</h2>
        </div>
        <div class='col-xs-2 rm-padding'>
          <button type="button" data-dismiss="modal" class="close" aria-label="Close"><i class="fa fa-times fa-fw fa-2x"></i></button>
        </div>
      </div>
      <div class="modal-body">
        <div class='col-md-12 text-center'>
          <p>Do you want to delete the user account for <font class='bolder' id="deleteUser"></font>?</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning btn-lg pull-left" data-dismiss="modal">CANCEL</button>
        <button type="button" class="btn btn-danger btn-lg pull-right" onclick="hideDeleteModal();">DELETE</button>
      </div>
    </div>
  </div>
</div>
<!--End of Modal-->


    </div>
    <!--End of personal details tab-->
    <!--This is the tab for the order history for that perticular user-->
    <div role='tabpanel' id='history' class='tab-pane'>
      bye
    </div>
    <!--End of history tab-->
</div>
</div>
</div>
