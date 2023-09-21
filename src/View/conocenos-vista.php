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
            <p style="text-align: justify;"> La carrera de Ingeniería en Energías Renovables pertenece al
              departamento de Eléctrica - Electrónica, el objetivo principal del
              departamento es poner al alcance de los estudiantes diferentes
              laboratorios de cómputo para el desarrollo de sus materias
              prácticas y la orientación en los diversos trámites requeridos a
              lo largo de su plan de estudios, como pueden ser la liberación de
              créditos complementarios, servicio social, residencias
              profesionales.
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


<!-- Instalaciones -->
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
              Laboratorio 1
            </h4>
          </div>
          <div class="col-12">


            <p class="text-light" style="text-align: justify">
             Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur eum vel enim accusamus maxime illo nisi consequatur maiores recusandae, reiciendis sit quasi consequuntur atque culpa facere modi, rerum libero eaque. <br /><br />
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod odit qui quae ex, consectetur nisi similique, modi pariatur culpa repellendus hic! Vero magnam a voluptatibus animi iure asperiores eius quas.
            </p>
            <div class="justify-content-center text-center">
              <p><a class="btn-warning w-auto btn font-bold" target="_blank" href="">
                  Reglamento</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-12 p-2 d-flex justify-content-center align-items-center">
      <!-- Galería con modal para laboratorios de cómputo -->
      <div class="contenedor-galeria bg-dark">
        <div class="row">
          <div class="col-lg-6">
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage1">
              <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/IMG_3878.webp" alt="" />
            </a>
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage2">
              <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/IMG_1110.webp" alt="" />
            </a>
          </div>

          <div class="col-lg-6">
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage3">
              <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/IMG_3879.webp" alt="" />
            </a>
            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage4">
              <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/IMG_0959.webp" alt="" />
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
      <img src="img/IMG_3878.webp" alt="" />
    </div>
  </div>
</div>

<!-- Imagen 2 -->
<div tabindex="-1" aria-labelledby="modalImage4" aria-hidden="true" class="modal fade" id="modalImage2">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/IMG_1110.webp" alt="" />
    </div>
  </div>
</div>

<!-- Imagen 3 -->
<div tabindex="-1" aria-labelledby="modalImage5" aria-hidden="true" class="modal fade" id="modalImage3">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/IMG_3879.webp" alt="" />
    </div>
  </div>
</div>

<!-- Imagen 4 -->
<div tabindex="-1" aria-labelledby="modalImage6" aria-hidden="true" class="modal fade" id="modalImage4">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/IMG_0959.webp" alt="" />
    </div>
  </div>
</div>
<!-- Fin Modals de la galería-->

<!-- Laboratorio de cómputo intensivo -->
<div class="bg-primary pt-5"></div>
<section class="seccionInstalaciones bg-dark p-2">
  <div class="row px-2 g-0">
    <div class="col-lg-6 col-12 p-2 shadow-sm">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <img src="img/IMG_1713.webp" class="img-fluid rounded" alt="" />
      </div>
    </div>

    <div class="col-lg-6 col-12 p-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="tituloSeccionOscura text-center font-bold m-3">
              Laboratorio 2
            </h2>
            <div class="separadorSeccionOscura"></div>
          </div>
          <div class="col-12">
            <p class="text-light" style="text-align: justify">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, necessitatibus. Dolorum qui, impedit accusantium accusamus autem molestias est, laborum a voluptatum labore ullam obcaecati adipisci mollitia dicta esse magnam. Tempore?
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="bg-primary pt-5"></div>
<div class="p-4 text-center">
  <h5 class="font-bold">Autores de la página:</h5>
  <p class="font-semibold">Estudiantes de la Generación 2018 - 2023</p>
  <p>Gabriel Escobar Medina, Nancy Daniela Mendez Arpidez, Marco Gabriel Cortés Toledo, Yelitza Magali Rosas Jiménez y Daniela Castro Rodriguez</p>
</div>

<div class="p-4 text-center">
  <h5 class="font-bold">Agradecimientos</h5>
  <p>Fernando Martinez, Eric Manuel Montalvo Cruz e Ivan de Jesús Agame Malpica</p>
</div>
<!-- Fin Laboratorio de cómputo intensivo -->