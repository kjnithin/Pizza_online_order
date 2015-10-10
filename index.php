<!--This is the program to design a web page to order the pizza online. Here I have used the php back end for validating the code-->
<!--php code starts from here-->
<?php
error_reporting(0);
 $first=""; $last=""; $city="";$postal="";$email="";$telephone="";$apt="";$street="";$province="";
 $firstErr="";$lastErr="";$cityErr="";$postalErr="";$emailErr="";$telephoneErr="";$cheeseErr="";
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

//Validation of personal details

     //To check the valid first name     
   
     if (empty($_POST["first"])) {
        $firstErr = "Name is required";
     } else {
        $first = test_input($_POST["first"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$first)) {
         $firstErr = "Only letters and white space allowed"; 
     }
   }
     
     //To check the valid last name     
   
     if (empty($_POST["last"])) {
     $lastErr = "Name is required";
   } else {
     $last = test_input($_POST["last"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$last)) {
       $lastErr = "Only letters and white space allowed"; 
     }
   }
     //To provide the apartment numnder to the output
     
     $apt=test_input($_POST["apt"]);
     
     //To provide the street address to the output
     
     $street=test_input($_POST["street"]);
     
     //To provide the province to the output
    
     $province=test_input($_POST["provinces"]);
     
     //To check city cnanot be empty and provide the city to output
     
     if(empty($_POST["city"])){
         $cityErr="Name of the city is required";
     }
     else{
         $city=test_input($_POST["city"]);
     }
     
     //To check the vslid canadian postal code
    
     if(!empty($_POST["postal"])){
      if(!preg_match('/^([ABCEGHJKLMNPRSTVXY][0-9][A-Z] []? [0-9][A-Z][0-9])*$/', $postal)){
      $postalErr="Provide the valid postal code";
      }
      else{
      $postal=test_input($_POST["postal"]);
	}
     }
     else{
         $postalErr="Please provide the postal code";
     }
             
     //TO check the valid email
     
     if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   }
     
    //To check the valid telephone number
    
     if(!empty($_POST["telephone"])){
     if(!preg_match('/^((([0-9]{1})*[- .(]*([0-9]{3})[- .)]*[0-9]{3}[- .]*[0-9]{4})+)*$/', $telephone)) {
         $telephoneErr="Provide the valid phone number";
         
     }
        else{
            
            $telephone=test_input($_POST["telephone"]);
        }
     }
         else{
         $telephoneErr="Please provide the Telephone number";
     }
     
   
     // validation of order information 
     
     // To get the size of pizza
     
     $size=test_input($_POST['size']);
     
     //To select the type of the crust
     
     $crust=test_input($_POST['crust']);
     
     //To select the toppings
    
     $free="";
     $top=$_POST['toppings'];
     foreach($top as $toppings){
          $free=$free+$toppings;
     }
      $top=($free-.5);
     
     //Adding all the values to find the total cost
    
     if ($top>=0){
       $base= $size+$crust+$top;
     }else{
         $base=0;
     }
      $mid=$province*$base;
     
     if($base==0){
         $total=0;
     }
     else{
     $total= $mid+$base;
     }
     
 }
   function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<!--Html code starts from here-->
 <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
        <title>Conestoga Pizzeria</title>
   </head>

    <body class="body">
        <header class="titleheader">
            <h1>Conestoga Pizzeria</h1></header>

        <section class="rightside">

            <form method="post" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>">

                <h3>Personal Details</h3> First Name
                <br>
                <input type="text" name="first" value="<?php echo $first;?>">
                <span class="error">* <?php echo $firstErr;?></span>
                <br>
                <br> Last Name
                <br>
                <input type="text" name="last" value="<?php echo $last;?>">
                <span class="error">* <?php echo $lastErr;?></span>
                <br>
                <br> Apt No.
                <br>
                <input type="text" name="apt">
                <br>
                <br> Street
                <br>
                <input type="text" name="street">
                <br>
                <br> City
                <br>
                <input type="text" name="city" value="<?php echo $city;?>">
                <span class="error">* <?php echo $cityErr;?></span>
                <br>
                <br> Province
                <br>
                <select name="provinces" id="provinces" size="1">
                    <option value="">None</option>
                    <option value=".13">Ontario</option>
                    <option value=".149">Quebec</option>
                    <option value=".13">Manitoba</option>
                    <option value=".10">Saskatchewan</option>
                </select>
                <br>
                <br>
                <br> Postal Code
                <br>
                <input type="text" name="postal" pattern="[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]" value="<?php echo $postal;?>">
                <span class="error">* <?php echo $postalErr;?></span>

                <br>
                <br> Telephone
                <br>
                <input type="tel" name="telephone" pattern="^\d{3}\d{3}\d{4}$" value="<?php echo $telephone;?>">
                <span class="error">* <?php echo $telephoneErr;?></span>
                <br>
                <br> Email
                <br>
                <input type="email" name="email" value="<?php echo $email;?>">
                <span class="error">* <?php echo $emailErr;?></span>
                <br>
                <br>


        </section>


        <section class="leftside">
            <h3>Order Information </h3>

            <strong>Select the pizza size:</strong>
            <br>
            <input type="radio" value="5" name="size">Small
            <br>
            <input type="radio" value="10" name="size">Medium
            <br>
            <input type="radio" value="15" name="size">Large
            <br>
            <input type="radio" value="20" name="size">X-L
            <br>
            <br>


            <strong>Select the crust type:</strong>
            <br>
            <select name="crust" id="crust" size="1">
                <option value="0">Hand-Tossed</option>
                <option value="0">Pan</option>
                <option value="2">Stuffed</option>
                <option value="0">Thin</option>
            </select>
            <br>
            <br>

            <strong>Select your Cheese:</strong>

            <br>
            <input type="radio" value="Mazzarella" name="cheese">Mazzarella
            <br>
            <input type="radio" value="provolone" name="cheese">Provolone
            <br>
            <input type="radio" value="Parmesan" name="cheese">Parmesan

            <br>
            <br>

            <strong>Select the Toppings:</strong>
            <br>
            <b>Veggies</b>
            <br>
            <input type="checkbox" name="toppings[]" id="toppings" value=".5" />Green Pepper
            <br>
            <input type="checkbox" name="toppings[]" id="toppings" value=".5" />Pinaple
            <br>
            <input type="checkbox" name="toppings[]" id="toppings" value=".5" />Olives
            <br>
            <input type="checkbox" name="toppings[]" id="toppings" value=".5" />Mushrooms
            <br>
            <input type="checkbox" name="toppings[]" id="toppings" value=".5" />Hot banana Peppers
            <br>
            <b>Meats</b>
            <br>
            <input type="checkbox" name="toppings[]" id="toppings" value=".5" />Pepperoni
            <br>
            <input type="checkbox" name="toppings[]" id="toppings" value=".5" />Bacon crumbles
            <br>
            <input type="checkbox" name="toppings[]" id="toppings" value=".5" />Spicy Italian Sausages
            <br>
            <input type="checkbox" name="toppings[]" id="toppings" value=".5" />Chipotle Chicken
            <br>
            <input type="checkbox" name="toppings[]" id="toppings" value="..5" />Salami
            <br>
            <br>
        </section>


        <footer class="foot">
            <input type="submit" name="submit" value="Order">
        </footer>

        </form>
       
        <!--This is the php codes to diplay the output details-->
       
        <?php
    if(isset($_POST["submit"])){
    echo  "<b>Your Order has been successfully submitted</b>";
    echo "<br>";
    echo "<b>Billing Address</b>";
    echo "<br>";
    echo $first;
    echo "&nbsp";
    echo $last;
    echo "<br>";
    echo $apt;
    echo "&nbsp";
    echo $street;
    echo  "<br>";
    echo $city;
    echo ",";
    echo "&nbsp";
    echo $postal;
    echo  "<br>";
    echo "Phone:";
    echo $telephone;
    echo  "<br>";
    echo  "<br>";
    echo  "<b>Billing Details</b>";
    echo  "<br>";
    echo "<b>Base price:</b>";
    echo "&nbsp";
    echo  $base;
    echo  "<br>";
    echo "<b>Total price:</b>";
    echo "&nbsp";
    echo  $total;
    }
    ?>
    </body>
    </html>