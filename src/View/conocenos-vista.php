<?php
require_once("src/Models/Administrativo.php");
$administrativos = new Administrativo();
$administrativos->setConnection($conn->getDB());

$coordinador = $administrativos->getCoordinador();
$jefeDepartamento =  $administrativos->getJefeDepartamento();
?>
<!-- Portada -->
<div class="row g-0">
  <div class="position-relative w-100 overflow-hidden">
    <img class="w-100 img-fluid" src="img/banner-conocenos.webp" alt="" />
    <div class="position-absolute top-50 start-50 translate-middle w-100">
      <div class="d-flex flex-column justify-content-center align-items-center text-center">
        <h1 class="fw-bold text-warning shadow-text">Conócenos</h1>
        <h1 class="fw-bold text-light d-md-flex d-none shadow-text">
          Ingeniería en Energías Renovables
        </h1>
      </div>
    </div>
  </div>
</div>
<!-- Fin Portada-->

<!-- Departamento de Sistemas -->
<div class="bg-primary pt-5"></div>
<section class="lightSection bg-light">
  <div class="row px-2 g-0">

    <div class="col-lg-6 col-12 p-2 shadow-sm">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <img class="img-fluid rounded" src="img/conocenos.webp" alt="">
      </div>
    </div>

    <div class="col-lg-6 col-12 p-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="sectionTitle text-center font-bold m-3">Departamento de Eléctrica - Electrónica</h2>
            <div class="sectionSeparator"></div>
          </div>
          <div class="col-12" style="text-align: center;">
            <p style="text-align: justify;">El departamento de Eléctrica-Electrónica cuenta con experiencia de más de 55 años formando profesionistas de manera integral con principios éticos, compromiso social, desarrollando competencias para el desarrollo científico y tecnológico en sus programas de estudio.
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!--Fin Departamento de Sistemas -->

<!-- Descripción Jefa/e del departamento -->
<div class="bg-primary pt-5"></div>
<section class="lightSection bg-light">
  <div class="row px-2 g-0">
    <div class="col-lg-6 col-12 p-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="sectionTitle text-center font-bold m-3">
              <?php
              if ($jefeDepartamento) {
                echo $jefeDepartamento->nombre;
              }
              ?>
            </h2>
            <div class="sectionSeparator"></div>
            <h4 class="text-center fw-bold fs-3">
              <?php
              if ($jefeDepartamento) {
                echo $jefeDepartamento->nombrePuesto . " de Eléctrica - Electrónica";
              }
              ?>
            </h4>
          </div>
          <div class="col-12" style="text-align: center;">
            <p class="" style="text-align: justify">
              <?php
              if ($jefeDepartamento) {
                echo $jefeDepartamento->descripcion;
              }
              ?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-12 p-2 shadow-sm">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <img class="img-fluid rounded" src='img\Docentes\<?php if ($jefeDepartamento)  echo $jefeDepartamento->imagen; ?>' alt="">
      </div>
    </div>

  </div>
</section>
<!--Fin Descripción Jefa/e del departamento -->

<!-- Descripción Coordinador -->
<div class="bg-primary pt-5"></div>
<section class="lightSection bg-light">
  <div class="row px-2 g-0">

    <div class="col-lg-6 col-12 p-2 shadow-sm">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <img class="img-fluid rounded" src='img\Docentes\<?php if ($coordinador) echo $coordinador->imagen; ?>' alt="">
      </div>
    </div>

    <div class="col-lg-6 col-12 p-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="sectionTitle text-center font-bold m-3">
              <?php
              if ($coordinador) {
                echo $coordinador->nombre;
              }
              ?>
            </h2>
            <div class="sectionSeparator"></div>
            <h4 class="text-center fw-bold fs-3">
              <?php
              if ($coordinador) {
                echo $coordinador->nombrePuesto . " de " . $coordinador->nombreCarrera;
              }
              ?>
            </h4>
          </div>
          <div class="col-12 px-4" style="text-align: center;">
            <p class="" style="text-align: justify">
              <?php
              if ($coordinador) {
                echo $coordinador->descripcion;
              }
              ?>
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!--Fin Descripción Coordinador -->

<div class="bg-primary pt-5"></div>
<section class="seccionInstalaciones bg-dark">
  <div class="row px-2 g-0">
    <div class="col-lg-6 col-12 py-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="tituloSeccionOscura text-center font-bold m-3">
              Instalaciones
            </h2>
            <div class="separadorSeccionOscura"></div>
            <h4 class="text-center text-light fw-bold fs-3">
              Laboratorios
            </h4>
          </div>
          <div class="col-12">
            <h6 class="text-center text-warning fw-bold fs-6">
              “El verdadero progreso es el que pone la tecnología al alcance de
              todos.”<br />
            </h6>

            <p class="text-light" style="text-align: justify">
              El Departamento de Eléctrica-Electrónica tiene espacios especialmente diseñados
              y equipados para llevar a cabo investigaciones, experimentos, pruebas y desarrollo
              de proyectos relacionados con la electrónica. Estos laboratorios son fundamentales
              para la formación académica de estudiantes de ingeniería electrónica y para la
              investigación en este campo. <br /><br />
            </p>
            <div class="justify-content-center text-center">
              <p><a class="btn-warning w-auto btn font-bold" target="_blank" href="https://acortar.link/PLeZTR">
                  Reglamento de Laboratorio</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-12 p-2 d-flex justify-content-center align-items-center">
      <!-- Galería con modal para laboratorios -->
      <div class="contenedor-galeria bg-dark">
        <div class="row">
          <div class="col-lg-6">
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage1"> <!--arriba a la izquierda-->
              <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorio/PLC.JPG" alt="" />
            </a>
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage2"> <!--abajo a la izquierda-->
              <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorio/lab2.JPG" alt="" />
            </a>
          </div>

          <div class="col-lg-6">
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage3">  <!--arriba a la derecha-->
              <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorio/lab.JPG" alt="" />
            </a>
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage4">  <!--abajo a la derecha-->
              <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorio/compus.JPG" alt="" /> 
            </a>
          </div>
        </div>
      </div>
      <!-- Fin Galería con modal para laboratorios de cómputo -->
    </div>
  </div>
</section>
<!--Fin Instalaciones-->

<!-- Modals de la galería-->
<!-- Imagen 1 -->
<div tabindex="-1" aria-labelledby="modalImage3" aria-hidden="true" class="modal fade" id="modalImage1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/laboratorio/PLC.JPG" alt="" />
    </div>
  </div>
</div>

<!-- Imagen 2 -->
<div tabindex="-1" aria-labelledby="modalImage4" aria-hidden="true" class="modal fade" id="modalImage2">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/laboratorio/lab2.JPG" alt="" />
    </div>
  </div>
</div>

<!-- Imagen 3 -->
<div tabindex="-1" aria-labelledby="modalImage5" aria-hidden="true" class="modal fade" id="modalImage3">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/laboratorio/lab.JPG" alt="" />
    </div>
  </div>
</div>

<!-- Imagen 4 -->
<div tabindex="-1" aria-labelledby="modalImage6" aria-hidden="true" class="modal fade" id="modalImage4">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/laboratorio/compus.JPG" alt="" />
    </div>
  </div>
</div>
<!-- Fin Modals de la galería-->

<!-- Galeria de imagenes -->
<div class="bg-primary pt-5"></div>
<section class="lightSection bg-light p-2 px-4">
  <div class="row mb-4 px-2 g-0">
    <div class="lightSection bg-light">
      <h2 class="sectionTitle text-center font-bold">Galería de imágenes</h2>
      <div class="sectionSeparator"></div>
    </div>

    <div class="col-lg-8 col-sm-12">
      <div class="galleryContainer bg-light">
        <div class="row g-0">
          <div class="col-md-4 px-2">
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage5">
              <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/conocenos/5.JPG" alt="">
            </a>
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage6">
              <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/conocenos/6.JPG" alt="">
            </a>
          </div>

          <div class="col-md-4 px-2">
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage7">
              <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/conocenos/7.JPG" alt="">
            </a>
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage8">
              <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/conocenos/8.JPG" alt="">
            </a>
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage9">
              <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/conocenos/9.JPG" alt="">
            </a>
          </div>

          <div class="col-md-4 px-2">
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage10">
              <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/conocenos/10.JPG" alt="">
            </a>
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage11">
              <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/conocenos/11.JPG" alt="">
            </a>
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage12">
              <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/conocenos/12.JPG" alt="">
            </a>
          </div>

        </div>
      </div>
    </div>

    <div class="col-lg-4 col-sm-12">
      <div class="galleryContainer bg-light">
        <div class="row g-0">
          <div class="col-12 px-2">
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage13">
              <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/conocenos/13.JPG" alt="">
            </a>
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage14">
              <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/conocenos/14.JPG" alt="">
            </a>
          </div>


        </div>
      </div>
    </div>

  </div>
</section>
<!-- Fin Galeria de imagenes -->


<!-- Modals de la galería-->
<div tabindex="-1" aria-labelledby="modalImage5" aria-hidden="true" class="modal fade" id="modalImage5">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/conocenos/5.JPG" alt="">
    </div>
  </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage6" aria-hidden="true" class="modal fade" id="modalImage6">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/conocenos/6.JPG" alt="">
    </div>
  </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage7" aria-hidden="true" class="modal fade" id="modalImage7">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/conocenos/7.JPG" alt="">
    </div>
  </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage8" aria-hidden="true" class="modal fade" id="modalImage8">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/conocenos/8.JPG" alt="">
    </div>
  </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage9" aria-hidden="true" class="modal fade" id="modalImage9">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/conocenos/9.JPG" alt="">
    </div>
  </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage10" aria-hidden="true" class="modal fade" id="modalImage10">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/conocenos/10.JPG" alt="">
    </div>
  </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage11" aria-hidden="true" class="modal fade" id="modalImage11">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/conocenos/11.JPG" alt="">
    </div>
  </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage12" aria-hidden="true" class="modal fade" id="modalImage12">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/conocenos/12.JPG" alt="">
    </div>
  </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage13" aria-hidden="true" class="modal fade" id="modalImage13">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/conocenos/13.JPG" alt="">
    </div>
  </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage14" aria-hidden="true" class="modal fade" id="modalImage14">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/conocenos/14.JPG" alt="">
    </div>
  </div>
</div>

<!-- Fin Modals de la galería-->


<!-- <div class="bg-primary pt-5"></div>
<div class="p-4 text-center">
  <h5 class="font-bold">Autores de la página:</h5>
  <p class="font-semibold">Estudiantes de la Generación 2018 - 2023</p>
  <p>Yelitza Magali Rosas Jiménez, Daniela Castro Rodriguez, Nancy Daniela Mendez Arpidez, Marco Gabriel Cortés Toledo,
    y Gabriel Escobar Medina</p>
</div>

<div class="p-1 text-center">
  <p class="font-semibold">Agradecimientos</p>
  <p>Eric Manuel Montalvo Cruz, Ivan Agame Malpica y Fernando Martinez</p>
</div> -->