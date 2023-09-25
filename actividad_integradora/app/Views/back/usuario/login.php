<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

          <!--successful register message-->
          <?php if(session()->getFlashdata('message')) { ?>
            <div class="alert alert-warning">
              <?= session()->getFlashdata('message') ?>
            </div>
          <?php } ?>

            <div class="mb-md-5 mt-md-4 pb-5">

              <form method="post" action="<?php echo('enviar-login') ?>">

                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                <p class="text-white-50 mb-5">Por favor ingrese su correo y contraseña</p>

                <div class="form-outline form-white mb-4">
                  <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" />
                  <label class="form-label" for="typeEmailX">Email</label>
                </div>


                <div class="form-outline form-white mb-4">
                  <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                  <label class="form-label" for="typePasswordX">Contraseña</label>
                </div>

                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">olvido su contraseña ?</a></p>

                <button class="btn btn-outline-light btn-lg px-5" type="submit">Logearse</button>

              </form>
              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0">No tiene cuenta? <a href="registrarse" class="text-white-50 fw-bold">Registrese</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>