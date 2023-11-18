<html>
    <head>
        
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="style.css">
        
        <script src="owlcarousel/owl.carousel.min.js"></script>
        <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="../assets/img">
        
    </head>
    <body>
          <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="../assets/img/logo-aptikma.png" alt="" width="10%" height="auto" class="d-inline-block align-text-top">
                  </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="font-weight: bold;">
                    <li class="nav-item">
                        <a class="nav-link active text-navbar" aria-current="page" href="{{route('landingPage')}}">HOME</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active text-navbar" href="{{route('tentangKami')}}">TENTANG KAMI</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active text-navbar" href="{{route('registrasi')}}">REGISTRASI INSTERSHIP</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active text-navbar" href="{{route('kontak')}}">KONTAK</a>
                      </li>
                </ul>
               
              </div>
            </div>
          </nav>
          @yield('sidebar')
          <!-- carousel -->
    
      
         <script>
            var slideIndex = 1;
            showSlides(slideIndex);
        
            function plusSlides(n) {
              showSlides(slideIndex += n);
            }
        
            function showSlides(n) {
              var i;
              var slides = document.getElementsByClassName("slide");
              if (n > slides.length) {
                slideIndex = 1;
              }
              if (n < 1) {
                slideIndex = slides.length
              }
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
              }
              slides[slideIndex - 1].style.display = "block";
            }
          </script>
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
    <footer>
      
      <div class="col-md-12 col-12 text-white" style="background-color: black;">
      <div class="container">
        <div class="row py-2 pt-4">
          <div class="col-md-6 col-12">
            <p>Copyright 
              <span><img src="images/c.png" alt="" class="ml-2"></span> 
              <span class="ml-1">2015</span>
              <span class="biru ml-2"><b>PT. Aptikma Teknologi Indonesia</b></span
                ></p>
          </div>
          <div class="col-md-6 col-12 text-end">
            <p>Layanan<span class="mx-2">/</span >Produk<span class="mx-2">/</span>Kontak</p>
            
          </div>
        </div>
      </div>
      </div>
    </footer>
</html>