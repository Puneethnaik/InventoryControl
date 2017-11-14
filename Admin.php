<html>
<head>
    <title>
        Admin Side
    </title>
    <link rel = "stylesheet" href = "main.css" type = "text/css">
</head>
<body>
    <header id = "AdminHead">
        Admin Login
    </header>
    <div class="login-page">

      <div class="form">
        <form class="register-form" action = "Adminverify.php" method = "GET">
          <input type="text" placeholder="name"/>
          <input type="password" placeholder="password"/>
          <input type="text" placeholder="email address"/>
          <button>create</button>
          <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <form class="login-form">
          <input type="text" placeholder="username" name = "Username"/>
          <input type="password" placeholder="password" name = "Password"/>
          <button type = "submit">login</button>
        </form>
      </div>
    </div>
</body>
</html>
