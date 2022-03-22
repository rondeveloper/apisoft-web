<?php
session_start();
include "admin/app/items/DB.php";

$alert="";

/* crea un registro de consulta en la BD */
if (isset($_POST['agregar-consulta'])) {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];
  $telefono = $_POST['telefono'];
  $mensaje = $_POST['mensaje'];
  $consulta_insert = "INSERT INTO consultas
  (`nombre`, `apellido`,`email`, `telefono`,`mensaje`) 
  VALUES 
  ('$nombre', '$apellido','$email', '$telefono','$mensaje')";
    $resultado = mysqli_query($conexion, $consulta_insert);
  if ($resultado) {
    $alert='<div class="alert alert-success mx-auto w-50 text-center alert-dismissible fade show" role="alert" style="z-index:900; height:50px;width:300px;position:absolute;top:0;bottom:0;right:0;left:0;margin:auto;">
    <strong>EXITO!</strong> YA SE AGREGO CORRECTAMENTE
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  } 
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="shortcut icon" type="image/icon" href="assets/img/logo-apisoft.png"/>
    <link rel="stylesheet" href="assets/estilos.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@690&display=swap"
      rel="stylesheet"
    />
    <title>APISOFT</title>
  </head>

  <body>
    <?=$alert?>
    <div class="slider-box">
      <div class="main-img">
        <img src="assets/img/1.jpg" alt="sample01-1" />
      </div>
      <ul class="thumb-img">
        <li><img src="assets/img/1.jpg" alt="sample01-1" /></li>
        <li><img src="assets/img/2.jpg" alt="sample01-2" /></li>
        <li><img src="assets/img/3.jpg" alt="sample01-3" /></li>
      </ul>
    </div>
   <?php
   include 'admin/app/items/header.modulos.php';
   ?>
    <main>
      <div class="informacion-principal">
        <p class="titulo">Quieres Una Pagina Web</p>
        <div class="titulo-overflow">
          <ul>
            <li>Nosotros lo Hacemos</li>
            <li>Facil y Profesional</li>
            <li>Por un Precio Razonable</li>
          </ul>
        </div>
      </div>
    </main>
    <section>
      <div class="section-inicio">
        <div>
          APISOFT desarrollo de software<br /><i
            class="bx bx-slideshow bx-flashing bx-lg"
          ></i>
        </div>
        <div>
          Desarrollamos soluciones tecnológicas de información para plataformas
          Web, Móviles y de Escritorio
        </div>
      </div>
    </section>
    <section>
      <div class="section-inicio-card">
        <div>
          <div class="section-inicio-image_1"></div>
          <div class="section-inicio-bg_1">
            <h3>Por que elegir apisof</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error
              dolor deserunt nostrum voluptatum id quidem dolore eligendi nobis
              molestias dignissimos?
            </p>
          </div>
        </div>
        <div>
          <div class="section-inicio-image_2"></div>
          <div class="section-inicio-bg_2">
            <h3>Tu eleccion de servicio</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error
              dolor deserunt nostrum voluptatum id quidem dolore eligendi nobis
              molestias dignissimos?
            </p>
          </div>
        </div>
        <div>
          <div class="section-inicio-image_3"></div>
          <div class="section-inicio-bg_3">
            <h3>Que creemos de tu eleccion</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error
              dolor deserunt nostrum voluptatum id quidem dolore eligendi nobis
              molestias dignissimos?
            </p>
          </div>
        </div>
        <div>
          <div class="section-inicio-image_4"></div>
          <div class="section-inicio-bg_4">
            <h3>Lo que creen de los servicios</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error
              dolor deserunt nostrum voluptatum id quidem dolore eligendi nobis
              molestias dignissimos?
            </p>
          </div>
        </div>
        <div>
          <div class="section-inicio-image_5"></div>
          <div class="section-inicio-bg_5">
            <h3>Que servicios es mas usado</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error
              dolor deserunt nostrum voluptatum id quidem dolore eligendi nobis
              molestias dignissimos?
            </p>
          </div>
        </div>
        <div>
          <div class="section-inicio-image_6"></div>
          <div class="section-inicio-bg_6">
            <h3>El servicio que no sugeririamos</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error
              dolor deserunt nostrum voluptatum id quidem dolore eligendi nobis
              molestias dignissimos?
            </p>
          </div>
        </div>
        <div>
          <div class="section-inicio-image_7"></div>
          <div class="section-inicio-bg_7">
            <h3>El servicio que es mas caro</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error
              dolor deserunt nostrum voluptatum id quidem dolore eligendi nobis
              molestias dignissimos?
            </p>
          </div>
        </div>
        <div>
          <div class="section-inicio-image_8"></div>
          <div class="section-inicio-bg_8">
            <h3>El servicio que no es muy llevado</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error
              dolor deserunt nostrum voluptatum id quidem dolore eligendi nobis
              molestias dignissimos?
            </p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="section-servicios">
        <div class="titulo-figura">
          <h3>Servicios</h3>
          de dise&ntilde;o y desarrollo
          <div></div>
        </div>
        <div class="overflow-figure">
          <a href="admin/servicios.php#ap"><div class="figure-1">
            Dise&ntilde;o y Desarrollo de aplicaciones WEB
          </div></a>
        </div>
        <div class="overflow-figure">
        <a href="admin/servicios.php#se"><div class="figure-2">Desarrollo de Sistemas</div></a>
        </div>
        <div class="overflow-figure">
        <a href="admin/servicios.php#am"> <div class="figure-3">Aplicaciones Moviles</div></a>
        </div>

        <div class="overflow-figure">
        <a href="admin/servicios.php#pw"> <div class="figure-4">Dise&ntilde;o de Paginas WEB</div></a>
        </div>
        <div class="overflow-figure">
        <a href="admin/servicios.php#pi"> <div class="figure-5">Asesoramiento en Proyectos de informatica</div></a>
        </div>
        <div class="overflow-figure">
        <a href="admin/servicios.php#wh"><div class="figure-6">Alojamiento y Dominio WEB</div></a>
        </div>
      </div>
    </section>

    <section>
      <div class="section-portafolio-titulo">Nuestros Productos</div>
      <div class="section-portafolio">
        <div class="section-trabajo">
          <iframe
            width="560"
            height="315"
            src="https://www.youtube.com/embed/5g73UojLJ8g"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
        </div>
        <div class="section-trabajo">
          <iframe
            width="560"
            height="315"
            src="https://www.youtube.com/embed/C1xDTp9koQQ"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
        </div>
      </div>
      <div class="mas-productos">
        <a href="admin/portafolio.php#portafolio"
          >Mas Productos<i class="bx bxs-chevrons-right bx-tada"></i
        ></a>
      </div>
    </section>
    <section>
      <div class="section-planes">
        <section class="precios">
          <div class="contenedor">
            <h3 class="seccion-titulo">Nuestros Planes</h3>
            <div class="seccion-divisor"></div>
            <p class="seccion-descripcion">
              Escuchamos tus Ideas<br />
              Porque tu Empresa es Única
            </p>
          </div>

          <div class="contenedor-grid contenedor">
            <div class="columnas1-3 precio-caja">
              <div class="precio-contenido general">
                <h2>Plan Basico 1</h2>
                <h3>BOB549<sup>.99</sup><span>/Una pagina</span></h3>
                <ul>
                  <li>
                    Asesoria las 24 Horas<i
                      class="bx bx-time bx-tada bx-sm"
                      style="font-weight: bold; color: #0f0"
                    ></i>
                  </li>
                  <li>
                    Ayuda de un profesional<i
                      class="bx bx-check bx-tada bx-sm"
                      style="font-weight: bold; color: #00f"
                    ></i>
                  </li>
                  <li>
                    Creamos tu logo<i
                      class="bx bx-check bx-tada bx-sm"
                      style="font-weight: bold; color: #00f"
                    ></i>
                  </li>
                  <li>
                    <del>Hosting</del
                    ><i
                      class="bx bx-x bx-sm bx-tada"
                      style="font-weight: bold; color: #ff0000"
                    ></i>
                  </li>
                </ul>
                <div class="precio-boton">
                  <a class="boton" href="#">comprar</a>
                </div>
              </div>
            </div>
            <div class="columnas1-3 precio-caja">
              <div class="precio-contenido ofrecido">
                <h2>Plan Premiun</h2>
                <h3>BOB999<sup>.99</sup><span>/Hasta 3 Paginas</span></h3>
                <ul>
                  <li>
                    Asesoria las 24 Horas<i
                      class="bx bx-time bx-tada bx-sm"
                      style="font-weight: bold; color: #0f0"
                    ></i>
                  </li>
                  <li>
                    Ayuda de un profesional<i
                      class="bx bx-check bx-tada bx-sm"
                      style="font-weight: bold; color: #00f"
                    ></i>
                  </li>
                  <li>
                    Creamos tu logo<i
                      class="bx bx-check bx-tada bx-sm"
                      style="font-weight: bold; color: #00f"
                    ></i>
                  </li>
                  <li>
                    Seo y Posicionamiento en google<i
                      class="bx bx-check bx-tada bx-sm"
                      style="font-weight: bold; color: #00f"
                    ></i>
                  </li>
                  <li>
                    Hosting<i
                      class="bx bx-check bx-tada bx-sm"
                      style="font-weight: bold; color: #00f"
                    ></i>
                  </li>
                </ul>
                <div class="precio-boton">
                  <a class="boton" href="#">comprar</a>
                </div>
              </div>
            </div>
            <div class="columnas1-3 precio-caja">
              <div class="precio-contenido general">
                <h2>Plan Basico 2</h2>
                <h3>BOB549<sup>.99</sup><span>/Hasta 2 Paginas</span></h3>
                <ul>
                  <li>
                    Asesoria las 24 Horas<i
                      class="bx bx-time bx-tada bx-sm"
                      style="font-weight: bold; color: #0f0"
                    ></i>
                  </li>
                  <li>
                    Ayuda de un profesional<i
                      class="bx bx-check bx-tada bx-sm"
                      style="font-weight: bold; color: #00f"
                    ></i>
                  </li>
                  <li>
                    Creamos tu logo<i
                      class="bx bx-check bx-tada bx-sm"
                      style="font-weight: bold; color: #00f"
                    ></i>
                  </li>
                  <li>
                    <del>Hosting</del
                    ><i
                      class="bx bx-x bx-sm bx-tada"
                      style="font-weight: bold; color: #ff0000"
                    ></i>
                  </li>
                </ul>
                <div class="precio-boton">
                  <a class="boton" href="#">comprar</a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
    <section>
      <div class="section-cotizaciones">
        <div class="cotizacion">
          <div class="cotizacion-titulo">
            <h1>Cotizacion</h1>
            <h2>
              ¡Si has llegado hasta aquí, es que realmente quieres dar un
              impulso a tu empresa!
            </h2>
          </div>
          <div class="text-muted">
            Para que podamos ayudarte, antes de nada queremos conocerte un poco
            más. Déjanos tus datos de contacto y un breve mensaje de lo que
            necesitas y nos pondremos en contacto contigo en menos de 24 horas.
            ¡Prometido! En APISOFT queremos ayudarte a que tu negocio crezca
            gracias a las más avanzadas tecnologías TIC y a nuestro equipo, que
            hará todo lo posible para ayudarte en tu proyecto ;)
          </div>
        </div>
      
          <div class="cotizacion-formulario">
            <form action="" method="post" class="row text-primary" >
              <div class="col-12 text-center fs-md-5 fs-sm-6 ">Díganos su negocio: Nosotros haremos la Pagina Web!</div>
              <div class="col-md-6 col-sm-12">
                <label for="nombre" class="form-label">Nombre</label><input type="text" id="nombre" class="form-control"
                placeholder="Nombre" name="nombre"/>
              </div>
              <div class="col-md-6 col-sm-12">
                <label for="asunto" class="form-label">Apellido</label><input class="form-control" type="text"id="asunto" placeholder="Apellido"
                name="apellido"/>
              </div>
              <div class="col-md-6 col-sm-12">
                <label for="email" class="form-label">Email</label><input type="email" id="email" class="form-control"
                placeholder="Email" name="email"/>
              </div>
              <div class="col-md-6 col-sm-12">
                <label for="celular" class="form-label">Telefono</label><input class="form-control" type="number" id="celular" placeholder="Telefono" name="telefono"/>
              </div>
              <div class="col-sm-12">
                <label class="form-label" for="mensaje">Mensaje</label>
                <textarea class="form-control"  name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Mensaje" height="50px"></textarea>
              </div>
              <div class="col-12 col-md-6">
                <div class="recaptcha mx-auto"></div>
                </div>
              <div class="col-12 mt-2 col-md-6 pt-2"> <input type="hidden" name="agregar-consulta" value="true" />
                <button class="btn btn-primary d-block mx-auto btn-lg">Enviar</button>
              </div>
            </form>
            
          </div>
          <div>
            <iframe class="cotizacion-contact"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1912.7080432959053!2d-68.13212400015283!3d-16.50507861235751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f207ad8a0a745%3A0x2d9f60e2dda1ec11!2sEdificio%20SAMA!5e0!3m2!1ses-419!2sbo!4v1645739908516!5m2!1ses-419!2sbo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
      </div>
    </section>
    <section>
      <div class="section-tecnologias">
        <div class="container text-center my-3">
          <h2 class="font-weight-light">¿Que Tecnologias Utilizamos?</h2>
          <div class="row mx-auto my-auto justify-content-center">
            <div
              id="recipeCarousel"
              class="carousel slide"
              data-bs-ride="carousel"
            >
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img">
                        <img src="assets/img/android.png" class="img-fluid" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img">
                        <img src="assets/img/html.png" class="img-fluid" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img">
                        <img src="assets/img/js.jpg" class="img-fluid" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img">
                        <img src="assets/img/php.png" class="img-fluid" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img">
                        <img src="assets/img/bootstrap.jpg" class="img-fluid" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img">
                        <img src="assets/img/mysql.png" class="img-fluid" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card-img">
                        <img src="assets/img/angular.png" class="img-fluid" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a
                class="carousel-control-prev bg-transparent w-aut"
                href="#recipeCarousel"
                role="button"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
              </a>
              <a
                class="carousel-control-next bg-transparent w-aut"
                href="#recipeCarousel"
                role="button"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
              </a>
            </div>
          </div>
          <h5 class="mt-2 font-monospace">
            Tecnologias vanguardistas para hacer crecer tu Empresa
          </h5>
        </div>
      </div>
    </section>
    <a href="#" class="go-up"
      ><i class="bx bx-up-arrow-circle bx-fade-up bx-lg"></i
    ></a>
    <?php
    include 'admin/app/items/footer.primary.php';
    ?>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="assets/scripts.js"></script>
    
  </body>
</html>
