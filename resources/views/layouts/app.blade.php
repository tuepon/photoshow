<!DOCTYPE html>
  <html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PhotoShow</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.css">
  </head>
  <body>
    @include('inc.topbar')
    <br>
    <div class="row">
      @include('inc.messages')
      @yield('content')
    </div>
  </body>
</html>