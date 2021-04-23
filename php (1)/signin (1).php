<?php
//  <!-- sign in -->
// initialize the password
$_POST["Password"] = '';
$passw = $_POST["Password"];
// check if the button clicked
if (isset($_POST["login"])) {

  // get the data for check in it
  $MyData = file_get_contents('data.json');
  $array_data = json_decode($MyData);

  // set the session login variable to false
  $_SESSION["LOGIN"] = false;
  $passw = $_POST["Password"];
  // foreach function to llop throgh the json file
  foreach ($array_data as $key) {
    if ($key->Fullname === $_POST["Fullname"] && password_verify($passw, $key->Password)) {
      // redirect to home.php
      header("location: home.php ");
      // start session and set session variables
      session_start();
      $_SESSION["FULLNAME"] = $_POST["Fullname"];
      $_SESSION["LOGIN"] = true;
    } else {
      $_SESSION["LOGIN"] === false;
    }
  }
  if ($_SESSION["LOGIN"] === false) {
    echo "<div class='alert alert-danger'>can not find the account</div>";
  }
  if (empty($_POST["Fullname"]) || empty($_POST["password"])) {
    echo "<div class='alert alert-danger'>Enter fullname and password</div>";
  }
}
