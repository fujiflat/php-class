<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Website</title>
<meta name="Description" content="Test Website">
<meta name="viewport" width="device-width" initial-scale="1" >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<?php

// signupがPOSTされたときに下記を実行
if(isset($_POST['signup'])) {
  $username = $mysqli->real_escape_string($_POST['username']);
  $email = $mysqli->real_escape_string($_POST['email']);
  $password = $mysqli->real_escape_string($_POST['password']);
  $password = password_hash($password, PASSWORD_DEFAULT);

  // POSTされた情報をDBに格納する
  $query = "INSERT INTO db(username,email,password) VALUES('$username','$email','$password')";

  if($mysqli->query($query)) {  ?>
    <div class="alert alert-success" role="alert">登録しました</div>
    <?php } else { ?>
    <div class="alert alert-danger" role="alert">エラーが発生しました。</div>
    <?php
  }
}
?>

<body class="container col-sm"  cz-shortcut-listen="true">
    <form class="form-signin">
      <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
    </form>

</body>
</html>