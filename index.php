<?php
//El código PHP que haga falta va acá
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/styles.css">

  <title>Inicio</title>
</head>

<body>

  <!-- HEADER -->
  <header>
    <nav id="header" class="navbar fixed-top shadow navbar-expand-md navbar-dark bg-dark" role="navigation">
      <div class="container">
        <div class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <!-- <span class="bar"></span>
            <span class="bar"></span> -->
        </div>
        <!-- Nuestro logo de marca -->
        <a class="navbar-brand" href="#"><img class="img-fluid" src="img/logo_embirrados_chico.png" alt="BirritApp"></a>
        <!-- Navbar plegable superior -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item link"><a class="nav-link" href="#top">Inicio</a></li>
            <li class="nav-item link"><a class="nav-link" href="#about">Registrate</a></li>
            <li class="nav-item link"><a class="nav-link" href="#reglas">Reglas</a></li>
            <li class="nav-item link"><a class="nav-link" href="#faq">Preguntas Frecuentes</a></li>
            <li class="nav-item link"><a class="nav-link" href="#contacto">Contacto</a></li>
          </ul>
          <!-- Boton de Login -->
          <form class="form-inline">
            <button class="btn btn-outline-warning" type="button" data-toggle="modal" data-target="#modalLogin" data-whatever="@mdo">Login</button>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <!-- MODAL para Login -->
  <!-- Referencia al boton Login -->
  <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLogin" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <!-- Contenido del Modal -->
      <div class="modal-content">
        <!-- Header del Modal -->
        <div class="modal-header">
          <h5 class="modal-title" id="modalLogin">Iniciar Sesión</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!-- Body del Modal donde colocamos el formulario -->
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">E-mail:</label>
              <input type="email" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Contraseña:</label>
              <input type="password" class="form-control" id="recipient-name">
            </div>
          </form>
        </div>
        <!-- Footer del Modal, contiene botones -->
        <div class="modal-footer">
          <button type="button" class="btn btn-warning">Iniciar Sesión</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- SECTION: TOP -->
  <section id="top" class="first">
    <div class="container">
      <div class="row">
        <div class="col">
          <img class="img-fluid" src="img/rueda_icono.png" alt="BirritApp">
        </div>
        <div class="col">
          <div class="row">
            <img class="img-fluid" src="img/logo_embirrados.png" alt="BirritApp">
            <p>Comienza a jugar hoy mismo, no podrás parar de jugar.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis culpa velit repellendus corporis, omnis ratione natus molestias aliquid autem enim in. Expedita, nisi? Dolor, tempore eos veniam unde id magni.</p>
          </div>
          <div class="row">
            <p><a class="btn btn-warning btn-lg" href="#" role="button"><i class="fas fa-dice-d20"></i> Empieza a jugar ahora &raquo;</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION: CONTACTO -->
  <section id="contacto" class="first">
    <div class="container">
      <h2>Contactate con nosotros</h2>
      <form>
        <label for="inputNombre" class="sr-only">Nombre</label>
        <input type="text" id="inputEmail" class="form-control mb-3" placeholder="Nombre completo" required autofocus>

        <label for="inputEmail" class="sr-only">Correo electrónico</label>
        <input type="email" id="inputEmail" class="form-control mb-3" placeholder="Correo electrónico" required>

        <label for="inputAsunto" class="sr-only">Asunto</label>
        <input type="text" id="inputAsunto" class="form-control mb-3" placeholder="Asunto" required>

        <label for="inputMensaje" class="sr-only">Mensaje</label>
        <textarea name="mensaje" class="form-control mb-3" id="inputMensaje" cols="30" rows="5" placeholder="Escribe tu mensaje aquí..." required></textarea>

        <br>
        <button class="btn btn-warning btn-lg" type="submit">Enviar</button>

      </form>
      <br>
  </section>

  <!-- Footer -->
  <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>Contacto</h3>
            <ul class="list-unstyled">
              <li><i class="fa fa-map-marker-alt"></i> Av. Trueno 1234, 2000 Rosario</li>
              <li><i class="fab fa-whatsapp"></i> +54 9 341 323-0962</li>
              <li><i class="fa fa-envelope"></i><a href="mailto:contacto@teamtrueno.com"> contacto@teamtrueno.com</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <p>Desarrollado por TeamTrueno</p>
          </div>
          <div class="col-md-4">
            <h3>Seguinos en</h3>
            <span class="red"><i class="fab fa-facebook-f"></i></span>
            <span class="red"><i class="fab fa-instagram"></i></span>
            <span class="red"><i class="fab fa-linkedin"></i></span>
            <span class="red"><i class="fab fa-twitter"></i> teamtrueno</span>
          </div>
        </div>
      </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
