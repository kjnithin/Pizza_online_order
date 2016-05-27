$(document).ready(function() {
    login();

});

// Load the login form
function login() {
    $.ajax({
        type: "POST",
        url: "template/login.php",
        data: "",
        success: function(data) {
            $("#mainView").html(data);
            $("#btnLogin").hide();
            $("#btnLogout").hide();
            $("#loginSpinner").hide();
            $("#displayName").hide();
            loginPassowrdEye();
            loginSpinnerShow();
            loadRegistrationPage();
        }
    });
}

// Load Registration page
function loadRegistrationPage() {
    $("#loadRegistrationForm").on('click', function() {
        $.ajax({
            type: "POST",
            url: "template/register.php",
            data: "",
            success: function(data) {
                $("#mainView").html(data);
                $("#btnLogin").show();
                $("#btnLogout").hide();
                $("#displayName").hide();
                regPasswordEye();
                loginBtn();
                provinceDropDown();
            }
        });
    });
}

//Button to navigate to Login page from navbar of the registration page
function loginBtn() {
    $("#btnLogin").on('click', function() {
        login();
    });
}

//Button to navigate to Login page from navbar of the user page and admin page
function logoutBtn() {
    $("#btnLogout").on('click', function() {
        login();
    });
}

//See the password while entering it in the Registration page
function regPasswordEye() {
    $("#regeye").mousedown(function() {
        $("#regPassword").attr('type', 'text');
    }).mouseup(function() {
        $("#regPassword").attr('type', 'password');
    }).mouseout(function() {
        $("#regPassword").attr('type', 'password');
    });
}

//Spinner in the submit button of the login form
function loginSpinnerShow() {
    $("#loginSubmit").on('Click', function() {
        $("#loginSpinner").show();
    });
}

// See the password while entering it in the Login form
function loginPassowrdEye() {
    $("#eyeLabel").mousedown(function() {
        $("#loginPassword").attr('type', 'text');
    }).mouseup(function() {
        $("#loginPassword").attr('type', 'password');
    }).mouseout(function() {
        $("#loginPassword").attr('type', 'password');
    });
}

// This is for authentication of login
var postLogin = function() {
    var loginUser = document.getElementById('loginUser').value;
    var loginPassword = document.getElementById('loginPassword').value;
    username(loginUser);
    $.ajax({
        type: "POST",
        url: "authenticate/",
        data: ({
            'loginUser': loginUser,
            'loginPassword': loginPassword
        }),
        success: function(data) {
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
            if (obj.template == "user.php") {
                $("#btnLogin").hide();
                $("#btnLogout").show();
                $("#displayName").show();
                logoutBtn();
                username();
            } else if (obj.template == "admin.php") {
                $("#btnLogin").hide();
                $("#btnLogout").show();
                $("#displayName").show();
                logoutBtn();
                username();
            } else if (obj.template == "unauthorisedUser.php") {
                $("#btnLogin").show();
                loginBtn();
                unauthorisedLogin();
            }
        }
    });
}

// This is login button for unauthorised user page
function unauthorisedLogin() {
    $("#unauthorisedLoginBtn").on('click', function() {
        login();
    });
}

//Display the username in the navbar after successful login
function username(user) {
    var name = user;
    $.ajax({
        type: "POST",
        url: "rest/getUsername.php",
        data: ({
            'name': name
        }),
        success: function(data) {
            $.each(JSON.parse(data), function(k, v) {
                $("#userName").html(v.name);
            });
        }
    });
}

// load the registration form
var postRegister = function() {
    var regname = document.getElementById('regFullName').value;
    var regusername = document.getElementById('regUserName').value;
    var regemail = document.getElementById('regEmail').value;
    var regpassword = document.getElementById('regPassword').value;
    var regapt = document.getElementById('regApt').value;
    var regstreet = document.getElementById('regStreet').value;
    var regcity = document.getElementById('regCity').value;
    var regprovince = document.getElementById('regProvince').value;
    var regpostal = document.getElementById('regPostal').value;
    var regtel = document.getElementById('regTel').value;
    $.ajax({
        type: "POST",
        url: "rest/userRegister.php",
        data: ({
            'regname': regname,
            'regusername': regusername,
            'regemail': regemail,
            'regpassword': regpassword,
            'regapt': regapt,
            'regstreet': regstreet,
            'regcity': regcity,
            'regprovince': regprovince,
            'regpostal': regpostal,
            'regtel': regtel
        }),
        success: function(data, status) {
            if (status == "success") {
                login();
            } else {

            }
        }
    });
}

// This is to get the name of the province in the dropdown in the register form
function provinceDropDown() {
    $.ajax({
        type: "POST",
        url: "rest/provinceForRegForm.php",
        success: function(data) {
            $.each(JSON.parse(data), function(k, v) {
                $("#regProvince").append(
                    $('<option value="' + v.name + '">' + v.name + '</option>')
                );
            });
        }
    });
}
