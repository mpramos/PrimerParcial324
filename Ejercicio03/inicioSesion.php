<?php
include "./includes/header.inc.php";

session_start();
if (!isset($_SESSION['usuario'])) {
  header("Location: index.php");
}
?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
  <div class="container">
    <div class="row gy-4 d-flex justify-content-between">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h2 data-aos="fade-up">Bienvenid@, <?php echo $_SESSION['usuario']; ?></h2>
        <p data-aos="fade-up" data-aos-delay="100">
          Este es tu perfil academico.
        </p>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

          <div class="col-lg-3 col-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
              <p>Materias</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
              <p>Proyectos</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
              <p>Optativas</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="purecounter"></span>
              <p>Articulos</p>
            </div>
          </div><!-- End Stats Item -->

          <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
            <input type="text" class="form-control" placeholder="Eventos academicos">
            <button type="submit" class="btn btn-primary">Buscar</button>
          </form>

        </div>
      </div>

      <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
        <img src="/Ejercicio03/assets/img/logoumsa.png" class="img-fluid mb-3 mb-lg-0" alt="">
      </div>

    </div>
  </div>
</section><!-- End Hero Section -->

<main id="main">

</main><!-- End #main -->

<?php
include "./includes/footer.inc.php";
?>