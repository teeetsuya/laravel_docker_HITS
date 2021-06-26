<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset='utf-8'>
    <title>トップ画面</title>
    <link rel="stylesheet" href="../../css/index.css">
</head>
<body>
<header>
    <div id="headerborder"></div>
    <div class="header-hidden"></div>
    <div class="menuBar">
      <a class="navbar-brand" href="{{ url('/') }}"><img class="logo" src="/images/logo&title.png" alt="HITS!LOGO"></a>
      <p>こんにちは!!
@if (Auth::check())
    {{ \Auth::user()->name }}さん</p>
    <p><a href="/auth/logout">ログアウト</a></p>
@else
    <p>ゲストさん</p><br>
    <p><a href="/auth/login">ログイン</a><br><a href="/auth/register">会員登録</a></p>
@endif</div>
  </header>


</body>

</html>


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
