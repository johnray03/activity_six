<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/register.css">

  <title>Register</title>
</head>

<body>
  <div class="register-form">
    <h3>Register</h3><br>

    <form action="/register" method="get">
      @csrf

      <input type="text" name="lastname" placeholder="Last Name">
      <input type="text" name="firstname" placeholder="First Name">
      <input type="email" name="email" placeholder="Email">
      <input type="password" name="password" placeholder="Password">
      <input type="password" name="password_confirmation" placeholder="Confirm Password">

      <button type="submit">Register</button><br>

      <div class="form-footer">
        <a href="/login">Sign In</a> 
        <span style="color: #fff;">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
        <a href="/">Home</a>
      </div>
    </form>
  </div>
</body>

</html>