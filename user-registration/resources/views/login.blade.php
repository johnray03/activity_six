<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/login.css">

  <title>Login</title>
</head>

<body>

  <div class="login-form">
    <h3>Log In</h3><br>

    <form action="/login" method="get" class="">
      @csrf

      <input type="email" name="email" placeholder="Email">
      <input type="password" name="password" placeholder="Password">

      <button type="submit">Log In</button><br>

      <div class="form-footer">
        <a href="/register">Create an account</a>
        <span style="color: #fff;">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
        <a href="/">Home</a>
      </div>
    </form>
  </div>


</body>

</html>