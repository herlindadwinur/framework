<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('admin/tim3.css')}}">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="{{asset('admin/tim3.css')}}">
<script src="//cdnjs.bootsrapcdn.com/ajax/libs/bootsrap/4/1/2.1.5/jquery.fancybox.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<body>
 
   <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <h3 class="my-heading ">Herlinda dwi<span class="bg-main">Nur Syafitri</span></h3>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars mfa-white"></span>
            </button>

            <div id="main">
                <a href="javascript:void(0)" class="openNav"><span class="fa fa-bars" onclick="openNav()"></span></a>
            </div>

         
           
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
          <ul class="mob-ul">
             <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
             <li class="nav-item"><a class="nav-link" href="#">About</a></li>
             
             <li class="nav-item"><a class="nav-link" href="#">Events</a></li>
             <li class="nav-item"><a class="nav-link" href="#">Groups</a></li>
             <li class="nav-item"><a class="nav-link" href="#">Music</a></li>
             <li class="nav-item"><a class="nav-link" href="#">Marketplace</a></li>
             <li class="nav-item"><a class="nav-link" href="#">Featured Artists</a></li>
             <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
             <li class="nav-item"><a class="nav-link" href="#">Register</a></li>
             
             
          </ul>
        </div>


            <div class="collapse navbar-collapse" id="navbarResponsive">
                <form class="form-inline my-2 my-lg-0 col-md-7">
                    <input class="myform-control mr-sm-2" type="search" placeholder="find peoples, instruments, bands and more..." aria-label="Search">
                    <button class="btn btn-light"><i class="fa fa-search"></i></button>
                </form>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-link">
                        <a class="btn btn-primary btn-block btn-login" href="#">Login</a>
                    </li>
                    <li class="nav-link">
                        <a class="btn btn-primary btn-block btn-register" href="#">Register</a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>

    
    <header class="masthead text-white ">
        <div class="overlay"></div>
        <div class="container slider-top-text">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="my-heading">Welcome Institut Teknologi dan Bisnis Asia<span class="bg-main">Malang</span></h3>
                    <p class="myp-slider text-center">Institut Asia Malang dengan Fakultas Ekonomi & Bisnis serta Fakultas Teknologi dan Design menyinergikan ilmu bisnis dan teknologi, dengan menonjolkan tidak hanya Knowledge tetapi juga mengasah Skill & Attitude untuk menunjang perubahan yang terjadi di era Industri 4.0</p>
                    <p class="myp text-center">SHARE YOUR MEMORIES   |   CONNECT WITH OTHERS   |   MAKE NEW FRIENDS</p>
                    <a class="btn btn-primary btn-join" href="#">JOIN THE COMMUNITY</a>

                </div>
                <div class="col-md-12 text-center mt-5">
                    <div class="scroll-down">
                        <a class="btn btn-default btn-scroll floating-arrow" href="#gobottom" id="bottom"><i class="fa fa-angle-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="testimonials" id="gobottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="big-img">
                        <img src="https://ftd.asia.ac.id/assetsbaru/img/asia.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="inner-section wow fadeInUp">
                        <h3>Follow the <span class="bg-main">Next Event</span></h3>
                        <br>
                        <p class="text-justify">Fakultas Teknologi dan Desain (FTD) Institut Asia Malang merupakan fakultas menyelenggarakan pendidikan dengan nilai kompetitif di bidang pengembangan ilmu seperti bidang otomasi industri dan teknologi tepat guna. Adapun visi dari fakultas ini yaitu menjadi fakultas yang kreatif dan memiliki daya saing di tingkat Internasional di bidang teknologi digital dan desain pada tahun 2045..</p>

                        <div class="linear-grid">
                            <div class="center">
                                <div class="col-sm-6 col-md-3 mb-2 wow bounceInUp" data-wow-duration="1.4s">
                                    <img src="https://stmikdijawabali.files.wordpress.com/2017/05/gg.png" class="img-thumbnail">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
                <div class="col-md-8">
                    <div class="inner-section">
                        <div class="my-grid">
                            <div class="center">
                                <div class="col-md-8 mb-3">
                                    <div class="text-block">
                                        <h5 class="events-heading">HERLINDA DWI NUR SYAFITRI</h5>
                                        <p class="myp-font">Institut Asia Malang dengan Fakultas Ekonomi & Bisnis serta Fakultas Teknologi dan Design menyinergikan ilmu bisnis dan teknologi, dengan menonjolkan tidak hanya Knowledge tetapi juga mengasah Skill & Attitude untuk menunjang perubahan yang terjadi di era Industri 4.0 </p>
                                    </div>
                                </div>
                                <div class=" col-md-4 ">
                                     
                                    <img src="https://ftd.asia.ac.id/assetsbaru/img/asia.png" class="img-fluid">
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto wow fadeInUp">
                    <h3 class="text-center font-weight-bold">Join dengan Institut<span class="bg-main">Teknologi dan Bisnis</span> Asia Malang</h3>
                    <p class=" text-center">Institut Asia Malang dengan Fakultas Ekonomi & Bisnis serta Fakultas Teknologi dan Design menyinergikan ilmu bisnis dan teknologi, dengan menonjolkan tidak hanya Knowledge tetapi juga mengasah Skill & Attitude untuk menunjang perubahan yang terjadi di era Industri 4.0 </p>
                </div>
                        </div>
                        <div class="card-footer text-center">
                            <small>Institut Asia Malang dengan Fakultas Ekonomi & Bisnis serta Fakultas Teknologi dan Design menyinergikan ilmu bisnis dan teknologi, dengan menonjolkan tidak hanya Knowledge tetapi juga mengasah Skill & Attitude untuk menunjang perubahan yang terjadi di era Industri 4.0 </small>

                        </div>
                    </div>
                </div>
                        <div class="card-footer text-center">
                            <small>© Institut Teknologi dan Bisnis Asia Malang</small>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials text-center mybg-music">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInUp">
                    <h3 class="title-heading text-center font-weight-bold">HERLINDA DWI NUR SYAFITRI</h3>
                    <p class="myp text-center">Institut Asia Malang dengan Fakultas Ekonomi & Bisnis serta Fakultas Teknologi dan Design menyinergikan ilmu bisnis dan teknologi, dengan menonjolkan tidak hanya Knowledge tetapi juga mengasah Skill & Attitude untuk menunjang perubahan yang terjadi di era Industri 4.0 </p>
                </div>
            
  <footer class="footer bg-dark">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-6 text-center text-lg-left my-auto  wow zoomIn">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item">
                            <a href="#">About</a>
                        </li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item">
                            <a href="#">Contact</a>
                        </li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
                        </li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item">
                            <a href="#">Privacy Policy</a>
                        </li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">© Institut Teknologi dan Bisnis Asia Malang</p>
                </div>
                <div class="col-lg-6 text-center text-lg-right my-auto  wow zoomIn">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <a href="#">
                                <i class="fa fa-facebook fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="#">
                                <i class="fa fa-twitter fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-instagram fa-2x fa-fw"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
     <script>
              new WOW().init();
              </script>
    <script>
        $(window).scroll( function(){

 
          var topWindow = $(window).scrollTop();
          var topWindow = topWindow * 1.5;
          var windowHeight = $(window).height();
          var position = topWindow / windowHeight;
          position = 1 - position;
        
          $('#bottom').css('opacity', position);
        
        });

        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.display = "0";
            document.body.style.backgroundColor = "white";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginRight= "0";
            document.body.style.backgroundColor = "white";
        }

 
     $(window).on("scroll", function() {
            if ($(this).scrollTop() > 10) {
                $("nav.navbar").addClass("mybg-dark");
                $("nav.navbar").addClass("navbar-shrink");
              

            } else {
                $("nav.navbar").removeClass("mybg-dark");
                $("nav.navbar").removeClass("navbar-shrink");
               
            }
            
      

        });
        
        $(function() {
  $('#bottom').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 500);
        return false;
      }
    }
  });
});


</script>
<script>
    $(document).ready(function(){
      $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>
    </body>