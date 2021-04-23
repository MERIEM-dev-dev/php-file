<?php
//   <!-- sign up -->
// initialize the message and the error for the validation
$message = '';
$error = '';
// initialize the password
$_POST["Password"] = '';
$passw = $_POST["Password"];
// check if the sign up button clicked
if (isset($_POST["signup"])) {
  // hash the password
  $passw = $_POST["Password"];
  $password_hash = password_hash($passw, PASSWORD_DEFAULT);

  // simple validation 
  // check for empty input
  if (empty($_POST["Fullname"])) {
    $error = "<div class='alert alert-danger'>Enter fullname</div>";
  } else if (empty($_POST["Driver_License"])) {
    $error = "<div class='alert alert-danger'>Enter driver license</div>";
  } else if (empty($_POST["Email"])) {
    $error = "<div class='alert alert-danger'>Enter email</div>";
  } else if (empty($password_hash)) {
    $error = "<div class='alert alert-danger'>Enter password</div>";
  } else {
    //check for the file if existe
    if (file_exists('data.json')) {

      // append the data to the json file
      $datajson = file_get_contents('data.json');
      $array_data = json_decode($datajson, true);
      $extra = array(
        'Fullname'      =>     $_POST['Fullname'],
        'D_License'     =>     $_POST["Driver_License"],
        'Email'         =>     $_POST["Email"],
        'Password'      =>     $password_hash
      );
      $array_data[] = $extra;
      $final_data = json_encode($array_data);
      if (file_put_contents('data.json', $final_data)) {
        // success msg
        $message = "<div class='alert alert-success'>Account created</div>";
      }
    } else {
      // error msg
      $error = 'JSON File not exist';
    }
  }
}
