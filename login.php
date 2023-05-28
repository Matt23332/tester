<!DOCTYPE html>
<html lang="en-GB">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pharmacy Management System</title>

  <link rel="stylesheet" href="style.css">

</head>
<body>
  <!--wrapper-->
      <div class="wrapper">
        <section>
          <center>
            <header>
              Login form
            </header>
          </center>
          <!-- login form starts here-->
          <form action="process_login.php" class="header" method="post">
            <div class="field input">
              <label for="">Username</label>
              <input type="text" name="username" placeholder="Enter your username">
            </div>
            <div class="field input">
              <label for="">Password</label>
              <input type="password" name="password" placeholder="Enter your password">
            </div>
            <div class="field button">
              <input type="submit" name="submit" value="LOGIN">
            </div>
             <div class="Register">
              <a href="registration.php" class="link">Register here...</a>
          </div>
          </form>
          <!--login form ends here-->
        </section>
      </div>

  <!--wrapper-->
</body>
</html>