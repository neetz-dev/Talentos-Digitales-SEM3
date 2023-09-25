<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100"> 
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Registro</h2>
              <p class="text-white-50 mb-5">Al registrarse acepta nuestros terminos y condiciones</p>

              <?php $validation = \Config\Services::validation(); ?>
              <form method="post" action="<?php echo ('enviar-form'); ?>">
                  <?php if(!empty(session()->getFlashdata('fail'))){ ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                  <?php } ?>

                  <?php if(!empty(session()->getFlashdata('success'))){ ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('success'); ?></div>
                  <?php } ?>

                  <div class="row">
                  <div class="col-md-6 mb-4">

                    <div class="form-outline">
                      <input type="text" name="apellido" id="form3Example1" class="form-control" />
                      <label class="form-label" for="form3Example1">Apellido
                      </label>
                      <!--Error control-->
                      <?php if($validation->getError('apellido')) { ?>
                      <div class="alert alert-danger mt-2">
                        <?= $validation->getError('apellido'); ?>
                      </div>
                      <?php } ?>
                    </div>

                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="nombre" id="form3Example2" class="form-control" />
                      <label class="form-label" for="form3Example2">
                        Nombre
                      </label>
                      <!--Error control-->
                      <?php if($validation->getError('nombre')) { ?>
                      <div class="alert alert-danger mt-2">
                        <?= $validation->getError('nombre');?>
                      </div>
                      <?php } ?>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="form-outline form-white mb-4">
                  <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" />
                  <label class="form-label" for="typeEmailX">Email</label>
                  <!--Error control-->
                  <?php if($validation->getError('email')) { ?>
                    <div class="alert alert-danger mt-2">
                      <?= $validation->getError('email');?>
                    </div>
                    <?php } ?>
                </div>
                
                  <div class="form-outline">
                    <input type="text" name="usuario" id="form3Example2" class="form-control" />
                    <label class="form-label" for="form3Example2">
                      Usuario
                    </label>
                    <!--Error control-->
                    <?php if($validation->getError('usuario')) { ?>
                    <div class="alert alert-danger mt-2">
                      <?= $validation->getError('usuario');?>
                    </div>
                    <?php } ?>
                  </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" name="pass" id="typePasswordX" class="form-control form-control-lg" />
                  <label class="form-label" name="pass" for="typePasswordX">Contraseña</label>
                  <!--Error control-->
                  <?php if($validation->getError('pass')) { ?>
                    <div class="alert alert-danger mt-2">
                      <?= $validation->getError('pass');?>
                    </div>
                    <?php } ?>
                </div>
                
                <div class="container">
                <div class="row">
                  <div class="col-6">
                    <input class="btn btn-outline-light btn-md px-5" type="reset" value="Cancelar">
                  </div>
                  <div class="col-6">
                    <input class="btn btn-outline-light btn-md px-5" type="submit" value="Registrarse">
                  </div>
                </div>
                </div>
                
                <!--<button class="btn btn-outline-light btn-lg px-5" type="submit">Registrarse</button>>-->

              </form>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>