<?php if (!empty($_SESSION['level']))
	header('location:'.base_url().'C_dashboard');
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="/proj_telacc/asset1/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/proj_telacc/asset1/css/half-slider.css" rel="stylesheet">
    <link href="/proj_telacc/asset1/css/style-custem.css" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
    <nav id="animated" class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">TELKOM AKSES</a>
        <div >
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <button type="submit" class="btn btn-dark
              " name="button" data-toggle="modal" data-target="#myModal">Login Here</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <!-- Modal Content -->
        <div class="modal-content">

          <div class="modal-body">
            <div class="container">
              <form class="" action="<?php echo base_url() ?>C_login/login" method="post">
                <button type="button" class="close" data-dismiss="modal">&times</button>
                <div class="form-group text-center">
                  <img src="/proj_telacc/asset1/dist/img/tel_acc1.png" style="margin-left: 27px" alt="foto profile" class="rounded-circle" width="130" id="img-login">
                </div>
                <div class="form-group text-center">
                  <h4 class="text-danger">Login Here</h4>
                </div>
                <div class="form-group">

                  <input type="text" class="form-control col-sm-10 offset-sm-1" placeholder="Username"  name="username" id="username">
                </div>
                <div class="form-group">
                  <!-- <label class="">Password</label> -->
                  <input type="password" class="form-control col-sm-10 offset-sm-1" placeholder="Password" name="password" id="password">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-danger col-sm-10 offset-sm-1" data-dismiss"modal">Sign In</button>
                </div>
                <div class="form-group">
                  <div class="row">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modalForgot" role="dialog">
      <div class="modal-dialog">
        <!-- Modal Content -->
        <div class="modal-content">

          <div class="modal-body">
            <div class="container">
              <form class="" action="<?php echo base_url() ?>C_login/forgotPassword" method="post">
                <button type="button" class="close" data-dismiss="modal">&times</button>
                <div class="form-group text-center">
                  <img src="/proj_telacc/asset1/dist/img/" alt="foto profile" class="rounded-circle" width="130" height="120" id="img-login">
                </div>
                <div class="form-group text-center">
                  <h4 class="text-danger">Forgot Your Password ?</h4>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control col-sm-10 offset-sm-1" placeholder="Email"  name="email" id="email">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-danger col-sm-10 offset-sm-1" data-dismiss"modal">Get My Password </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active">
            <img src="/proj_telacc/asset1/dist/img/tel_acc1.png" class="img-fluid" alt="" width="100%" height="500">
            <div class="carousel-caption d-none d-md-block">
              <h3>Selamat Datang</h3>
              <p></p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item">
              <img src="/proj_telacc/asset1/dist/img/tel_acc1.png" class="img-fluid" alt="" width="100%" height="500">
            <div class="carousel-caption d-none d-md-block">
              <h3>Selamat Datang</h3>
              <p></p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
    <!-- Footer -->
    <footer class="py-5 bg-danger">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; BINARY Corporate 2018</p>
      </div>
      <!-- /.container -->
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="/proj_telacc/asset1/vendor/jquery/jquery.min.js"></script>
    <script src="/proj_telacc/asset1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
    	$(document).on('click', '#forgot', function (e) {
	        $('#myModal').modal('hide');
	    });
    </script>
    <script>
      // When the user scrolls down 20px from the top of the document, slide down the navbar
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              document.getElementById("animated").style.top = "-80px";
          } else {
            document.getElementById("animated").style.top = "0";
          }
      }
    </script>
  </body>

</html>