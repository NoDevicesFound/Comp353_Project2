<html>
  <head>
    <title>Login Page</title>
  </head>

  <?php if(echo $failed) { ?>
    <div class="error"> Email or password incorrect.")</div>
  <?php } ?>

  <div id="loginPage">
    <h1>Login Page</h1>
    <form method="post" action="login.php">
        <p>
          <label>Email</label>
          <input type = "text"
                 name = "email"
                 value = "" />
        </p>
        <p>
          <label>Password</label>
          <input type = "password"
                  name = "pwd"
                  value = "" />
        </p>
        <p>
          <button type="submit">Login</button>
        </p>
    </form>
  </div>
</html>
