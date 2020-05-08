<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <!--Agregar despues para la descripcion de google-->
    <meta name="description" content="">

    <!-- RESET -->
    <link rel="stylesheet" href="vendors/css/css-reset.css">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/47e4b043cb.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="resources/css/styles.css">
    <!-- MEDIA QUERIES -->
    <link rel="stylesheet" href="resources/css/media-queries.css">

  
    <title>AGBA - Asociación Gestáltica de Buenos Aires</title>

</head>

<body>
    
<!--------------Navbar-------------->
<header>
    <nav>
        <div class="logo">
            <a href="index.php"><img src="resources/img/logoagba.png" alt="Logo AGBA" class="logo-normal"></a>
        </div>
        <a class="mobile-nav-icon"><i class="fas fa-bars js--mobile-nav-icon"></i></a>
        <div class="menu js--main-nav">
                <div class="main-nav js--mobile-nav-1" id="js-institucion">
                    <div class="linea">
                        <a href="#" class="btn-me" >Institución</a>
                        <div class="dropdown dropdown-1" id="js-drop-inst">
                            <div class="main-nav sub-btn">
                                <a href="quienes-somos.html">Quiénes somos?</a>
                            </div>
                            <div class="main-nav sub-btn">
                                <a href="que-es-gestalt.html">Gestalt</a>
                            </div>
                            <div class="main-nav sub-btn">
                                <a href="#">Nuestra sede</a>
                            </div>
                            <div class="main-nav sub-btn">
                                <a href="profesionales.html">Profesionales</a>
                            </div>
                            <div class="main-nav sub-btn">
                                <a href="#">AGBA Rosario</a>
                            </div>
                            <div class="main-nav sub-btn">
                                <a href="#">AGBA Catamarca</a>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="main-nav js--mobile-nav-2" id="js-sac">
                    <div class="linea">
                        <a class="btn-me sac" href="#">SAC</a>
                        <div class="dropdown dropdown-2" id="js-drop-sac">
                            <div class="main-nav sub-btn">
                                <a href="sac.html">Servicio de asistencia a la comunidad</a>
                            </div>
                            <div class="main-nav sub-btn">
                                <a href="admisiones.html">Admisiones</a>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="main-nav js--mobile-nav-3" id="js-departamentos">
                    <div class="linea">
                        <a class="btn-me" href="#">Departamentos</a>
                    <div class="dropdown dropdown-3" id="js-drop-dep">
                        <div class="main-nav sub-btn">
                            <a href="adicciones.html">Adicciones</a>
                        </div>
                        <div class="main-nav sub-btn">
                            <a href="naf.html">Niñez, adolescencia y familia
                            </a>
                        </div>
                        <div class="main-nav sub-btn">
                            <a href="parejas-familias.html">Parejas y familia</a>
                        </div>
                        <div class="main-nav sub-btn">
                            <a href="adultos.html">Adultos</a>
                        </div>
                        <div class="main-nav sub-btn">
                            <a href="grupos.html">Grupos</a>
                        </div>
                        <div class="main-nav sub-btn">
                            <a href="organizaciones.html">Organizaciones</a>
                        </div>
                        <div class="main-nav sub-btn">
                            <a href="investigaciones.html">Investigación</a>
                        </div>
                        <div class="main-nav sub-btn">
                            <a href="#">Género y diversidad</a>
                        </div>
                    </div>
                    </div>
                    
                </div>
    
                <div class="main-nav js--mobile-nav-4" id="js-escuela">
                    <div class="linea">
                        <a class="btn-me" href="#">Escuela</a>
                        <div class="dropdown dropdown-4" id="js-drop-escuela">
                            <div class="main-nav sub-btn">
                                <a href="formacion-gestalt.html">Formación en Gestalt</a>
                            </div>
                            <div class="main-nav sub-btn">
                                <a href="plan-estudios.html">Plan de Estudio</a>
                            </div>
                            <div class="main-nav sub-btn">
                                <a href="docentes.html">Docentes</a>
                            </div>
                            <div class="main-nav sub-btn">
                                <a href="fechas-convivencia.html">Fechas de convivencia</a>
                            </div>
                            <div class="main-nav sub-btn">
                                <a href="requisitos.html">Requisitos</a>
                            </div>
                            <div class="main-nav sub-btn">
                                <a href="como-llegar.html">Cómo llegar</a>
                            </div>
                            <!-- <div class="main-nav sub-btn">
                                <a href="#">Charlas informativas</a>
                            </div> -->
                            <div class="main-nav sub-btn">
                                <a href="residencias-pasantias.html">Departamento de Residencias y Pasantías</a>
                            </div>
                            <div class="main-nav sub-btn">
                                <a href="catamarca.html">Catamarca</a>
                            </div>
                            <div class="main-nav sub-btn">
                                <a href="mendoza.html">Mendoza</a>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="main-nav">
                    <div class="linea">
                        <a class="btn-me" href="actividades.html">Actividades</a>
                        <!-- <div class="dropdown">
                            <div class="main-nav sub-btn">
                                <a href="#">Talleres</a>
                            </div>
                            <div class="main-nav sub-btn">
                                <a href="#">Cursos</a>
                            </div>
                            <div class="main-nav sub-btn">
                                <a href="#">Seminarios</a>
                            </div>
                        </div> -->
                    </div>
                </div>
    
                <div class="main-nav">
                    <div class="linea">
                        <a class="btn-me" href="contacto.html">Contacto</a>
                    </div>
                </div>
        </div>
    </nav>

<!------------ SLIDER ------------>

<div id="carouselExampleCaptions" class="carousel slide slider-boot-me" data-ride="carousel">
    <ol class="carousel-indicators carousel-indicators-me">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active carousel-me">
        <a href="sac.html"><img src="resources/img/banner1.png" class="d-block w-100" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
            <div class="caption-me">
                <a class="btn-1-form btn-contactate" href="sac.html">CONTACTATE</a>
            </div>
        </div>
      </div>
      <div class="carousel-item carousel-me">
        <a href="formacion-gestalt.html"><img src="resources/img/banner2.png" class="d-block w-100" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
            <div class="caption-me">
                <a class="btn-1-form btn-escuela btn-caption" href="formacion-gestalt.html">MÁS INFO</a>
            </div>
        </div>
      </div>
      <div class="carousel-item carousel-me">
        <a href="actividades.html"><img src="resources/img/banner3.png" class="d-block w-100" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
            <div class="caption-me">
                <a class="btn-1-form btn-actividades btn-caption" href="actividades.html">AGENDA</a>
            </div>
        </div>
      </div>
      <div class="carousel-item carousel-me">
        <a href="quienes-somos.html"><img src="resources/img/banner4.png" class="d-block w-100" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
            <div class="caption-me">
                <a class="btn-1-form btn-aniversario btn-caption" href="quienes-somos.html">CONOCÉ MÁS</a>
            </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev carousel-control-prev-me" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next carousel-control-next-me" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</header>

    <!------------ Servicios ------------>
    <section class="section-servicios js-section-servicios">
        <div class="titulo">
            <h2>CONOCÉ MÁS</h2>
        </div>
        <div class="servicios-container">
            <div class="servicios-box">
                <a href="sac.html"><i class="fas fa-users"></i></a>
                <h3>SAC</h3>
                <a href="sac.html" class="btn">Ver más</a>
            </div>
            <div class="servicios-box">
                <a href="formacion-gestalt.html"><i class="fas fa-graduation-cap"></i></a>
                <h3>ESCUELA</h3>
                <a href="formacion-gestalt.html" class="btn">Ver más</a>
            </div>
            <div class="servicios-box">
                <a href="actividades.html"><i class="fab fa-leanpub"></i></a>
                <h3>ACTIVIDADES</h3>
                <a href="actividades.html" class="btn">Ver más</a>
            </div>
        </div>
    </section>

    <!------------ Novedades ------------>
    <section class="section-novedades">
        <div class="titulo">
            <h2>NOVEDADES</h2>
        </div>
        <div class="novedades-box">
            <div class="novedades-img">
                <a href="act-grupos-orientacion.html"><img src="resources/img/actividades-1.png" alt=""></a>
                <h3>Grupos de orientación</h3>
                <a href="act-grupos-orientacion.html" class="btn-1">Ver más</a>
            </div>
            <div class="novedades-img">
                <a href="act-grupos-encuentro.html"><img src="resources/img/actividades-2.png" alt=""></a>
                <h3>Grupos de encuentro</h3>
                <a href="act-grupos-encuentro.html" class="btn-1">Ver más</a>
            </div>
            <div class="novedades-img">
                <a href="act-quedateencasa.html"><img src="resources/img/actividades-3.png" alt=""></a>
                <h3>Recomendaciones psicológicas</h3>
                <a href="act-quedateencasa.html" class="btn-1">Ver más</a>
            </div>
        </div>
    </section>

    <!---------- FORMULARIO DE CONTACTO ---------->
    <section class="form-contacto">
        <div class="titulo">
            <h2>COMUNICATE CON NOSOTROS</h2>
        </div>
        <div class="form" id="form">
            <form action="mailer.php" method="post">

               <?php
               if ($_GET['success'] == 1) {
                   echo "<div class=\"form-message success\"><i class=\"fas fa-check-circle\"></i> Gracias! Tu mensaje fue enviado.</div>";
               }

               if ($_GET['success'] == -1) {
                   echo "<div class=\"form-message error\"><i class=\"fas fa-times-circle\"></i>Por favor, completa todos los campos.</div>";
               }
                ?>

                <input type="text" id="nombre" name="nombre" value="" placeholder="Nombre y apellido">

                <input type="email" id="email" name="email" value="" placeholder="Email">

                <input type="tel" id="tel" name="tel" value="" placeholder="Teléfono o celular">

                <label for="sector">Seleccionar sector:</label>
                <select name="sector" id="sector">
                    <optgroup label="Seleccionar sector">
                        <option value="escuela">Escuela de formación en Gestalt</option>
                        <option value="actividades">Seminarios, talleres y cursos</option>
                        <option value="sac">Admisiones</option>
                    </optgroup>
                </select>

                <input type="text" id="asunto" name="asunto" value="" placeholder="Asunto">

                <textarea id="mensaje" name="mensaje" placeholder="Mensaje"></textarea>

                <input type="submit" name="" value="Enviar" class="btn-1-form">
            </form>
        </div>
    </section>
<!------------ FOOTER ------------>
    <footer>
        <div class="section-footer">
            <div class="footer-box">
                <div class="info-titulo">
                    <p>INFO</p>
                </div>
                <div class="info-box">
                    <a href="quienes-somos.html">Quiénes somos?</a>
                    <a href="que-es-gestalt.html">Qué es Gestalt?</a>
                    <a href="contacto.html">Contacto</a>
                </div>
            </div>
            <div class="footer-box">
                <div class="donde-titulo">
                    <p>DÓNDE ESTAMOS</p>
                </div>
                <div class="donde-box">
                    <p>Delgado 1253 - CABA</p>
                    <p>Tel-Fax: 4551-8056</p>
                </div>
            </div>
            <div class="footer-box">
                <div class="rrss-titulo">
                    <p>SOCIAL</p>
                </div>
                <div class="icon-container">
                    <a href="https://www.facebook.com/AgbaGestaltArgentina/"><i class="fab fa-facebook-f"></i></a>
                </div>
                <div class="icon-container">
                    <a href="https://www.instagram.com/agbagestalt/"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="icon-container">
                    <a href="https://www.youtube.com/channel/UC4tNbQ6Aepyd5isreGaPZ4w"><i class="fab fa-youtube"></i></a>
                </div>
                <div class="icon-container">
                    <a href="https://twitter.com/agba_gestalt"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>

        <div class="copyright">
            <p>© 2019 AGBA. Todos los derechos reservados.</p>
        </div>

    </footer>


    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- JQuery -->
    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <!-- JS -->
    <script src="jquery-nav.js"></script>

</body>
</html>