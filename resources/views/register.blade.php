<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>W3MP | What's Wrong with My Phone?</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <!-- Bootstrap core CSS -->
    <link href="/css/signin.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <main class="form-signin">
      <form action="{{ route('register.perform') }}" method="POST">
        {{csrf_field()}}
        <img class="mb-4" src="{{url('/img/logo.png')}}" alt="" width="72" height="78">
        <h1 class="h3 mb-3 fw-normal">Daftar di sini</h1>
        <div class="form-floating">
          <input type="text" class="form-control" id="inputFName" name="fname" placeholder="Nama pertama" required>
          <label for="floatingInput">Nama pertama</label>
        </div>
        <div class="form-floating">
          <input type="text" class="form-control" id="inputLName" name="lname" placeholder="Nama akhir">
          <label for="floatingInput">Nama akhir</label>
        </div>
        <div class="form-floating">
          <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" required>
          <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
          <input type="text" class="form-control" id="inputUsername" name="username" placeholder="Nama pengguna" required>
          <label for="floatingInput">Nama pengguna</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Kata sandi" required>
          <label for="floatingPassword">Kata sandi</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
        <div class="mt-3 mb-3">
          <p>Sudah punya akun? <a href="{{ route('login') }}">Masuk</a></p>
        </div>
      </form>
    </main>
    </body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
