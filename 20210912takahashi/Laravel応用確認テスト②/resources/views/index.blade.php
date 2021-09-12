@extends('layouts.default')
<style>
  p {
    margin-block-end: 0;
  }
  .err-title {
    color: #f00;
  }
  .err-box {
    margin: 0 10px;
  }
</style>

@section('title','お問い合わせ')

@section('content')
<h1>トップページ</h1>
@if(count($errors) > 0)
  <p class="err-title">・入力エラー</p>
  <div class="err-box">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
     @endforeach
   </ul>
  </div>
@endif
<form action="/" method="POST">
  @csrf
  <div>
    <p>氏名</p>
    <input type="text" name="name">
  </div>
  <div>
    <p>メールアドレス</p>
    <input type="email" name="email">
  </div>
  <button>送信する</button>
</form>
@endsection
