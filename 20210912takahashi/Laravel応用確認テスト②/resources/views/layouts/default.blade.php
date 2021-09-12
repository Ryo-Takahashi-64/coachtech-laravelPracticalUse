<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <style>
    ul {
      padding-inline-start: 0;
    }
    li {
      list-style: none;
      color: #f00;
    }
    h1 {
      padding-bottom: 30px;
    }
    p {
      margin-block-start: 0;
    }
  </style>
</head>
<body>
  @yield('content')
</body>
</html>