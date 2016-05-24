<!--Registration-->
<form onsubmit="postRegister();return false;" class="form-horizontal">
  <div class="well col-md-offset-4">
   <div class="col-md-offset-0"> <h1>Conestoga Pizzeria</h1></div>
   <div class="form-group" id="regNameGroup">
     <label for="fullName" class="control-label required">Full Name</label>
     <span class="fa fa-user-secret" id="regname"></span>
       <input type="text" class="form-control" id="regFullName" required>
   </div>
   <div class="form-group" id="regusernamegroup">
     <label for="userName" class="control-label required">User Name</label>
     <span class="fa fa-user" id="regusername"></span>
     <input type="text" class="form-control" id="regUserName" required>
   </div>
  <div class="form-group" id="regemailgroup">
    <label for="email" class="control-label required">Email</label>
    <span class="fa fa-envelope" id="regemail"></span>
    <input type="email" class="form-control" id="regEmail" required>
</div>
  <div class="form-group" id="regpasswordgroup">
    <label for="Password" class="control-label required">Password</label>
    <span class="fa fa-lock" id="regpassword"></span>
    <input type="password" class="form-control" id="regPassword" required>
    <span class="fa fa-eye" id="regeye"></span>
  </div>
  <div class="form-group">
    <div class='form-inline'>
      <div class="form-group">
        <div class="col-xs-3" id="reghomegroup">
          <label for="apt" class="required">Apt.</label>
          <span class="fa fa-home" id="reghome"></span>
          <input class="form-control" id="regApt" type="text" required>
        </div>
        <div class="col-xs-8" id="regstreetgroup">
          <label for="street" class="col-md-offset-5 required">Street</label>
          <span class="fa fa-road" id="regroad"></span>
          <input class="form-control col-md-offset-5" id="regStreet" type="text" required>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group" id="regcitygroup">
    <label for="inputCity" class="control-label required">City</label>
    <span class="fa fa-map-marker" id="regcity"></span>
      <input type="text" class="form-control" id="regCity" required>
  </div>
  <div class="form-group">
    <label for="inputProvince" class="control-label required">Province</label>
  <select class="form-control" id="regProvince" required>
    <option value="">None</option>
    <option value="Ontario">Ontario</option>
    <option value="Quebec">Quebec</option>
    <option value="Manitoba">Manitoba</option>
    <option value="Saskatchewan">Saskatchewan</option>
  </select>
</div>
<div class="form-group">
  <div class='form-inline'>
    <div class="form-group">
      <div class="col-xs-6" id="regmap">
        <label for="postal" class="required">Postal Code</label>
        <span class="fa fa-map"  id="regmaplabel"></span>
        <input class="form-control" id="regPostal" type="text" required>
      </div>
      <div class="col-xs-6" id="regphonegroup">
        <label for="telephone" class="required">Telephone</label>
        <span class="fa fa-whatsapp" id="regphone"></span>
        <input class="form-control" id="regTel" type="text" required>
      </div>
    </div>
  </div>
</div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary col-md-12"><i class="fa fa-user-plus fa-lg"></i>Register</button>
  </div>
</div>
</form>
<!--End of Registration-->
