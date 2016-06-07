$(document).ready(function() {
    login();

    //This is  to clear all the stored sessions
    sessionStorage.clear();
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
            $("#unregisterAlert").hide();
            $("#loginAlert").hide();
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
    sessionStorage.setItem("user", loginUser);
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
                personalDetails();
                showEditModal();
                showDeleteModal();
                provinceDropDown();
            } else if (obj.template == "admin.php") {
                $("#btnLogin").hide();
                $("#btnLogout").show();
                $("#displayName").show();
                logoutBtn();
                username();
                showAdminName();
                showAdminDetails();
                addNewAdmin();
                provinceDropDown();
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
function username() {
    var name = sessionStorage.getItem("user");
    $.ajax({
        type: "POST",
        url: "rest/getUsername.php",
        data: ({
            'name': name
        }),
        success: function(data) {
            $.each(JSON.parse(data), function(k, v) {
                sessionStorage.setItem("username", v.name);
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
                        $("#unregisterAlert").hide();
                        $("#loginAlert").show();
                        loginPassowrdEye();
                        loginSpinnerShow();
                        loadRegistrationPage();

                    }
                });
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
                $("#editProvince").append(
                    $('<option value="' + v.name + '">' + v.name + '</option>')
                );
                $("#addProvince").append(
                    $('<option value="' + v.name + '">' + v.name + '</option>')
                );
            });

        }
    });
}

// ********************User Page******************
function personalDetails() {
    var name = sessionStorage.getItem("user");
    $.ajax({
        type: "POST",
        url: "rest/getPersonalDetails.php",
        data: ({
            'name': name
        }),
        success: function(data) {
            $.each(JSON.parse(data), function(k, v) {
                $("#usrNameTxt").html(v.name);
                $("#usernameTxt").html(v.username);
                $("#emailTxt").html(v.email);
                $("#aptTxt").html(v.apt);
                $("#streetTxt").html(v.street);
                $("#cityTxt").html(v.city);
                $("#provinceTxt").html(v.province);
                $("#postalTxt").html(v.postal);
                $("#phoneTxt").html(v.phone);
            });
        }
    });
}

// This is to get the details from the database and display it in edit modal
function showEditModal() {
    $("#editIcon").on('click', function() {
        var name = sessionStorage.getItem("user");
        $.ajax({
            type: 'POST',
            url: "rest/getPersonalDetails.php",
            data: ({
                'name': name
            }),
            success: function(data, status) {
                $.each(JSON.parse(data), function(k, v) {
                    document.getElementById('editName').value = v.name;
                    document.getElementById('editUsername').value = v.username;
                    document.getElementById('editEmail').value = v.email;
                    document.getElementById('editApt').value = v.apt;
                    document.getElementById('editStreet').value = v.street;
                    document.getElementById('editCity').value = v.city;
                    document.getElementById('editProvince').value = v.province;
                    document.getElementById('editPostal').value = v.postal;
                    document.getElementById('editTel').value = v.phone;
                });
                $("#myModalEdit").modal('show');
            }
        });

    });
}

// This is to post the updated data in the  edit modal
var edituser = function() {
    var editname = document.getElementById('editName').value;
    var editusername = document.getElementById('editUsername').value;
    var editemail = document.getElementById('editEmail').value;
    var editapt = document.getElementById('editApt').value;
    var editstreet = document.getElementById('editStreet').value;
    var editcity = document.getElementById('editCity').value;
    var editprovince = document.getElementById('editProvince').value;
    var editpostal = document.getElementById('editPostal').value;
    var edittel = document.getElementById('editTel').value;
    $.ajax({
        type: 'POST',
        url: "rest/updateUserdetails.php",
        data: ({
            'editname': editname,
            'editusername': editusername,
            'editemail': editemail,
            'editapt': editapt,
            'editstreet': editstreet,
            'editcity': editcity,
            'editprovince': editprovince,
            'editpostal': editpostal,
            'edittel': edittel
        }),
        success: function(data, status) {
            if (status == "success") {
                username();
                personalDetails();
            }
            $("#myModalEdit").modal('hide');
        }
    });
}

// This is to show the delete user profile modal
function showDeleteModal() {
    $("#trashIcon").on('click', function() {
        var name = sessionStorage.getItem("username");
        $("#deleteUser").html(name);
        $("#myModalDel").modal('show');
    });
}

// This is to delete the user profile
function hideDeleteModal() {
    var name = sessionStorage.getItem("user");

    $.ajax({
        type: "POST",
        url: "rest/deleteUserProfile.php",
        data: ({
            'name': name
        }),
        success: function(data, status) {
            if (status == "success") {
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
                        $("#unregisterAlert").show();
                        $("#loginAlert").hide();
                        loginPassowrdEye();
                        loginSpinnerShow();
                        loadRegistrationPage();
                    }
                });
            }
            $("#myModalDel").modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').remove();
        }
    });
}
// ********************End of User Page***********

// ***************Admin Page*********************
// This is to show the details of the logined Admin
function showAdminDetails() {
    var name = sessionStorage.getItem("user");
    $.ajax({
        type: "POST",
        url: "rest/getPersonalDetails.php",
        data: ({
            'name': name
        }),
        success: function(data) {
            $.each(JSON.parse(data), function(k, v) {
                $("#adminNameTxt").html(v.name);
                $("#adminUsernameTxt").html(v.username);
                $("#adminEmailTxt").html(v.email);
                $("#adminAptTxt").html(v.apt);
                $("#adminStreetTxt").html(v.street);
                $("#adminCityTxt").html(v.city);
                $("#adminProvinceTxt").html(v.province);
                $("#adminPostalTxt").html(v.postal);
                $("#adminPhoneTxt").html(v.phone);
            });
        }
    });
}

// This is t show the list of admin's name in the admin details tab
function showAdminName() {
    $.ajax({
        type: "POST",
        url: "rest/getAdminDetails.php",
        data: "",
        success: function(data) {
            $.each(JSON.parse(data), function(k, v) {
                $("#adminNameList").append(
                    $('<a class="list-group-item" id="nameList" active>' + v.name + '</a>')
                );
            });
            getAdminName();
        }
    });
}

// This is to get the details of particular admin by clicking on list
function getAdminName() {
    $("#adminNameList a").click(function() {
        var name = $(this).text();
        sessionStorage.setItem("name", name);
        $.ajax({
            type: "POST",
            url: "rest/getAdminName.php",
            data: ({
                'name': name
            }),
            success: function(data) {
                $.each(JSON.parse(data), function(k, v) {
                    $("#adminNameTxt").html(v.name);
                    $("#adminUsernameTxt").html(v.username);
                    $("#adminEmailTxt").html(v.email);
                    $("#adminAptTxt").html(v.apt);
                    $("#adminStreetTxt").html(v.street);
                    $("#adminCityTxt").html(v.city);
                    $("#adminProvinceTxt").html(v.province);
                    $("#adminPostalTxt").html(v.postal);
                    $("#adminPhoneTxt").html(v.phone);
                });
            }
        });
    });
}

// This is to show the modal for adding the new admin
function addNewAdmin() {
    $("#addAdminIcon").on('click', function() {
        $("#addAdminModal").modal('show');
    });
}

// This is the form submitted to add the new admin
var addAdmin = function() {
    var name = document.getElementById('addName').value;
    var username = document.getElementById('addUsername').value;
    var password = document.getElementById('addPassword').value;
    var email = document.getElementById('addEmail').value;
    var apt = document.getElementById('addApt').value;
    var street = document.getElementById('addStreet').value;
    var city = document.getElementById('addCity').value;
    var province = document.getElementById('addProvince').value;
    var postal = document.getElementById('addPostal').value;
    var tel = document.getElementById('addTel').value;
    $.ajax({
        type: 'POST',
        url: "rest/addAdmin.php",
        data: ({
            'name': name,
            'username': username,
            'password': password,
            'email': email,
            'apt': apt,
            'street': street,
            'city': city,
            'province': province,
            'postal': postal,
            'tel': tel
        }),
        success: function(data, status) {
            console.log(data);
            if (status == "success") {
                showAdminName();
            }
            $("#addAdminModal").modal('hide');
        }
    });
}



// // **************End of Admin Page****************
