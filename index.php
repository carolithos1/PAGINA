<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  
  </head>
  <body>
    <div class="grid-container">
    <header>
      <div class="logo">
        <img src="imagenes/footer.png"alt="Logo de Diablo 3">
      </div>
      <nav class="navbar navbar-expand-lg bg-body-tertiary"data-bs-theme="dark">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#">informacion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="nosotros.php">Team</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tier list
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Solo Pushing</a></li>
                  <li><a class="dropdown-item" href="#">Key Farming</a></li>
                  <li><a class="dropdown-item" href="#">Bounty Farming</a></li>
                </ul>
              </li>
              <li class="nav-item">
              <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
    <!-- Mostrar el nombre de usuario y el menú desplegable -->
    <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $_SESSION['username']; ?>
        </a>
        <ul class="dropdown-menu" aria-labelledby="userDropdown">
            <li><a class="dropdown-item" href="#">ver perfil</a></li>
            <li><a class="dropdown-item" href="#"></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">Cerrar sesión</a></li>
        </ul>
    </div>
<?php else: ?>
    <!-- Botón de inicio de sesión que abre el modal -->
    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#loginModal">
        Iniciar sesión
    </button>

    <!-- Modal de inicio de sesión -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Iniciar sesión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de inicio de sesión -->
                    <form action="login.php" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo:</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="contrasena" class="form-label">Contraseña:</label>
                            <input type="password" class="form-control" name="contrasena" required>
                        </div>
                        <button type="submit" class="btn btn-dark">Iniciar Sesión</button>
                    </form>

                    <!-- Enlace de registro y recuperación de contraseña -->
                    <p class="mt-3">¿No tienes una cuenta? <a href="ingresar.php">Regístrate aquí</a></p>
                    <p><a href="recuperar.php">¿Olvidaste tu contraseña?</a></p>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

              </li>
            </ul>
          </div>
        </div>
      </nav>

    </header>

      <article class="cuadros-container">
        <div class="text-center">
          <div class="banner text" style="max-width: 100%; height: 300px; overflow: hidden; position: relative;">
            <div class="banner-img-overlay">
              <h5 class="card-title"><img src="imagenes/logo.webp" alt="Logo"></h5>
              <p class="card-text">EL INFIERNO TE SALUDA</p>
            </div>
          </div>
        </div>
        <section class="noticias-container">
          <div class="bg  mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="imagenes/5.webp" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <p class="d-inline-flex gap-1">
                    <button class="btn btn-outline-light "  data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Juego</button>
                    <button class="btn btn-outline-light" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Historia</button>                  </p>
                  <div class="row">
                    <div class="col">
                      <div class="collapse multi-collapse" id="multiCollapseExample1">
                        <div class="letra">
                        "Diablo III" es un videojuego de rol de acción desarrollado y publicado por Blizzard Entertainment. Fue lanzado en mayo de 2012 como la tercera entrega de la serie "Diablo". La historia de "Diablo III" continúa la trama de los juegos anteriores, pero también presenta nuevos personajes y ubicaciones.
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="collapse multi-collapse" id="multiCollapseExample2">
                        <div class="letra">
                        En "Diablo III", una estrella fugaz cae sobre Tristram, marcando el renacer de Diablo, el Señor del Terror. Los jugadores, encarnando a un héroe, exploran un mundo corrompido, enfrentándose a las maquinaciones de Diablo y sus siervos. A lo largo de los actos, el héroe derrota a enemigos como Belial y Azmodan, descubre las Piedras del Alma Negra y enfrenta la resurrección completa de Diablo.
                        En los Altos Cielos, la batalla culmina en la derrota de Diablo, pero a un costo significativo: Leah, poseída por el demonio, se sacrifica para salvar el mundo. La expansión "Reaper of Souls" introduce a Malthael, el Ángel de la Muerte, quien amenaza con erradicar la humanidad. El héroe se enfrenta a esta nueva amenaza, luchando por la supervivencia de Santuario y derrotando a Malthael para restaurar la paz, al menos temporalmente, en este eterno conflicto entre el cielo y el infierno.
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <h2>Noticias:</h2>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <ol class="carousel-indicators">
                  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></li>
              </ol>
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img src="imagenes/1.webp" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                          <h5>Nueva Clase: Los Místicos de Tristram</h5>
                          
                      </div>
                  </div>
                  <div class="carousel-item">
                      <img src="imagenes/2.webp" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                          <h5>Evento Especial del Festival de la Luna Sangrienta: Celebrando la Victoria en Westmarch</h5>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <img src="imagenes/3.webp" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                          <h5>Lanzamiento del Modo de Desafío Multijugador: Arena del Infierno</h5>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img src="imagenes/4.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Neco contenido exclusivo</h5>
                    </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
              </a>
          </div>
        </section>
        <section class="personajes-container">
          <h2>Personajes:</h2>
          <div class="cuadro">
            <div id="carouselExampleFade" class="carousel slide carousel-fade">
              <div class="custom-carousel-controls">
                <button class="btn btn-outline-light" data-bs-target="#carouselExampleFade" data-bs-slide-to="0">1</button>
                <button class="btn btn-outline-light" data-bs-target="#carouselExampleFade" data-bs-slide-to="1">2</button>
                <button class="btn btn-outline-light" data-bs-target="#carouselExampleFade" data-bs-slide-to="2">3</button>
                <button class="btn btn-outline-light" data-bs-target="#carouselExampleFade" data-bs-slide-to="3">4</button>
                <button class="btn btn-outline-light" data-bs-target="#carouselExampleFade" data-bs-slide-to="4">5</button>
                <button class="btn btn-outline-light" data-bs-target="#carouselExampleFade" data-bs-slide-to="5">6</button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-md-6">
                      <img src="imagenes/monje.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-md-6">
                      <p>Ágil y letal, el Monje es un maestro de artes marciales y energía espiritual, capaz de desencadenar golpes rápidos y curar heridas.</p>
                      <iframe width="100%" height="500" src="https://www.youtube.com/embed/5Uo1yeljhPo?si=C4WS9b_VDWQh6ZiF&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-md-6">
                      <img src="imagenes/mago.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-md-6">
                      <p>Controla los elementos con maestría; el Mago lanza fuego, hielo y rayos devastadores para diezmar a sus oponentes con magia poderosa.</p>
                      <iframe width="100%" height="315" src="https://www.youtube.com/embed/VJa2HoMgZes?si=RGfnbqGhBXeWsD92&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-md-6">
                      <img src="imagenes/barbaro.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-md-6">
                      <p>Fuerza bruta en su máxima expresión, el Bárbaro es un guerrero resistente que destroza enemigos con hachas y martillos gigantes, usando furia como recurso.</p>
                      <iframe width="100%" height="315" src="https://www.youtube.com/embed/cOedS9p9ips?si=nsCXquWb4C3lbBXn&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-md-6 ">
                      <img src="imagenes/medicobrujo.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-md-6 ">
                      <p>Este hechicero oscuro se basa en el control de espíritus y maldiciones para debilitar a sus enemigos. Puede invocar mascotas espirituales, lanzar maldiciones y utilizar magia vudú para controlar o dañar a los adversarios, todo mientras gestiona su maná y recolecta almas para aumentar su poder.
                      </p>
                      <iframe width="100%" height="315" src="https://www.youtube.com/embed/r6rcDhnida8?si=710wQBlRe_2jSba5&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-md-6 ">
                      <img src="imagenes/Crusado.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-md-6">
                      <p>Caballero divino, el Cruzado combina armadura pesada con poder divino para proteger a sus aliados y purgar el mal con su formidable martillo.</p>
                      <iframe width="100%" height="315" src="https://www.youtube.com/embed/LLIzhcN_ncA?si=9trVT5MbLtN0c_MO&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-md-6">
                      <img src="imagenes/cazador.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-md-6">
                      <p> Maestro del sigilo y la precisión, el Cazador de Demonios combina arquería con magia oscura para eliminar a sus enemigos a distancia.</p>
                      <iframe width="100%" height="315" src="https://www.youtube.com/embed/TI-GdhYkHkk?si=zLZLbxT_s7xMvYDE&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="Builds-container">
          <h2>Builds:</h2>
            <div class="cuadro">
              <div class="container text-center">
                <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3">
              <div class="col">
                <div class="p-3"><img src="imagenes/class barbarian.jpg" alt="">Raekor Boulder Toss Barbarian Guide</div>
                  </div>
                <div class="col">
                    <div class="p-3"><img src="imagenes/class crusader.jpg" alt="">AoV Fist of the Heavens Crusader Guide</div>
              </div>
              <div class="col">
                <div class="p-3"><img src="imagenes/class witch doctor.jpg" alt="">Mundunugu Spirit Barrage Witch Doctor Guide</div>
                  </div>
              <div class="col">
                    <div class="p-3"><img src="imagenes/class mage.jpg" alt="">Firebird Meteor Wizard Guide</div>
                </div>
              <div class="col">
                    <div class="p-3"><img src="imagenes/class monk.jpg" alt="">Sunwuko Lashing Tail Kick Monk Guide</div>
              </div>
              <div class="col">
                <div class="p-3"><img src="imagenes/class demon hunter.jpg" alt="">Natalya Spike Trap Demon Hunter Guide</div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        <section class="youtube-container">
          <h2>YouTube:</h2>
          <div class="cuadro">
        
          </div>
        </section>
      </article>
      <footer>
      <div class="container-footer">
          <div class="footer-col">
              <h4>company</h4>
              <ul>
                  <li><a href="#">about us</a></li>
                  <li><a href="#">our services</a></li>
                  <li><a href="#">privacy policy</a></li>
                  <li><a href="#">affiliate program</a></li>
              </ul>
          </div>
          <div class="footer-col">
              <h4>get help</h4>
              <ul>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">shipping</a></li>
                  <li><a href="#">returns</a></li>
                  <li><a href="#">order status</a></li>
                  <li><a href="#">payment options</a></li>
              </ul>
          </div>
          <div class="footer-col">
              <h4>online shop</h4>
              <ul>
                  <li><a href="#">diablo 1</a></li>
                  <li><a href="#">diablo 2</a></li>
                  <li><a href="#">diablo 3</a></li>
                  
                  <li><a href="#">diablo 4</a></li>
              </ul>
          </div>
          <div class="footer-col">
              <h4>follow us</h4>
              <div class="social-links">
                  <a href="#"><i class="fab fa-facebook"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-tumblr"></i></a>
              </div>
          </div>
      </div>
    </footer>
          <div class="copyright">
              <p>&copy; 2023 Diablo 3. Todos los derechos reservados.</p>
          </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script></body>
</html>
