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
      hi <p><font id="txt"></font></p>
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
              <!-- <font id="usrNameTxt"></font> -->
            </div>
            </div>
            <div class="form-group">
            <label class="col-md-4  control-label">User Name:</label>
            <div class="col-md-9">
              <!-- <font ></font> -->
            </div>
          </div>
          <div class="form-group">
          <label class="col-md-4  control-label">Email:</label>
          <div class="col-md-9">
            <!-- <font id="usrNameTxt"></font> -->
          </div>
        </div>
        <div class="form-group">
        <label class="col-md-4  control-label">Address:</label>
        <div class="col-md-9">
          <!-- <font id="usrNameTxt"></font> -->
        </div>
      </div>
      <div class="form-group">
      <label class="col-md-4  control-label">Phone:</label>
      <div class="col-md-9">
        <!-- <font id="usrNameTxt"></font> -->
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
