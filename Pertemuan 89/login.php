<!DOCTYPE html>
<html >
<head>
<title>Login</title>
<style type="text/css">
  body{
    font-family: Arial, Helvetica, sans-serif;
  }
  form  {
    border: 3px solid #f1f1f1;
  }
  input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
button{
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  margin: 8px 0;
  float: initial;
  border: none;
  cursor: pointer;
  width: 100%;
  box-shadow: all;
}
button:hover {
  opacity: 0.8;
}
</style>
</head>
<body>
  <form action="act.php?operasi=login" method="post">
    <table>
      <tr>
        <td>Username</td>
        <td>:</td>
        <td>
        <input type="text" placeholder="Enter Username" name="username">
        </td>
      </tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td>
        <input type="password" placeholder="Enter Password" name="password">
        </td>
      </tr>
      <tr>
      <td><button type="submit" name="login">Login</button></td>
      </tr>
    </table>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
  </form>
</body>
</html>