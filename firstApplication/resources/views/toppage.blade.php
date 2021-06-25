<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/index.css">
  <title>HITS! Top Page</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body class="before-login" id="wrapper">
  <header>
    <div id="headerborder"></div>
    <div class="header-hidden"></div>
    <div class="menuBar">
      <img class="logo" src="/images/logo&title.png" alt="HITS!LOGO">
    </div>
  </header>
    <form class="input-or-signin">
      <ul>
        <li class="user-name">
        <label for="account-name">Name</label>
        <input type="text" id="account-name" name="account-name" required minlength="1" maxlength="144">
        </li>
        <li class="pass">
        <label for="pass">Password</label>
        <input type="password" id="pass" name="pass" required minlength="8" maxlength="144">
        </li>
      </ul>
      <div class="login-submit">
        <input type="submit" value="Login">
      </div>
    </form>
    <div id="signin-or-temporary-login">
      <ul>
        <li >
          <a class="signin-or-temporary-login" href="http://@@@">Signin</a>
        </li>
        <li >
          <a class="signin-or-temporary-login" href="http://@@@">Temporary Login</a>
        </li>
      </ul>

    </div>
    <div class="title-box">
      <img class="title" src="/images/title.png" alt="title name">
    </div>
    <div class="blank-block"></div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

  </body>
  <footer>
    <div class="footer-fixed">
      <div class="toppage-bottom">
        <small>Copyright &copy;HITS! All Rights Reserved.</small>
      </div>
    </div>
  </footer>
  </html>
