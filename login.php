<html>
<head>
  <title>Login Page</title>
  <style type="text/css">
    div.container {
      border: 3px solid #01f1f1;
      padding: 6px;
      width:300px;
      margin:20px auto;
      text-align:center;  
    }
    .login { 
      background:#f9f9f9; 
    }
    .login div {
      border:2px solid #fff;
      padding:3px;
    }
    .register { 
      background:#f9f9f9; 
    }
    .register div {
      border:2px solid #fff;
      padding:3px;
    }
    input[type=text], input[type=password] {
      padding: 6px 15px;
      margin: 8px 0;
      border: 1px solid #ccc;
    }
    button {
      background-color: #4CAF50;
      color: white;
    i  padding: 6px 15px;
      margin: 8px 0;
      width: 50%;
    }

  </style>
</head>

<body>
  <div class="body"></div>
  <div class="grad"></div>
    <br>
    <div class="login">
    <form class="form-login" method="post" action="./controller/index.php">
    <input type="text" placeholder="E-mail" name="email"><br>	
    <input type="password" placeholder="password" name="password"><br>
    <input type ="hidden" name="action" value="test_user">
    <input type="submit" value="Login" name="submit">
    </form>
    <form class="form-login" method="post" action="register.php">
    <input type="submit" value="Sign-Up" name="submit">
    </form>
    </body>
    </html>
