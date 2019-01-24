<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-12">
          <h1 class="text-center">Admin Login</h1>
        </div>
      </div>
      <div class="row">
        @if ($errors->any())
            <div class="col-md-12">
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            </div>
        @endif
        @if(session('error'))
          <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
              <span>{{session('error')}}</span>
            </div>
          </div>
        @endif
        <div class="col-md-12">
          <form action="/login-process" method="post">
            <div class="form-group">
              <label>Username</label>
              <input class="form-control" type="text" name="login_username" value="" placeholder="กรุณากรอก username">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input class="form-control" type="password" name="login_password" value="" placeholder="กรุณากรอกพาสเวิร์ด">
            </div>
            @csrf
            <button class="form-control btn btn-success" type="submit" name="button">ล๊อกอิน</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
