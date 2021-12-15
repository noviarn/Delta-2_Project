<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    
    <title>W3MP | What's Wrong with My Phone?</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">

    

    <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<meta name="theme-color" content="#7952b3">


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
      body{
      	
	    background-image:    url(/img/bg1.jpg);
	    background-size:     cover;                      
	    background-repeat:   no-repeat;
	         
	  }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
<body>
    
<div class="container p-2">
  <header class="border-bottom border-dark mt-3 mb-1">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-dark" style="font-size: 15px;" href="#">Delta-2</a>
      </div>
      <div class="col-4 text-center">
        <p class="blog-header-logo text-dark" style="font-size: 30px;" href="#">Kerusakan Smartphone</p>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        
        @<a   class="link-dark" href="{{ route('view.profile') }}">{{auth()->user()->username}}</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller border-bottom border-dark py-1 mb-2" style="border-top-style: ;">
    <nav class="nav d-flex justify-content-center">
      <a class="p-2 link-dark" href="{{ route('view.home') }}">Beranda</a>
      <a class="p-2 link-dark" href="{{ route('view.konsultasi') }}">Konsultasi</a>
      <a class="p-2 link-dark" href="{{ route('view.data-kerusakan') }}">Data Kerusakan</a>
    </nav>
  </div>
</div>

<main class="container">
  <div class="row p-2 p-md-5 mb-2 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic" style="font-size: 55px;">Konsultasikan Kerusakan Smartphone Kamu Disini.</h1>
      <p class="lead my-3" style="font-size:15px;">Kerusakan smartphone sering dialami oleh kita. Kerusakan smartphone memiliki jenis serta gejala yang dimilikinya. Konsultasikan dan temukan solusinya disini.</p>
      <p class="lead mb-0"><a href="{{ route('view.konsultasi') }}" class="text-white fw-bold">Klik Disini Untuk Konsultasi Smartphone</a></p>
    </div>
    <div class="col-auto d-none d-lg-block">
     <img src="{{ url('img/phone.jpg') }}"  style="border-radius: 50%;height: 350px; width: 400px;"  class="float-end">
   </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Data Kerusakan Smartphone</strong>
          
          <p class="card-text mb-auto">Untuk mengetahui jenis kerusakan dan gejala-gejala yang terdapat pada smartphone.</p>
          <a href="{{ route('view.data-kerusakan') }}" class="stretched-link">Lihat Data Kerusakan</a>
        </div>
        <div class="col-auto d-none d-lg-block">
         <img src="{{ url('img/hprusak.jpg') }}"  style="border-radius: 0%;height: 250px; width: 200px;"  class="float-end">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">History Kerusakan</strong>
          <p class="mb-auto">Lihat disini untuk melihat data history kerusakan smartphone anda.</p>
          <a href="{{ route('view.history') }}" class="stretched-link">Lihat History Kerusakan</a>
        </div>
        <div class="col-auto d-none d-lg-block">
         <img src="{{ url('img/history.png') }}"  style="border-radius: 0%;height: 250px; width: 200px;"  class="float-end">
        </div>
      </div>
    </div>
  </div>



</main>


    
  

</body>
</html>


    
  

</body>
</html>