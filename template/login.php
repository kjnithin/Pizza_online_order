<!-- <div class="alert alert-success col-md-offset-2" role="alert"   id="loginAlert" ><i class="fa fa-user fa-lg pull-left"></i>  Successfully Registered !! Please Login...<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="glyphicon glyphicon-remove" aria-label="Right Align" aria-hidden="true"></span></button></div> -->

<!--Login-->
  <form onsubmit="postLogin();return false;" class="form-horizontal">
   <div class="well col-md-offset-3" id="loginWell">
    <div class="col-md-offset-0"> <h1>Conestoga Pizzeria</h1></div>
   <div class="form-group" id="usernameLogin">
     <label for="username" class="control-label">User Name</label>
     <span class="fa fa-user" id="usernameLabel"></span>
     <input type="text" class="form-control" id="loginUser" placeholder="Username" required>
   </div>
   <div class="form-group" id="passwordLogin">
     <label for="inputPassword" class="control-label">Password</label>
     <span class="fa fa-lock" id="passwordLabel"></span>
     <input type="password" class="form-control" id="loginPassword" placeholder="Password" required>
      <span class="fa fa-eye" id="eyeLabel"></span>
  </div>
   <div class="form-group">
     <div>
    <button type="submit" class="btn btn-primary col-md-12" id="loginSubmit">Sign In <i id="loginSpinner" class="fa fa-circle-o-notch fa-spin fa-lg pull-right"></i></button>
     </div>
   </div>
   </form>
   <div class="col-md-offset-4">Not a member? <a id="loadRegistrationForm">Register</a></div>
    </div>

 <!--end of Login  -->
