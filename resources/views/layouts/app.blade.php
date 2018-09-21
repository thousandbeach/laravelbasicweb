<!DOCTYPE html>
<html lang="ja">
<head>
  <head>
    <meta charset="utf-8">
    <title>larabasicweb</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <!-- Bootstrap CSS-->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    @include('inc.navbar')
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8 col-lg-8">
          @include('inc.messages')
          @yield('content')
        </div>
      </div>
    </div>
    <footer id="footer" class="text-center">
      <p>Copyright 2018 &copy; takabo </p>
    </footer>
  </body>
</html>
