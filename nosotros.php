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
                <a class="nav-link " aria-current="page" href="#">Navbar</a>
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
            <li><a class="dropdown-item" href="#">Opción 1</a></li>
            <li><a class="dropdown-item" href="#">Opción 2</a></li>
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
              <img src="imagenes/nosotros.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="container d-flex w-50">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                  <div class="col">
                    <div class="card">
                      <img src="imagenes/usuario.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Jefe</h5>
                        <p class="card-text">textto</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <img src="imagenes/usuario.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Fronted</h5>
                        <p class="card-text"> feña</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <img src="imagenes/usuario.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Full stack</h5>
                        <p class="card-text">Kitofeh</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <img src="imagenes/usuario.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Frelance</h5>
                        <p class="card-text">Carolithos </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h2>Información:</h2>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Quienes somos</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">Disabled</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">Contenido de "Quienes somos"</div>
          <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">De repente, te encuentras ante una cascada majestuosa, sus aguas cristalinas cayendo con fuerza sobre las rocas. El arco iris que se forma en el rocío brilla con colores vibrantes, como un puente hacia otro mundo. Te acercas para sentir la frescura del agua en tu piel y escuchas el murmullo constante de la corriente que te invita a adentrarte en su misterio.</div>
              <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">Mientras exploras este rincón secreto del bosque, te das cuenta de que la naturaleza tiene una manera de revelar su belleza y sus secretos a aquellos que se aventuran a descubrirlos. Cada rincón es una historia por contar, un misterio por desvelar y una lección por aprender.</div>
              <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">De repente, te encuentras ante una cascada majestuosa, sus aguas cristalinas cayendo con fuerza sobre las rocas. El arco iris que se forma en el rocío brilla con colores vibrantes, como un puente hacia otro mundo. Te acercas para sentir la frescura del agua en tu piel y escuchas el murmullo constante de la corriente que te invita a adentrarte en su misterio.</div>
        </div>
      </section>
      <section class="container d-flex w-50">
        <div class="cartao">
          <div class="conteudo">
            <div class="traseira">
                <div class="traseira-conteudo">
                    <img src="./imagens/ic-logo.png" />
                    <strong>Passe o Mouse</strong>
                </div>
            </div>
            <div class="frenteira">
                <div class="img">
                    <div class="circulos__dancante">
                    </div>
                    <div class="circulos__dancante" id="direita">
                    </div>
                    <div class="circulos__dancante" id="rodape">
                    </div>
                </div>
                <div class="frenteira-conteudo">
                    <small class="distintivo">Frontend</small>
                    <div class="descricao">
                        <div class="titulo">
                            <p class="titulo">
                                <strong>Cassiano S</strong>
                            </p>
                        </div>
                        <p class="cartao-rodape">
                            Programador CS &nbsp; | &nbsp; 2023
                        </p>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="cartao">
          <div class="conteudo">
              <div class="traseira">
                  <div class="traseira-conteudo">
                      <img src="./imagens/ic-logo.png" />
                      <strong>Passe o Mouse</strong>
                  </div>
              </div>
              <div class="frenteira">
                  <div class="img">
                      <div class="circulos__dancante">
                      </div>
                      <div class="circulos__dancante" id="direita">
                      </div>
                      <div class="circulos__dancante" id="rodape">
                      </div>
                  </div>
                  <div class="frenteira-conteudo">
                      <small class="distintivo">Frontend</small>
                      <div class="descricao">
                          <div class="titulo">
                              <p class="titulo">
                                  <strong>Cassiano S</strong>
                              </p>
                          </div>
                          <p class="cartao-rodape">
                              Programador CS &nbsp; | &nbsp; 2023
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="cartao">
        <div class="conteudo">
            <div class="traseira">
                <div class="traseira-conteudo">
                    <img src="./imagens/ic-logo.png" />
                    <strong>Passe o Mouse</strong>
                </div>
            </div>
            <div class="frenteira">
                <div class="img">
                    <div class="circulos__dancante">
                    </div>
                    <div class="circulos__dancante" id="direita">
                    </div>
                    <div class="circulos__dancante" id="rodape">
                    </div>
                </div>
                <div class="frenteira-conteudo">
                    <small class="distintivo">Frontend</small>
                    <div class="descricao">
                        <div class="titulo">
                            <p class="titulo">
                                <strong>Cassiano S</strong>
                            </p>
                        </div>
                        <p class="cartao-rodape">
                            Programador CS &nbsp; | &nbsp; 2023
                        </p>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="cartao">
        <div class="conteudo">
            <div class="traseira">
                <div class="traseira-conteudo">
                    <img src="./imagens/ic-logo.png" />
                    <strong>Passe o Mouse</strong>
                </div>
            </div>
            <div class="frenteira">
                <div class="img">
                    <div class="circulos__dancante">
                    </div>
                    <div class="circulos__dancante" id="direita">
                    </div>
                    <div class="circulos__dancante" id="rodape">
                    </div>
                </div>
                <div class="frenteira-conteudo">
                    <small class="distintivo">Frontend</small>
                    <div class="descricao">
                        <div class="titulo">
                            <p class="titulo">
                                <strong>Cassiano S</strong>
                            </p>
                        </div>
                        <p class="cartao-rodape">
                            Programador CS &nbsp; | &nbsp; 2023
                        </p>
                    </div>
                </div>
            </div>
        </div>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
