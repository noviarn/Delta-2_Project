<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    
    <title>Konsultasi Smartphone</title>

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
  <div class="mx-5 p-md-5 mb-2 text-white rounded bg-dark">
  	<div class="text-center">
  		<h1 class="display-4 fst-italic" style="font-size: 55px;">Konsultasi Kerusakan Smartphone</h1>
  	</div>
  	<div class="p-0">
  		<div class="col mx-5 justify-content-center">

      	<p class="border-bottom border-top border-white p-3">Pilih gejala kerusakan smartphone:</p>
	    </div>
	    <form class="needs-validation" action="/home/konsultasi/submitted/{{$data_history->id_history}}" method="POST" enctype="multipart/form-data" novalidate>
	    	{{csrf_field()}}
		    @foreach ($data_gejala as $gejala)
		    <div class="row mx-5 p-0">
		    	<div class="col-md-11 border-end border-white">
		    		<p class=" p-3">{{$gejala->nama_gejala}}</p>
		    	</div>
		    	<div class="col-md-1 p-3 border-white">
		    		<div class="form-check">
					  	<input class="form-check-input" type="checkbox" name="gejala[]" value="{{ $gejala->id_gejala }}" id="flexCheckDefault">
						</div>
		    	</div>
		    </div>
				@endforeach
				<div class="text-center mt-3">
	    		<button type="submit" class="btn btn-outline-primary">Lihat Hasil</button>
	    	</div>
			</form>
  	</div>
    
</div>

</div>

</body>
</html>