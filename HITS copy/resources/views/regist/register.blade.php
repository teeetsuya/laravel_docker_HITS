<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="../../css/index.css">
  <title>HITS! ユーザー登録フォーム</title>
</head>
<body class="before-login" id="wrapper">
  <header>
    <div id="headerborder"></div>
    <div class="header-hidden"></div>
    <div class="menuBar">
      <a class="navbar-brand" href="{{ url('/') }}"><img class="logo" src="/images/logo&title.png" alt="HITS!LOGO"></a>
  </header>
  <form name="registform" action="/register" method="post" id="registform">
  {{ csrf_field() }}
  <dl>
    <dt>名前：</dt>
    <dd><input type="text" name="name" size="30">
        <span>{{ $errors->first('name') }}</span></dd>
  </dl>
  <dl>
    <dt>メールアドレス：</dt>
    <dd><input type="text" name="email" size="30">
        <span>{{ $errors->first('email') }}</span></dd>
  </dl>
  <dl>
    <dt>パスワード</dt>
    <dd><input type="password" name="password" size="30">
        <span>{{ $errors->first('password') }}</span></dd>
  </dl>
  <dl>
    <dt>パスワード(確認)：</dt>
    <dd><input type="password" name="password_confirmation" size="30">
        <span>{{ $errors->first('password_confirmation') }}</span></dd>
  </dl>
  <button type='submit' name='action' value='send'>送信</button>
  </form>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <!--  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script> -->
</body>
<footer>
  <div class="copy-right">
    <small>Copyright &copy;HITS! All Rights Reserved.</small>
  </div>
</footer>
</html>