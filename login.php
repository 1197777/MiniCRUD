<?php
include_once('connection.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];
    $stmt = $connect->prepare("select * from admin where username= :username AND password= :password");
    $stmt->execute(['username' => $username, 'password' => $password]);
    $data = $stmt->fetch();
    $gevondenRows = $stmt->rowCount();

    if ($gevondenRows) {
        session_start();
        $_SESSION['user'] = 'admin';
        header("Location: admin.php");
        
    } else {
        header("Location: login.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link rel="stylesheet" href="css/main.css">
    <script defer src="script.js"></script>
</head>
<?php
include_once 'nav.php';
?>
<body>
<div class="account-page!">
    <div class="container">
        <div class="row">
            <div class="col-2">
            <div class="form-container">
                  <div class="form-btn">
                  <span onclick="login()">Login</span>
                  </div>
                  <form  action="#" method="post" id="loginform">
                      <input type="text" placeholder="username" name="username">
                      <input type="password" placeholder="password" name="password">
                      <button type="submit" class="form-btn button">Login</button>
                  </form>
            </div>
        </div>
    </div>
</div>

</body>

</html>