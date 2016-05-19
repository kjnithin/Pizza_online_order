$(document).ready(function(){
  login();

});

// Load the login form
function login(){
  $.ajax({
    type: "POST",
    url: "template/login.php",
    data: "",
    success: function(data) {
      $("#mainView").html(data);
      $("#eyeLabel").mousedown(function(){
        $("#loginPassword").attr('type','text');
      }).mouseup(function(){
        $("#loginPassword").attr('type','password');
      }).mouseout(function(){
        $("#loginPassword").attr('type','password');
      });

      $("#loadRegistrationForm").on('click',function(){
        $.ajax({
          type:"POST",
          url:"template/register.php",
          data:"",
          success:function(data){
            $("#mainView").html(data);
            $("#regeye").mousedown(function(){
              $("#regPassword").attr('type','text');
            }).mouseup(function(){
              $("#regPassword").attr('type','password');
            }).mouseout(function(){
              $("#regPassword").attr('type','password');
            });
           }
        });
      });
    }
  });
}






// This is for authentication of login
var postLogin=function(){
  var loginUser=document.getElementById('loginUser').value;
  var loginPassword=document.getElementById('loginPassword').value;
 $.ajax({
   type:"POST",
   url:"authenticate/",
   data:({'loginUser':loginUser,'loginPassword':loginPassword}),
   success:function(data){
     data = JSON.parse(data);
           loadView({
                 "template": data.template
             });
   }
 });
}
// This is to load the page based on the authentication (user or admin)
function loadView(obj) {
        if (obj.location == undefined)
          obj.location = 'mainView';
        $.ajax({
          type: "POST",
          url: "template/" + obj.template,
          success: function(data) {
                    $("#" + obj.location).html(data);
              }
            });
          }

          // load the registration form
          var postRegister=function(){
            var regname=document.getElementById('regFullName').value;
            var regusername=document.getElementById('regUserName').value;
            var regemail=document.getElementById('regEmail').value;
            var regpassword=document.getElementById('regPassword').value;
            var regapt=document.getElementById('regApt').value;
            var regstreet=document.getElementById('regStreet').value;
            var regcity=document.getElementById('regCity').value;
            var regprovince=document.getElementById('regProvince').value;
            var regpostal=document.getElementById('regPostal').value;
            var regtel=document.getElementById('regTel').value;
            $.ajax({
              type:"POST",
              url:"rest/userRegister.php",
              data:({
                'regname':regname,
                'regusername':regusername,
                'regemail':regemail,
                'regpassword':regpassword,
                'regapt':regapt,
                'regstreet':regstreet,
                'regcity':regcity,
                'regprovince':regprovince,
                'regpostal':regpostal,
                'regtel':regtel
              }),
              success:function(data,status){
              if(status=="success"){
                login();
                $('#loginAlert').show();
                console.log("hi");
              }
              else{

              }
              }
            });
            }
