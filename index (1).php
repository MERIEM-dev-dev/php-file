  <?php
  require_once "includes/headerregis.php";
  require_once "php/signup.php";
  ?>

  <!-- SIGN UP -->
  <form method="POST" class="mt-5">
    <h1> Sign up </h1>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Full name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="Fullname">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">driver license</label>
      <input name="Driver_License" type="text" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" name="Email" class="form-control" id="exampleInputEmail1" name="Fullname">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" id="exampleInputPassword1">
    </div>

    <button type="submit" name="signup" class="btn btn-primary">Submit</button>
    <?php
    if (isset($error)) {
      echo $error;
    }
    if (isset($message)) {
      echo $message;
    }
    ?>
  </form>