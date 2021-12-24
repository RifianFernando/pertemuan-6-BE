<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/loginform.css">
    <title>Shoppil | Login</title>
</head>
<body>
    <form action="action_page.php">
        <div class="container">
          <h1>Login</h1>
          <p>Please fill in this form to login to your account.</p>
          <hr>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" id="email" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

          <button type="submit" class="registerbtn">Login</button>
          <div class="container signin">
            <p>Not Already have an account? <a href="/register">Sign up</a>.</p>
            <p> <a href="/">cancel</a>.</p>
            <p><a href="/rstpw">Forget Password</a></p>
          </div>
        </div>
      </form>
</body>
</html>
