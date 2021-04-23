<?php
require_once "includes/headerregis.php";
require_once "php/signin.php";
?>

<div class="container mt-5">

    <header>
        <h1>Login and Registration Form <span>CAR</span></h1>
    </header>
    <section>
        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Full name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="Fullname">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>

            <button type="submit" name="login" class="btn btn-primary">Submit</button>
        </form>

    </section>
</div>
</div>
</body>

</html>