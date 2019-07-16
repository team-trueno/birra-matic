

<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="css/slidebars.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/styles.css">

  <title>Document</title>
</head>
<body>
  <!-- Contenedor canvas del site -->
  <div canvas="container">
    <!-- HEADER -->
    <header>
      <nav id="header" class="navbar fixed-top navbar-expand-md" role="navigation">
        <div class="navbar-toggler bg-dark js-toggle-main-menu" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <!-- Nuestro logo de marca -->
        <!-- TODO: Anidar una imagen dentro -->
        <div class="navbar-item">
          <a class="navbar-brand" href="#">BirritApp</a>
        </div>
        <!-- Navbar plegable superior -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav bg-dark">
            <li class="nav-item link"><a class="nav-link" href="#">Inicio</a></li>
            <li class="nav-item link"><a class="nav-link" href="#">Nuestro juego</a></li>
            <li class="nav-item link"><a class="nav-link" href="#">Reglas</a></li>
            <li class="nav-item link"><a class="nav-link" href="#">Equipo</a></li>
            <li class="nav-item link"><a class="nav-link" href="#">Contacto</a></li>
          </ul>
        </div>
        <!-- Control de Login -->
        <div class="navbar-item">
          <a class="nav-link" href="#"><i class="fas fa-user"></i></a>
        </div>
      </nav>
    </header>
  </div>

  <!-- Contenedor fuera de canvas para menu lateral -->
  <div off-canvas="main-menu left shift">
      <a class="navbar-brand" href="#">BirritApp</a>
      <ul class="navbar-nav bg-dark">
          <li class="nav-item link"><a class="nav-link" href="#">Inicio</a></li>
          <li class="nav-item link"><a class="nav-link" href="#">Nuestro juego</a></li>
          <li class="nav-item link"><a class="nav-link" href="#">Reglas</a></li>
          <li class="nav-item link"><a class="nav-link" href="#">Equipo</a></li>
          <li class="nav-item link"><a class="nav-link" href="#">Contacto</a></li>
      </ul>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="js/slidebars.js"></script>
  <!--     <script type="text/javascript">
    $(function () {
      'use strict'

      $('[data-toggle="offcanvas"]').on('click', function () {
        $('.offcanvas-collapse').toggleClass('open')
      })
    })
  </script> -->
  <!--
    $(document).ready(function () {
      $("#sidebar").mCustomScrollbar({
        theme: "minimal"
      });

      $('#sidebarCollapse').on('click', function () {
        $('#sidebar, #content').toggleClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
      });
    });

  -->
  <script>
      ( function ( $ ) {
        // Initialize Slidebars
        var controller = new slidebars();
        controller.init();

        		// Toggle main menu
		$( '.js-toggle-main-menu' ).on( 'click', function ( event ) {
			event.preventDefault();
			event.stopPropagation();
			controller.toggle( 'main-menu' );
		} );

        // Toggle Slidebars
        $( '.toggle-id-1' ).on( 'click', function ( event ) {
          // Stop default action and bubbling
          event.stopPropagation();
          event.preventDefault();

          // Toggle the Slidebar with id 'id-1'
          controller.toggle( 'id-1' );
        } );
      } ) ( jQuery );
    </script>
</body>
</html>
