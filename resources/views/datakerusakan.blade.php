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
      <a class="p-2 link-dark" href="{{ route('view.home') }}">Home</a>
      <a class="p-2 link-dark" href="{{ route('view.konsultasi') }}">Konsultasi</a>
      <a class="p-2 link-dark" href="{{ route('view.data-kerusakan') }}">Data Kerusakan</a>
    </nav>
  </div>
   <div class="p-md-3 mb-2 text-white rounded bg-dark">
   		<div class="text-center">
  			<h1 class="display-4 fst-italic" style="font-size: 55px;">Data Kerusakan Smartphone</h1>
  		</div>
  </div>
  <div class="row mb-2">
	  <div class="col-md-6">
	      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-100 position-relative">
	        <div class="col p-4 d-flex flex-column position-static">
	          <h3 class="m-0">IC Power</h3>
	          
	          
	        </div>
	        <div class="col-auto d-none d-lg-block">
	          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

	        </div>
	      </div>
	    </div>
    
	    <div class="col-md-6">
	      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-100 position-relative">
	        <div class="col p-4 d-flex flex-column position-static">
	          <h3 class="m-0">LCD</h3>
	          
	          
	        </div>
	        <div class="col-auto d-none d-lg-block">
	          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

	        </div>
	      </div>
	    </div>

	    <div class="col-md-6">
	      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-100 position-relative">
	        <div class="col p-4 d-flex flex-column position-static">
	          <h3 class="m-0">IC RAM</h3>

	          
	        </div>
	        <div class="col-auto d-none d-lg-block">
	          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

	        </div>
	      </div>
	    </div>

	    <div class="col-md-6">
	      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-100 position-relative">
	        <div class="col p-4 d-flex flex-column position-static">
	          <h3 class="m-0">Baterai</h3>
	          
	          
	        </div>
	        <div class="col-auto d-none d-lg-block">
	          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

	        </div>
	      </div>
	    </div>

	    <div class="col-md-6">
	      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-100 position-relative">
	        <div class="col p-4 d-flex flex-column position-static">
	          <h3 class="m-0">IC Audio</h3>
	          
	          
	        </div>
	        <div class="col-auto d-none d-lg-block">
	          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

	        </div>
	      </div>
	    </div>

	    <div class="col-md-6">
	      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-100 position-relative">
	        <div class="col p-4 d-flex flex-column position-static">
	          <h3 class="m-0">Kabel Konektor</h3>
	          
	          
	        </div>
	        <div class="col-auto d-none d-lg-block">
	          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

	        </div>
	      </div>
	    </div>

	    <div class="col-md-6">
	      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-100 position-relative">
	        <div class="col p-4 d-flex flex-column position-static">
	          <h3 class="m-0">Kamera</h3>
	          
	          
	        </div>
	        <div class="col-auto d-none d-lg-block">
	          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

	        </div>
	      </div>
	    </div>

	    <div class="col-md-6">
	      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-100 position-relative">
	        <div class="col p-4 d-flex flex-column position-static">
	          <h3 class="m-0">Software</h3>

	          
	        </div>
	        <div class="col-auto d-none d-lg-block">
	          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

	        </div>
	      </div>
	    </div>

	    <div class="col-md-6">
	      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-100 position-relative">
	        <div class="col p-4 d-flex flex-column position-static">
	          <h3 class="m-0">IC WiFi</h3>

	          
	        </div>
	        <div class="col-auto d-none d-lg-block">
	          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

	        </div>
	      </div>
	    </div>

	    <div class="col-md-6">
	      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-100 position-relative">
	        <div class="col p-4 d-flex flex-column position-static">
	          <h3 class="m-0">Touchscreen</h3>

	          
	        </div>
	        <div class="col-auto d-none d-lg-block">
	          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

	        </div>
	      </div>
	    </div>
	</div>
</div>

	
</body>
</html>