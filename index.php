<!DOCTYPE html>
    <html>
        <head>
            <script src="js/jquery-1.12.1.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            <script src="js/script.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
            <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <link rel="stylesheet" type="text/css" href="css/styles.css">
            <title>Conestoga Pizzeria</title>
        </head>
        <body>
          <div class="container-fluid">
            <nav class="navbar navbar-default navbar-fixed-top">
              <div class="container">
                <div class="navbar-header">
                  <a class="navbar-brand" style='padding-right:5px !important;'><img alt="PIZZA" src="./img/pizza.ico" height="25px"></a>
                  <text class='navbar-header-text'>CONESTOGA PIZZA</text>
                </div>
                <p class="navbar-text" id="displayName">Hi!! <font class='bold' id="userName"></font></p>
                <div class="collapse navbar-collapse" id="">
                <ul class="nav navbar-nav navbar-right">
                  <li><a id="btnLogin"><i class="fa fa-sign-in fa-fw fa-2x"></i></a></li>
                  <li><a id="btnLogout"><i class="fa fa-sign-out fa-fw fa-2x"></i></a></li>
                </ul>
              </div>
            </div>
            </nav>
          </div>
          <!-- end -->

         <div  class='container'  id='mainView' ></div>

         <!-- Its footer -->
         <div class="container-fluid">
         <nav class="navbar navbar-default navbar-fixed-bottom">
           <div class="container">
             <div class="navbar-header" id="copyright">
               <p><span class="glyphicon glyphicon-copyright-mark"></span>Conestoga Pizza</P>
               </div>
             </div>
           </nav>
         </div>
       </body>
  </html>
